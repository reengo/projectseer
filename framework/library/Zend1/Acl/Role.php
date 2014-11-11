<?php
require_once 'Abstract.php';

class Acl_Role extends Acl_Abstract 
{
    // error messages
    const ERROR_ROLE_ALREADY_EXISTS = 'Role (\'%s\') already existing in the record.';
    const ERROR_ROLE_NOT_SAVED      = 'Role not saved.';
    const ERROR_ROLE_NOT_EXISTS     = 'Role not existing';
    const ERROR_ROLE_IN_USED        = 'Cannot delete, role in used by a user.';
    const ERROR_ROLE_HAS_CHILD      = 'Cannot delete, because this role has child (%s)';
    const ERROR_ROLE_RESOURCES_NOT_SAVED  = 'Resources not saved.';
    const ERROR_ROLE_RESOURCE_NOT_FOUND   = 'Resource not found.';
    const ERROR_ROLE_RESOURCE_NOT_DELETED = 'Resource not deleted.';
    
    /**
     * Assigned module name.
     */
    const MODULE = 'admin';
    
    /**
     * @var Acl_Role
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
     * @return Acl_Role
     */
    public static function getInstance()
    {
        if (null === self::$_instance) {
            self::$_instance = new self();
        }
        
        return self::$_instance;
    }
    
    /**
     * Add new role.
     *
     * @param array $data
     * @return boolean
     */
    public function add(array $data)
    {
        $roleObj = $this->_getModel('acl_role', self::MODULE);
        
        if ($this->_isExists($data['name'])) {
            $this->_error(sprintf(self::ERROR_ROLE_ALREADY_EXISTS, $data['name']));
            return false;
        }
        
        $data['home_location'] = $data['location'];
        $row = $roleObj->createRow($data);
        if ($id = $row->save()) {
            if (isset($data['parent']) && $data['parent']) {
                $this->_addParent($id, $data['parent']);
            }
            return true;
        } else {
            $this->_error(self::ERROR_ROLE_NOT_SAVED);
            return false;
        }
    }
    
    /**
     * Update a role information.
     *
     * @param integer $roleId
     * @param array $data
     * @return boolean
     */
    public function update($roleId, array $data)
    {
        if (empty($roleId)) {
            $this->_error(self::ERROR_ROLE_NOT_SAVED);
            return false;
        }
        
        $roleObj = $this->_getModel('acl_role', self::MODULE);
        $role = $roleObj->find($roleId)->current();
        if (null !== $role) {
            $role->setFromArray($data);
            if ($role->save()) {
                $this->_updateParents($roleId, $data['parents']);
                return true;
            }
        }

        $this->_error(self::ERROR_ROLE_NOT_SAVED);
        return false;
    }
    
    /**
     * Get all roles.
     *
     * @param array $where
     * @param string $order
     * @return array
     */
    public function findAll($where = null, $order = null)
    {
        if (null === $order) {
            $order = 'name ASC';
        }
        
        $roleObj = $this->_getModel('acl_role', self::MODULE);
        $roles = $roleObj->fetchAll($where, $order)->toArray();

        $roleList = array();
        foreach ($roles as $role) {
            $role['inherited_from'] = $this->_findAllParents($role['id']);
            $roleList[] = $role;
        }

        return $roleList;
    }
    
