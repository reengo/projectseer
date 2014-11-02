<?php

class Files
{
    private static $_root = '';
    
    /**
     * The file handle.
     *
     * @var resource
     */
    private static $_handle;
    
    /**
     * Collection of errors
     *
     * @var array
     */
    private static $_errors = array();
    
    /**
     * Set the root directory
     *
     * @param string $root
     * @return boolean
     */
    public static function setRoot($root)
    {
        self::$_root = $root;
        return true;
    }
    
    /**
     * Writes to a file.
     * 
     * @param string $filename
     * @param string $data
     * @param string $mode
     * @return boolean|integer  The number of bytes written otherwise false.
     */
    public static function write($filename, $data, $dir = null, $mode = 'a+')
    {
        $ds = DIRECTORY_SEPARATOR;
        
        if (null !== $dir) {
            // normalize DIRECTORY SEPARATOR
            $dir = str_replace('/', $ds, $dir);
            $dir = str_replace(self::$_root, '', $dir);
            $dir = ltrim($dir, $ds);
            
            $dirsDepth = explode($ds, $dir);
            $_dir = '';
            foreach ($dirsDepth as $depth) {
                $_dir .= $depth . $ds;
                if (!file_exists(self::$_root . $ds . $_dir)) {
                    $created = @mkdir(self::$_root . $ds . $_dir, 0777);
                    if (false === $created) {
                        self::_addErrors('Cannot create a directory (' . $_dir . ')');
                        return false;
                    }
                }
            }
            
            $dir = self::$_root . $ds . $_dir;
        }
        
        if (self::_open($dir . $filename, $mode)) {
            if (false === ($bytes = @fwrite(self::$_handle, $data, strlen($data)))) {
                self::_addErrors("Cannot write to file ($filename)");
            }
            
            self::_close();
            return $bytes;
        }
        
        return false;
    }
    
    /**
     * Get the contents of a file.
     *
     * @param string $filename
     * @return string
     */
    public static function getContents($filename)
    {
        if (!file_exists($filename)) {
            self::_addErrors("Cannot open file ($filename)");
        }
        
        return file_get_contents($filename);
    }
    
    /**
     * Check if error occurs.
     *
     * @return boolean
     */
    public static function hasErrors()
    {
        return (bool) count(self::$_errors);
    }
    
    /**
     * Get error messages.
     *
     * @return array
     */
    public static function getErrors()
    {
        return self::$_errors;
    }
    
    /**
     * Opens a file.
     *
     * modes:
     * r  = Open for reading only; place the file pointer at the beginning of the file. 
     * 
     * r+ = Open for reading and writing; place the file pointer at the beginning of the file. 
     * 
     * w  = Open for writing only; place the file pointer at the beginning of the file and truncate 
     *      the file to zero length. If the file does not exist, attempt to create it.
     * 
     * w+ = Open for reading and writing; place the file pointer at the beginning of the file and 
     *      truncate the file to zero length. If the file does not exist, attempt to create it.
     * 
     * a  = Open for writing only; place the file pointer at the end of the file. If the file does 
     *      not exist, attempt to create it. 
     * 
     * a+ = Open for reading and writing; place the file pointer at the end of the file. If the file
     *      does not exist, attempt to create it. 
     * 
     * x  = Create and open for writing only; place the file pointer at the beginning of the file. 
     * 
     * x+ = Create and open for reading and writing; place the file pointer at the beginning of the file. 
     * 
     * @param string $filename
     * @param string $mode
     * @return boolean
     */
    private static function _open($filename, $mode = 'a+')
    {
        self::$_handle = @fopen($filename, $mode);
        if (false === ($success = (bool) self::$_handle)) {
            self::_addErrors("Cannot open file ($filename)");
            return false;
        }
        
        return true;
    }
    
    /**
     * Closes a file.
     *
     * @return boolean
     */
    private static function _close()
    {
        if (is_resource(self::$_handle)) {
            return fclose(self::$_handle);
        }
    }
    
    /**
     * Add error message.
     *
     * @param string $msg
     * @return void
     */
    private static function _addErrors($msg)
    {
        self::$_errors[] = $msg;
    }
}

/** Set the ROOT directory */
if (defined('ROOT')) {
    Files::setRoot(ROOT);
}