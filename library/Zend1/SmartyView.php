<?php
require_once 'Zend/View/Interface.php';
require_once 'SmartyView/Smarty.php';

class SmartyView implements Zend_View_Interface 
{
    /**
     * The Smarty Template
     *
     * @var Smarty
     */
    protected $_smarty = null;
    
    /**
     * Path stack for script, helper, and filter directories.
     *
     * @var array
     */
    private $_path = array(
        'script' => array(),
        'helper' => array(),
    );
    
    /**
     * Callback for escaping.
     *
     * @var string
     */
    private $_escape = 'htmlspecialchars';

    /**
     * Constructor
     * 
     * @return void
     */
    public function __construct()
    {
        $this->_smarty = new Smarty();
        $this->_smarty->plugins_dir[] = 'SmartyView/plugins';
    }
    
    /**
     * Return the template engine object, if any
     *
     * If using a third-party template engine, such as Smarty, patTemplate,
     * phplib, etc, return the template engine object. Useful for calling
     * methods on these objects, such as for setting filters, modifiers, etc.
     *
     * @return mixed
     */
    public function getEngine()
    {
        return $this->_smarty;
    }

    /**
     * Adds to the stack of view script paths in LIFO order.
     *
     * @param string|array The directory (-ies) to add.
     * @return Zend_View_Abstract
     */
    public function addScriptPath($path)
    {
        $this->_addPath('script', $path);
        return $this;
    }

    /**
     * Set the path to find the view script used by render()
     *
     * @param string|array The directory (-ies) to set as the path. Note that
     * the concrete view implentation may not necessarily support multiple
     * directories.
     * @return void
     */
    public function setScriptPath($path)
    {
        $this->_path['script'] = array();
        $this->_addPath('script', $path);
        return $this;
    }

    /**
     * Retrieve all view script paths
     *
     * @return array
     */
    public function getScriptPaths()
    {
        return $this->_path['script'];
    }

    /**
     * Adds to the stack of helper paths in LIFO order.
     *
     * @param string|array The directory (-ies) to add.
     * @return Zend_View_Abstract
     */
    public function addHelperPath($path)
    {
        $this->_addPath('helper', $path);
        return $this;
    }
    
    /**
     * Resets the stack of helper paths.
     *
     * To clear all paths, use Zend_View::setHelperPath(null).
     *
     * @param string|array $path The directory (-ies) to set as the path.
     * @return Zend_View_Abstract
     */
    public function setHelperPath($path)
    {
        $this->_path['helper'] = array();
        $this->_addPath('helper', $path);
        return $this;
    }
    
    /**
     * Set a base path to all view resources
     *
     * @param  string $path
     * @param  string $classPrefix
     * @return void
     */
    public function setBasePath($path, $classPrefix = 'Zend_View')
    {
        $path  = rtrim($path, '/');
        $path  = rtrim($path, '\\');
        $path .= DIRECTORY_SEPARATOR;
        
        // for smarty compiled directory
        $this->_smarty->template_dir = realpath($path);
        $this->_smarty->compile_dir  = realpath($path) . $ds . 'compiled' . $ds;

        $this->setScriptPath($path . 'scripts');
        $this->setHelperPath($path . 'helpers');
        return $this;
    }

    /**
     * Add an additional path to view resources
     *
     * @param  string $path
     * @param  string $classPrefix
     * @return void
     */
    public function addBasePath($path, $classPrefix = 'Zend_View')
    {
        $ds = DIRECTORY_SEPARATOR;
        
        $path  = rtrim($path, '/');
        $path  = rtrim($path, '\\');
        $path .= $ds;
        
        // for smarty compiled directory
        $this->_smarty->template_dir = realpath($path);
        $this->_smarty->compile_dir  = realpath($path) . $ds . 'compiled' . $ds;        
        
        $this->addScriptPath($path . 'scripts');
        $this->addHelperPath($path . 'helpers');
        return $this;
    }

    /**
     * Assign a variable to the view
     *
     * @param string $key The variable name.
     * @param mixed $val The variable value.
     * @return void
     */
    public function __set($key, $val)
    {
        $this->assign($key, $val);
    }

    /**
     * Allows testing with empty() and isset() to work
     *
     * @param string $key
     * @return boolean
     */
    public function __isset($key)
    {
        return ($this->_smarty->get_template_vars($key) !== null);
    }

    /**
     * Allows unset() on object properties to work
     *
     * @param string $key
     * @return void
     */
    public function __unset($key)
    {
        $this->_smarty->clear_assign($key);
    }

    /**
     * Assign variables to the view script via differing strategies.
     *
     * Suggested implementation is to allow setting a specific key to the
     * specified value, OR passing an array of key => value pairs to set en
     * masse.
     *
     * @see __set()
     * @param string|array $spec The assignment strategy to use (key or array of key
     * => value pairs)
     * @param mixed $value (Optional) If assigning a named variable, use this
     * as the value.
     * @return void
     */
    public function assign($spec, $value = null)
    {
        $this->_smarty->assign($spec, $value);
    }

    /**
     * Clear all assigned variables
     *
     * Clears all variables assigned to Zend_View either via {@link assign()} or
     * property overloading ({@link __get()}/{@link __set()}).
     *
     * @return void
     */
    public function clearVars()
    {
        $this->_smarty->clear_all_assign();
    }

    /**
     * Processes a view script and returns the output.
     *
     * @param string $name The script script name to process.
     * @return string The script output.
     */
    public function render($name)
    {
        $file = $this->_script($name);
        return $this->_smarty->fetch($file);
    }
    