    /**
     * Search a role.
     *
     * @param string $searchStr
     * @param string $order
     * @return array
     */
    public function search($searchStr, $order = null)
    {
        if (null === $order) {
            $order = 'name ASC';
        }
        
        if (empty($searchStr)) {
            return $this->findAll(null, $order);
        }
        
        $searchStr = '%' . strtolower(addslashes(trim($searchStr))) . '%';
        
        $select = $this->_getDbAdapter()->select();
        $select->from('acl_roles')
               ->where("
                    LOWER(name) LIKE '$searchStr' OR
                    LOWER(description) LIKE '$searchStr'
                 ")
               ->order($order);
               
        $roles = $select->query()->fetchAll();
        
        $roleList = array();
        foreach ($roles as $role) {
            $role['inherited_from'] = $this->_findAllParents($role['id']);
            $roleList[] = $role;
        }

        return $roleList;
    }
    
    /**
     * Find all parents of this role.
     *
     * @param integer $roleId
     * @return array
     */
    public function findAllParents($roleId)
    {
        return $this->_findAllParents($roleId);
    }
    
    /**
     * Get information of this role.
     *
     * @param integer $roleId
     * @return array|null
     */
    public function getInfo($roleId)
    {
        $info = $this->_getInfo($roleId);
        if (null !== $info && $info instanceof Zend_Db_Table_Row_Abstract) {
            $roleInfo = $info->toArray();
            $roleInfo['inherited_from'] = $this->_findAllParents($roleId);
            
            return $roleInfo;
        }
        
        return null;
    }
    
    /**
     * Get the name of a role.
     *
     * @param integer $roleId
     * @return string
     */
    public function getName($roleId)
    {
        return $this->_getInfo($roleId, 'name');
    }
    
    /**
     * Get the total number of roles.
     *
     * @return integer
     */
    public function count()
    {
        $aclRole = $this->_getModel('acl_role', self::MODULE);
        return $aclRole->fetchAll()->count();
    }
    
    /**
     * Deletes a role. 
     * 
     * This will check first if this role is still in used by a user.
     * And will check also if this has a child role.
     *
     * @param integer $roleId
     * @return boolean
     */
    public function delete($roleId)
    {
        if (!empty($roleId)) {
            /** check if in used by a user */
            if ($this->_inUsed($roleId)) {
                $this->_error(self::ERROR_ROLE_IN_USED);
                return false;
            } else {
                /** check if has a child */
                $children = $this->_hasChild($roleId);
                if ($children !== false) {
                    $names = array();
                    foreach ($children as $child) {
                        $names[] = $child['name'];
                    }
                    $names = implode(', ', $names);
                    
                    $errMsg = sprintf(self::ERROR_ROLE_HAS_CHILD, $names);
                    $this->_error($errMsg);
                    return false;
                } else {
                    $aclRoleObj = $this->_getModel('acl_role', self::MODULE);
                    $role = $aclRoleObj->find($roleId)->current();
                    
                    if (null !== $role) {
                        if ($role->delete()) {
                            $where = $this->_getDbAdapter()->quoteInto('role_id = ?', $roleId);
                            
                            // delete resources assigned
                            $roleResource = $this->_getModel('acl_roleresource', self::MODULE);
                            $roleResource->delete($where);
                            
                            // delete list of roles inherited
                            $rolesInherited = $this->_getModel('acl_roleinherited', self::MODULE);
                            $rolesInherited->delete($where);
                            
                            return true;
                        }
                    }
                }
            }
        }
        
        $this->_error(self::ERROR_ROLE_NOT_EXISTS);
        return false;
    }
    
    /**
     * Check if resource is existing in this role.
     *
     * @param integer $roleId
     * @param string $resourceName
     * @return boolean
     */
    public function isResourceExisting($roleId, $resourceName)
    {
        $roleObj = $this->_getModel('acl_roleresource', self::MODULE);
        
        $where = array(
            'role_id = ?' => $roleId,
            'name = ?'    => $resourceName
        );
        
        return (boolean) $roleObj->fetchRow($where);
    }
    
    /**
     * Assign a resource to role.
     *
     * @param integer $roleId
     * @param array $data
     * @param array $privileges
     * @return boolean
     */
    public function addResource($roleId, array $data, array $privileges = array())
    {
        $roleResourceObj = $this->_getModel('acl_roleresource', self::MODULE);
        
        if (!$this->_isExists($roleId, true)) {
            $this->_error(self::ERROR_ROLE_NOT_EXISTS);
            return false;
        }

        if (count($privileges)) {
            $data['privilege'] = implode(',', $privileges);
        }
        
        $row = $roleResourceObj->createRow($data);
        if ($row->save()) {
            return true;
        } else {
            $this->_error(self::ERROR_ROLE_RESOURCES_NOT_SAVED);
            return false;
        }
    }
    
    /**
     * Updates a resource.
     *
     * @param integer $resourceId
     * @param array $privileges
     * @return boolean
     */
    public function updateResource($resourceId, array $privileges = array())
    {
        if (empty($resourceId)) {
            $this->_error(self::ERROR_ROLE_RESOURCE_NOT_FOUND);
            return false;
        }
        
        $roleResourceObj = $this->_getModel('acl_roleresource', self::MODULE);
        
        $data = array();
        if (count($privileges)) {
            $data['privilege'] = implode(',', $privileges);
        } else {
            $data['privilege'] = '';
        }
        
        $roleResource = $roleResourceObj->find($resourceId)->current();
        if (null !== $roleResource) {
            $roleResource->setFromArray($data);
            if ($roleResource->save()) {
                return true;
            }
        }
        
        $this->_error(self::ERROR_ROLE_RESOURCES_NOT_SAVED);
        return false;
    }
    
    /**
     * Get the resources assigned to a role.
     *
     * @param integer $roleId
     * @return array
     */
    public function getResources($roleId)
    {
        $roleObj = $this->_getModel('acl_roleresource', self::MODULE);
        return $roleObj->fetchAll(array('role_id = ?' => $roleId), 'created_on ASC')->toArray();
    }
    
    /**
     * Gets the name of a role by specifying the resource id.
     *
     * @param integer $resourceId
     * @return string|null
     */
    public function getRoleNameByResource($resourceId)
    {
        if (empty($resourceId)) {
            return null;
        }
        
        $roleResourceObj = $this->_getModel('acl_roleresource', self::MODULE);
        $resource = $roleResourceObj->find($resourceId)->current();
        
        $role = $resource->findParentAdmin_AclRole()->toArray();
        return $role['name'];
    }
    
    /**
     * Get the role id by specifying the role name
     *
     * @param string $name
     * @return integer|null
     */
    public function getRoleIdByName($name)
    {
        $role = $this->_getModel('acl_role', self::MODULE);
        if (null !== ($role = $role->fetchRow(array('name = ?' => $name)))) {
            return $role->id;
        }
    }
    
    /**
     * Get the resource information.
     *
     * @param integer $resourceId
     * @return array
     */
    public function getResourceInfo($resourceId)
    {
        $info = array();
        if (empty($resourceId)) {
            return $info;
        }
        
        $roleResourceObj = $this->_getModel('acl_roleresource', self::MODULE);
        $resource = $roleResourceObj->find($resourceId)->current();
        
        if (null !== $resource) {
            $info = $resource->toArray();
            $info['privilege'] = explode(',', $info['privilege']);
        }
        
        return $info;
    }
    
    /**
     * Delete a resource.
     *
     * @param integer $resourceId
     * @return boolean
     */
    public function deleteResource($resourceId)
    {
        if ($resourceId) {
            $roleResourceObj = $this->_getModel('acl_roleresource', self::MODULE);
            $resource = $roleResourceObj->find($resourceId)->current();

            if ($resource->delete()) {
                return true;
            } else {
                $this->_error(self::ERROR_ROLE_RESOURCE_NOT_DELETED);
                return false;
            }
        }
        
        $this->_error(self::ERROR_ROLE_RESOURCE_NOT_FOUND);
        return false;
    }
    
    /**
     * Get the role_id by specifying the resource id.
     *
     * @param integer $resourceId
     * @return integer
     */
    public function getRoleIdByResource($resourceId)
    {
        $roleResourceObj = $this->_getModel('acl_roleresource', self::MODULE);
        $resource = $roleResourceObj->find($resourceId)->current();
        
        if (null !== $resource) {
            return $resource->role_id;
        }
    }
    
    /**
     * Counts the total number of resources assigned to a role.
     *
     * @param integer $roleId
     * @return integer
     */
    public function countResource($roleId)
    {
        if (empty($roleId)) {
            return 0;
        }
        
        $roleResourceObj = $this->_getModel('acl_roleresource', self::MODULE);
        return $roleResourceObj->fetchAll(array('role_id = ?' => $roleId))->count();
    }
    
    /**
     * Checks if this role ($childRoleId) is a child of ($parentRoleId)
     *
     * @param integer $childRoleId
     * @param integer $parentRoleId
     * @return boolean
     */
    public function isChild($childRoleId, $parentRoleId)
    {
        $where = array(
            'role_id = ?' => (int) $childRoleId,
            'role_inherited = ?' => (int) $parentRoleId
        );
        
        $roleInheritedObj = $this->_getModel('acl_roleinherited', self::MODULE);
        return (boolean) $roleInheritedObj->fetchRow($where);
    }
    
    /**
     * Find all parents of a role.
     *
     * @param integer $roleId
     * @return array
     */
    private function _findAllParents($roleId)
    {
        $parents = array();

        if (!empty($roleId)) {
            $roleInheritObj = $this->_getModel('acl_roleinherited', self::MODULE);
            $roleInherited  = $roleInheritObj->fetchAll(array('role_id = ?' => $roleId))->toArray();
            
            foreach ($roleInherited as $inherited) {
                $role = $this->_getInfo($inherited['role_inherited']);
                if (null !== $role && $role instanceof Zend_Db_Table_Row_Abstract) {
                    $parents[] = $role->toArray();
                }
            }
        }
        
        return $parents;
    }
    
    /**
     * Add a parent to a role.
     *
     * @param integer $roleId
     * @param integer $parent
     * @return boolean
     */
    private function _addParent($roleId, $parent)
    {
        $roleInheritObj = $this->_getModel('acl_roleinherited', self::MODULE);
        
        /** check if this parent is already added */
        $where = array(
            'role_id = ?'        => $roleId,
            'role_inherited = ?' => $parent            
        );
        $inherited = $roleInheritObj->fetchRow($where);
        if (null !== $inherited) {
            return false;
        }
        
        $data = array(
            'role_id'        => $roleId,
            'role_inherited' => $parent
        );
        
        $row = $roleInheritObj->createRow($data);
        return $row->save();
    }
    
    /**
     * Updates a parent of a role.
     *
     * @param integer $roleId
     * @param array $parents
     * @return boolean
     */
    private function _updateParents($roleId, array $parents)
    {
        $toDelete = array();
        $toAdd    = array();
        
        $roleParents = $this->findAllParents($roleId);
        foreach ($roleParents as $rParent) {
            if (!in_array($rParent['id'], $parents['old'])) {
                $toDelete[] = $rParent['id'];
            }
        }
        $toAdd = (array) $parents['new'];
        
        $roleInheritedObj = $this->_getModel('acl_roleinherited', self::MODULE);
        foreach ($toDelete as $id) {
            $where = array(
                'role_id = ?'        => $roleId,
                'role_inherited = ?' => $id,
            );
            
            $row = $roleInheritedObj->fetchRow($where);
            if (null !== $row) {
                $row->delete();
            }
        }
        
        foreach ($toAdd as $id) {
        	$this->_addParent($roleId, $id);
        }
        
        return true;
    }
    
    /**
     * Get information about this role.
     *
     * @param integer $roleId
     * @param string $field
     * @return Zend_Db_Table_Row_Abstract|string|null
     */
    private function _getInfo($roleId, $field = null)
    {
        if (null === $roleId || empty($roleId)) {
            return null;
        }
        
        $roleObj = $this->_getModel('acl_role', self::MODULE);
        $role = $roleObj->find($roleId)->current();
        
        if (null !== $role) {
            if (null !== $field && is_string($field)) {
                return $role->$field;
            } else {
                return $role;
            }
        }
        
        return null;
    }
    
    /**
     * Check if this role is existing or not.
     *
     * @param string $role
     * @return boolean
     */
    private function _isExists($role, $id = false)
    {
        $roleObj = $this->_getModel('acl_role', self::MODULE);
        
        if (empty($role)) {
            return false;
        }
        
        if ($id) {
            return (boolean) $roleObj->find($role)->count();
        } else {
            return (boolean) $roleObj->fetchRow(array('name = ?' => $role));
        }
    }
    
    /**
     * Check if this role is in used by a user.
     *
     * @param integer $roleId
     * @return boolean
     */
    private function _inUsed($roleId)
    {
        $user = Acl_User::getInstance();
        return $user->roleInUsed($roleId);
    }
    
    /**
     * Check if this role has children.
     *
     * @param integer $roleId
     * @return boolean|array  Will return all parents.
     */
    private function _hasChild($roleId)
    {
        $roleInheritedObj = $this->_getModel('acl_roleinherited', self::MODULE);
        $inherited = $roleInheritedObj->fetchAll(array('role_inherited = ?' => $roleId));
        
        if ($inherited->count() > 0) {
            $inherited = $inherited->toArray();
            $roles = array();
            foreach ($inherited as $roleInherit) {
                $roles[] = $this->getInfo($roleInherit['role_id']);
            }
            return $roles;
        } else {
            return false;
        }
    }
}