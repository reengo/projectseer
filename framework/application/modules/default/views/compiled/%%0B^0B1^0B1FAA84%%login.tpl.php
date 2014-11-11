<?php /* Smarty version 2.6.19, created on 2008-10-27 10:30:33
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cdefault%5Cviews%5Cscripts%5Cauth%5Clogin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'head_link', 'C:\\xampp\\htdocs\\check\\application\\modules\\default\\views\\scripts\\auth\\login.tpl', 9, false),array('function', 'form_text', 'C:\\xampp\\htdocs\\check\\application\\modules\\default\\views\\scripts\\auth\\login.tpl', 48, false),array('function', 'form_password', 'C:\\xampp\\htdocs\\check\\application\\modules\\default\\views\\scripts\\auth\\login.tpl', 64, false),array('function', 'form_submit', 'C:\\xampp\\htdocs\\check\\application\\modules\\default\\views\\scripts\\auth\\login.tpl', 80, false),array('function', 'flash', 'C:\\xampp\\htdocs\\check\\application\\modules\\default\\views\\scripts\\auth\\login.tpl', 87, false),array('function', 'display_errors', 'C:\\xampp\\htdocs\\check\\application\\modules\\default\\views\\scripts\\auth\\login.tpl', 88, false),array('block', 'form', 'C:\\xampp\\htdocs\\check\\application\\modules\\default\\views\\scripts\\auth\\login.tpl', 12, false),)), $this); ?>
<?php echo '
<script language="javascript">
Event.observe(window, \'load\', function(){
    $(\'username\').focus();
});
</script>
'; ?>


<?php echo smarty_function_head_link(array('href' => "main.css",'rel' => 'stylesheet'), $this);?>



<?php $this->_tag_stack[] = array('form', array('multipart' => true,'display_error' => false)); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

<div class="login_wrapper">
	<div class="login_topline">
    	<div class="login_headertop">
        	<div class="login_headertopleft">
            	&nbsp;
            </div>
            <div class="login_headertopcenter">
            	&nbsp;
            </div>
            <div class="login_headertopright">
            	&nbsp;
            </div>
        	<div class="invis"></div>
        </div>
        <div class="login_headerbot">
        	&nbsp;
        </div>
    </div>
    <div class="login_midline">
    	<div class="login_midline_left">
        	<a href=""><img src="../images/login_rpluslogo.jpg" border="0" /></a>
        </div>
        <div class="login_midline_right">
        	<div class="titlebar1">
            	<span class="textstyle1">USER LOGIN</span>
            </div>
            <div class="login_content">
            
				<table>
                	<tr>
                    	<td>
                        	Username
                        </td>
                        <td>
                        	<?php echo smarty_function_form_text(array('type' => 'text','class' => 'inputbox1','name' => 'username'), $this);?>

                        </td>
                    </tr>
                    <tr>
                    	<td>
                        	&nbsp;
                        </td>
                        <td>
                        	&nbsp;
                        </td>
                    </tr>
                    <tr>
                    	<td>
                        	Password
                        </td>
                        <td>
                        	<?php echo smarty_function_form_password(array('type' => 'password','class' => 'inputbox1','name' => 'password'), $this);?>

                        </td>
                    </tr>
                    <tr>
                    	<td>
                        	&nbsp;
                        </td>
                        <td>
                        	&nbsp;
                        </td>
                    </tr>
                    <tr>
                    	<td>
                        	&nbsp;
                        </td>
                        <td>
                        	<?php echo smarty_function_form_submit(array('name' => 'submit','value' => '     LOGIN     '), $this);?>

                        </td>
                    </tr>
                </table>		
			</div>
        </div
        
        <?php echo smarty_function_flash(array(), $this);?>

        <?php echo smarty_function_display_errors(array(), $this);?>

       
    	<div class="invis"></div>
    </div>
    <div class="login_botline">
    	&nbsp;
    </div>
</div>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>