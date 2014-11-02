<?php
require_once 'Acl/Role.php';
require_once 'Acl/User.php';

require_once '../Zend/Acl.php';
require_once '../Zend/Acl/Role.php';
require_once '../Zend/Acl/Resource.php';

class Acl
{
    /**
     * @var Acl
     */
    private static $_instance = null;
    
    /**
     * @var Zend_Acl
     */
    private $_acl = null;
    
    /**
     * Constructor
     */
    private function __construct()
    {
        $this->_acl = new Zend_Acl();
        $this->init();
    }
    
    /**
     * Get the singleton instance of this class.
     *
     * @return Acl
     */
    public static function getInstance()
    {
        if (null === self::$_instance) {
            self::$_instance = new self();
        }
        
        return self::$_instance;
    }
    
    /**
     * Initializes all roles, resources and access
     *
     * @return void
     */
    public function init()
    {
        $this->_initRoles();
        $this->_initResources();
        $this->_initAccess();
    }
    
    /**
     * Checks if this user is allowed to access this page.
     *
     * @param string $resource
     * @param string $privilege
     * @return boolean
     */
    public function isAllowed($resource = null, $privilege = null)
    {
        if (!$this->_acl->has($resource)) {
            return false;
        }

        $user = Env::get('currentUser');
        if (null !== $user) {
            $role = $this->_getRoleName($user->role_id);
            return $this->_acl->isAllowed($role, $resource, $privilege);
        }
        
        return false;
    }
    
    /**
     * Initializes roles.
     *
     * @return void
     */
    private function _initRoles()
    {
        $roleList = $this->_getRoleList();
        foreach ($roleList['roles'] as $role) {
            $this->_acl->addRole(new Zend_Acl_Role($role));
        }
        
        // roles with parent
        foreach ($roleList['roles_with_parent'] as $role => $parents) {
            $this->_acl->addRole(new Zend_Acl_Role($role), $parents);
        }
    }
    
    /**
     * Initializes resources
     * 
     * @return void
     */
    private function _initResources()
    {
        $resources = (array) Env::get('resources');
        foreach ($resources as $module => $controllers) {
            foreach ($controllers as $controller => $actions) {
                $resource = ($module == 'default') ? $controller : $module . '_' . $controller;
                $this->_acl->add(new Zend_Acl_Resource($resource));
            }
        }
        
        /**
         * Explicitly add admin_roles and admin_users
         */
        $this->_acl->add(new Zend_Acl_Resource('admin_roles'));
        $this->_acl->add(new Zend_Acl_Resource('admin_users'));
    }
    
    /**
     * Initializes access to all resources
     *
     * @return void
     */
    private function _initAccess()
    {
        $roles = $this->_getRoles();
        foreach ($roles as $role) {
            if ($role['name'] == 'admin') {
                $this->_acl->allow($role['name']);
            } else {
                $resources = $this->_getResources($role['id']);
                if (is_array($resources) && count($resources)) {
                    foreach ($resources as $resource) {
                        if (!empty($resource['privilege'])) {
                            $privileges = explode(',', $resource['privilege']);
                            $privileges = $this->_getAllowAndDenyPrivileges($resource['name'], $privileges);
                            
                            if (count($privileges['allow'])) {
                                $this->_acl->allow($role['name'], $resource['name'], $privileges['allow']);
                            }
                            
                            if (count($privileges['deny'])) {
                                $this->_acl->deny($role['name'], $resource['name'], $privileges['deny']);
                            }
                        } else {
                            $this->_acl->deny($role['name'], $resource['name']);
                        }
                    }
                } else {
                    $this->_acl->deny($role['name']);
                }
                
                /**
                 * Deny all roles in admin_roles and admin_users except admin
                 */
                $this->_acl->deny($role['name'], array('admin_roles', 'admin_users'));
            }
        }
    }
    
    /**
     * Get all allowed and denied privileges.
     *
     * @param string $resourceName
     * @param array|string $privileges
     * @return array
     */
    private function _getAllowAndDenyPrivileges($resourceName, $privileges)
    {
        $privileges = (array) $privileges;
        $resources = (array) Env::get('resources');
        
        if (strpos($resourceName, '_') !== false) {
            list($module, $controller) = explode('_', $resourceName);
        } else {
            $module = 'default';
            $controller = $resourceName;
        }
        
        $allow = array();
        $deny  = array();
        
        $actions = (array) $resources[$module][$controller];
        foreach ($actions as $action) {
            if (in_array($action, $privileges)) {
                $allow[] = $action;
            } else {
                $deny[] = $action;
            }
        }
        
        return array('allow' => $allow, 'deny' => $deny);
    }
    
    /**
     * Get all roles in this format:
     * [roles] => array()
     * [roles_with_parent] => array()
     *
     * @return array
     */
    private function _getRoleList()
    {
        $roles = $this->_getRoles();
        
        $roleList = array(
            'roles' => array(),
            'roles_with_parent' => array()
        );
        foreach ($roles as $role) {
            if (count($role['inherited_from'])) {
                $parents = array();
                foreach ($role['inherited_from'] as $parent) {
                    $parents[] = $parent['name'];
                }
                $roleList['roles_with_parent'][$role['name']] = $parents;
            } else {
                $roleList['roles'][] = $role['name'];
            }
        }
        
        return $roleList;
    }
    
    /**
     * Get all roles.
     *
     * @return array
     */
    private function _getRoles()
    {
        $roleObj = Acl_Role::getInstance();
        return $roleObj->findAll(null, 'created_on ASC');
    }
    
    /**
     * Get all resources
     *
     * @param integer $roleId
     * @return array
     */
    private function _getResources($roleId)
    {
        $roleResourceObj = Acl_Role::getInstance();
        return $roleResourceObj->getResources($roleId);
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