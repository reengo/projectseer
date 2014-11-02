<?php
require_once 'FileColumn/Exception.php';

class Model_FileColumn
{
    private $_column;
    private $_options = array();
    private $_request;
    
    private $_dbColumns = array();
    private $_fileData  = array();
    private $_requiredColumns = array(
        'name', 'size', 'type'
    );
    
    public function __construct($fileColumn, $dbColumns)
    {
        $this->_setColumn($fileColumn);
        $this->_setDbColumn($dbColumns);
        $this->_setRequest();
    }
    
    public function attachData($data)
    {
        if ($this->_validateColumns() && $this->_isUploaded()) {
            $count = $this->_countColumnArray();
            for ($i = 0; $i < $count; $i++) {
                $num = ($count > 1) ? $i : null;
                
                $data[$this->getName('name', $num)] = $this->get('name', $num);
                $data[$this->getName('type', $num)] = $this->get('type', $num);
                $data[$this->getName('size', $num)] = $this->get('size', $num);
                $data[$this->getName('data', $num)] = $this->get('tmp_name', $num);
            }
        }

        return $data;
    }
    
    public function getName($column, $num = null)
    {
        $pad = (null !== $num) ? ($num + 1) : '';
        return $this->_column . $pad . '_' . $column;
    }
    
    public function get($column, $num = null)
    {
        $params = $this->_request->getParams();

        $result = (null === $num) ? $params[$this->_column][$column] : $params[$this->_column][$num][$column];
        if ($column == 'tmp_name') {
            if ($this->_isSaveToTable()) {
                $result = bin2hex(file_get_contents($result));
            } elseif ($this->_isSaveToFile()) {
                $this->_fileData[$this->getName($column, $num)] = file_get_contents($result);
                $result = null;
            } else {
                $result = null;
            }
        }

        return $result;
    }
    
    public function getFileData()
    {
        return $this->_fileData;
    }
    
    public function isSaveToFile()
    {
        return $this->_isSaveToFile();
    }
    
    private function _isUploaded()
    {
        $params = $this->_request->getParams();
        $paramsCols = ($this->_countColumnArray() > 1) ? $params[$this->_column] : array($params[$this->_column]);
        
        $uploaded = false;
        foreach ($paramsCols as $fld => $col) {
            if (!$col['error'] && file_exists($col['tmp_name'])) {
                $uploaded = true;
            }
        }
        
        return $uploaded;
    }
    
    private function _validateColumns()
    {
        $requiredFields = $this->_requiredColumns;
        if ($this->_isSaveToTable()) {
            $requiredFields[] = 'data';
        }
        
        $columnsNotFound = array();
        $countColumn = $this->_countColumnArray();
        for ($i = 0; $i < $countColumn; $i++) {
            foreach ($requiredFields as $colSuffix) {
                $pad = $countColumn > 1 ? ($i + 1) : '';
                $col = $this->_column . $pad . '_' . $colSuffix;
                
                if (!in_array($col, $this->_dbColumns)) {
                    $columnsNotFound[] = $col;
                }
            }
        }
        
        if (count($columnsNotFound)) {
            throw new Model_FileColumn_Exception(
                            'File Columns are missing: (' . implode(', ', $columnsNotFound) . ')');
        }
        
        return true;
    }
    
    private function _setColumn($column)
    {
        $this->_column  = (string) @$column['name'];
        $this->_options = (array) @$column['options'];
    }
    
    private function _setDbColumn($columns)
    {
        $this->_dbColumns = (array) $columns;
    }
    
    private function _isSaveToTable()
    {
        return isset($this->_options['save_to']) && $this->_options['save_to'] == Model::STORAGE_DB_TABLE;
    }
    
    private function _isSaveToFile()
    {
        return isset($this->_options['save_to']) && $this->_options['save_to'] == Model::STORAGE_FILE;
    }
    
    private function _countColumnArray()
    {
        $params = $this->_request->getParams();
        if (isset($params[$this->_column])) {
            $key = key($params[$this->_column]);
            
            if (is_int($key) && is_array($params[$this->_column])) {
                return count($params[$this->_column]);
            }
        }
        return 1;
    }
    
    private function _setRequest(Zend_Controller_Request_Abstract $request = null)
    {
        if (null === $request) {
            $request = Zend_Controller_Front::getInstance()->getRequest();
        }
        
        $this->_request = $request;
    }
}