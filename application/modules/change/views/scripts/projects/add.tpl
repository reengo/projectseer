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
                            	{form_text name="project" size="40"}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a">
                            	Project Division
                            </td>
                            <td class="table4_td3a">
                            	{form_text name="project_division" size="40"}
                            </td>
                        </tr>
                         <tr>
                            <td class="table4_td3a">
                            	Project Description
                            </td>
                            <td class="table4_td3a">
                            	{form_textarea name="overall_remarks" rows="3" cols="30"}
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
                            	{form_select name="project_manager" options=$users}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Lead Developer
                            </td>
                            <td class="table4_td2a">
                            	{form_select name="project_developer" options="$users}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	QAT Officer
                            </td>
                            <td class="table4_td2a">
                            	{form_select name="qat_officer" options="$users}
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
                            	{form_text name="test_type" size="40"}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Test Username
                            </td>
                            <td class="table4_td2a">
                            	{form_text name="test_login" size="40"}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Test Password
                            </td>
                            <td class="table4_td2a">
                            	{form_password name="test_pass" size="40"}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Test Remarks
                            </td>
                            <td class="table4_td2a">
                            	{form_textarea name="test_remarks" rows="3" cols="30"}
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