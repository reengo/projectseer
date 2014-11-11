<?php /* Smarty version 2.6.19, created on 2008-11-21 04:29:15
         compiled from /home/rex2chek/public_html/application/modules/change/views/scripts/index/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'form', '/home/rex2chek/public_html/application/modules/change/views/scripts/index/view.tpl', 2, false),array('block', 'link_to', '/home/rex2chek/public_html/application/modules/change/views/scripts/index/view.tpl', 8, false),array('function', 'flash', '/home/rex2chek/public_html/application/modules/change/views/scripts/index/view.tpl', 3, false),)), $this); ?>

<?php $this->_tag_stack[] = array('form', array()); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php echo smarty_function_flash(array(), $this);?>

<div class="midline_con">
	<div class="midline_con_top2">
        
    	<div class="tab1">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "#")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>OVERVIEW<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        <?php if ($this->_tpl_vars['change']['status'] == 1): ?>
        <div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "change/index/eva/id/".($this->_tpl_vars['change_id']))); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>EVALUATION<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['change']['status'] == 2): ?>
         <div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "change/index/app/id/".($this->_tpl_vars['change_id']))); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>APPROVAL<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        <?php endif; ?>
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
            	View details on Change Requests issued by the Change Manager.
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
                            <td class="table4_td3a" valign=top colspan="2">
                        		<div class="horlinefade1">	
                					&nbsp;
               					</div>
                                <table>
                                	<tr>
                                    	<td>
                                			<span class="textstyle10">Change Information</span>
                                		</td>
                                	</tr>
                                </table>
                                <div class="horlinefade1">	
                					&nbsp;
               					</div>
                            </td>
                        </tr>
                        <tr>
                            <td width="50" class="table4_td2a" valign=top>
                            	Request Number                                       </td>
                          <td width="722" class="table4_td2a" valign=top>                            	
                          	<span class="textstyle3"><?php echo $this->_tpl_vars['change']['request_id']; ?>
</span>
                            </td>
                        </tr>
                        <tr>
                            <td width="125" class="table4_td2a" valign=top>
                            	Project Name                                           </td>
                          <td width="722" class="table4_td2a" valign=top>                            	
                            	<?php echo $this->_tpl_vars['change']['project']; ?>

                            </td>
                        </tr>
                         <tr>
                            <td class="table4_td3a" valign=top>
                            	Short Name of Change Request
                            </td>
                            <td class="table4_td3a" valign=top>
                            	<?php echo $this->_tpl_vars['change']['summary']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Brief Description of Change
                            </td>
                            <td class="table4_td3a" valign=top>
                            	<?php echo $this->_tpl_vars['change']['detail']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Justification of Change
                            </td>
                            <td class="table4_td3a" valign=top>
                            	<?php echo $this->_tpl_vars['change']['justification']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top colspan="2">
                                <div class="horlinefade1">	
                					&nbsp;
               					</div>
                                <table>
                                	<tr>
                                    	<td>
                                			<span class="textstyle10">People and Resources</span>
                                		</td>
                                	</tr>
                                </table>
                                <div class="horlinefade1">	
                					&nbsp;
               					</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Project Manager
                            </td>
                            <td class="table4_td2a" valign=top>
                            	<?php echo $this->_tpl_vars['change']['manager']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Change Initiator
                            </td>
                            <td class="table4_td2a" valign=top>
                            	<?php echo $this->_tpl_vars['change']['initiator']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Assignee / Process Owner
                            </td>
                            <td class="table4_td2a" valign=top>
                            	<?php echo $this->_tpl_vars['change']['owner']; ?>

                            </td>
                        </tr> 
                        <?php if ($this->_tpl_vars['change']['status'] == 2 || $this->_tpl_vars['change']['status'] == 3): ?>       
                        <tr>
                            <td class="table4_td3a" valign=top colspan="2">
                                <div class="horlinefade1">	
                					&nbsp;
               					</div>
                                <table>
                                	<tr>
                                    	<td>
                                			<span class="textstyle10">Evaluation</span>
                                		</td>
                                	</tr>
                                </table>
                                <div class="horlinefade1">	
                					&nbsp;
               					</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Evaluation Date
                            </td>
                            <td class="table4_td2a" valign=top>
                            	<?php echo $this->_tpl_vars['eva']['date']; ?>

                            </td>
                        </tr>      
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Evaluator
                            </td>
                            <td class="table4_td2a" valign=top>
                            	<?php echo $this->_tpl_vars['eva']['lead']; ?>

                            </td>
                        </tr> 
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Impact on project
                            </td>
                            <td class="table4_td2a" valign=top>
                            	<?php echo $this->_tpl_vars['eva']['impact_project']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Impact on Schedule
                            </td>
                            <td class="table4_td2a" valign=top>
                            	<?php echo $this->_tpl_vars['eva']['impact_schedule']; ?>

                            </td>
                        </tr> 
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Impact on Budget
                            </td>
                            <td class="table4_td2a" valign=top>
                            	<?php echo $this->_tpl_vars['eva']['impact_budget']; ?>

                            </td>
                        </tr> 
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Required Resources
                            </td>
                            <td class="table4_td2a" valign=top>
                            	<?php echo $this->_tpl_vars['eva']['resources']; ?>

                            </td>
                        </tr>   
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Estimated Cost
                            </td>
                            <td class="table4_td2a" valign=top>
                            	<?php echo $this->_tpl_vars['eva']['cost']; ?>

                            </td>
                        </tr>       
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Recommendation
                            </td>
                            <td class="table4_td2a" valign=top>
                            	<?php echo $this->_tpl_vars['eva']['recommendation']; ?>

                            </td>
                        </tr>    
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Category
                            </td>
                            <td class="table4_td2a" valign=top>
                            	<?php echo $this->_tpl_vars['eva']['category']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Priority
                            </td>
                            <td class="table4_td2a" valign=top>
                            	<?php echo $this->_tpl_vars['eva']['priority']; ?>

                            </td>
                        </tr>
                        <?php if ($this->_tpl_vars['change']['status'] != 3): ?>
                        <tr>
                            <td class="table4_td2a" colspan="2" align="center">
                            	<span style="color:red">** This change request is still pending for approval **</span>
                            </td>
                        </tr>
                        <?php endif; ?>
                        <?php else: ?>
                        <tr>
                            <td class="table4_td2a" colspan="2" align="center">
                            	<span style="color:red">** This change request still needs to be evaluated **</span>
                            </td>
                        </tr>
                        <?php endif; ?>
                        
                        
                        <?php if ($this->_tpl_vars['change']['status'] == 3): ?>
                        <tr>
                            <td class="table4_td3a" valign=top colspan="2">
                                <div class="horlinefade1">	
                					&nbsp;
               					</div>
                                <table>
                                	<tr>
                                    	<td>
                                			<span class="textstyle10">Approval</span>
                                		</td>
                                	</tr>
                                </table>
                                <div class="horlinefade1">	
                					&nbsp;
               					</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Date of Approval
                            </td>
                            <td class="table4_td2a" valign=top>
                            	<?php echo $this->_tpl_vars['app']['date']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Approving Authority
                            </td>
                            <td class="table4_td2a" valign=top>
                            	<?php echo $this->_tpl_vars['app']['cto']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Instructions for Implementation
                            </td>
                            <td class="table4_td2a" valign=top>
                            	<?php echo $this->_tpl_vars['app']['comments']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Change Owner
                            </td>
                            <td class="table4_td2a" valign=top>
                            	<?php echo $this->_tpl_vars['app']['owner']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Target Deployment Date
                            </td>
                            <td class="table4_td2a" valign=top>
                            	<?php echo $this->_tpl_vars['app']['deployment']; ?>

                            </td>
                        </tr>
                        <?php endif; ?>
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
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>