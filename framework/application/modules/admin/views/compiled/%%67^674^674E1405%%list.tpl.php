<?php /* Smarty version 2.6.19, created on 2008-11-21 04:26:23
         compiled from /home/rex2chek/public_html/application/modules/admin/views/scripts/qat/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'flash', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/list.tpl', 22, false),array('function', 'cycle', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/list.tpl', 121, false),array('function', 'form_checkbox', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/list.tpl', 123, false),array('function', 'paginate_prev', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/list.tpl', 169, false),array('function', 'paginate_middle', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/list.tpl', 169, false),array('function', 'paginate_next', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/list.tpl', 169, false),array('function', 'form_button', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/list.tpl', 181, false),array('block', 'link_to', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/list.tpl', 28, false),)), $this); ?>
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
        <div class="midline_con_top2">			
        	<div class="tab1">
            	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "#")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>QA GRID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </div>
            <div class="tab2">
            	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "admin/projects/viewqat/id/".($this->_tpl_vars['formid']))); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>PROJECT INFO<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </div>
            <div class="tab2">
            	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "admin/qat/report/id/".($this->_tpl_vars['formid']))); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>REPORTS<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
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
                                	<img src="../../../../images/icon_warning.jpg" border="0" />
                                </td>
                                <td>
                                	<span class="textstyle3"><?php echo $this->_tpl_vars['project']['project']; ?>
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
                	<td class="table5_td1">
                		Project Description: <?php echo $this->_tpl_vars['project']['overall_remarks']; ?>
<br /><br />
                		Project Status: <span class="textstyle4"><?php echo $this->_tpl_vars['project']['status']; ?>
</span>
                    </td>
                </tr>
                <tr>
                	<td>
                    	<div class="tablecon1">                    		
                            <table class="table4" cellspacing="0">
                                <tr>
                                    <td colspan="2" class="table4_td1">
                                    	&nbsp;   
                                    </td>
                                    <td class="table4_td1" colspan="4" align="center">                                        
                                        <span class="textstyle1">Front End</span>
                                    </td>
                                    <td class="table4_td1" colspan="4" align="center">                                        
                                        <span class="textstyle1">Backend</span>
                                    </td>
                                     <td class="table4_td1">
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table4_td1">
                                        &nbsp;
                                    </td>
                                    <td class="table4_td1" width="300">
                                        <span class="textstyle1">Page Title</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Layout</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Rollovers</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Animation</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Forms</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Linkage</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Codes</span>
                                    </td>
                                     <td class="table4_td1">
                                        <span class="textstyle1">Action</span>
                                    </td>
                                     <td class="table4_td1">
                                        <span class="textstyle1">Validation</span>
                                    </td>
                                     <td class="table4_td1" width="100">
                                        <span class="textstyle1">Actions</span>
                                    </td>
                                </tr>
                                <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                <?php $this->assign('id', $this->_tpl_vars['item']['id']); ?>
                                <tr id="user-<?php echo $this->_tpl_vars['item']['id']; ?>
" class="table4_td2row<?php echo smarty_function_cycle(array('values' => "1,2"), $this);?>
">
                                	<td class="table4_td2">
                                    	<?php echo smarty_function_form_checkbox(array('checked' => 'no'), $this);?>
 
                                    </td>
                                    <td class="table4_td2">
                                    	<span class="textstyle5"><?php echo $this->_tpl_vars['item']['page']; ?>
</span><br />
                                    	<em><?php echo $this->_tpl_vars['item']['description']; ?>
</em>
                                    	
                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['layout']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['rollover']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['animation']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['forms']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['link']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['source']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['action']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['validation']; ?>

                                    </td>
                                    <td class="table4_td2a">
                                    	<?php $this->_tag_stack[] = array('link_to', array('action' => 'view','id' => $this->_tpl_vars['item']['id'])); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>view<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> |
						       			<?php $this->_tag_stack[] = array('link_to', array('action' => 'edit','id' => $this->_tpl_vars['item']['id'])); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> |
						        		<?php $this->_tag_stack[] = array('link_to', array('action' => 'delete','id' => $this->_tpl_vars['item']['id'],'confirm' => "Are you sure you want to delete this user?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>delete<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                                    </td>
                                </tr>
                                <?php endforeach; else: ?>
								<tr class="table4_td2">
								    <td colspan="11" align="center">No Reviews were found.</td>
								</tr>
								<?php endif; unset($_from); ?>
								<tr>
									<td colspan="11">
								<?php if ($this->_tpl_vars['paginate']['page_total'] > 1): ?>
								
								<p class="textstyle7">Page <?php echo smarty_function_paginate_prev(array(), $this);?>
 <?php echo smarty_function_paginate_middle(array('format' => 'page','link_suffix' => " | ",'prefix' => "",'suffix' => ""), $this);?>
 <?php echo smarty_function_paginate_next(array(), $this);?>
</p>
	
								<?php endif; ?>
									</td>
								</tr>
								
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="spacer1">
        		<?php echo smarty_function_form_button(array('location' => "/admin/qat/add/id/".($this->_tpl_vars['formid']),'name' => 'addreview','value' => '  add review item  ','no_div' => true), $this);?>

        	</div>
        </div>
        <div class="midline_con_bot">
        	&nbsp;
        </div>
    </div>
</div>