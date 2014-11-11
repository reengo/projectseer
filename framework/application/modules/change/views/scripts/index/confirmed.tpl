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
            	Mark Task as Completed.
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
                            	Short Name of Change Request
                            </td>
                            <td class="table4_td3a" valign=top>
                            	{$change.summary}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Brief Description of Change
                            </td>
                            <td class="table4_td3a" valign=top>
                            	{$change.detail}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Justification of Change
                            </td>
                            <td class="table4_td3a" valign=top>
                            	{$change.justification}
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
                            	{$change.manager}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Change Initiator
                            </td>
                            <td class="table4_td2a" valign=top>
                            	{$change.initiator}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Assignee / Process Owner
                            </td>
                            <td class="table4_td2a" valign=top>
                            	{$change.owner}
                            </td>
                        </tr> 
                        {if $change.status == 2 || $change.status == 3}       
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
                            	{$eva.date}
                            </td>
                        </tr>      
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Evaluator
                            </td>
                            <td class="table4_td2a" valign=top>
                            	{$eva.lead}
                            </td>
                        </tr> 
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Impact on project
                            </td>
                            <td class="table4_td2a" valign=top>
                            	{$eva.impact_project}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Impact on Schedule
                            </td>
                            <td class="table4_td2a" valign=top>
                            	{$eva.impact_schedule}
                            </td>
                        </tr> 
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Impact on Budget
                            </td>
                            <td class="table4_td2a" valign=top>
                            	{$eva.impact_budget}
                            </td>
                        </tr> 
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Required Resources
                            </td>
                            <td class="table4_td2a" valign=top>
                            	{$eva.resources}
                            </td>
                        </tr>   
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Estimated Cost
                            </td>
                            <td class="table4_td2a" valign=top>
                            	{$eva.cost}
                            </td>
                        </tr>       
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Recommendation
                            </td>
                            <td class="table4_td2a" valign=top>
                            	{$eva.recommendation}
                            </td>
                        </tr>    
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Category
                            </td>
                            <td class="table4_td2a" valign=top>
                            	{$eva.category}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Priority
                            </td>
                            <td class="table4_td2a" valign=top>
                            	{$eva.priority}
                            </td>
                        </tr>
                        {if $change.status != 3}
                        <tr>
                            <td class="table4_td2a" colspan="2" align="center">
                            	<span style="color:red">** This change request is still pending for approval **</span>
                            </td>
                        </tr>
                        {/if}
                        {else}
                        <tr>
                            <td class="table4_td2a" colspan="2" align="center">
                            	<span style="color:red">** This change request still needs to be evaluated **</span>
                            </td>
                        </tr>
                        {/if}
                        
                        
                        {if $change.status == 3}
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
                            	{$app.date}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Approving Authority
                            </td>
                            <td class="table4_td2a" valign=top>
                            	{$app.cto}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Instructions for Implementation
                            </td>
                            <td class="table4_td2a" valign=top>
                            	{$app.comments}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Change Owner
                            </td>
                            <td class="table4_td2a" valign=top>
                            	{$app.owner}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Target Deployment Date
                            </td>
                            <td class="table4_td2a" valign=top>
                            	{$app.deployment}
                            </td>
                        </tr>
                        {/if}
                        <tr>
                            <td class="table4_td3a" valign=top colspan="2">
                                <div class="horlinefade1">	
                					&nbsp;
               					</div>
                                <table>
                                	<tr>
                                    	<td>
                                			<span class="textstyle10">Closing</span>
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
                            	Completion Comments
                            </td>
                            <td class="table4_td3a" valign=top>
                            	{form_textarea name="detail" rows="5" cols="30"}
                            	<div class="text-guide">Please add your comments on the completion of this change request.</div>
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