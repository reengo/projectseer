{form}
{flash}
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
                        	<img src="../../images/icon_folder.jpg" border="0" />
                        </td>
                        <td>
                        	<span class="textstyle3">{$description}</span>
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
                            <td class="table4_td3a" valign="top" colspan="2">
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
                            <td width="125" class="table4_td2a" valign="top">
                            	Project Name                                           </td>
                          <td width="722" class="table4_td2a" valign="top">                            	
                            	{form_text name="project" size="40"} 
                            	<div class="text-guide">Name your QA Project.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign="top">
                            	Project Division
                            </td>
                            <td class="table4_td3a" valign="top">
                            	{form_text name="project_division" size="40" } 
                            	<div class="text-guide">Please state where the project is categorized into. </div>
                            </td>
                        </tr>
                         <tr>
                            <td class="table4_td3a" valign="top">
                            	Project Description
                            </td>
                            <td class="table4_td3a" valign="top">
                            	{form_textarea name="overall_remarks" rows="3" cols="30"}
                            	<div class="text-guide">A short description of the project.</div>
                            </td>
                        </tr
                        <tr>
                            <td class="table4_td3a" valign="top" colspan="2">
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
                            <td class="table4_td2a" valign="top">
                            	Project Manager
                            </td>
                            <td class="table4_td2a" valign="top">
                            	{form_select name="project_manager" options=$users}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign="top">
                            	Lead Developer
                            </td>
                            <td class="table4_td2a" valign="top">
                            	{form_select name="project_developer" options=$users}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign="top">
                            	QAT Officer
                            </td>
                            <td class="table4_td2a" valign="top">
                            	{form_select name="qat_officer" options=$users}
                            </td>
                        </tr>        
                        <tr>
                            <td class="table4_td3a" valign="top" colspan="2">
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
                            <td class="table4_td2a" valign="top">
                            	Testing Type
                            </td>
                            <td class="table4_td2a" valign="top">
                            	{form_select name="test_type" options=$test_type}
                            	<div class="text-guide">Please select what type of test you will be using on this project. (note: UAT type uses a company standard form template.)</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign="top">
                            	Test Username/UID/CardNumber/AccountNumber/Email
                            </td>
                            <td class="table4_td2a" valign="top">
                            	{form_text name="test_login" size="40"}
                            	<div class="text-guide">Please specify what username was used for testing.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign="top">
                            	Test Password/PIN
                            </td>
                            <td class="table4_td2a" valign="top">
                            	{form_password name="test_pass" size="40"}
                            	<div class="text-guide">Please specify what password was used.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign="top">
                            	Test Notes
                            </td>
                            <td class="table4_td2a" valign="top">
                            	{form_textarea name="test_remarks" rows="3" cols="30"}
                            	<div class="text-guide">Please note of any comment you can add on the testing info.</div>
                            	<br />
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <div class="spacer1">
    	{form_hidden name="active" value="1"}
    	{form_hidden name="status" value="Pending"}
		{form_submit name="submit" class="botton" value="   Submit   " no_div=true} or 
    	{link_to href="/admin/projects/list" confirm="Are you sure you want to cancel?"}cancel{/link_to}
	</div>
</div>
 <div class="midline_con_bot">
                	&nbsp;
                </div>
                </div>
                {/form}