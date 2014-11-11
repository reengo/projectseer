<?php

class CurrentUser extends ArrayObject 
{
    /**
     * @param string $name
     * @return mixed
     */
    public function get($name)
    {
        if ($this->offsetExists($name)) {
            return $this->offsetGet($name);
        }
        
        return null;
    }
    
    /**
     * @param string $name
     * @param mixed $value
     */
    public function set($name, $value)
    {
        $this->offsetSet($name, $value);
    }
    
    /**
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->get($name);
    }
    
    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->set($name, $value);
    }
}

