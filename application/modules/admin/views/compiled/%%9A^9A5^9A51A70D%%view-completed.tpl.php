<?php /* Smarty version 2.6.19, created on 2008-12-08 01:10:40
         compiled from /home/rex2chek/public_html/application/modules/admin/views/scripts/tickets/view-completed.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'link_to', '/home/rex2chek/public_html/application/modules/admin/views/scripts/tickets/view-completed.tpl', 5, false),array('function', 'cycle', '/home/rex2chek/public_html/application/modules/admin/views/scripts/tickets/view-completed.tpl', 68, false),)), $this); ?>
<div class="midline_mid">
    <div class="midline_con">
    	<div class="midline_con_top2">
		<div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "admin/tickets/view/id/".($this->_tpl_vars['formid']))); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>All<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
    	<div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "admin/tickets/view-pending/id/".($this->_tpl_vars['formid']))); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Pending<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        
        <div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "admin/tickets/view-revised/id/".($this->_tpl_vars['formid']))); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Revised<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        <div class="tab1">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "#")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Completed<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
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
		                        	<img src="../../../../images/icon_folder.jpg" border="0" />
		                        </td>
		                        <td>
		                        	<span class="textstyle3">Completed Tickets for <?php echo $this->_tpl_vars['project']['project']; ?>
 Project</span>
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
		                    <table class="table4" cellspacing="0">
		                        <tr>
		                            <td class="table4_td1" width="50">
		                                <span class="textstyle1">Ticket ID</span>
		                            </td>
		                            <td class="table4_td1">
		                                <span class="textstyle1">Description</span>
		                            </td>
		                            <td class="table4_td1" width="70">
		                                <span class="textstyle1">Date</span>
		                            </td>
		                            <td class="table4_td1">
		                                <span class="textstyle1">Priority</span>
		                            </td>
		                            <td class="table4_td1">
		                                <span class="textstyle1">Assignee</span>
		                            </td>
		                        </tr>
		                        <?php $_from = ($this->_tpl_vars['results']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		                        <?php $this->assign('id', $this->_tpl_vars['item']['id']); ?>
		                        <tr id="user-<?php echo $this->_tpl_vars['item']['id']; ?>
" class="table4_td2row<?php echo smarty_function_cycle(array('values' => "1,2"), $this);?>
">
		                        	<td class="table4_td2">
		                            	<span class="textstyle3"><?php echo $this->_tpl_vars['item']['id']; ?>
</span>
		                            </td>
		                            <td class="table4_td2">
		                            	<span class="textstyle5"><?php echo $this->_tpl_vars['item']['message']; ?>
</span><br />
		                            	<em><?php echo $this->_tpl_vars['item']['instructions']; ?>
</em>
		                            </td>
		                            <td class="table4_td2">
		                            	<?php echo $this->_tpl_vars['item']['date']; ?>

		                            </td>
		                            <td class="table4_td2">
		                            	<?php echo $this->_tpl_vars['item']['priority']; ?>

		                            </td>
		                            <td class="table4_td2">
		                            	<?php echo $this->_tpl_vars['item']['user_id']; ?>

		                            </td>
		                        </tr>
		                        <?php endforeach; else: ?>
								<tr class="table4_td2">
								    <td colspan="8" align="center">No Tickets were found.</td>
								</tr>
								<?php endif; unset($_from); ?>
							
								
								                       
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
</div>