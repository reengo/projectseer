<?php /* Smarty version 2.6.19, created on 2008-10-20 07:00:59
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cadmin%5Cviews%5Cscripts%5Cusers%5Cview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'flash', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\view.tpl', 1, false),array('function', 'form_button', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\view.tpl', 64, false),array('modifier', 'capitalize', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\view.tpl', 61, false),array('modifier', 'default', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\view.tpl', 61, false),)), $this); ?>
<?php echo smarty_function_flash(array(), $this);?>



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
		                        	<img src="../../../../images/icon_folder.jpg" border="0" />
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
		            	Detailed user information
		            </td>
		        </tr>
		        <tr>
		        	<td>
						<table cellpadding="0" cellspacing="0" class="table4" width="100%">
						<tr>
							<td class="table1_td1">
								<table class="table2" cellspadding="0">
			                    	<tr>
			                        	<td class="table2_td1">
			                            	<img src="../../../../images/userpic.jpg" border="0" />
			                            </td>
			                        </tr>
			                        
			                        <tr>
			                        	<td class="table2_td2">
			                            	<span class="textstyle2"><?php echo $this->_tpl_vars['user']['firstname']; ?>
 <?php echo $this->_tpl_vars['user']['lastname']; ?>
</span><br />
			                                <span class="textstyle1"><?php echo $this->_tpl_vars['user']['position']; ?>
</span><br />
			                                <span class="textstyle1">QAT Projects : 0</span><br />
			                            </td>
			                        </tr>			                        
			                    </table>
							</td>						
						    <td valign="top">
						    <div class="table3_td1">
						        <p><b><label>Username</label>: <span class="textstyle4"><?php echo $this->_tpl_vars['user']['username']; ?>
</span></b></p>
						        <p><label>Role</label>: <?php echo $this->_tpl_vars['user']['role']; ?>
</p>
						        <p><label>Firstname</label>: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['user']['firstname'])) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '-') : smarty_modifier_default($_tmp, '-')); ?>
</p>
						        <p><label>Lastname</label>: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['user']['lastname'])) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '-') : smarty_modifier_default($_tmp, '-')); ?>
</p>
						        <p><label>Email</label>: <?php echo ((is_array($_tmp=@$this->_tpl_vars['user']['email'])) ? $this->_run_mod_handler('default', true, $_tmp, '-') : smarty_modifier_default($_tmp, '-')); ?>
</p>
						        <?php echo smarty_function_form_button(array('name' => 'back','value' => 'Back','class' => 'botton','location' => "/admin/users/list"), $this);?>

						    </div
						    </td>
						</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
		<div class="midline_con_bot">
			&nbsp;
		</div>
	</div>
</div>