    /**
     * Escapes a value for output in a view script.
     *
     * If escaping mechanism is one of htmlspecialchars or htmlentities, uses
     * {@link $_encoding} setting.
     *
     * @param mixed $var The output to escape.
     * @return mixed The escaped value.
     */
    public function escape($var)
    {
        if (in_array($this->_escape, array('htmlspecialchars', 'htmlentities'))) {
            return call_user_func($this->_escape, $var, ENT_COMPAT, $this->_encoding);
        }

        return call_user_func($this->_escape, $var);
    }

    /**
     * Setting form data.
     *
     * @deprecated 
     * @param array $data
     * @return void
     */
    public function setFormData(array $data)
    {
        $form = Form::getInstance();
        $form->set($data);
    }
    
    /**
     * Setting error messages for the template
     *
     * @param string $msgs
     * @return SmartyView
     */
    public function setErrors($msgs)
    {
        $form = Form::getInstance();
        if (is_array($msgs)) {
            $form->setMessages($msgs);
        } elseif (is_string($msgs)) {
            $form->setMessage(null, $msgs);
        }
        
        return $this;
    }
    
    /**
     * Paginate lists.
     * 
     * @param Zend_Db_Select|array $select
     * @param array $options
     */
    public function paginate($select, array $options = array())
    {
        if (!isset($options['id']))    $options['id']    = 'default';
        if (!isset($options['limit'])) $options['limit'] = 10;
        if (!isset($options['page_limit'])) $options['page_limit'] = 5;

        $request = Zend_Controller_Front::getInstance()->getRequest();
        $db = Env::get('db');
        
        $url = $request->getBaseUrl() . $request->PATH_INFO;
        $urlVar = SmartyPaginate::getUrlVar($options['id']);
        $params = $request->getQuery();
        if (isset($params[$urlVar])) {
            unset($params[$urlVar]);
        }
        if (is_array($params) && count($params)) {
            $part = array();
            foreach ($params as $idx => $val) {
                $part[] = $idx . '=' . $val;
            }
            $part = implode('&', $part);
            if ($part) {
                $url .= '?' . $part;
            }
        }
        
        /**
         * Reset the paginate if $urlVar is not found in the $_GET variable
         */
        if (!isset($request->{$urlVar})) {
            SmartyPaginate::reset($options['id']);
        }
        
        SmartyPaginate::connect($options['id']);
        SmartyPaginate::setLimit($options['limit'], $options['id']);
        SmartyPaginate::setUrl($url, $options['id']);
        SmartyPaginate::setPageLimit($options['page_limit'], $options['id']);
        
        if ($select instanceof Zend_Db_Select) {
            $sql = $select->__toString();
    		if (!(preg_match("/^\s*SELECT\s+DISTINCT/is", $sql) && preg_match('/\s+GROUP\s+BY\s+/is', $sql))) {
    			$_sql = preg_replace(
    						'/^\s*SELECT\s.*\s+FROM\s/Uis','SELECT COUNT(*) AS total FROM ', $sql);
    			$_sql  = preg_replace('/(\sORDER\s+BY\s.*)/is','',$_sql);
    			$total = $db->fetchOne($_sql);
    			
                $select->limit(SmartyPaginate::getLimit($options['id']), SmartyPaginate::getCurrentIndex($options['id']));
                if (isset($options['order'])) {
                    $select->order($options['order']);
                }
                $stmt   = $select->query();
                $result = $stmt->fetchAll();
    		} else {
    		    // can't rewrite sql, so find another way of getting the total records
        		$result = $db->query($sql);
        		$total  = count($result->fetchAll());
    		}
        } elseif (is_array($select)) {
            $result = array_slice($select, SmartyPaginate::getCurrentIndex($options['id']),
                            SmartyPaginate::getLimit($options['id']));
            $total  = count($select);
        }
        SmartyPaginate::setTotal(intval($total), $options['id']);
        
        $this->_smarty->assign('results', $result);
        $this->_smarty->assign('paginate_id', $options['id']);
        SmartyPaginate::assign($this->_smarty, 'paginate', $options['id']);
    }
    
    /**
     * Finds a view script from the available directories.
     *
     * @param $name string The base name of the script.
     * @return void
     */
    protected function _script($name)
    {
        if (0 == count($this->_path['script'])) {
            require_once 'Zend/View/Exception.php';
            throw new Zend_View_Exception('no view script directory set; unable to determine location for view script',
                $this);
        }

        foreach ($this->_path['script'] as $dir) {
            if (is_readable($dir . $name)) {
                return realpath($dir . $name);
            }
        }

        require_once 'Zend/View/Exception.php';
        $message = "script '$name' not found in path ("
                 . implode(PATH_SEPARATOR, $this->_path['script'])
                 . ")";
        throw new Zend_View_Exception($message, $this);
    }
    
    /**
     * Add paths to the path stack in LIFO order.
     *
     * @param string $type  The path type ('script', 'helper')
     * @param string $path
     * @return void
     */
    private function _addPath($type, $path)
    {
        $ds   = DIRECTORY_SEPARATOR;
        $path = (array) $path;
        
        foreach ($path as $dir) {
            // attempt to strip any possible separator and
            // append the system directory separator
            $dir = str_replace(array('/', '\\'), $ds, $dir);
            $dir = rtrim($dir, $ds . $ds) . $ds;

            switch ($type) {
                case 'helper':
                    $this->_smarty->plugins_dir[] = $dir;
                    
                case 'script':
                    array_unshift($this->_path[$type], $dir);
                    break;
            }
        }
    }
}