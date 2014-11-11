<?php /* Smarty version 2.6.19, created on 2008-10-13 13:44:24
         compiled from C:%5Cxampp%5Chtdocs%5Cchange%5Capplication%5Cmodules%5Cdefault%5Cviews%5Cscripts%5Cindex%5Cindex.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'form', 'C:\\xampp\\htdocs\\change\\application\\modules\\default\\views\\scripts\\index\\index.tpl', 3, false),array('function', 'flash', 'C:\\xampp\\htdocs\\change\\application\\modules\\default\\views\\scripts\\index\\index.tpl', 4, false),array('function', 'form_text', 'C:\\xampp\\htdocs\\change\\application\\modules\\default\\views\\scripts\\index\\index.tpl', 5, false),array('function', 'form_password', 'C:\\xampp\\htdocs\\change\\application\\modules\\default\\views\\scripts\\index\\index.tpl', 6, false),array('function', 'form_submit', 'C:\\xampp\\htdocs\\change\\application\\modules\\default\\views\\scripts\\index\\index.tpl', 8, false),)), $this); ?>
<?php echo $this->_tpl_vars['sample']; ?>


<?php $this->_tag_stack[] = array('form', array()); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php echo smarty_function_flash(array(), $this);?>

<?php echo smarty_function_form_text(array('name' => 'username'), $this);?>

<?php echo smarty_function_form_password(array('name' => 'password'), $this);?>

<?php echo smarty_function_form_submit(array('name' => 'submit'), $this);?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>