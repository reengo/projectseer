<?php

class Form_Decorator_HtmlTag extends Form_Decorator_Abstract 
{
    /**
     * Placement; default to surround content
     * @var string
     */
    protected $_placement = null;

    /**
     * HTML tag to use
     * @var string
     */
    protected $_tag;

    /**
     * @var Zend_Filter
     */
    protected $_tagFilter;

    /**
     * Convert options to tag attributes
     * 
     * @return string
     */
    protected function _htmlAttribs(array $attribs)
    {
        $xhtml = '';
        foreach ((array) $attribs as $key => $val) {
            $key = htmlspecialchars($key, ENT_COMPAT, 'UTF-8');
            if (is_array($val)) {
                $val = implode(' ', $val);
            }
            $val    = htmlspecialchars($val, ENT_COMPAT, 'UTF-8');
            $xhtml .= " $key=\"$val\"";
        }
        return $xhtml;
    }

    /**
     * Normalize tag
     *
     * Ensures tag is alphanumeric characters only, and all lowercase.
     * 
     * @param  string $tag 
     * @return string
     */
    public function normalizeTag($tag)
    {
        if (!isset($this->_tagFilter)) {
            require_once 'Zend/Filter.php';
            require_once 'Zend/Filter/Alnum.php';
            require_once 'Zend/Filter/StringToLower.php';
            $this->_filter = new Zend_Filter();
            $this->_filter->addFilter(new Zend_Filter_Alnum())
                          ->addFilter(new Zend_Filter_StringToLower());
        }
        return $this->_filter->filter($tag);
    }

    /**
     * Set tag to use
     * 
     * @param  string $tag 
     * @return Zend_Form_Decorator_HtmlTag
     */
    public function setTag($tag)
    {
        $this->_tag = $this->normalizeTag($tag);
        return $this;
    }

    /**
     * Get tag
     *
     * If no tag is registered, either via setTag() or as an option, uses 'div'.
     * 
     * @return string
     */
    public function getTag()
    {
        if (null === $this->_tag) {
            if (null === ($tag = $this->getOption('tag'))) {
                $this->setTag('div');
            } else {
                $this->setTag($tag);
                $this->removeOption('tag');
            }
        }

        return $this->_tag;
    }

    /**
     * Get the formatted open tag
     * 
     * @param  string $tag 
     * @param  array $attribs 
     * @return string
     */
    protected function _getOpenTag($tag, array $attribs = null)
    {
        $html = '<' . $tag;
        if (null !== $attribs) {
            $html .= $this->_htmlAttribs($attribs);
        }
        $html .= '>';
        return $html;
    }

    /**
     * Get formatted closing tag
     * 
     * @param  string $tag 
     * @return string
     */
    protected function _getCloseTag($tag)
    {
        return '</' . $tag . '>';
    }

    /**
     * Render content wrapped in an HTML tag
     * 
     * @param  string $content 
     * @return string
     */
    public function render($content)
    {
        $tag       = $this->getTag();
        $noAttribs = $this->getOption('noAttribs');
        $openOnly  = $this->getOption('openOnly');
        $closeOnly = $this->getOption('closeOnly');
        $this->removeOption('noAttribs');
        $this->removeOption('openOnly');
        $this->removeOption('closeOnly');

        $attribs = null;
        if (!$noAttribs) {
            $attribs = $this->getOptions();
        }

        return (($openOnly || !$closeOnly) ? $this->_getOpenTag($tag, $attribs) : '')
             . $content
             . (($closeOnly || !$openOnly) ? $this->_getCloseTag($tag) : '');
    }
}