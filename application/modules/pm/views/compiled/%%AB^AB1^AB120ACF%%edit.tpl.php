<?php /* Smarty version 2.6.19, created on 2008-10-20 08:12:18
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cadmin%5Cviews%5Cscripts%5Cusers%5Cedit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'flash', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\edit.tpl', 1, false),array('function', 'form_text', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\edit.tpl', 67, false),array('function', 'form_select', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\edit.tpl', 88, false),array('function', 'form_submit', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\edit.tpl', 93, false),array('block', 'form', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\edit.tpl', 3, false),array('block', 'link_to', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\edit.tpl', 71, false),)), $this); ?>
<?php echo smarty_function_flash(array(), $this);?>


<?php $this->_tag_stack[] = array('form', array()); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div class="midline_mid">
    <div class="midline_con">
    	<div class="midline_con_top">
        	&nbsp;
        </div>
		<div class="midline_con_mid">
		<table class="table5" cellspacing="0">
		    	<tr>
		        	<td>
		            	<div class="horlinefade1">	
		                	&nbsp;
		                </div>
		            	<table>
		                	<tr>
		                    	<td>
		                        	<img src="../../images/icon_folder.jpg" border="0" />
		                        </td>
		                        <td>
		                        	<span class="textstyle3"><?php echo $this->_tpl_vars['description']; ?>
</span>
		                        </td>
		                    </tr>
		                </table>
		                <div class="horlinefade1">	
		                	&nbsp;
		                </div>
		            </td>
		        </tr>
		        <tr>
		        	<td class="table5_td1">
		            	Change your password
		            </td>
		        </tr>
		        <tr>
	        	<td>
	            	<div class="tablecon1">
	                    <table class="table4" cellspacing="0">
	                        <tr>
	                            <td class="table4_td1" colspan="2">
	                                <span class="textstyle1">Profile Update</span>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td3a" colspan="2">
	                        		<div class="horlinefade1">	
	                					&nbsp;
	               					</div>
	                                <table>
	                                	<tr>
	                                    	<td>
	                                			<span class="textstyle10">Change Profile</span>
	                                		</td>
	                                	</tr>
	                                </table>
	                                <div class="horlinefade1">	
	                					&nbsp;
	               					</div>
	                            </td>
	                        </tr>
	                        <tr>	
		        	<td>
<table cellpadding="0" cellspacing="0" class="table4">
<tr>
    <td class="table4_td3a">Username</td>
    <td class="table4_td3a"><?php echo smarty_function_form_text(array('name' => 'username','size' => '20'), $this);?>
</td>
</tr>
<tr>
    <td class="table4_td3a">Password</td>
    <td class="table4_td3a"><?php $this->_tag_stack[] = array('link_to', array('action' => "change-password",'id' => $this->_tpl_vars['__PARAMS']['id'])); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>change password<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
</tr>
<tr><td style="height:10px">&nbsp;</td></tr>
<tr>
    <td class="table4_td3a">Firstname</td>
    <td class="table4_td3a"><?php echo smarty_function_form_text(array('name' => 'firstname','size' => '40'), $this);?>
</td>
</tr>
<tr>
    <td class="table4_td3a">Lastname</td>
    <td class="table4_td3a"><?php echo smarty_function_form_text(array('name' => 'lastname','size' => '40'), $this);?>
</td>
</tr>
<tr>
    <td class="table4_td3a">Email</td>
    <td class="table4_td3a"><?php echo smarty_function_form_text(array('name' => 'email','size' => '40'), $this);?>
</td>
</tr>
<tr>
    <td class="table4_td3a">Role</td>
    <td class="table4_td3a"><?php echo smarty_function_form_select(array('name' => 'role','options' => $this->_tpl_vars['roles'],'blank_text' => "-- select --"), $this);?>
</td>
</tr>
<tr>
    <td class="table4_td3a">&nbsp;</td>
    <td class="table4_td3a">
    <?php echo smarty_function_form_submit(array('name' => 'submit','class' => 'botton','value' => '   Update   ','no_div' => true), $this);?>
 or 
    <?php $this->_tag_stack[] = array('link_to', array('href' => "/admin/users/list",'confirm' => "Are you sure you want to cancel?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </td>
</tr>
</table>

						</td>
						</tr>
							
						</table>
	                </div>
	            </td>
	        </tr>
	    </table>
	</div>
	<div class="midline_con_bot">
		&nbsp;
	</div>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>