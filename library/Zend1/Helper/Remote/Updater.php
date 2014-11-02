<?php

class Helper_Remote_Updater extends Helper_Remote_Abstract 
{
    public function render()
    {
        $script = ((null !== ($confirm = $this->getConfirm())) ? 'if (confirm(\'' . $confirm . '\')) { ' : '')
                 . 'new Ajax.Updater('
                 . $this->_getContainer()
                 . '\'' . $this->getUrl() . '\'' . $this->getVarsJavascript() . ', {'
                 . 'asynchronous:true, evalScripts:true, '
                 . 'method:\'' . ($method = $this->getMethod()) . '\''
                 . (($this->serializeForm()) ? ', parameters:Form.serialize(this)' : '')
                 . ((null !== ($callbacks = $this->getCallbacks())) ? ', ' . $callbacks : '')
                 . '}); '
                 . ((null !== $confirm) ? '} ' : '')
                 . (($this->includeReturn()) ? 'return false;' : '');
        
        return $script;
    }
    
    private function _getContainer()
    {
        $domId = $this->getDomId();
        
        $pairs = explode(',', $domId);
        if (count($pairs) > 1) {
            $container = array();
            foreach ($pairs as $pair) {
                if (strpos($pair, '=') !== false) {
                    list($event, $dom) = explode('=', $pair);
                    $container[] = $event . ':\'' . $dom . '\'';
                } else {
                    $container[] = 'success:\'' . $pair . '\'';
                }
            }
            
            return '{' . implode(',', $container) . '}, ';
        } else {
            return '\'' . $domId . '\', ';
        }
    }
}