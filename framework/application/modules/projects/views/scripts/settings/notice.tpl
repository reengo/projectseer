<div class="midline_con">
 <div class="midline_con_top2">
		<div class="tab2">
        	{link_to class="linkstyle1" href="admin/settings"}General{/link_to}
        </div>
    	<div class="tab1">
        	{link_to class="linkstyle1" href="#"}Notifications{/link_to}
        </div>
        
        <div class="tab2">
        	{link_to class="linkstyle1" href="admin/roles/"}Roles{/link_to}
        </div>
        <div class="tab2">
        	{link_to class="linkstyle1" href="admin/plugins/list"}Plugins{/link_to}
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
                                {form_text name="sys-email" value="admin@rex2check.com"}
                            </td>
                      </tr>
                        <tr>
                            <td class="table4_td3a">
                            	Reciepients
                            </td>
                            <td class="table4_td3a">
                                {form_checkbox name="email[]" value="project_manager" checked="yes"}
                                {form_checkbox name="email[]" value="project_developer" checked="yes"}
                                {form_checkbox name="email[]" value="maner@i-pay.com.ph"}
                                {form_checkbox name="email[]" value="debi.santos@i-pay.com.ph"}
                                {form_checkbox name="email[]" value="mark.soriano@i-pay.com.ph"}
                                {form_checkbox name="email[]" value="ringo.bautista@i-pay.com.ph"}
                                {link_to href="#"}Add Recipients{/link_to}<br /><br />
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
                            	{form_text name="subject"} 
                            </td>
                      </tr>
                      <tr>
                            <td width="125" class="table4_td2a">
                            	Content                                          </td>
                          <td width="722" class="table4_td2a">
                            	{form_textarea name="sys-cont" cols="40" rows="4" value="Hi Team, 

A new QAT project has been started by &curren;project.qat_officer, under the supervision of $project.qat_supervisor, information regarding this project are as follows:

Project Name: $project.project
Project Division: $project.division
Project Description: $project.overall_remarks
Project Manager: $project.project_manager
Project Coordinator: $project.project_coordinator 
Project Developer: $project.project_developer

Testing url/page: $project.test_location
Username/ID/Card Number: $project.test_login 
Password: $project.test_pass
Testing Remarks: $project.test_remarks


Please login to your QAT account by clicking on the URL below:

http://www.rex2check.com/



Sincerely Yours, 

Quality Assurance Testing Team"}<br />
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
                            	{form_text name="subject"} 
                            </td>
                      </tr>
                      <tr>
                            <td width="125" class="table4_td2a">
                            	Content                                          </td>
                          <td width="722" class="table4_td2a">
                            	{form_textarea name="sys-cont" cols="40" rows="4" value="Hi Team,

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
"}<br />
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
                            	{form_text name="subject"} 
                            </td>
                      </tr>
                      <tr>
                            <td width="125" class="table4_td2a">
                            	Content                                          </td>
                          <td width="722" class="table4_td2a">
                            	{form_textarea name="sys-cont" cols="40" rows="4" value="Hi project_developer,

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
"}<br />
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
                            	{form_text name="subject"} 
                            </td>
                      </tr>
                      <tr>
                            <td width="125" class="table4_td2a">
                            	Content                                          </td>
                          <td width="722" class="table4_td2a">
                            	{form_textarea name="sys-cont" cols="40" rows="4" value="Hi user, 

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
"}<br />
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