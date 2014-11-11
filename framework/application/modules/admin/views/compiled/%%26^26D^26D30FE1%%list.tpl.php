<?php /* Smarty version 2.6.19, created on 2008-10-21 06:13:19
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cadmin%5Cviews%5Cscripts%5Croles%5Clist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'flash', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\list.tpl', 21, false),array('function', 'cycle', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\list.tpl', 79, false),array('function', 'display_roleinherited', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\list.tpl', 87, false),array('function', 'paginate_prev', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\list.tpl', 106, false),array('function', 'paginate_middle', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\list.tpl', 106, false),array('function', 'paginate_next', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\list.tpl', 106, false),array('function', 'form_button', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\list.tpl', 116, false),array('block', 'link_to', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\list.tpl', 25, false),array('modifier', 'capitalize', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\list.tpl', 81, false),array('modifier', 'default', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\list.tpl', 81, false),)), $this); ?>
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

<div class="midline_con">
	<div class="midline_con_top2">
		<div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "admin/settings")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>General<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
    	<div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "admin/settings/notice")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Notifications<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        
        <div class="tab1">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "#")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Roles<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        <div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "admin/plugins/list")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Plugins<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
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
		                        	<span class="textstyle3">Roles</span>
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
					<div class="tablecon1">
					<table border="0" cellpadding="0" cellspacing="1" class="table4">
					<tr>
					    <td class="table4_td1" width="20%"><span class="textstyle1">roles</span></td>
					    <td class="table4_td1" width="30%"><span class="textstyle1">desription</span></td>
					    <td class="table4_td1" width="20%"><span class="textstyle1">inherited from</span></td>
					    <td class="table4_td1" width="15%"><span class="textstyle1">resources assigned</span></td>
					    <td class="table4_td1" width="15%"><span class="textstyle1">actions</span></td>
					</tr>
					<?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
					<?php $this->assign('id', $this->_tpl_vars['item']['id']); ?>
					<tr id="role-<?php echo $this->_tpl_vars['item']['id']; ?>
" class="table4_td2row<?php echo smarty_function_cycle(array('values' => "1,2"), $this);?>
">
					    <td class="table4_td2"><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
					    <td class="table4_td2"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['description'])) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '-') : smarty_modifier_default($_tmp, '-')); ?>
</td>
					    <?php if ($this->_tpl_vars['item']['name'] == 'admin'): ?>
					        <td class="table4_td2">-</td>
					        <td class="table4_td2">UNLIMITED ACCESS</td>
					        <td class="table4_td2"><?php $this->_tag_stack[] = array('link_to', array('action' => 'view','id' => $this->_tpl_vars['item']['id'])); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>view<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
					    <?php else: ?>
					        <td class="table4_td2"><?php echo smarty_function_display_roleinherited(array('parents' => $this->_tpl_vars['item']['inherited_from']), $this);?>
</td>
					        <td class="table4_td2"><?php $this->_tag_stack[] = array('link_to', array('href' => "/admin/roles/view-add-resource/id/".($this->_tpl_vars['id']))); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>view/add resources<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
					        <td class="table4_td2">
					        <?php $this->_tag_stack[] = array('link_to', array('action' => 'view','id' => $this->_tpl_vars['item']['id'])); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>view<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> |
					        <?php $this->_tag_stack[] = array('link_to', array('action' => 'edit','id' => $this->_tpl_vars['item']['id'])); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> |
					        <?php $this->_tag_stack[] = array('link_to', array('action' => 'delete','id' => $this->_tpl_vars['item']['id'],'confirm' => "Are you sure you want to delete this role?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>delete<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					        </td>
					    <?php endif; ?>
					</tr>
					<?php endforeach; else: ?>
					<tr class="row-color2">
					    <td colspan="5" align="center">No Roles were found.</td>
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
					
					</div>
					</div>
		            </td>
		        </tr>
		        <tr>
						    <td class="table4_td2a" align="right">
						    <?php echo smarty_function_form_button(array('name' => 'addrole','value' => '  add role  ','class' => 'botton','no_div' => true,'location' => "/admin/roles/add"), $this);?>

						    </td>
						</tr>
		    </table>
		</div>
		<div class="midline_con_bot">
			&nbsp;
		</div>
	</div>