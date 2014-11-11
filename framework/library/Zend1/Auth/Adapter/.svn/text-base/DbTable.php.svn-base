<?php
require_once 'Zend/Auth/Adapter/DbTable.php';

class MyAuth_Adapter_DbTable extends Zend_Auth_Adapter_DbTable
{
    /**
     * authenticate() - defined by Zend_Auth_Adapter_Interface.
     *
     * @throws Zend_Auth_Adapter_Exception if answering the authentication query is impossible
     * @return Zend_Auth_Result
     */
    public function authenticate()
    {
        $exception = null;

        if ($this->_tableName == '') {
            $exception = 'A table must be supplied for the Zend_Auth_Adapter_DbTable authentication adapter.';
        } elseif ($this->_identityColumn == '') {
            $exception = 'An identity column must be supplied for the Zend_Auth_Adapter_DbTable authentication adapter.';
        } elseif ($this->_credentialColumn == '') {
            $exception = 'A credential column must be supplied for the Zend_Auth_Adapter_DbTable authentication adapter.';
        } elseif ($this->_identity == '') {
            $exception = 'A value for the identity was not provided prior to authentication with Zend_Auth_Adapter_DbTable.';
        } elseif ($this->_credential === null) {
            $exception = 'A credential value was not provided prior to authentication with Zend_Auth_Adapter_DbTable.';
        }

        if (null !== $exception) {
            /**
             * @see Zend_Auth_Adapter_Exception
             */
            require_once 'Zend/Auth/Adapter/Exception.php';
            throw new Zend_Auth_Adapter_Exception($exception);
        }

        // create result array
        $authResult = array(
            'code'     => Zend_Auth_Result::FAILURE,
            'identity' => $this->_identity,
            'messages' => array()
            );


        // build credential expression
        if (empty($this->_credentialTreatment) || (strpos($this->_credentialTreatment, "?") === false)) {
            $this->_credentialTreatment = '?';
        }

        $credentialExpression = new Zend_Db_Expr(
            $this->_zendDb->quoteInto(
                $this->_zendDb->quoteIdentifier($this->_credentialColumn)
                . ' = ' . $this->_credentialTreatment, $this->_credential
                )
            . ' AS zend_auth_credential_match'
            );

        // get select
        $dbSelect = $this->_zendDb->select();
        $dbSelect->from($this->_tableName, array('*', $credentialExpression))
                 ->where($this->_zendDb->quoteIdentifier($this->_identityColumn) . ' = ?', $this->_identity);

        // query for the identity
        try {
            $resultIdentities = $this->_zendDb->fetchAll($dbSelect->__toString());
        } catch (Exception $e) {
            /**
             * @see Zend_Auth_Adapter_Exception
             */
            require_once 'Zend/Auth/Adapter/Exception.php';
            throw new Zend_Auth_Adapter_Exception('The supplied parameters to Zend_Auth_Adapter_DbTable failed to '
                                                . 'produce a valid sql statement, please check table and column names '
                                                . 'for validity.');
        }

        if (count($resultIdentities) < 1) {
            $authResult['code'] = Zend_Auth_Result::FAILURE_IDENTITY_NOT_FOUND;
            $authResult['messages'][] = 'Invalid username/password.';
            return new Zend_Auth_Result($authResult['code'], $authResult['identity'], $authResult['messages']);
        } elseif (count($resultIdentities) > 1) {
            $authResult['code'] = Zend_Auth_Result::FAILURE_IDENTITY_AMBIGUOUS;
            $authResult['messages'][] = 'Invalid username/password.';
            return new Zend_Auth_Result($authResult['code'], $authResult['identity'], $authResult['messages']);
        }

        $resultIdentity = $resultIdentities[0];

        if ($resultIdentity['zend_auth_credential_match'] != '1') {
            $authResult['code'] = Zend_Auth_Result::FAILURE_CREDENTIAL_INVALID;
            $authResult['messages'][] = 'Invalid username/password.';
            return new Zend_Auth_Result($authResult['code'], $authResult['identity'], $authResult['messages']);
        }

        unset($resultIdentity['zend_auth_credential_match']);
        $this->_resultRow = $resultIdentity;

        $authResult['code'] = Zend_Auth_Result::SUCCESS;
        $authResult['messages'][] = 'Authentication successful.';
        return new Zend_Auth_Result($authResult['code'], $authResult['identity'], $authResult['messages']);
    }

}