<?php

class Validator_Rule_Uniqueness extends Validator_Rule_Abstract 
{
    const NOT_UNIQUE = 'notUnique';
    
    protected $_messageTemplates = array(
        self::NOT_UNIQUE => "'%value%' has already been taken."
    );

    /**
     * The field that checks if this validator would validate. (if session is update or insert)
     *
     * @var string
     */
    protected $_except = array(
        'table_id' => null,
        'form_id'  => null
    );

    public function __construct($object, $except = array())
    {
        $this->setObject($object);
        
        if (is_array($except) && count($except)) {
            if (isset($except['table_id'])) {
                $this->_except['table_id'] = $except['table_id'];
            } elseif (isset($except['form_id']) && !isset($except['table_id'])) {
                $this->_except['table_id'] = $except['form_id'];
            }
            
            if (isset($except['form_id'])) {
                $this->_except['form_id'] = $except['form_id'];
            } elseif (isset($except['table_id']) && !isset($except['form_id'])) {
                $this->_except['form_id'] = $except['table_id'];
            }
        } elseif (is_string($except)) {
            $this->_except['table_id'] = $except;
            $this->_except['form_id']  = $except;
        }
    }
    
    public function isValid($value)
    {
        $this->_setValue($value);
        
        $object = $this->getObject();
        if ($object instanceof Zend_Db_Table_Abstract) {
            $data = $this->_getFieldsData();
            if (count($data) > 0) {
                $where = array();
                $_val = array();
                foreach($data as $fld => $val) {
                    if (!empty($val)) {
                        if (is_string($val)) {
                            $where["LOWER(" . $fld . ") = ?"] = strtolower($val);
                        } else {
                            $where[$fld . " = ?"] = $val;
                        }
                        $_val[] = $val;
                    }
                }
                $this->_setValue(implode(" ", $_val));
            } else {
                $field = $this->getField();
                if (!empty($value)) {
                    if (is_string($value)) {
                        $where = array("LOWER(" . $field . ") = ?" => strtolower($value));
                    } else {
                        $where = array($field . " = ?" => $value);
                    }
                }
            }

            if (count($where)) {
                $row = $object->fetchRow($where);
                if (null !== $this->_except['table_id'] && null !== $this->_except['form_id']) {
                    $tableId = $this->_except['table_id'];
                    $formId  = $this->_except['form_id'];
                    
                    $params = $this->getRequest()->getParams();
                    if (null !== $row && $row->$tableId != $params[$formId]) {
                        $this->_error(self::NOT_UNIQUE);
                        return false;
                    }
                } else {
                    if (null !== $row) {
                        $this->_error(self::NOT_UNIQUE);
                        return false;
                    }
                }
            }
        }
        
        return true;
    }
}