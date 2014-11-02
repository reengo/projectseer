{form}
{flash}
<div class="midline_con">
            	<div class="midline_con_top2">
        
    	<div class="tab2">
        	{link_to class="linkstyle1" href="change/index/view/id/$change_id"}OVERVIEW{/link_to}
        </div>
        <div class="tab1">
        	{link_to class="linkstyle1" href="#"}APPROVAL{/link_to}
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
                            <td width="50" class="table4_td2a" valign=top>
                            	Request Number                                       </td>
                          <td width="722" class="table4_td2a" valign=top>                            	
                            	<span class="textstyle3">{$change.request_id}</span>
                            </td>
                        </tr>
                        <tr>
                            <td width="125" class="table4_td2a" valign=top>
                            	Project Name                                           </td>
                          <td width="722" class="table4_td2a" valign=top>                            	
                            	{$change.project}
                            </td>
                        </tr>
                         <tr>
                            <td class="table4_td3a" valign=top>
                            	Comments / Instructions for Implementation
                            </td>
                            <td class="table4_td3a" valign=top>
                            	{form_textarea name="comments" rows="2" cols="30"}                            	
                            	<div class="text-guide">Please expound your direct instructions on how the change should be done.</div>
                            </td>
                        </tr>                        
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Target Deployment Date
                            </td>
                            <td class="table4_td3a" valign=top>
                            	{form_text name="date" size="40"}                            	
                            	<div class="text-guide">State a deadline as due date for this change.</div>
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
                            <td class="table4_td3a" valign=top>
                            	Change Owner / Assignee
                            </td>
                            <td class="table4_td3a" valign=top>
                            	{form_select name="owner" options=$users}                            	
                            	<div class="text-guide">The Change Owner will be responsible for the change.</div>
                            </td>
                        </tr>                   
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <div class="spacer1">
   		{form_hidden name="change_id" value=$change.id}
    	{form_hidden name="active" value="1"}
    	{form_hidden name="status" value="2"}
		{form_submit name="submit" class="botton" value="   Submit   " no_div=true} or 
    	{link_to href="/change/index/list" confirm="Are you sure you want to cancel?"}cancel{/link_to}
	</div>
</div>
 <div class="midline_con_bot">
                	&nbsp;
                </div>
                </div>
                {/form}