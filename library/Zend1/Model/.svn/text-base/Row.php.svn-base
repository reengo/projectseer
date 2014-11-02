<?php
require_once 'Zend/Db/Table/Row/Abstract.php';

class Model_Row extends Zend_Db_Table_Row_Abstract 
{
    /**
     * Sets all data in the row from an array.
     *
     * @param  array $data
     * @return Zend_Db_Table_Row_Abstract Provides a fluent interface
     */
    public function setFromArray(array $data)
    {
        $data = $this->_normalizeFields($data);
        return parent::setFromArray($data);
    }
    
    /**
     * will remove all columns that are not found in this table.
     *
     * @param array $data
     * @return array
     */
    private function _normalizeFields(array $data)
    {
        $tableInfo = $this->_table->info();
        
        $results = array();
        foreach($data as $field => $value) {
            if (in_array($field, $tableInfo[Zend_Db_Table_Abstract::COLS])) {
                $results[$field] = $value;
            }
        }
        return $results;
    }
}