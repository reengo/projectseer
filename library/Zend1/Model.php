<?php
require_once 'Zend/Db/Table/Abstract.php';
require_once 'Model/Row.php';
require_once 'Model/FileColumn.php';

class Model extends Zend_Db_Table_Abstract 
{
    const STORAGE_DB_TABLE = 1;
    const STORAGE_FILE     = 2;
    
    /**
     * The date column for created on
     * 
     * @var string
     */
    protected $_created = 'created_on';
    
    /**
     * The date column for updated on
     *
     * @var string
     */
    protected $_updated = 'updated_on';
    
    /**
     * The Row object
     *
     * @var string
     */
    protected $_rowClass = 'Model_Row';
    
    protected $_callbacks = array();
    
    protected $_fileColumns = array();
    
    protected $_fileData = array();
    
    protected $_fileLocation = 'html/files/model';
    
    /**
     * Constructor
     *
     * @param array $config
     */
    public function __construct($config = array())
    {
        if (!isset($config[self::ADAPTER])) {
            $config[self::ADAPTER] = 'db';
        }
        parent::__construct($config);
    }
    
    /**
     * Get the primary key or primary keys
     *
     * @return string|array
     */
    public function getPrimaryKey()
    {
        if (count($this->_primary) == 1) {
            return $this->_primary[key($this->_primary)];
        } else {
            return $this->_primary;
        }
    }
    
    /**
     * Set the date column: created on
     *
     * @param string $dateColumn
     * @return void
     */
    public function setCreated($dateColumn)
    {
        $dateColumn = (string) $dateColumn;
        $this->_created = $dateColumn;
    }
    
    /**
     * Set the date column: updated on
     *
     * @param string $dateColumn
     * @return void
     */
    public function setUpdated($dateColumn)
    {
        $dateColumn = (string) $dateColumn;
        $this->_updated = $dateColumn;
    }
    
    /**
     * Insert data
     * 
     * Override to add a column: created_on and updated_on
     * And to remove fields that are not found in this table
     *
     * @param array $data
     * @return mixed
     */
    public function insert(array $data)
    {
        /** removed other fields that are not found in this table */
        $data = $this->_normalizeFields($data);
        
        /** inserts file columns, if any */
        $data = $this->_setFileColumns($data);
        
        $data = $this->preInsert($data);
        
        if (!isset($data[$this->_created]) && in_array($this->_created, $this->_cols)) {
            $data[$this->_created] = new Zend_Db_Expr('NOW()');
        }
        
        if (!isset($data[$this->_updated]) && in_array($this->_updated, $this->_cols)) {
            $data[$this->_updated] = new Zend_Db_Expr('NOW()');
        }

        $ok = parent::insert($data);
        
        if ($ok) {
            $this->postInsert();
            $this->_saveFileColumn();
        }
        
        return $ok;
    }
    
    /**
     * Updates a data.
     *
     * Override to add a column: created_on
     * And to remove fields that are not found in this table
     * 
     * @param array $data
     * @param string|array $where
     * @return boolean
     */
    public function update(array $data, $where)
    {
        /** removed other fields that are not found in this table */
        $data = $this->_normalizeFields($data);
        
        /** inserts file columns, if any */
        $data = $this->_setFileColumns($data);

        $data = $this->preUpdate($data);
        
        if (!isset($data[$this->_updated]) && in_array($this->_updated, $this->_cols)) {
            $data[$this->_updated] = new Zend_Db_Expr('NOW()');
        }

        $ok = parent::update($data, $where);
        
        if ($ok) {
            $this->postUpdate();
        }
        
        return $ok;
    }
    
    /**
     * Manipulates data before inserting.
     * Subclasses may override this method.
     *
     * @param array $data
     * @return array
     */
    public function preInsert(array $data)
    {
        return $data;
    }
    
    /**
     * Do some final logic after inserting the data.
     * Subclasses may override this method.
     *
     * @return void
     */
    public function postInsert()
    { }
    
    /**
     * Manipulates the data before updating.
     * Subclasses may override this method.
     * 
     * Must return the data itself.
     *
     * @param array $data
     * @return array
     */
    public function preUpdate(array $data)
    {
        return $data;
    }
    
    /**
     * Do some final logic after updating the data.
     * Subclasses may override this method.
     *
     * @return void
     */
    public function postUpdate()
    { }
    
