<?php /* Smarty version 2.6.19, created on 2008-10-20 08:58:53
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cadmin%5Cviews%5Cscripts%5Croles%5Cview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'flash', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\view.tpl', 1, false),array('function', 'form_button', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\view.tpl', 97, false),array('modifier', 'capitalize', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\view.tpl', 76, false),array('modifier', 'default', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\view.tpl', 76, false),)), $this); ?>
<?php echo smarty_function_flash(array(), $this);?>

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
	                        	<img src="../../../../images/icon_folder.jpg" border="0" />
	                        </td>
	                        <td>
	                        	<span class="textstyle3">View Role</span>
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
	            	Detailed information regarding your review on this page is explained below.
	            </td>
	        </tr>
	        <tr>
	        	<td>
	            	<div class="tablecon1">
	                    <table class="table4" cellspacing="0">
	                        <tr>
	                            <td class="table4_td1" colspan="2">
	                                <span class="textstyle1">Role Information</span>
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
	                                			<span class="textstyle10">Role</span>
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
									<table>
										 <tr>
				                            <td class="table4_td3a">
				                            	Role
				                            </td>
				                            <td class="table4_td3a">
				                                <span class="textstyle4"><?php echo $this->_tpl_vars['role']['name']; ?>
</span>
				                            </td>
				                        </tr>
				                        <tr>
				                            <td class="table4_td3a">
				                            	Description
				                            </td>
				                            <td class="table4_td3a">
				                                <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['role']['description'])) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '-') : smarty_modifier_default($_tmp, '-')); ?>

				                            </td>
				                        </tr>
				                        <tr>
				                            <td class="table4_td3a">
				                            	Inherited From
				                            </td>
				                            <td class="table4_td3a">
				                                <?php echo ((is_array($_tmp=@$this->_tpl_vars['role']['parents'])) ? $this->_run_mod_handler('default', true, $_tmp, '-') : smarty_modifier_default($_tmp, '-')); ?>

				                            </td>
				                        </tr>
				                        <tr>
				                            <td class="table4_td3a">
				                            	Home Location
				                            </td>
				                            <td class="table4_td3a">
				                                <?php echo ((is_array($_tmp=@$this->_tpl_vars['role']['home_location'])) ? $this->_run_mod_handler('default', true, $_tmp, '-') : smarty_modifier_default($_tmp, '-')); ?>

				                               
				                            </td>
				                        </tr>
				                        <tr>
				                        	<td colspan="2"> <?php echo smarty_function_form_button(array('name' => 'back','value' => 'Back','class' => 'botton','location' => "/admin/roles/list"), $this);?>
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