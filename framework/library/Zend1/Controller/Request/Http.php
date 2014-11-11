<?php
require_once 'Zend/Controller/Request/Http.php';

/**
 * User defined Request Object
 */
class Controller_Request_Http extends Zend_Controller_Request_Http
{
    /**
     * Retrieve an array of parameters
     *
     * Retrieves a merged array of parameters, with precedence of userland
     * params (see {@link setParam()}), $_GET, $POST (i.e., values in the
     * userland params will take precedence over all others).
     *
     * @return array
     */
    public function getParams()
    {
        $params = parent::getParams();
        $params = $this->_attachFilesToParams($params);
        return $params;
    }
    
    /**
     * Retrieve a member of the $_POST superglobal
     *
     * If no $key is passed, returns the entire $_POST array.
     *
     * @param string $key
     * @param mixed $default Default value to use if key not found
     * @return mixed Returns null if key does not exist
     */
    public function getPost($key = null, $default = null)
    {
        $post = $this->_attachFilesToParams($_POST);
        if ($key !== null) {
            $name = explode('/', $key);
            if (count($name) > 1 && null === $post) {
                $post = $post[$name[0]][$name[1]];
            } else {
                $post = $post[$name[0]];
            }
        }
        return $post;
    }
    
    /**
     * Attach Files params to current params.
     *
     * @param array $params
     * @return array
     */
    protected function _attachFilesToParams($params)
    {
        foreach($_FILES as $name => $file) {
            foreach(array('name', 'type', 'tmp_name', 'error', 'size') as $key) {
                if (is_array($file[$key])) {
                    foreach($file[$key] as $_key => $_item) {
                        $params[$name][$_key][$key] = $_item;
                    }
                } else {
                    $params[$name][$key] = $file[$key];
                }
            }
        }
        return $params;
    }
}