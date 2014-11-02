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
                          <td width="722" class="table4_td2a">                            	
                            	{form_text name="project" size="40"}
                            	<div class="text-guide">Insert the name of the affected project on production.</div>
                            </td>
                        </tr>
                         <tr>
                            <td class="table4_td3a" valign=top>
                            	Short Name of Change Request
                            </td>
                            <td class="table4_td3a" valign=top>
                            	{form_text name="summary" size="40"}
                            	<div class="text-guide">Please assign a shortname as the title for the project.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Brief Description of Change
                            </td>
                            <td class="table4_td3a" valign=top>
                            	{form_textarea name="detail" rows="5" cols="30"}
                            	<div class="text-guide">Please define your instructions for the change.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Justification of Change
                            </td>
                            <td class="table4_td3a" valign=top>
                            	{form_textarea name="justification" rows="3" cols="30"}
                            	<div class="text-guide">Please justify your change request by stating the reason for requesting.</div>
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
                            <td class="table4_td2a">
                            	{form_select name="manager" options=$users}
                            	<div class="text-guide">Note: only registered users can be assigned as project manager for this request.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Change Initiator
                            </td>
                            <td class="table4_td2a">
                            	{form_select name="initiator" options="$users}
                            	<div class="text-guide">Note: please select your name on the list of registered users.</div>
                            </td>
                        </tr>  
                      
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <div class="spacer1">
    	{form_hidden name="owner" value="0"}
    	{form_hidden name="active" value="1"}
    	{form_hidden name="status" value="1"}
		{form_submit name="submit" class="botton" value="   Submit   " no_div=true} or 
    	{link_to href="/change/index/list" confirm="Are you sure you want to cancel?"}cancel{/link_to}
	</div>
</div>
 <div class="midline_con_bot">
                	&nbsp;
                </div>
                </div>
                {/form}