<?php /* Smarty version 2.6.19, created on 2008-10-20 09:23:32
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cadmin%5Cviews%5Cscripts%5Croles%5Cadd-resource.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'form', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\add-resource.tpl', 1, false),array('block', 'link_to', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\add-resource.tpl', 90, false),array('function', 'form_select', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\add-resource.tpl', 65, false),array('function', 'form_checkbox', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\add-resource.tpl', 73, false),array('function', 'form_hidden', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\add-resource.tpl', 88, false),array('function', 'form_submit', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\add-resource.tpl', 89, false),)), $this); ?>
<?php $this->_tag_stack[] = array('form', array()); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
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
<?php echo $this->_tpl_vars['project']['project']; ?>
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
            	Management of global settings and configuration.
            </td>
        </tr>
        <tr>
        	<td>
            	<div class="tablecon1">
                    <table class="table4" cellspacing="0">
                        <tr>
                            <td class="table4_td1" colspan="2">
                                <span class="textstyle1">General Information</span>
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
                                			<span class="textstyle10">Project Information</span>
                                		</td>
                                	</tr>
                                </table>
                                <div class="horlinefade1">	
                					&nbsp;
               					</div>
                            </td>
                        </tr>
<?php $this->assign('id', $this->_tpl_vars['__PARAMS']['id']); ?>
    
<table cellpadding="0" cellspacing="0" width="100%" class="table4">
<tr>
    <td class="table4_td2a" width="150">Resources:</td>
    <td class="table4_td2a">
    <?php echo smarty_function_form_select(array('name' => 'resource_name','options' => $this->_tpl_vars['resources'],'blank_text' => "-- select --",'location' => "/admin/roles/add-resource/id/".($this->_tpl_vars['id'])."/resource/",'redirect_if_value' => true), $this);?>

    </td>
</tr>
<?php if (is_array ( $this->_tpl_vars['privileges'] ) && count ( $this->_tpl_vars['privileges'] )): ?>
<tr>
    <td class="table4_td2a" valign="top">Priviledges:</td>
    <td class="table4_td2a">
    <?php $_from = $this->_tpl_vars['privileges']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['privilege_name'] => $this->_tpl_vars['item']):
?>
        <?php echo smarty_function_form_checkbox(array('name' => "privilege[".($this->_tpl_vars['privilege_name'])."]",'text' => $this->_tpl_vars['item'],'value' => $this->_tpl_vars['privilege_name']), $this);?>

    <?php endforeach; endif; unset($_from); ?>
    </td>
</tr>
<?php endif; ?>
</table>

<br>
<label>&nbsp;</label>

</table>
            </td>
        </tr>
    </table>
    <div class="spacer1">
		<?php echo smarty_function_form_hidden(array('name' => 'role_id'), $this);?>

		<?php echo smarty_function_form_submit(array('name' => 'submit','class' => 'botton','value' => '   Add   ','no_div' => true), $this);?>
 or 
		<?php $this->_tag_stack[] = array('link_to', array('href' => "/admin/roles/view-add-resource/id/".($this->_tpl_vars['id']),'confirm' => "Are you sure you want to cancel?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	</div>
</div>
 <div class="midline_con_bot">
                	&nbsp;
                </div>
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>