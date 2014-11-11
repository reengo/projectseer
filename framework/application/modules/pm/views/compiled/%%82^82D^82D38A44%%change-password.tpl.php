<?php /* Smarty version 2.6.19, created on 2008-10-20 07:29:46
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cadmin%5Cviews%5Cscripts%5Cusers%5Cchange-password.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'flash', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\change-password.tpl', 1, false),array('function', 'form_password', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\change-password.tpl', 72, false),array('function', 'form_submit', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\change-password.tpl', 81, false),array('block', 'form', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\change-password.tpl', 3, false),array('block', 'link_to', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\change-password.tpl', 83, false),)), $this); ?>
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
	                                			<span class="textstyle10">Change Password</span>
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
						<table class="table-list1" cellpadding="0" cellspacing="0">
						
							<tr>
							    <td class="table4_td3a">Username</td>
							    <td class="table4_td3a"><?php echo $this->_tpl_vars['user']['username']; ?>
</td>
							</tr>
							<tr>
							    <td class="table4_td3a">New Password</td>
							    <td class="table4_td3a"><?php echo smarty_function_form_password(array('name' => 'new_password','size' => '20'), $this);?>
</td>
							</tr>
							<tr>
							    <td class="table4_td3a">Confirm Password</td>
							    <td class="table4_td3a"><?php echo smarty_function_form_password(array('name' => 'confirm_password','size' => '20'), $this);?>
</td>
							</tr>
							<tr>
							    <td class="table4_td3a">&nbsp;</td>
							    <td class="table4_td3a">
							    <?php echo smarty_function_form_submit(array('name' => 'submit','class' => 'botton','value' => '   Submit   ','no_div' => true), $this);?>
 or 
							    <?php if ($this->_tpl_vars['user']['username'] == 'admin'): ?>
							        <?php $this->_tag_stack[] = array('link_to', array('href' => "/admin/users/list",'confirm' => "Are you sure you want to cancel?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							    <?php else: ?>
							        <?php $this->assign('user_id', $this->_tpl_vars['user']['id']); ?>
							        <?php $this->_tag_stack[] = array('link_to', array('href' => "/admin/users/edit/id/".($this->_tpl_vars['user_id']),'confirm' => "Are you sure you want to cancel?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							    <?php endif; ?>
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