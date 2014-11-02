<div class="midline_mid">
    <div class="midline_con">
    	<div class="midline_con_top2">
		<div class="tab1">
        	{link_to class="linkstyle1" href="#"}QA Task Lists{/link_to}
        </div>
    	<div class="tab2">
        	{link_to class="linkstyle1" href="pm/tickets/listbug"}Bug-fix Lists{/link_to}
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
		                        	<span class="textstyle3">QAT TASK LISTS</span>
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
		                            <td class="table4_td1">&nbsp;
		                                
		                            </td>
		                            <td class="table4_td1">
		                                <span class="textstyle1">Project</span>
		                            </td>
		                            <td class="table4_td1" width="100">
		                                <span class="textstyle1">Status</span>
		                            </td>
		                            <td class="table4_td1" width="15">
		                                <span class="textstyle1">Errors</span>
		                            </td>
		                             <td class="table4_td1" width="15">
		                                <span class="textstyle1">Revised </span>
		                            </td>
		                             <td class="table4_td1" width="15">
		                                <span class="textstyle1">Completed </span>
		                            </td>
		                             <td class="table4_td1" width="15">
		                                <span class="textstyle1">Lead</span>
		                            </td>
		                            <td class="table4_td1" width="70">
		                                <span class="textstyle1">Actions</span>
		                            </td>
		                        </tr>
		                        {foreach item=item from=$results}
                                {assign var="id" value=$item.id}
		                        <tr id="user-{$item.id}" class="table4_td2row{cycle values=1,2}">
		                        	<td class="table4_td2">
		                            	{form_checkbox}
		                            </td>
		                            
		                            <td class="table4_td2">
		                            	<span class="textstyle5">{$item.project}</span><br />
		                            	<em>{$item.overall_remarks}</em>
		                            </td>
		                            
		                            <td class="table4_td2">
		                            	<span class="textstyle6">{$item.status}</span>
		                            </td>
		                            
		                            <td class="table4_td2">
		                            	{$item.revisions}
		                            </td>
		                            
		                            <td class="table4_td2">
		                            	{$item.revisions}
		                            </td>
		                            
		                            <td class="table4_td2">
		                            	{$item.revisions}
		                            </td>
		                            
		                            <td class="table4_td2">
		                            	{$item.project_developer}
		                            </td>
		                         
		                            <td class="table4_td2a">
                                    	{link_to action="view" id=$item.id}view{/link_to} |
						       			{link_to action="edit" id=$item.id}edit{/link_to}						        		
                                    </td>		                            
		                        </tr>
		                        {foreachelse}
								<tr class="table4_td2">
								    <td colspan="8" align="center">No Task List was found.</td>
								</tr>
								{/foreach}
								<tr>
									<td colspan="8">
								{if $paginate.page_total > 1}
								
								<p class="textstyle7">Page {paginate_prev} {paginate_middle format="page" link_suffix=" | " prefix="" suffix=""} {paginate_next}</p>
	
								{/if}
									</td>
								</tr>		                      
		                        
		                    </table>
		                </div>
		            </td>
		        </tr>
		    </table>
		    <div class="spacer1">
				<input type="submit" value="ADD TASKLIST" />
			</div>
		</div>
		<div class="midline_con_bot">
			&nbsp;
		</div>
	</div>
</div>