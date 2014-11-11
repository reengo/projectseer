<?php /* Smarty version 2.6.19, created on 2009-02-04 02:09:09
         compiled from /home/rex2chek/public_html/application/modules/change/views/scripts/index/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'flash', '/home/rex2chek/public_html/application/modules/change/views/scripts/index/index.tpl', 22, false),array('function', 'cycle', '/home/rex2chek/public_html/application/modules/change/views/scripts/index/index.tpl', 85, false),array('function', 'paginate_prev', '/home/rex2chek/public_html/application/modules/change/views/scripts/index/index.tpl', 133, false),array('function', 'paginate_middle', '/home/rex2chek/public_html/application/modules/change/views/scripts/index/index.tpl', 133, false),array('function', 'paginate_next', '/home/rex2chek/public_html/application/modules/change/views/scripts/index/index.tpl', 133, false),array('function', 'form_button', '/home/rex2chek/public_html/application/modules/change/views/scripts/index/index.tpl', 145, false),array('block', 'link_to', '/home/rex2chek/public_html/application/modules/change/views/scripts/index/index.tpl', 108, false),array('modifier', 'lower', '/home/rex2chek/public_html/application/modules/change/views/scripts/index/index.tpl', 112, false),array('modifier', 'strip_tags', '/home/rex2chek/public_html/application/modules/change/views/scripts/index/index.tpl', 112, false),)), $this); ?>
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
                                	<img src="../images/icon_warning.jpg" border="0" />
                                </td>
                                <td>
                                	<span class="textstyle3">CHANGE MANAGEMENT SYSTEM</span>
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
                    	Plug-ins are add-on modules to the REX2Check System enabling selectable enhancements for the REXCheck System and its functionalities. These plugins can be turned off by the administrator on the settings page. 
                    </td>
                </tr>
                <tr>
                	<td>
                    	<div class="tablecon1">
                            <table class="table4" cellspacing="0">
                                <tr>
                                    <td class="table4_td1" width="60">
                                        <span class="textstyle1">Req ID</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Project Name / Summary</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Initiator</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Process Owner</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Date Issued</span>
                                    </td>
                                    <td class="table4_td1" width="60">
                                        <span class="textstyle1">Status</span>
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
                                    	<span class="textstyle3"><?php echo $this->_tpl_vars['item']['request_id']; ?>
</span>
                                    </td>
                                    <td class="table4_td2">
                                    	<span class="textstyle5"><?php echo $this->_tpl_vars['item']['project']; ?>
</span>
                                    	<br />
                                    	<?php echo $this->_tpl_vars['item']['summary']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['initiator']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['owner']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['date_issued']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['status']; ?>

                                    </td>
                                    <td class="table4_td2a">
                                    	<?php $this->_tag_stack[] = array('link_to', array('action' => 'view','id' => $this->_tpl_vars['item']['id'])); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>view<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> |
						       			<?php $this->_tag_stack[] = array('link_to', array('action' => 'edit','id' => $this->_tpl_vars['item']['id'])); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> |
						       			<?php $this->_tag_stack[] = array('link_to', array('action' => 'delete','id' => $this->_tpl_vars['item']['id'],'confirm' => "Are you sure you want to delete this user?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>delete<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						       			<br />
						       			<?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['status'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('strip_tags', true, $_tmp, false) : smarty_modifier_strip_tags($_tmp, false)) == 'pending'): ?>
						       				<?php $this->_tag_stack[] = array('link_to', array('action' => 'eva','id' => $this->_tpl_vars['item']['id'])); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>evaluate<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						       			<?php endif; ?>
						       			<?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['status'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('strip_tags', true, $_tmp, false) : smarty_modifier_strip_tags($_tmp, false)) == 'evaluated'): ?>
						       				<?php $this->_tag_stack[] = array('link_to', array('action' => 'app','id' => $this->_tpl_vars['item']['id'])); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>approve<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						       			<?php endif; ?>
						       			<?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['status'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('strip_tags', true, $_tmp, false) : smarty_modifier_strip_tags($_tmp, false)) == 'approved'): ?>
						       				<?php $this->_tag_stack[] = array('link_to', array('action' => 'confirmed','id' => $this->_tpl_vars['item']['id'])); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>confirm change<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						       			<?php endif; ?>
						        		
                                    </td>
                                </tr>
                                <?php endforeach; else: ?>
								<tr class="table4_td2">
								    <td colspan="9" align="center">No Projects were found.</td>
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
        		<?php echo smarty_function_form_button(array('name' => 'addchange','value' => '  add change request  ','class' => 'botton','no_div' => true,'location' => "/change/index/add"), $this);?>

        	</div>
        </div>
        <div class="midline_con_bot">
        	&nbsp;
        </div>
    </div>
</div>