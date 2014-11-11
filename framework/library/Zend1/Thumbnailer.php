<?php
require_once 'vendors/thumbnailer/thumbnail.inc.php';

class Thumbnailer
{
    /**
     * @var Thumbnail
     */
    protected $_thumb;
    
    protected $_sourceFile;
    
    protected $_width = 100;
    
    protected $_height = 100;
    
    protected $_cacheDir;
    
    public function __construct()
    { }
    
    public function setSourceFile($source)
    {
        $this->_sourceFile = $source;
        return $this;
    }
    
	public function setWidth($width)
	{
	    if (null !== $width) {
	       $this->_width = $width;
	    }
	    return $this;
	}
	
	public function setHeight($height)
	{
	    if (null !== $height) {
	       $this->_height = $height;
	    }
	    return $this;
	}

	public function setCacheDir($cacheDir)
	{
	    $this->_cacheDir = $cacheDir;
	    return $this;
	}
	
	public function generate($newFilename, $type)
	{
	    if (!file_exists($this->_sourceFile)) {
	        return false;
	    }
	    
	    $newFilename = $this->_createCacheFile($newFilename);
	    $thumb = new Thumbnail($this->_sourceFile);
	    $thumb->resize($this->_width, $this->_height);
	    if (!is_file($newFilename)) { // check if existing
	       $thumb->show(100, $newFilename);
	    }
	    
	    return $newFilename;
	}
	
	private function _createCacheFile($filename)
	{
	    $ds = DIRECTORY_SEPARATOR;
	    $filename = md5($filename . '_' . $this->_width . 'x' . $this->_height);
	    return $this->_cacheDir . $ds . 'rendered' . $ds . $filename;
	}
}