<?php /* Smarty version 2.6.19, created on 2008-10-14 02:32:11
         compiled from C:%5Cxampp%5Chtdocs%5Cchange%5Capplication%5Cmodules%5Cdefault%5Cviews%5Clayouts%5Cdefault_layout.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'doctype', 'C:\\xampp\\htdocs\\change\\application\\modules\\default\\views\\layouts\\default_layout.tpl', 2, false),array('function', 'head_meta', 'C:\\xampp\\htdocs\\change\\application\\modules\\default\\views\\layouts\\default_layout.tpl', 5, false),array('function', 'head_title', 'C:\\xampp\\htdocs\\change\\application\\modules\\default\\views\\layouts\\default_layout.tpl', 6, false),array('function', 'head_link', 'C:\\xampp\\htdocs\\change\\application\\modules\\default\\views\\layouts\\default_layout.tpl', 7, false),array('function', 'scriptaculous', 'C:\\xampp\\htdocs\\change\\application\\modules\\default\\views\\layouts\\default_layout.tpl', 8, false),)), $this); ?>
<!-- this is a sample layout -->
<?php echo smarty_function_doctype(array('type' => 'xtransitional'), $this);?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo smarty_function_head_meta(array(), $this);?>

<?php echo smarty_function_head_title(array(), $this);?>

<?php echo smarty_function_head_link(array('href' => "main.css",'rel' => 'stylesheet'), $this);?>

<?php echo smarty_function_scriptaculous(array(), $this);?>

</head>

<body>
This is a sample layout. You can change this at: 
<span style="font-family:'courier new'; font-size:12px;">/application/modules/default/views/layouts</span>
<br><br>

You can change the title of this project by going to:
<span style="font-family:'courier new'; font-size:12px;">/application/config/global.php</span>
<br><br>

<?php echo $this->_tpl_vars['content_for_layout']; ?>

</body>
</html>