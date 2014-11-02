<?php /* Smarty version 2.6.19, created on 2008-10-14 02:40:05
         compiled from C:%5Cxampp%5Chtdocs%5Cchange%5Capplication%5Cmodules%5Cdefault%5Cviews%5Cscripts%5Cauth%5Clogin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'head_link', 'C:\\xampp\\htdocs\\change\\application\\modules\\default\\views\\scripts\\auth\\login.tpl', 9, false),array('function', 'flash', 'C:\\xampp\\htdocs\\change\\application\\modules\\default\\views\\scripts\\auth\\login.tpl', 11, false),array('function', 'form_text', 'C:\\xampp\\htdocs\\change\\application\\modules\\default\\views\\scripts\\auth\\login.tpl', 16, false),array('function', 'form_password', 'C:\\xampp\\htdocs\\change\\application\\modules\\default\\views\\scripts\\auth\\login.tpl', 20, false),array('function', 'form_submit', 'C:\\xampp\\htdocs\\change\\application\\modules\\default\\views\\scripts\\auth\\login.tpl', 24, false),array('block', 'form', 'C:\\xampp\\htdocs\\change\\application\\modules\\default\\views\\scripts\\auth\\login.tpl', 12, false),)), $this); ?>
<?php echo '
<script language="javascript">
Event.observe(window, \'load\', function(){
    $(\'username\').focus();
});
</script>
'; ?>


<?php echo smarty_function_head_link(array('href' => "main.css",'rel' => 'stylesheet'), $this);?>


<?php echo smarty_function_flash(array(), $this);?>

<?php $this->_tag_stack[] = array('form', array('multipart' => true)); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<table width="100%" border="0" cellspacing="1" cellpadding="2">
<tr>
    <td width="15%">Username: </td>
    <td><?php echo smarty_function_form_text(array('name' => 'username'), $this);?>
</td>
</tr>
<tr>
    <td>Password:</td>
    <td><?php echo smarty_function_form_password(array('name' => 'password'), $this);?>
</td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td><?php echo smarty_function_form_submit(array('name' => 'login','value' => 'Login'), $this);?>
<label></label></td>
</tr>
</table>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>