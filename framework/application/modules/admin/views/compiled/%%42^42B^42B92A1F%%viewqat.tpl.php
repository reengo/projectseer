<?php /* Smarty version 2.6.19, created on 2008-12-08 01:14:37
         compiled from /home/rex2chek/public_html/application/modules/admin/views/scripts/projects/viewqat.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'form', '/home/rex2chek/public_html/application/modules/admin/views/scripts/projects/viewqat.tpl', 2, false),array('block', 'link_to', '/home/rex2chek/public_html/application/modules/admin/views/scripts/projects/viewqat.tpl', 8, false),array('function', 'flash', '/home/rex2chek/public_html/application/modules/admin/views/scripts/projects/viewqat.tpl', 3, false),)), $this); ?>

<?php $this->_tag_stack[] = array('form', array()); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php echo smarty_function_flash(array(), $this);?>

<div class="midline_con">
	<div class="midline_con_top2">
        
    	<div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "admin/qat/list/id/".($this->_tpl_vars['formid']))); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>QA GRID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        <div class="tab1">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "#")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>PROJECT INFO<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
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
                        <tr>
                            <td width="125" class="table4_td2a">
                            	Project Name                                           </td>
                          <td width="722" class="table4_td2a">       
                            	<?php echo $this->_tpl_vars['project']['project']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a">
                            	Project Division
                            </td>
                            <td class="table4_td3a">
                            	<?php echo $this->_tpl_vars['project']['project_division']; ?>

                            </td>
                        </tr>
                         <tr>
                            <td class="table4_td3a">
                            	Project Description
                            </td>
                            <td class="table4_td3a">
                            	<?php echo $this->_tpl_vars['project']['overall_remarks']; ?>

                            </td>
                        </tr
                        <tr>
                            <td class="table4_td3a" colspan="2">
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
                            <td class="table4_td2a">
                            	Project Manager
                            </td>
                            <td class="table4_td2a">
                            	<?php echo $this->_tpl_vars['project']['project_manager']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Project Coordinator
                            </td>
                            <td class="table4_td2a">
                            	<?php echo $this->_tpl_vars['project']['project_coordinator']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	QAT Officer
                            </td>
                            <td class="table4_td2a">
                            	<?php echo $this->_tpl_vars['project']['qat_officer']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	QAT Initiator
                            </td>
                            <td class="table4_td2a">
                            	<?php echo $this->_tpl_vars['project']['qat_supervisor']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Lead Developer
                            </td>
                            <td class="table4_td2a">
                            	<?php echo $this->_tpl_vars['project']['project_developer']; ?>

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
                                			<span class="textstyle10">Testing Information</span>
                                		</td>
                                	</tr>
                                </table>
                                <div class="horlinefade1">	
                					&nbsp;
               					</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Test Login Type
                            </td>
                            <td class="table4_td2a">
                            	<?php echo $this->_tpl_vars['project']['test_type']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Test Username
                            </td>
                            <td class="table4_td2a">
                            	<?php echo $this->_tpl_vars['project']['test_login']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Test Password
                            </td>
                            <td class="table4_td2a">
                            	<?php echo $this->_tpl_vars['project']['test_pass']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Test Remarks
                            </td>
                            <td class="table4_td2a">
                            	<?php echo $this->_tpl_vars['project']['test_remarks']; ?>

                            	<br />
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
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>