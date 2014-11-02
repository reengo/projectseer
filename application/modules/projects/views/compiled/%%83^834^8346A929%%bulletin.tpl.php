<?php /* Smarty version 2.6.19, created on 2008-11-24 03:53:50
         compiled from scripts/index/bulletin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'scripts/index/bulletin.tpl', 49, false),array('function', 'paginate_prev', 'scripts/index/bulletin.tpl', 68, false),array('function', 'paginate_middle', 'scripts/index/bulletin.tpl', 68, false),array('function', 'paginate_next', 'scripts/index/bulletin.tpl', 68, false),)), $this); ?>
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
                            	<img src="images/icon_warning.jpg" border="0" />
                            </td>
                            <td>
                            	<span class="textstyle3">ANNOUNCEMENTS</span>
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
                	Administrative announcements and other system generated notices
                </td>
            </tr>
            <tr>
            	<td>
                	<div class="tablecon1">
                        <table class="table4" cellspacing="0">
                            <tr>
                                <td class="table4_td1" width="100">
                                    <span class="textstyle1">Posted By</span>
                                </td>
                                <td class="table4_td1">
                                    <span class="textstyle1">Message</span>
                                </td>
                                <td class="table4_td1">
                                    <span class="textstyle1">Date</span>
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
                                	<?php echo $this->_tpl_vars['item']['name']; ?>

                                </td>
                                <td class="table4_td2">
                                    <?php echo $this->_tpl_vars['item']['message']; ?>

                                </td>
                                <td class="table4_td2a">
                                	<?php echo $this->_tpl_vars['item']['date']; ?>

                                </td>
                            </tr>
                            <?php endforeach; else: ?>
							<tr class="table4_td2">
							    <td colspan="8" align="center">No Announcements were found.</td>
							</tr>
							<?php endif; unset($_from); ?>
							<tr>
								<td colspan="8">
							<?php if ($this->_tpl_vars['paginate']['page_total'] > 1): ?>
							<span class="textstyle7">Page <?php echo smarty_function_paginate_prev(array(), $this);?>
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
    </div>
    <div class="midline_con_bot">
    	&nbsp;
    </div>
</div>