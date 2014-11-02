<?php

class Admin_UsersController extends ApplicationController 
{
    public function indexAction()
    {
        $this->_redirect('/admin/users/list');
    }
    
    public function listAction()
    {
        $params  = $this->getRequest()->getParams();
        
        if (!isset($params['search']) || (isset($params['search']) && $params['search'] == 'search ...')) {
            $params['search'] = '';
        }
        
        $this->view->description = 'USER LIST';
        $this->view->paginate($this->aclUser->search($params['search']), array('limit' => 20));
    }
    
    public function addAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();
        
        $this->view->description = 'Add User';
        $this->view->roles = $this->_getRoles();
        
        if ($this->form->isSubmitted()) {
            $this->useValidationRules('add');
            if ($this->validator->add->isValid()) {
                $data = $this->form->getPost();
                if ($this->aclUser->add($data)) {
                    $this->flash('User has been successfully added.');
                    $this->_redirect('/admin/users/list');
                }
            }
        }
    }
    public function sendpassAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();
        
        $this->view->description = 'Add User';
        $this->view->roles = $this->_getRoles();
        
        if ($this->form->isSubmitted()) {
            $this->useValidationRules('add');
            if ($this->validator->add->isValid()) {
                $data = $this->form->getPost();
                if ($this->aclUser->add($data)) {
                    $this->flash('User has been successfully added.');
                    $this->_redirect('/admin/users/list');
                }
            }
        }
    }
    
    public function editAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();
        
        $this->_redirectIfNoId();
        
        $user = $this->aclUser->getInfo($params['id']);
        if ($user !== false) {
            /** check if role is admin */
            if ($user['username'] == 'admin') {
                $this->flash('This user (<b>' . $user['username'] . '</b>) cannot be edited.', 'error');
                $this->_redirect('/admin/users/list');
            }
            
            $this->view->description = 'Edit User';
            $this->view->roles = $this->_getRoles();
            
            $user['role'] = $user['role_id'];
            $this->form->set($user);
            
            if ($this->form->isSubmitted()) {
                $this->useValidationRules('edit');
                if ($this->validator->edit->isValid()) {
                    $data = $this->form->getPost();
                    if ($this->aclUser->update($params['id'], $data)) {
                        $this->flash('User has been successfully updated.');
                        $this->_redirect('/admin/users/list');
                    }
                }
            }
        } else {
            $this->_redirect('/admin/users/list');
        }
    }
    
    public function changePasswordAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();

        $this->_redirectIfNoId();
        
        $user = $this->aclUser->getInfo($params['id']);
        if ($user !== false) {
            $this->view->description = 'Change Password';
            $this->view->user = $user;
            
            if ($this->form->isSubmitted()) {
                $this->useValidationRules('change_password');
                if ($this->validator->change_password->isValid()) {
                    if ($this->aclUser->changePassword($params['id'], $params['new_password'])) {
                        $this->flash('Password has been changed successfully.');
                        $this->_redirect('/admin/users/edit/id/' . $params['id']);
                    }
                }
            }
        } else {
            $this->_redirect('/admin/users/list');
        }
    }
    
    public function deleteAction()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();
        
        $this->_redirectIfNoId();
        $user = $this->aclUser->getInfo($params['id']);
        if ($user !== false) {
            /** check if role is admin */
            if ($user['username'] == 'admin') {
                $this->flash('This user (<b>' . $user['username'] . '</b>) cannot be edited.', 'error');
            } else {
                if ($this->aclUser->delete($params['id'])) {
                    $this->flash('User has been successfully deleted.');
                }
            }
        }
        
        $this->_redirect('/admin/users/list');
    }
    
    public function viewAction()
    {
        $params = $this->getRequest()->getParams();
        
        $this->_redirectIfNoId();
        
        $user = $this->aclUser->getInfo($params['id']);
        if ($user !== false) {
            $this->view->description = 'View User';
            $this->view->user = $user;
        } else {
            $this->_redirect('/admin/users/list');
        }
    }
    
    private function _getRoles()
    {
        $roles = $this->aclRole->findAll();
        
        $roleList = array();
        foreach ($roles as $role) {
            if ($role['name'] != 'admin') {
                $roleList[$role['id']] = $role['name'];
            }
        }
        return $roleList;
    }
    
    private function _redirectIfNoId()
    {
        $request = $this->getRequest();
        $params  = $request->getParams();

        $withIdButEmpty = isset($params['id']) && empty($params['id']);
        $noId = !isset($params['id']);
        
        if ($noId || $withIdButEmpty) {
            $this->_redirect('/admin/users/list');
        }
    } 
}