<?php

class File_Render
{
    /**
     * @var Zend_Controller_Response_Abstract
     */
    protected $_response;
    
    /**
     * @var Zend_Controller_Request_Abstract
     */
    protected $_request;
    
    protected $_type;
    
    protected $_filename;
    
    protected $_fileToRender;
    
    protected $_root;
    
    protected $_mimeTypes = array(
        'jpg' => 'image/jpeg',
        'jpg' => 'image/pjpeg',
        'gif' => 'image/gif',
        'png' => 'image/png',
        'txt' => 'text/plain',
	);
    
    public function __construct()
    {
        $this->_request  = Zend_Controller_Front::getInstance()->getRequest();
        $this->_response = Zend_Controller_Front::getInstance()->getResponse();
    }
    
    public function setRoot($root)
    {
        $this->_root = $root;
        return $this;
    }
    
    public function setType($type)
    {
        $this->_type = $type;
        return $this;
    }
    
    public function getType()
    {
        if (null === $this->_type) {
            $this->_type = 'txt';
        }
        
        return $this->_mimeTypes[$this->_type];
    }
    
    public function setFilename($filename)
    {
        $this->_filename = $filename;
        return $this;
    }
    
    public function getFilename()
    {
        if (null === $this->_filename) {
            $this->_filename = substr(md5(uniqid(rand(), true)), 0, 10);
        }
        
        return $this->_filename;
    }
    
    public function setFileToRender($filename)
    {
        $this->_fileToRender = $filename;
        return $this;
    }
    
    public function render()
    {
        if (!file_exists($this->_fileToRender)) {
            return;
        }
        
        $ds = DIRECTORY_SEPARATOR;
        
        $params = $this->_request->getParams();
        if (isset($params['size']) && ($size = $params['size'])) {
            require_once 'library/Thumbnailer.php';
            list($width, $height) = explode('x', $size);

            $thumbnail = new Thumbnailer();
            $thumbnail->setSourceFile($this->_fileToRender)
                      ->setWidth($width)
                      ->setHeight($height)
                      ->setCacheDir($this->_root . $ds . 'tmp' . $ds . 'cache');

            $cacheFile = $thumbnail->generate($this->getFilename(), $this->getType());
            $content = file_get_contents($cacheFile);
        } else {
            $content = file_get_contents($this->_fileToRender);
        }
        
        $this->_response->setHeader('Content-Length', strlen($content))
                        ->setHeader('Content-Type', $this->getType())
                        ->setHeader('Content-Disposition', 'filename=' . md5($this->getFilename()))
                        ->setHeader('Content-Transfer-Encoding', 'binary')
                        ->setBody($content);

    }
}