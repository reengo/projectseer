{form}
{flash}
<div class="midline_con">
            	<div class="midline_con_top2">
        
    	<div class="tab2">
        	{link_to class="linkstyle1" href="change/index/view/id/$change_id"}OVERVIEW{/link_to}
        </div>
        <div class="tab1">
        	{link_to class="linkstyle1" href="#"}EVALUATION{/link_to}
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
                            <td width="125" class="table4_td2a" valign=top>
                            	Project Name                                           </td>
                          <td width="722" class="table4_td2a" valign=top>                            	
                            	{$change.project}
                            </td>
                        </tr>
                        <tr>
                            <td width="50" class="table4_td2a" valign=top>
                            	Request Number                                       </td>
                          <td width="722" class="table4_td2a" valign=top>                            	
                          	{form_text name="request_id" size="40"}</span>
                            	<div class="text-guide">Please enter the request number issued by the Change Manager.</div>
                            </td>
                        </tr>
                        
                         <tr>
                            <td class="table4_td3a" valign=top>
                            	Impact on Project
                            </td>
                            <td class="table4_td3a" valign=top>
                            	{form_textarea name="impact_project" rows="2" cols="30"}                            	
                            	<div class="text-guide">Please expound the impact that this change may impose.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Impact on Schedule
                            </td>
                            <td class="table4_td3a" valign=top>
                            	{form_textarea name="impact_schedule" rows="2" cols="30"}                            	
                            	<div class="text-guide">Explain how schedules may be affected by this change.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Impact on Budget
                            </td>
                            <td class="table4_td3a" valign=top>
                            	{form_textarea name="impact_budget" rows="2" cols="30"}                            	
                            	<div class="text-guide">State any need to allot budget for this change.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Required Resources
                            </td>
                            <td class="table4_td3a" valign=top>
                            	{form_textarea name="req_resources" rows="2" cols="30"}
                            	<div class="text-guide">List all resources that may be needed to implement this change.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Estimated Cost
                            </td>
                            <td class="table4_td3a" valign=top>
                            	{form_textarea name="est_cost" rows="2" cols="30"}
                            	<div class="text-guide">How much would this change cost?</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Recommendation
                            </td>
                            <td class="table4_td3a" valign=top>
                            	{form_select name="recommendation" options=$status}
                            	<div class="text-guide">What is your recommendation?</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Category
                            </td>
                            <td class="table4_td3a" valign=top>
                            	{form_text name="category" size=40"}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Priority
                            </td>
                            <td class="table4_td3a" valign=top>
                            	{form_select name="priority" options=$priority}
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
                            	{form_select name="user_id" options=$users}
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