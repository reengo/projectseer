<?php /* Smarty version 2.6.19, created on 2008-10-21 03:21:07
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cadmin%5Cviews%5Cscripts%5Csettings%5Cnotice.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'link_to', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\settings\\notice.tpl', 4, false),array('function', 'form_text', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\settings\\notice.tpl', 74, false),array('function', 'form_checkbox', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\settings\\notice.tpl', 82, false),array('function', 'form_textarea', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\settings\\notice.tpl', 119, false),)), $this); ?>
<div class="midline_con">
 <div class="midline_con_top2">
		<div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "admin/settings")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>General<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
    	<div class="tab1">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "#")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Notifications<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        
        <div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "admin/roles/")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Roles<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        <div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "admin/plugins/list")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Plugins<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
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
                        	<img src="../../images/icon_folder.jpg" border="0" />
                        </td>
                        <td>
                        	<span class="textstyle3">NOTIFICATION SETTINGS</span>
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
                                <span class="textstyle1">Configure Settings</span>
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
                                			<span class="textstyle10">System Notice</span>
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
                            	System Email                                           </td>
                          <td width="722" class="table4_td2a">
                                <?php echo smarty_function_form_text(array('name' => "sys-email",'value' => "admin@rex2check.com"), $this);?>

                            </td>
                      </tr>
                        <tr>
                            <td class="table4_td3a">
                            	Reciepients
                            </td>
                            <td class="table4_td3a">
                                <?php echo smarty_function_form_checkbox(array('name' => "email[]",'value' => 'project_manager','checked' => 'yes'), $this);?>

                                <?php echo smarty_function_form_checkbox(array('name' => "email[]",'value' => 'project_developer','checked' => 'yes'), $this);?>

                                <?php echo smarty_function_form_checkbox(array('name' => "email[]",'value' => "maner@i-pay.com.ph"), $this);?>

                                <?php echo smarty_function_form_checkbox(array('name' => "email[]",'value' => "debi.santos@i-pay.com.ph"), $this);?>

                                <?php echo smarty_function_form_checkbox(array('name' => "email[]",'value' => "mark.soriano@i-pay.com.ph"), $this);?>

                                <?php echo smarty_function_form_checkbox(array('name' => "email[]",'value' => "ringo.bautista@i-pay.com.ph"), $this);?>

                                <?php $this->_tag_stack[] = array('link_to', array('href' => "#")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Recipients<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br /><br />
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
                                			<span class="textstyle10">QAT Project Initiation Notice</span>
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
                            	Subject                                         </td>
                          <td width="722" class="table4_td2a">
                            	<?php echo smarty_function_form_text(array('name' => 'subject'), $this);?>
 
                            </td>
                      </tr>
                      <tr>
                            <td width="125" class="table4_td2a">
                            	Content                                          </td>
                          <td width="722" class="table4_td2a">
                            	<?php echo smarty_function_form_textarea(array('name' => "sys-cont",'cols' => '40','rows' => '4','value' => "Hi Team, 

A new QAT project has been started by &curren;project.qat_officer, under the supervision of ".($this->_tpl_vars['project']).".qat_supervisor, information regarding this project are as follows:

Project Name: ".($this->_tpl_vars['project']).".project
Project Division: ".($this->_tpl_vars['project']).".division
Project Description: ".($this->_tpl_vars['project']).".overall_remarks
Project Manager: ".($this->_tpl_vars['project']).".project_manager
Project Coordinator: ".($this->_tpl_vars['project']).".project_coordinator 
Project Developer: ".($this->_tpl_vars['project']).".project_developer

Testing url/page: ".($this->_tpl_vars['project']).".test_location
Username/ID/Card Number: ".($this->_tpl_vars['project']).".test_login 
Password: ".($this->_tpl_vars['project']).".test_pass
Testing Remarks: ".($this->_tpl_vars['project']).".test_remarks


Please login to your QAT account by clicking on the URL below:

http://www.rex2check.com/



Sincerely Yours, 

Quality Assurance Testing Team"), $this);?>
<br />
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
                                			<span class="textstyle10">QAT Project Completion Notice</span>
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
                            	Subject                                         </td>
                          <td width="722" class="table4_td2a">
                            	<?php echo smarty_function_form_text(array('name' => 'subject'), $this);?>
 
                            </td>
                      </tr>
                      <tr>
                            <td width="125" class="table4_td2a">
                            	Content                                          </td>
                          <td width="722" class="table4_td2a">
                            	<?php echo smarty_function_form_textarea(array('name' => "sys-cont",'cols' => '40','rows' => '4','value' => "Hi Team,

A QAT Project has been completed with the following information:

Project: project
Responsible Developer: project_developer
Project Manager: project_manager
QAT Officer: qat_officer
ii.	url
Error type: type
[ERROR]: message, 
[TASK]: instructions

Evaluation Remarks:
final_remarks.

qaid



Many Thanks,

Quality Assurance Testing Admin
"), $this);?>
<br />
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
                                			<span class="textstyle10">Ticket Assignment Notice</span>
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
                            	Subject                                         </td>
                          <td width="722" class="table4_td2a">
                            	<?php echo smarty_function_form_text(array('name' => 'subject'), $this);?>
 
                            </td>
                      </tr>
                      <tr>
                            <td width="125" class="table4_td2a">
                            	Content                                          </td>
                          <td width="722" class="table4_td2a">
                            	<?php echo smarty_function_form_textarea(array('name' => "sys-cont",'cols' => '40','rows' => '4','value' => "Hi project_developer,

You have been assigned by your project manager, project_manager, with a task ticket for your project: project.

QAT session was conducted by: qat_officer

--------------------
Ticket number: id
page
location
Error type:type
[ERROR]: message, 
[TASK]: instructions.

--------------------

Please login to your REX2Check account and confirm your revision by clicking on the DONE button.

You can login and view your tasklist online by clicking on the URL below.
qaid



Many Thanks,

REX2Check Admin
"), $this);?>
<br />
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
                                			<span class="textstyle10">User Registration</span>
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
                            	Subject                                         </td>
                          <td width="722" class="table4_td2a">
                            	<?php echo smarty_function_form_text(array('name' => 'subject'), $this);?>
 
                            </td>
                      </tr>
                      <tr>
                            <td width="125" class="table4_td2a">
                            	Content                                          </td>
                          <td width="722" class="table4_td2a">
                            	<?php echo smarty_function_form_textarea(array('name' => "sys-cont",'cols' => '40','rows' => '4','value' => "Hi user, 

Welcome to the REX2Check QAT Manager. You have been registered as role with the following information: 

Username: username 
Password: password 

Email: email
First Name: fname
Last Name: lname
Position: position

Please take note that different roles have different responsibilities and priviledges. For more information regarding roles, please refer to the QAT FAQs.

Visit the url below and try logging in to your account: http://www.rex2check.com
note: the system is currently under beta phase, your comments and suggestions are most welcome 



Many Thanks,

Rechargeplus QAT Management Team 
"), $this);?>
<br />
                            </td>
                      </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <div class="spacer1">
		<input type="submit" value="Save Settings" />
	</div>
</div>
 <div class="midline_con_bot">
                	&nbsp;
                </div>
                </div>