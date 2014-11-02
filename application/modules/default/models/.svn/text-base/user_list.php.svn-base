<?php

class UserList extends Model 
{
    protected $_name = 'user_lists';
    
    public static function getUser($id)
    {
        $user = new UserList();
        $user = $user->find($id)->current();
        if (null !== $user) {
            return $user->toArray();
        }
        
        return null;
    }
}