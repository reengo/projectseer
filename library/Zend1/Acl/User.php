<?php
require_once 'Abstract.php';

class Acl_User extends Acl_Abstract 
{
    /**
     * Error messages
     */
    const ERROR_USER_NOT_SAVED = 'User not save in the record.';
    const ERROR_USER_NOT_FOUND = 'User not found in the record.';
    const ERROR_USER_PASSWORD_NOT_CHANGED = 'User\'s password not changed.';
    
    const MODULE = 'admin';
    
    /**
     * @var Acl_User
     */
    private static $_instance = null;
    
    /**
     * Constructor
     * 
     * Make this private so that it cannot be instantiated.
     * Must use the getInstance() method to get the singleton instance.
     */
    private function __construct()
    { }
    
    /**
     * Get the instance of this class.
     *
     * @return Acl_User
     */
    public static function getInstance()
    {
        if (null === self::$_instance) {
            self::$_instance = new self();
        }
        
        return self::$_instance;
    }
    
    /**
     * Add a user.
     *
     * @param array $data
     * @param string $passwordField
     * @return boolean
     */
    public function add(array $data, $passwordField = 'password')
    {
        if (!isset($data[$passwordField])) {
            $passwordField = 'password';
        }
                    
        $user = array(
            'username' => $data['username'],
            'password' => md5($data[$passwordField]),
            'role_id'  => $data['role'],
        );
        
        $profile = array(
            'firstname' => $data['firstname'],
            'lastname'  => $data['lastname'],
            'email'     => $data['email'],
        );
        
        $userListObj = $this->_getModel('user_list', self::MODULE);
        $userList = $userListObj->createRow($user);
        
        if ($userId = $userList->save()) {
            $profile['user_id'] = $userId;
            
            $profileObj = $this->_getModel('user_profile', self::MODULE);
            $profileRow = $profileObj->createRow($profile);
            $profileRow->save();
            return true;
        }
        
        $this->_error(self::ERROR_USER_NOT_SAVED);
        return false;
    }
    
    /**
     * Updates a user information.
     *
     * @param integer $userId
     * @param array $data
     * @return boolean
     */
    public function update($userId, array $data)
    {
        $userListObj = $this->_getModel('user_list', self::MODULE);
        $user = $userListObj->find($userId)->current();
        
        if (null !== $user) {
            $userData = array(
                'username' => $data['username'],
                'role_id'  => $data['role'],
            );
            
            $profileData = array(
                'firstname' => $data['firstname'],
                'lastname'  => $data['lastname'],
                'email'     => $data['email']
            );
            
            $user->setFromArray($userData);
            if ($user->save()) {
                $profileObj = $this->_getModel('user_profile', self::MODULE);
                $profile = $profileObj->fetchRow(array('user_id = ?' => $userId));
                if (null !== $profile) {
                    $profile->setFromArray($profileData);
                } else {
                    $profile = $profileObj->createRow($profileData + array('user_id' => $userId));
                }
                $profile->save();
                return true;
            }
        }
        
        $this->_error(self::ERROR_USER_NOT_SAVED);
        return false;
    }
    
    /**
     * Deletes a user.
     *
     * @param integer $userId
     * @return boolean
     */
    public function delete($userId)
    {
        $userListObj = $this->_getModel('user_list', self::MODULE);
        $user = $userListObj->find($userId)->current();
        
        if (null !== $user) {
            if ($user->delete()) {
                $profileObj = $this->_getModel('user_profile', self::MODULE);
                $profile = $profileObj->fetchRow(array('user_id = ?' => $userId));
                
                if (null !== $profile) {
                    $profile->delete();
                }
                
                return true;
            }
        }
        
        $this->_error(self::ERROR_USER_NOT_SAVED);
        return false;

    }
    
    /**
     * Get all users.
     *
     * @param array|string $where
     * @param string $order
     * @return array
     */
    public function findAll($where = null, $order = null)
    {
        if (null === $order) {
            $order = 'created_on';
        }
        
        $userListObj = $this->_getModel('user_list', self::MODULE);
        $userList = $userListObj->fetchAll($where, $order)->toArray();

        $users = array();
        foreach ($userList as $user) {
            $user['role'] = $this->_getRoleName($user['role_id']);
            $profile = $this->_getProfile($user['id']);
            if (is_array($profile) && count($profile)) {
                $user['firstname'] = $profile['firstname'];
                $user['lastname']  = $profile['lastname'];
                $user['email']     = $profile['email'];
            }
            $users[] = $user;
        }

        return $users;
    }
    
