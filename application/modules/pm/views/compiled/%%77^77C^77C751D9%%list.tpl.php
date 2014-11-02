<?php /* Smarty version 2.6.19, created on 2008-10-24 10:38:12
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cadmin%5Cviews%5Cscripts%5Cusers%5Clist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'flash', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\list.tpl', 23, false),array('function', 'form_text', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\list.tpl', 64, false),array('function', 'form_submit', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\list.tpl', 65, false),array('function', 'form_button', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\list.tpl', 69, false),array('function', 'cycle', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\list.tpl', 89, false),array('function', 'paginate_prev', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\list.tpl', 118, false),array('function', 'paginate_middle', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\list.tpl', 118, false),array('function', 'paginate_next', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\list.tpl', 118, false),array('block', 'form', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\list.tpl', 63, false),array('block', 'link_to', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\list.tpl', 97, false),array('modifier', 'default', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\users\\list.tpl', 94, false),)), $this); ?>
<?php echo '
<script language="javascript">
function effectOnFocus(dom)
{
    dom.setStyle({color:\'#000000\'});
    if (dom.value == \'search ...\') {
        dom.value = \'\';
    }
}

function effectOnBlur(dom)
{
    dom.setStyle({color:\'#707070\'});
    if (dom.value == \'\') {
        dom.value = \'search ...\';
    }
}
</script>
'; ?>




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
		            	Tasklists are revision tickets set from QAT results made by the QAT officers. Project Managers' role is to review, approve and distribute these tasks to the developer and confirm the revisions made. Project Managers are also the only usergroup that can close a QAT tasklist.
		            </td>
		        </tr>
		        <tr>
		        	<td>
		        		<table width="100%">
		        			<tr>
					        	<td class="table5_td1">
					            	<?php $this->_tag_stack[] = array('form', array('method' => 'get')); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
									<?php echo smarty_function_form_text(array('name' => 'search','value' => "search ...",'size' => '30','no_div' => true,'onfocus' => "effectOnFocus(this)",'onblur' => "effectOnBlur(this);",'style' => "color:#707070"), $this);?>

									<?php echo smarty_function_form_submit(array('name' => 'submitsearch','value' => 'search','class' => 'botton','no_div' => true), $this);?>

									<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					            </td>
					            <td align="right">
								<?php echo smarty_function_form_button(array('name' => 'adduser','value' => '  add user  ','class' => 'botton','no_div' => true,'location' => "/admin/users/add"), $this);?>

								</td>
							</tr>
						</table>
					</td>
		        </tr>
		        <tr>
		        	<td>
		            	<div class="tablecon1">
						<table class="table4" cellspacing="0">
						<tr>
							<td class="table4_td1" width="60" align="center"><span class="textstyle1">Avatar</span></td>
						    
						    <td class="table4_td1"><span class="textstyle1">Name</span></td>
						    <td class="table4_td1"><span class="textstyle1">Email</span></td>
						    <td class="table4_td1"><span class="textstyle1">Role</span></td>
						    <td class="table4_td1" width="100"><span class="textstyle1">Actions</span></td>
						</tr>
						<?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
						<?php $this->assign('id', $this->_tpl_vars['item']['id']); ?>
						<tr id="user-<?php echo $this->_tpl_vars['item']['id']; ?>
" class="table4_td2row<?php echo smarty_function_cycle(array('values' => "1,2"), $this);?>
">
							<td class="table4_td2"><img src="../../images/userpic.jpg" width="50" height="50" /></td>
						    
						    <td class="table4_td2"><?php echo $this->_tpl_vars['item']['firstname']; ?>
 <?php echo $this->_tpl_vars['item']['lastname']; ?>
</td>
						    <td class="table4_td2"><?php echo $this->_tpl_vars['item']['email']; ?>
</td>
						    <td class="table4_td2"><span class="textstyle5"><?php echo ((is_array($_tmp=@$this->_tpl_vars['item']['role'])) ? $this->_run_mod_handler('default', true, $_tmp, '-') : smarty_modifier_default($_tmp, '-')); ?>
</span></td>
						    <?php if ($this->_tpl_vars['item']['username'] == 'admin'): ?>
						        <td class="table4_td2">
						        <?php $this->_tag_stack[] = array('link_to', array('action' => 'view','id' => $this->_tpl_vars['item']['id'])); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>view<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> |
						        <?php $this->_tag_stack[] = array('link_to', array('action' => "change-password",'id' => $this->_tpl_vars['item']['id'])); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>change password<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						        </td>
						    <?php else: ?>
						        <td class="table4_td2">
						        <?php $this->_tag_stack[] = array('link_to', array('action' => 'view','id' => $this->_tpl_vars['item']['id'])); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>view<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> |
						        <?php $this->_tag_stack[] = array('link_to', array('action' => 'edit','id' => $this->_tpl_vars['item']['id'])); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> |
						        <?php $this->_tag_stack[] = array('link_to', array('action' => 'delete','id' => $this->_tpl_vars['item']['id'],'confirm' => "Are you sure you want to delete this user?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>delete<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						        </td>
						    <?php endif; ?>
						</tr>
						<?php endforeach; else: ?>
						<tr class="row-color2">
						    <td colspan="5" align="center">No Users were found.</td>
						</tr>
						<?php endif; unset($_from); ?>
						</table>
				
						<?php if ($this->_tpl_vars['paginate']['page_total'] > 1): ?>
						<div class="list-control">
						    <br>
							<p>Page <?php echo smarty_function_paginate_prev(array(), $this);?>
 <?php echo smarty_function_paginate_middle(array('format' => 'page','link_suffix' => " | ",'prefix' => "",'suffix' => ""), $this);?>
 <?php echo smarty_function_paginate_next(array(), $this);?>
</p>
						</div>
						<?php endif; ?>
						</td>
		            </td>
		        </tr>
		    </table>
		</div>
		<div class="midline_con_bot">
			&nbsp;
		</div>
	</div>
</div>