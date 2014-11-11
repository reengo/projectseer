<?php /* Smarty version 2.6.19, created on 2008-11-21 03:23:43
         compiled from /home/rex2chek/public_html/application/modules/admin/views/scripts/roles/edit-resource.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'flash', '/home/rex2chek/public_html/application/modules/admin/views/scripts/roles/edit-resource.tpl', 1, false),array('function', 'form_checkbox', '/home/rex2chek/public_html/application/modules/admin/views/scripts/roles/edit-resource.tpl', 43, false),array('function', 'form_hidden', '/home/rex2chek/public_html/application/modules/admin/views/scripts/roles/edit-resource.tpl', 53, false),array('function', 'form_submit', '/home/rex2chek/public_html/application/modules/admin/views/scripts/roles/edit-resource.tpl', 54, false),array('block', 'form', '/home/rex2chek/public_html/application/modules/admin/views/scripts/roles/edit-resource.tpl', 2, false),array('block', 'link_to', '/home/rex2chek/public_html/application/modules/admin/views/scripts/roles/edit-resource.tpl', 55, false),)), $this); ?>
<?php echo smarty_function_flash(array(), $this);?>

<?php $this->_tag_stack[] = array('form', array()); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div class="midline_mid">
    <div class="midline_con">
        <div class="midline_con_top">	&nbsp;
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
                                	<img src="../../../../images/icon_warning.jpg" border="0" />
                                </td>
                                <td>
                                	<span class="textstyle3"><?php echo $this->_tpl_vars['description']; ?>
</span><br />
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
						<table cellpadding="0" cellspacing="0" width="100%" class="table4">
						<tr>
						    <td width="125" class="table4_td2">Resource name:</td>
						    <td class="table4_td2">
						    <span class="textstyle4""><?php echo $this->_tpl_vars['resource']['name']; ?>
</span>
						    </td>
						</tr>
						<tr>
						    <td class="table4_td2" valign="top">Privileges:</td>
						    <td class="table4_td2">
						    <?php $_from = $this->_tpl_vars['privileges']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['privilege_name'] => $this->_tpl_vars['item']):
?>
						        <?php echo smarty_function_form_checkbox(array('name' => "privilege[".($this->_tpl_vars['privilege_name'])."]",'text' => $this->_tpl_vars['item'],'value' => $this->_tpl_vars['privilege_name']), $this);?>

						    <?php endforeach; endif; unset($_from); ?>
						    </td>
						</tr>
						<tr>
							<td>
						
						<br>
						<label>&nbsp;</label>
						<?php $this->assign('role_id', $this->_tpl_vars['resource']['role_id']); ?>
						<?php echo smarty_function_form_hidden(array('name' => 'id'), $this);?>

						<?php echo smarty_function_form_submit(array('name' => 'submit','class' => 'botton','value' => '   Update   ','no_div' => true), $this);?>
 or 
						<?php $this->_tag_stack[] = array('link_to', array('href' => "/admin/roles/view-add-resource/id/".($this->_tpl_vars['role_id']),'confirm' => "Are you sure you want to cancel?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
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