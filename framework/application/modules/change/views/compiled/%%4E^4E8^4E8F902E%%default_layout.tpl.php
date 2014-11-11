<?php /* Smarty version 2.6.19, created on 2008-11-19 08:27:54
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cchange%5Cviews%5Clayouts%5Cdefault_layout.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'doctype', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\layouts\\default_layout.tpl', 1, false),array('function', 'head_meta', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\layouts\\default_layout.tpl', 4, false),array('function', 'head_title', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\layouts\\default_layout.tpl', 5, false),array('function', 'head_link', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\layouts\\default_layout.tpl', 6, false),array('function', 'scriptaculous', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\layouts\\default_layout.tpl', 7, false),array('function', 'javascript_include_tag', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\layouts\\default_layout.tpl', 8, false),array('block', 'link_to', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\layouts\\default_layout.tpl', 23, false),)), $this); ?>
<?php echo smarty_function_doctype(array('type' => 'xtransitional'), $this);?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo smarty_function_head_meta(array(), $this);?>

<?php echo smarty_function_head_title(array(), $this);?>

<?php echo smarty_function_head_link(array('href' => "inner.css",'rel' => 'stylesheet'), $this);?>

<?php echo smarty_function_scriptaculous(array(), $this);?>

<?php echo smarty_function_javascript_include_tag(array('name' => "tiny_mce/tiny_mce.js"), $this);?>

<?php echo smarty_function_javascript_include_tag(array('name' => "tinymce.js"), $this);?>

</head>

<body>
<div class="wrapper">
	<div class="topline">
    	<div class="topline_left">
        	&nbsp;
        </div>
        <div class="topline_right">
        	<div class="topline_right_top">
            	&nbsp;
            </div>
            <div class="topline_right_mid">
                        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'textstyle8','controller' => "../admin")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Dashboard<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>&nbsp; <span class="textstyle1">|</span> &nbsp;
                            <?php $this->_tag_stack[] = array('link_to', array('class' => 'textstyle8','controller' => "../admin/projects")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Projects<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>&nbsp; <span class="textstyle1">|</span> &nbsp;
                            <?php $this->_tag_stack[] = array('link_to', array('class' => 'textstyle8','controller' => "../admin/tickets")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tickets<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>&nbsp; <span class="textstyle1">|</span> &nbsp;
                            <?php $this->_tag_stack[] = array('link_to', array('class' => 'textstyle8','controller' => "../admin/users")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Users<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>&nbsp; <span class="textstyle1">|</span> &nbsp;                           
                            <?php $this->_tag_stack[] = array('link_to', array('class' => 'textstyle8','controller' => 'index')); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Change Log<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>&nbsp; <span class="textstyle1">|</span> &nbsp;
                            <?php $this->_tag_stack[] = array('link_to', array('class' => 'textstyle8','controller' => "../admin/settings")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Settings<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </div>
            <div class="topline_right_bot">
            <?php echo $this->_tpl_vars['__WELCOME_MESSAGE']; ?>
 | <?php $this->_tag_stack[] = array('link_to', array('class' => 'textstyle9','href' => "/logout")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Logout<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </div>
        </div>
        <div class="invis"></div>
    </div>
    <div class="midline">
    	<div class="midline_top">
        	&nbsp;
        </div>
        <div class="midline_mid">
         <?php echo $this->_tpl_vars['content_for_layout']; ?>
               
        </div>
    </div>
    <div class="botline">
    	<span class="textstyle1">Copyright &copy; 2008. Rex2Check. All Rights Reserved.</span>
    </div>
</div>

</body>
</html>