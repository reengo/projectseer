<?php /* Smarty version 2.6.19, created on 2008-11-21 03:21:18
         compiled from /home/rex2chek/public_html/application/modules/admin/views/scripts/roles/view-add-resource.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'flash', '/home/rex2chek/public_html/application/modules/admin/views/scripts/roles/view-add-resource.tpl', 1, false),array('function', 'form_button', '/home/rex2chek/public_html/application/modules/admin/views/scripts/roles/view-add-resource.tpl', 33, false),array('function', 'cycle', '/home/rex2chek/public_html/application/modules/admin/views/scripts/roles/view-add-resource.tpl', 42, false),array('function', 'paginate_prev', '/home/rex2chek/public_html/application/modules/admin/views/scripts/roles/view-add-resource.tpl', 74, false),array('function', 'paginate_middle', '/home/rex2chek/public_html/application/modules/admin/views/scripts/roles/view-add-resource.tpl', 74, false),array('function', 'paginate_next', '/home/rex2chek/public_html/application/modules/admin/views/scripts/roles/view-add-resource.tpl', 74, false),array('modifier', 'truncate', '/home/rex2chek/public_html/application/modules/admin/views/scripts/roles/view-add-resource.tpl', 48, false),array('block', 'link_to', '/home/rex2chek/public_html/application/modules/admin/views/scripts/roles/view-add-resource.tpl', 61, false),)), $this); ?>
<?php echo smarty_function_flash(array(), $this);?>


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
                	<td align="right">
						<?php $this->assign('id', $this->_tpl_vars['__PARAMS']['id']); ?>
						<?php echo smarty_function_form_button(array('name' => 'add','value' => '  add resource  ','class' => 'botton','location' => "/admin/roles/add-resource/id/".($this->_tpl_vars['id']),'no_div' => true), $this);?>
<?php echo smarty_function_form_button(array('name' => 'back','value' => '  back  ','class' => 'botton','location' => "/admin/roles/list",'no_div' => true), $this);?>
<br><br>
						<div class="tablecon1">
						<table cellpadding="0" cellspacing="1" class="table4">
						<tr>
						    <td class="table4_td1" width="20%"><span class="textstyle1">resources</span></td>
						    <td class="table4_td1" width="55%"><span class="textstyle1">privileges</span></td>
						    <td class="table4_td1" width="15%"><span class="textstyle1">actions</span></td>
						</tr>
						<?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
						<tr id="resource-<?php echo $this->_tpl_vars['item']['id']; ?>
" class="table4_td2row<?php echo smarty_function_cycle(array('values' => "1,2"), $this);?>
">
						    <td class="table4_td2"><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
						    <td class="table4_td2">
						        <?php if ($this->_tpl_vars['item']['privilege']): ?>
						            <?php if (strlen ( $this->_tpl_vars['item']['privilege'] ) > 60): ?>
						            <div id="privilege-truncated-<?php echo $this->_tpl_vars['item']['id']; ?>
">
						                <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['privilege'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 60) : smarty_modifier_truncate($_tmp, 60)); ?>
 [ <a href="javascript:;" onclick="$('privilege-truncated-<?php echo $this->_tpl_vars['item']['id']; ?>
').hide(); $('privilege-<?php echo $this->_tpl_vars['item']['id']; ?>
').show(); return false;">expand</a> ]
						            </div>
						            <div id="privilege-<?php echo $this->_tpl_vars['item']['id']; ?>
" style="display:none;">
						                <?php echo $this->_tpl_vars['item']['privilege']; ?>
 [ <a href="javascript:;" onclick="$('privilege-truncated-<?php echo $this->_tpl_vars['item']['id']; ?>
').show(); $('privilege-<?php echo $this->_tpl_vars['item']['id']; ?>
').hide(); return false;">close</a> ]
						            </div>
						            <?php else: ?>
						                <?php echo $this->_tpl_vars['item']['privilege']; ?>

						            <?php endif; ?>
						        <?php else: ?>
						            -- NO ACCESS --
						        <?php endif; ?>
						    </td>
						    <td class="table4_td2">
						    <?php $this->_tag_stack[] = array('link_to', array('action' => "edit-resource",'id' => $this->_tpl_vars['item']['id'])); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> | <?php $this->_tag_stack[] = array('link_to', array('action' => "delete-resource",'id' => $this->_tpl_vars['item']['id'],'confirm' => "Are you sure you want to delete this resource?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>delete<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						    </td>
						</tr>
						<?php endforeach; else: ?>
						<tr>
						    <td class="table4_td2" colspan="3" align="center">-- NO ACCESS TO ALL RESOURCES --</td>
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
						</table>
						</td>
                </tr>
            </table>
        </div>
        <div class="midline_con_bot">
        	&nbsp;
        </div>
   
</div>