    /**
     * Searches a user/users by username, firstname, lastname and email.
     *
     * @param string $searchStr
     * @param string $order
     * @return array
     */
    public function search($searchStr, $order = null)
    {
        if (null === $order) {
            $order = 'created_on';
        }
        
        if (empty($searchStr)) {
            return $this->findAll(null, $order);
        }
        
        $searchStr = '%' . strtolower(addslashes(trim($searchStr))) . '%';
        
        $select = $this->_getDbAdapter()->select();
        $select->from(array('u' => 'user_lists'))
               ->join(array('p' => 'user_profiles'), 'u.id = p.user_id', array('firstname', 'lastname', 'email'))
               ->where("
                    LOWER(u.username) LIKE '$searchStr' OR
                    LOWER(p.firstname) LIKE '$searchStr' OR
                    LOWER(p.lastname) LIKE '$searchStr' OR
                    LOWER(p.email) LIKE '$searchStr'
                 ")
               ->order($order);
               
        $userList = $select->query()->fetchAll();
        $users = array();
        foreach ($userList as $user) {
            $user['role'] = $this->_getRoleName($user['role_id']);
            $profile = $this->_getProfile($user['id']);
            if (is_array($profile) && count($profile)) {
                $user['firstname'] = $profile['firstname'];
                $user['lastname']  = $profile['lastname'];
                $user['email']     = $profile['email'];
            }
            $users[] = $user;
        }

        return $users;
    }
    
    /**
     * Get user information.
     *
     * @param integer $userId
     * @return array|null
     */
    public function getInfo($userId)
    {
        if (!empty($userId)) {
            $userListObj = $this->_getModel('user_list', self::MODULE);
            $user = $userListObj->find($userId)->current();
            
            if (null !== $user) {
                $user = $user->toArray();
                $user['role'] = $this->_getRoleName($user['role_id']);
                $profile = $this->_getProfile($userId);
                if (is_array($profile) && count($profile)) {
                    $user['firstname'] = $profile['firstname'];
                    $user['lastname']  = $profile['lastname'];
                    $user['email']     = $profile['email'];
                }
                return $user;
            }
        }
        
        $this->_error(self::ERROR_USER_NOT_FOUND);
        return false;
    }
    
    /**
     * Get welcome message.
     *
     * @param integer $userId
     * @return string
     */
    public function getWelcome($userId, $includeLastLogin = true)
    {
        $user = $this->getInfo($userId);
        $name = new Inflector($user['firstname'] . ' ' . $user['lastname']);
        $name = $name->humanize();
        
        $welcome = 'Welcome, <b>' . $name . '</b>';
        if ($includeLastLogin) {
            $welcome .= $this->_getLastLogin($userId);
        }
        
        return $welcome;
    }
    
    /**
     * Changes the password of a user.
     *
     * @param integer $userId
     * @param string $newPassword
     * @return boolean
     */
    public function changePassword($userId, $newPassword)
    {
        if (!empty($userId)) {
            $userObj = $this->_getModel('user_list', self::MODULE);
            $user = $userObj->find($userId)->current();
            if (null !== $user) {
                $user->setFromArray(array('password' => md5($newPassword)));
                if ($user->save()) {
                    return true;
                } else {
                    $this->_error(self::ERROR_USER_PASSWORD_NOT_CHANGED);
                    return false;
                }
            }
        }

        $this->_error(self::ERROR_USER_NOT_FOUND);
        return false;
    }
    
    /**
     * Checks if this role is in used by a user.
     *
     * @param integer $roleId
     * @return boolean
     */
    public function roleInUsed($roleId)
    {
        $userListObj = $this->_getModel('user_list', self::MODULE);
        return (bool) $userListObj->fetchRow(array('role_id = ?' => $roleId));
    }
    
    /**
     * Registers login date of this user.
     *
     * @param integer $userId
     * @return boolean
     */
    public function registerLogin($userId)
    {
        return $this->_registerLog($userId, 'login');
    }
    
    /**
     * Registers logout date of this user.
     *
     * @param integer $userId
     * @return boolean
     */
    public function registerLogout($userId)
    {
        return $this->_registerLog($userId, 'logout');
    }
    
    /**
     * Get the last login date of this user.
     *
     * @param integer $userId
     * @return string
     */
    private function _getLastLogin($userId)
    {
        if (null === $userId || empty($userId)) {
            return ;
        }
        
        $userLogObj = $this->_getModel('user_log', self::MODULE);
        $logs = $userLogObj->fetchAll(array('user_id = ?' => $userId), 'login_date ASC')->toArray();
        
        $numLogs = count($logs);
        if ($numLogs >= 2) {
            $lastLogin = ' | Last login: ';
            
            $log = $logs[$numLogs - 2];
            $lastLogin .= date('m/d/Y h:i:s A T', strtotime($log['login_date']));

            return $lastLogin;
        }
    }
    
    /**
     * Registers login or logout of a user.
     *
     * @param integer $userId
     * @param string $loginOrLogout
     * @return boolean
     */
    private function _registerLog($userId, $loginOrLogout)
    {
        if (null === $userId) {
            return ;
        }
        
        $userLogObj = $this->_getModel('user_log', self::MODULE);
        
        if ($loginOrLogout == 'login') {
            $data = array(
                'user_id'     => $userId,
                'session_id'  => Zend_Session::getId(),
                'ip_address'  => Zend_Controller_Front::getInstance()->getRequest()->REMOTE_ADDR,
                'login_date'  => new Zend_Db_Expr('NOW()'),
            );
            
            $log = $userLogObj->createRow($data);
            return $log->save();
        } elseif ($loginOrLogout == 'logout') {
            $where = array(
                'user_id = ?' => $userId,
                'logout_date IS NULL',
                'session_id = ?' => Zend_Session::getId(),
            );
            
            $log = $userLogObj->fetchRow($where, 'login_date ASC');
            if (null !== $log) {
                $log->setFromArray(array('logout_date' => new Zend_Db_Expr('NOW()')));
                return $log->save();
            }
        }
    }
    
    /**
     * Get profile information.
     *
     * @param integer $userId
     * @return array|null
     */
    private function _getProfile($userId)
    {
        $profileObj = $this->_getModel('user_profile', self::MODULE);
        $profile = $profileObj->fetchRow(array('user_id = ?' => $userId));
        
        if (null !== $profile) {
            return $profile->toArray();
        }
    }
    
    /**
     * Get role name.
     *
     * @param integer $roleId
     * @return string
     */
    private function _getRoleName($roleId)
    {
        $roleObj = Acl_Role::getInstance();
        return $roleObj->getName($roleId);
    }
}