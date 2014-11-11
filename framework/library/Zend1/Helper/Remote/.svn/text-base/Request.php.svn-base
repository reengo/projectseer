<?php

class Helper_Remote_Request extends Helper_Remote_Abstract
{
    public function render()
    {
        $script = ((null !== ($confirm = $this->getConfirm())) ? 'if (confirm(\'' . $confirm . '\')) { ' : '')
                 . 'new Ajax.Request('
                 . "'" . $this->getUrl() . "'" . $this->getVarsJavascript() . ", {"
                 . 'asynchronous:true, evalScripts:true, '
                 . 'method:\'' . ($method = $this->getMethod()) . '\''
                 . (($this->serializeForm()) ? ', parameters:Form.serialize(this)' : '')
                 . ((null !== ($callbacks = $this->getCallbacks())) ? ', ' . $callbacks : '')
                 . '}); '
                 . ((null !== $confirm) ? '} ' : '')
                 . (($this->includeReturn()) ? 'return false;' : '');
        
        return $script;
    }
}