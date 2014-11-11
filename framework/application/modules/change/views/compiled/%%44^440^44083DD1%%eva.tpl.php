<?php /* Smarty version 2.6.19, created on 2008-11-19 09:09:44
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cchange%5Cviews%5Cscripts%5Cindex%5Ceva.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'form', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\eva.tpl', 1, false),array('block', 'link_to', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\eva.tpl', 7, false),array('function', 'flash', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\eva.tpl', 2, false),array('function', 'form_text', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\eva.tpl', 77, false),array('function', 'form_textarea', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\eva.tpl', 87, false),array('function', 'form_select', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\eva.tpl', 132, false),array('function', 'form_hidden', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\eva.tpl', 183, false),array('function', 'form_submit', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\eva.tpl', 186, false),)), $this); ?>
<?php $this->_tag_stack[] = array('form', array()); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php echo smarty_function_flash(array(), $this);?>

<div class="midline_con">
            	<div class="midline_con_top2">
        
    	<div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "change/index/view/id/".($this->_tpl_vars['change_id']))); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>OVERVIEW<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        <div class="tab1">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "#")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>EVALUATION<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
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
            	File a change request and monitor its progress.
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
                            <td width="125" class="table4_td2a" valign=top>
                            	Project Name                                           </td>
                          <td width="722" class="table4_td2a" valign=top>                            	
                            	<?php echo $this->_tpl_vars['change']['project']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td width="50" class="table4_td2a" valign=top>
                            	Request Number                                       </td>
                          <td width="722" class="table4_td2a" valign=top>                            	
                          	<?php echo smarty_function_form_text(array('name' => 'request_id','size' => '40'), $this);?>
</span>
                            	<div class="text-guide">Please enter the request number issued by the Change Manager.</div>
                            </td>
                        </tr>
                        
                         <tr>
                            <td class="table4_td3a" valign=top>
                            	Impact on Project
                            </td>
                            <td class="table4_td3a" valign=top>
                            	<?php echo smarty_function_form_textarea(array('name' => 'impact_project','rows' => '2','cols' => '30'), $this);?>
                            	
                            	<div class="text-guide">Please expound the impact that this change may impose.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Impact on Schedule
                            </td>
                            <td class="table4_td3a" valign=top>
                            	<?php echo smarty_function_form_textarea(array('name' => 'impact_schedule','rows' => '2','cols' => '30'), $this);?>
                            	
                            	<div class="text-guide">Explain how schedules may be affected by this change.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Impact on Budget
                            </td>
                            <td class="table4_td3a" valign=top>
                            	<?php echo smarty_function_form_textarea(array('name' => 'impact_budget','rows' => '2','cols' => '30'), $this);?>
                            	
                            	<div class="text-guide">State any need to allot budget for this change.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Required Resources
                            </td>
                            <td class="table4_td3a" valign=top>
                            	<?php echo smarty_function_form_textarea(array('name' => 'req_resources','rows' => '2','cols' => '30'), $this);?>

                            	<div class="text-guide">List all resources that may be needed to implement this change.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Estimated Cost
                            </td>
                            <td class="table4_td3a" valign=top>
                            	<?php echo smarty_function_form_textarea(array('name' => 'est_cost','rows' => '2','cols' => '30'), $this);?>

                            	<div class="text-guide">How much would this change cost?</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Recommendation
                            </td>
                            <td class="table4_td3a" valign=top>
                            	<?php echo smarty_function_form_select(array('name' => 'recommendation','options' => $this->_tpl_vars['status']), $this);?>

                            	<div class="text-guide">What is your recommendation?</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Category
                            </td>
                            <td class="table4_td3a" valign=top>
                            	<?php echo smarty_function_form_text(array('name' => 'category','size' => 40), $this);?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Priority
                            </td>
                            <td class="table4_td3a" valign=top>
                            	<?php echo smarty_function_form_select(array('name' => 'priority','options' => $this->_tpl_vars['priority']), $this);?>

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
                            	Evaluator / Technical Lead
                            </td>
                            <td class="table4_td2a" valign=top>
                            	<?php echo smarty_function_form_select(array('name' => 'user_id','options' => $this->_tpl_vars['users']), $this);?>

                            </td>
                        </tr>                      
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <div class="spacer1">
   		<?php echo smarty_function_form_hidden(array('name' => 'change_id','value' => $this->_tpl_vars['change']['id']), $this);?>

    	<?php echo smarty_function_form_hidden(array('name' => 'active','value' => '1'), $this);?>

    	<?php echo smarty_function_form_hidden(array('name' => 'status','value' => '2'), $this);?>

		<?php echo smarty_function_form_submit(array('name' => 'submit','class' => 'botton','value' => '   Submit   ','no_div' => true), $this);?>
 or 
    	<?php $this->_tag_stack[] = array('link_to', array('href' => "/change/index/list",'confirm' => "Are you sure you want to cancel?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</div>
</div>
 <div class="midline_con_bot">
                	&nbsp;
                </div>
                </div>
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>