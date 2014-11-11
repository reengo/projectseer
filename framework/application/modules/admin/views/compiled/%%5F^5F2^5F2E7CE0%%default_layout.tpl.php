<?php /* Smarty version 2.6.19, created on 2009-02-11 19:19:03
         compiled from /home/rex2chek/public_html/application/modules/admin/views/layouts/default_layout.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'doctype', '/home/rex2chek/public_html/application/modules/admin/views/layouts/default_layout.tpl', 1, false),array('function', 'head_meta', '/home/rex2chek/public_html/application/modules/admin/views/layouts/default_layout.tpl', 4, false),array('function', 'head_title', '/home/rex2chek/public_html/application/modules/admin/views/layouts/default_layout.tpl', 5, false),array('function', 'head_link', '/home/rex2chek/public_html/application/modules/admin/views/layouts/default_layout.tpl', 6, false),array('function', 'scriptaculous', '/home/rex2chek/public_html/application/modules/admin/views/layouts/default_layout.tpl', 7, false),array('function', 'javascript_include_tag', '/home/rex2chek/public_html/application/modules/admin/views/layouts/default_layout.tpl', 8, false),array('block', 'link_to', '/home/rex2chek/public_html/application/modules/admin/views/layouts/default_layout.tpl', 42, false),)), $this); ?>
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
            <?php if ($this->_tpl_vars['__USER_LEVEL'] == 1): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../global/admin_nav.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>            
            	<?php if ($this->_tpl_vars['__USER_LEVEL'] == 3): ?>
            		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../global/pm_nav.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            		<?php if ($this->_tpl_vars['__USER_LEVEL'] == 4): ?>
            			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../global/qa_nav.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            			<?php if ($this->_tpl_vars['__USER_LEVEL'] == 5): ?>
            				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../global/dev_nav.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            				<?php if ($this->_tpl_vars['__USER_LEVEL'] == 6): ?>
            					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../global/marketing_nav.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	    					<?php else: ?>
	    						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../global/guest_nav.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	    					<?php endif; ?>
	    				<?php endif; ?>
    				<?php endif; ?>
    			<?php endif; ?>
    		<?php endif; ?>
            </div>
            <div class="topline_right_bot">
            <?php echo $this->_tpl_vars['__WELCOME_MESSAGE']; ?>
 | <?php if ($this->_tpl_vars['__USER_LEVEL'] == 1): ?><?php $this->_tag_stack[] = array('link_to', array('class' => 'textstyle9','controller' => 'settings')); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Settings<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> | <?php endif; ?><?php $this->_tag_stack[] = array('link_to', array('class' => 'textstyle9','href' => "/logout")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Logout<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
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