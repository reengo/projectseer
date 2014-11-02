<?php /* Smarty version 2.6.19, created on 2008-10-27 03:43:58
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cpm%5Cviews%5Cscripts%5Cprojects%5Clist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'flash', 'C:\\xampp\\htdocs\\check\\application\\modules\\pm\\views\\scripts\\projects\\list.tpl', 22, false),array('function', 'cycle', 'C:\\xampp\\htdocs\\check\\application\\modules\\pm\\views\\scripts\\projects\\list.tpl', 85, false),array('function', 'paginate_prev', 'C:\\xampp\\htdocs\\check\\application\\modules\\pm\\views\\scripts\\projects\\list.tpl', 121, false),array('function', 'paginate_middle', 'C:\\xampp\\htdocs\\check\\application\\modules\\pm\\views\\scripts\\projects\\list.tpl', 121, false),array('function', 'paginate_next', 'C:\\xampp\\htdocs\\check\\application\\modules\\pm\\views\\scripts\\projects\\list.tpl', 121, false),array('function', 'form_button', 'C:\\xampp\\htdocs\\check\\application\\modules\\pm\\views\\scripts\\projects\\list.tpl', 133, false),array('block', 'link_to', 'C:\\xampp\\htdocs\\check\\application\\modules\\pm\\views\\scripts\\projects\\list.tpl', 107, false),)), $this); ?>
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
                                	<img src="../../images/icon_warning.jpg" border="0" />
                                </td>
                                <td>
                                	<span class="textstyle3">QA PROJECTS</span>
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
                    	Quality Assurance Testing (QAT) forms display the results of the quality assurance testing officer, below is a list of QAT review under your supervision. Please be reminded that only the Project Manager can add projects for review.
                    </td>
                </tr>
                <tr>
                	<td>
                    	<div class="tablecon1">
                            <table class="table4" cellspacing="0">
                                <tr>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Project Name</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Project Manager</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Project Developer</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Review Date</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Errors</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">QAT Status</span>
                                    </td>
                                    <td class="table4_td1" width="150">
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
                                    	<span class="textstyle5"><?php echo $this->_tpl_vars['item']['project']; ?>
</span><br />
                                    	<em><?php echo $this->_tpl_vars['item']['overall_remarks']; ?>
</em>
                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['project_manager']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['project_developer']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['review_date']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['revisions']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['status']; ?>

                                    </td>
                                    <td class="table4_td2a">
                                    	<?php $this->_tag_stack[] = array('link_to', array('controller' => 'qat','action' => 'report','id' => $this->_tpl_vars['item']['id'])); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>review report<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> |
						       			<?php $this->_tag_stack[] = array('link_to', array('action' => 'edit','id' => $this->_tpl_vars['item']['id'])); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> |
						        		<?php $this->_tag_stack[] = array('link_to', array('action' => 'delete','id' => $this->_tpl_vars['item']['id'],'confirm' => "Are you sure you want to delete this user?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>delete<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                                    </td>
                                </tr>
                                <?php endforeach; else: ?>
								<tr class="table4_td2">
								    <td colspan="8" align="center">No Projects were found.</td>
								</tr>
								<?php endif; unset($_from); ?>
								<tr>
									<td colspan="8">
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
        		<?php echo smarty_function_form_button(array('name' => 'addproject','value' => '  add project  ','class' => 'botton','no_div' => true,'location' => "/admin/projects/add"), $this);?>

        	</div>
        </div>
        <div class="midline_con_bot">
        	&nbsp;
        </div>
    </div>
</div>