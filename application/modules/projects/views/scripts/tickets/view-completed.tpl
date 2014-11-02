<div class="midline_mid">
    <div class="midline_con">
    	<div class="midline_con_top2">
		<div class="tab2">
        	{link_to class="linkstyle1" href="dev/tickets/view/id/$formid"}All{/link_to}
        </div>
    	<div class="tab2">
        	{link_to class="linkstyle1" href="dev/tickets/view-pending/id/$formid"}Pending{/link_to}
        </div>
        <div class="tab1">
        	{link_to class="linkstyle1" href="#"}Completed{/link_to}
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
		                        	<span class="textstyle3">Completed Tickets for {$project.project} Project</span>
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
		            	Tasklists are revision tickets set from QAT results made by the QAT officers. Project Managers' role is to review, approve and distribute these tasks to the developer and confirm the revisions made. Project Managers are also the only usergroup that can close a QAT tasklist.
		            </td>
		        </tr>
		        <tr>
		        	<td>
		            	<div class="tablecon1">
		                    <table class="table4" cellspacing="0">
		                        <tr>
		                            <td class="table4_td1" width="50">
		                                <span class="textstyle1">Ticket ID</span>
		                            </td>
		                            <td class="table4_td1">
		                                <span class="textstyle1">Description</span>
		                            </td>
		                            <td class="table4_td1" width="70">
		                                <span class="textstyle1">Date</span>
		                            </td>
		                            <td class="table4_td1">
		                                <span class="textstyle1">Priority</span>
		                            </td>
		                            <td class="table4_td1">
		                                <span class="textstyle1">Assignee</span>
		                            </td>
		                        </tr>
		                        {foreach item=item from="$results"}
		                        {assign var="id" value="$item.id}
		                        <tr id="user-{$item.id}" class="table4_td2row{cycle values=1,2}">
		                        	<td class="table4_td2">
		                            	<span class="textstyle3">{$item.id}</span>
		                            </td>
		                            <td class="table4_td2">
		                            	<span class="textstyle5">{$item.message}</span><br />
		                            	<em>{$item.instructions}</em>
		                            </td>
		                            <td class="table4_td2">
		                            	{$item.date}
		                            </td>
		                            <td class="table4_td2">
		                            	{$item.priority}
		                            </td>
		                            <td class="table4_td2">
		                            	{$item.user_id}
		                            </td>
		                        </tr>
		                        {foreachelse}
								<tr class="table4_td2">
								    <td colspan="8" align="center">No Tickets were found.</td>
								</tr>
								{/foreach}
							
								
								                       
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
</div>