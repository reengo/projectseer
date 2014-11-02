<?php
require_once 'Auth/CurrentUser.php';

/**
 * Class use for authenticating a user
 */
class Auth
{
    /**
     * @var Auth
     */
    protected static $_instance = null;
    
    /**
     * The Db Object
     *
     * @var Zend_Db
     */
    protected $db;
    
    /**
     * The current user object
     *
     * @var CurrentUser
     */
    protected $_currentUser;
    
    /**
     * @var Zend_Auth
     */
    protected $_auth;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->db = Env::get('db');
        
        /**
         * @see Zend_Auth
         */
        require_once 'Zend/Auth.php';
        $this->_auth = Zend_Auth::getInstance();
    }
    
    /**
     * Get the singleton instance of this class
     *
     * @return Auth
     */
    public static function getInstance()
    {
        if (null === self::$_instance) {
            self::$_instance = new self();
        }
        
        return self::$_instance;
    }
    
    /**
     * @param string $username
     * @param string $password
     * @return Zend_Auth_Result
     */
    public function authenticate($username, $password)
    {
        require_once 'Auth/Adapter/DbTable.php';
        
        $authenticationConfig = Env::get('authentication');
        $authAdapter = new MyAuth_Adapter_DbTable($this->db, 
                            $authenticationConfig['tableName'],
                            $authenticationConfig['identityColumn'],
                            $authenticationConfig['credentialColumn'],
                            $authenticationConfig['credentialTreatment']
                       );
        
        $authAdapter->setIdentity($username)
                    ->setCredential($password);
        
        $result = $this->_auth->authenticate($authAdapter);
        if ($result->isValid()) {
            $this->_setCurrentUser();
        }
        return $result;
    }
        
    /**
     * Check if this user is logged in.
     *
     * @return boolean
     */
    public function hasIdentity()
    {
        return $this->_auth->hasIdentity();
    }
    
    /**
     * Clears the user currently logged in.
     *
     * @return void
     */
    public function clearIdentity()
    {
        $this->_auth->clearIdentity();
    }
    
    /**
     * Gets the user currently logged in.
     *
     * @return CurrentUser
     */
    public function getCurrentUser()
    {
        if (null === $this->_currentUser) {
            $this->_setCurrentUser();
        }
        
        return $this->_currentUser;
    }
    
    /**
     * Sets the user.
     *
     * @return CurrentUser
     */
    public function setCurrentUser()
    {
        return $this->_setCurrentUser();
    }
    
    /**
     * Set current user information
     *
     * @return CurrentUser
     */
    private function _setCurrentUser()
    {
        if (null === $this->_currentUser) {
            if ($identity = $this->_auth->getIdentity()) {
                $authenticationConfig = Env::get('authentication');
                
                $select = $this->db->select();
                $select->from($authenticationConfig['tableName']);
                $select->where($authenticationConfig['identityColumn'] . ' = ?', $identity);
                
                $stmt = $select->query();
                $result = $stmt->fetch();
                if (is_array($result) && count($result)) {
                    
                    require_once 'Auth/CurrentUser.php';
                    $this->_currentUser = new CurrentUser($result);
                    
                    /** store the current user object globally */
                    Env::set('currentUser', $this->_currentUser);
                }
            }
        }
        
        return $this->_currentUser;
    }
}