    /**
     * Convert rows to dropdown list.
     *
     * @param Zend_Db_Table_Select|array $where
     * @param array $options OPTIONAL
     * @return array
     */
    public function toDropdown($where = null, array $options = array())
    {
        if (!isset($options['value'])) {
            $options['value'] = 'id';
        }
        if (!isset($options['text'])) {
            $options['text'] = 'name';
        }
        if (!isset($options['order'])) {
            $options['order'] = null;
        }
        
        $where = $this->_where($this->select(), $where);
        $rows = $this->fetchAll($where, $options['order'])->toArray();
        
        $return = array();
        foreach ($rows as $data) {
            $keys = array_keys($data);
            if (isset($data[$options['value']])) {
                $id = $data[$options['value']];
            } else {
                $id = (isset($data[$keys[0]])) ? $data[$keys[0]] : null;
            }
            
            if (isset($data[$options['text']])) {
                $text = $data[$options['text']];
            } else {
                $text = (isset($data[$keys[1]])) ? $data[$keys[1]] : null;
            }
            $return += array((string) $id => $text);
        }
        return $return;
    }
    
    /**
     * Normalize the fields. Remove fields that are not found in this table.
     *
     * @param array $data
     * @return array
     */
    protected function _normalizeFields(array $data) 
    {
        $result = array();
        
        foreach ($data as $field => $value) {
            if (in_array($field, $this->_cols)) {
                $result[$field] = $value;
            }
        }
        
        return $result;
    }
    
    /**
     * Set error messages
     *
     * @param string $name
     * @param string $message
     * @return Model
     */
    protected function _setMessage($name, $message)
    {
        $form = Form::getInstance();
        $form->setMessage($name, $message);
        return $this;
    }
    
    /**
     * Load another model to be use by this model.
     *
     * @return void
     */
    protected function _use()
    {
		$args = func_get_args();

        foreach($args as $key => $arg) {
            // normalize input
            $tmp = array();
            if (is_string($arg)) {
                $tmp['model']  = $arg;
                $tmp['module'] = null;
            } elseif (is_array($arg)) {
                if (!isset($arg['model'])) {
                    // if key [model] is not set then continue to the next argument
                    continue;
                } elseif (!isset($arg['module'])) {
                    $tmp['module'] = null;
                } else {
                    $tmp = $arg;
                }
            } else {
                $tmp = $arg;
            }

            $modelObj = loadModel($tmp['model'], $tmp['module']);
            $model = strtolower($tmp['model']);
            if (is_object($modelObj) && !isset($this->{$model})) {
                $this->{$model} = $modelObj;
            } elseif (isset($this->{$model})) {
                throw new Zend_Db_Table_Exception("Cannot use ($model) for model because it's already set.");
            }
        }
    }
    
    protected function _addFileColumn($column, array $options = array())
    {
        $column = $this->_filterAlnum($column);
        
        if (!$this->_isColumnExists($column)) {
            $newOptions = array(
                'save_to' => (isset($options['save_to'])) ? $options['save_to'] : '',
            );
            
            $this->_fileColumns[] = array(
                'name'    => $column,
                'options' => $newOptions
            );
        }
        
        return $this;
    }
    
    private function _setFileColumns($data)
    {
        foreach ($this->_fileColumns as $fc) {
            $fileColumn = new Model_FileColumn($fc, $this->_cols);
            $data = $fileColumn->attachData($data);
            
            if ($fileColumn->isSaveToFile()) {
                $this->_fileData += (array) $fileColumn->getFileData();
            }
        }
        
        return $data;
    }
    
    private function _saveFileColumn()
    {
        foreach ($this->_fileData as $field => $data) {
            //$this->_fileLocation
            
            
        }
    }
    
    private function _isColumnExists($column)
    {
        // filecolumn[0][name] => 'image'
        // filecolumn[0][options] => array('save_to')
        foreach ($this->_fileColumns as $fc) {
            if ($fc['name'] == $column) {
                $found = true;
                break;
            }
        }
        
        return isset($found) && $found === true;
    }
    
    private function _filterAlnum($value)
    {
        require_once 'Zend/Filter/Alnum.php';
        $alnum = new Zend_Filter_Alnum();
        return $alnum->filter($value);
    }
}