<?php

class Admin_RolesController extends ApplicationController 
{
    public function indexAction()
    {
        $this->_redirect('/admin/roles/list');
    }
    
    public function listAction()
    {
        $params  = $this->getRequest()->getParams();
        
        if (!isset($params['search']) || (isset($params['search']) && $params['search'] == 'search ...')) {
            $params['search'] = '';
        }
        
        $this->form->search = $params['search'];
        $this->view->paginate($this->aclRole->search($params['search']), array('limit' => 15));
    }
    
    public function addAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();
        
        $this->view->roles = $this->_getRoles();
        $this->view->locations = (array) Env::get('home_locations');
        if ($this->form->isSubmitted()) {
            $this->useValidationRules('add');
            if ($this->validator->add->isValid()) {
                if ($this->aclRole->add($this->form->getPost())) {
                    $this->flash('Role has been successfully added.');
                    $this->_redirect('/admin/roles/list');
                }
            }
        }
    }
    
    public function editAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();
        
        $this->_redirectIfNoId();
        
        /** check if role is admin */
        $roleName = $this->aclRole->getName($params['id']);
        if (strtolower($roleName) == 'admin') {
            $this->flash('This role (<b>' . $roleName . '</b>) cannot be edited.', 'error');
            $this->_redirect('/admin/roles/list');
        }
        
        $this->view->description = "Edit Role: <b>$roleName</b>";
        
        $parents = $this->aclRole->findAllParents($params['id']);
        $roleIds = array((int)$params['id']);
        $parentList = array();
        foreach ($parents as $parent) {
            $roleIds[] = $parent['id'];
            $parentList["parents_{$parent['id']}"] = $parent['id'];
        }

        $this->view->roles     = $this->_getRoles($roleIds);
        $this->view->parents   = $this->_renderParentsForList($parents);
        $this->view->locations = (array) Env::get('home_locations');

        $roleInfo = $this->aclRole->getInfo($params['id']);
        $this->form->set($roleInfo + $parentList);
        
        if ($this->form->isSubmitted()) {
            $this->useValidationRules('edit');
            if ($this->validator->edit->isValid()) {
                $data = $this->form->getPost();
                $data['parents'] = $this->_getNewAndOldParents($data, $parents);
                
                if ($this->aclRole->update($params['id'], $data)) {
                    $this->flash('Role (<b>' . $roleName . '</b>) has been successfully updated to <b>\'' . $data['name'] . '\'</b>.');
                    $this->_redirect('/admin/roles/list');
                }
            }
        }
    }
    
    public function viewAction()
    {
        $params  = $this->getRequest()->getParams();
        
        $this->_redirectIfNoId();
        
        $roleInfo = $this->aclRole->getInfo($params['id']);
        if (null !== $roleInfo) {
            $roleInfo['parents'] = $this->_renderParentsForDisplay($roleInfo['inherited_from']);
            $this->view->role = $roleInfo;
        } else {
            $this->flash('Error in fetching info', 'error');
            $this->_redirect('/admin/roles/list');
        }
    }
    
    public function deleteAction()
    {
        $params  = $this->getRequest()->getParams();
        $this->_redirectIfNoId();
        
        $roleInfo = $this->aclRole->getInfo($params['id']);
        if ($roleInfo['name'] == 'admin') {
            $this->flash("This role ({$roleInfo['name']}) cannot be deleted.", "error");
        } else {
            if ($this->aclRole->delete($params['id'])) {
                $this->flash("Role ({$roleInfo['name']}) has been successfully deleted.");
            }
        }
        
        $this->_redirect('/admin/roles/list');
    }
    
    public function viewAddResourceAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();
        
        $this->_redirectIfNoId();
        
        $roleName = $this->aclRole->getName($params['id']);
        if ($roleName == 'admin') {
            $this->flash('Role (<b>' . $roleName . '</b>) cannot add new resource(s).', 'error');
            $this->_redirect('/admin/roles/list');
        }
        $this->view->description = "View Resources: <b>$roleName</b>";
        
        $this->view->paginate($this->aclRole->getResources($params['id']), array('limit' => 15));
    }
    
    public function addResourceAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();

        $this->_redirectIfNoId();
        if (isset($params['resource'])) {
            $resource = array('resource_name' => $params['resource']);
            $this->view->privileges = $this->_getPrivileges($params['resource']);
        } else {
            $resource = array();
        }

        $roleName = $this->aclRole->getName($params['id']);
        $this->view->description = "Add new resource for: <b>$roleName</b>";
        $this->view->resources = $this->_getResources($params['id']);
        $this->form->set(array('role_id' => $params['id']) + $resource);
        
        if ($this->form->isSubmitted()) {
            $this->useValidationRules('add_resource');
            if ($this->validator->add_resource->isValid()) {
                $post = (array) $request->getPost();
                
                $data = array(
                    'role_id' => $post['role_id'],
                    'name'    => $post['resource_name']
                );
                
                if ($this->aclRole->addResource($post['role_id'], $data, (array) $post['privilege'])) {
                    $this->flash('New resource has been successfully added for this role.');
                    $this->_redirect('/admin/roles/view-add-resource/id/' . $params['id']);
                }
            }
        }
    }
    
    public function editResourceAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();

        $this->_redirectIfNoId();
        $resource = $this->aclRole->getResourceInfo($params['id']);
        $this->view->description = 'Edit Resource: <b>' . $this->aclRole->getRoleNameByResource($params['id']) . '</b>';
        $this->view->resource = $resource;
        $this->view->privileges = $this->_getPrivileges($resource['name']);
        
        $privilegeList = array();
        foreach ($resource['privilege'] as $privilege) {
            $privilegeList["privilege[$privilege]"] = $privilege;
        }
        
        $this->form->set(array('id' => $params['id']) + $privilegeList);
        
        if ($this->form->isSubmitted()) {
            $post = $this->form->getPost();
            if (!isset($post['privilege'])) {
                $post['privilege'] = array();
            }
            
            if ($this->aclRole->updateResource($post['id'], $post['privilege'])) {
                $this->flash('Resource has been successfully updated.');
                $this->_redirect('/admin/roles/view-add-resource/id/' . $resource['role_id']);
            }
        }
    }
    
    public function deleteResourceAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();
        
        $roleId = $this->aclRole->getRoleIdByResource($params['id']);
        if ($this->aclRole->deleteResource($params['id'])) {
            $this->flash('Resource has been successfully deleted.');
        }
        
        $this->_redirect('/admin/roles/list');
    }
    
    private function _renderParentsForDisplay(array $parents)
    {
        $results = array();
        foreach ($parents as $parent) {
            $results[] = $parent['name'];
        }
        return implode(', ', $results);
    }
    
    private function _renderParentsForList(array $parents)
    {
        $results = array();
        foreach ($parents as $parent) {
            $results[$parent['id']] = $parent['name'];
        }
        return $results;
    }
    
    private function _getNewAndOldParents(array $data, array $oldParents)
    {
        $results = array(
            'old' => array(),
            'new' => array()
        );
        
        foreach ($oldParents as $oldParent) {
            $column = 'parents_' . $oldParent['id'];
            if (isset($data[$column]) && $data[$column]) {
                $results['old'][] = $oldParent['id'];
            }
        }
        if (isset($data['parent']) && $data['parent']) {
            $results['new'][] = $data['parent'];
        }
        
        return $results;
    }
    
    private function _getRoles($except = null)
    {
        $params = $this->getRequest()->getParams();
        
        $roles = $this->aclRole->findAll();
        $except = (array) $except;
        
        $roleList = array();
        foreach ($roles as $role) {
            if ($role['name'] != 'admin' && !in_array($role['id'], $except) && !$this->aclRole->isChild($role['id'], $params['id'])) {
                $roleList[$role['id']] = $role['name'];
            }
        }
        
        return $roleList;
    }
    
    private function _getPrivileges($resource)
    {
        $class = new Inflector($resource);
        $class = str_replace(' ', '_', $class->humanize()) . 'Controller';
        
        if (strpos($resource, '_') !== false) {
            list($module, $controller) = explode('_', $resource);
        } else {
            $module = 'default';
            $controller = $resource;
        }
        
        $resources = Env::get('resources');
        $actions = (array) $resources[$module][$controller];
        
        $results = array();
        foreach ($actions as $action) {
            $text = new Inflector($action);
            $results[$action] = $text->humanize();
        }
        return $results;
    }
    
    private function _getResources($roleId)
    {
        $resources = (array) Env::get('resources');
        
        $resourceList = array();
        foreach ($resources as $module => $controllers) {
            if ($module == 'default') {
                $module = '';
                $underscore = '';
            } else {
                $underscore = '_';
            }

            foreach (array_keys($controllers) as $controller) {
                $resource = strtolower($module . $underscore . $controller);
                if (!$this->aclRole->isResourceExisting($roleId, $resource)) {
                    $resourceList[$resource] = $resource;
                }
            }
        }
        
        return $resourceList;
    }
    
    private function _redirectIfNoId()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();

        $withIdButEmpty = isset($params['id']) && empty($params['id']);
        $noId = !isset($params['id']);
        
        if ($noId || $withIdButEmpty) {
            $this->flash('Error in fetching role info.', 'error');
            $this->_redirect('/admin/roles/list');
        }
    }
}