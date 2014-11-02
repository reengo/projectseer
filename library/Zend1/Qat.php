<?php

class Qat
{
    /**
     * @var Zend_Mail
     */
    private $_Qat;
    
    /**
     * @var Smarty
     */
    private $_view;
    
    private $_baseDir;
    
    
    private function _getInfo($userId, $field = null)
    {
        if (null === $userId || empty($userId)) {
            return null;
        }
        
        $userObj = $this->_getModel('user_list', self::MODULE);
        $user = $userObj->find($userId)->current();
        
        if (null !== $user) {
            if (null !== $field && is_string($field)) {
                return $user->$field;
            } else {
                return $user;
            }
        }
        
        return null;
    }
    public function getName($userId)
    {
        $first = $this->_getInfo($userId, 'name');
        $last = $this->_getInfo($userId, 'name');
        
        return $first .' '. $last; 
    }
}