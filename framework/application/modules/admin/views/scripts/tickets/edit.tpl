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
	                        	<img src="../../../../images/icon_folder.jpg" border="0" />
	                        </td>
	                        <td>
	                        	<span class="textstyle3">TICKET INFORMATION</span>
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
	            	Detailed information regarding your review on this page is explained below.
	            </td>
	        </tr>
	        <tr>
	        	<td>
	            	<div class="tablecon1">
	                    <table class="table4" cellspacing="0">
	                        <tr>
	                            <td class="table4_td1" colspan="2">
	                                <span class="textstyle1">General Review Information</span>
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
	                                			<span class="textstyle10">Ticket Details</span>
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
	                            	Ticket ID:                                           </td>
	                          <td width="722" class="table4_td2a">
	                            	<span class="textstyle4">{$ticket.id}</span>
	                            </td>
	                      </tr>
	                        <tr>
	                            <td class="table4_td3a">
	                            	Review Item
	                            </td>
	                            <td class="table4_td3a">
	                            	{form_text name="page" size="40"}
	                            </td>
	                        </tr>
	                         <tr>
	                            <td class="table4_td3a">
	                            	URL
	                            </td>
	                            <td class="table4_td3a">
	                                {form_text name="page_url" size="40"}
	                            </td>
	                        </tr>
	                         <tr>
	                            <td class="table4_td3a">
	                            	Element Reviewed
	                            </td>
	                            <td class="table4_td3a">
	                            	{form_text name="tab" size="40"}
	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td3a">
	                            	Review Date
	                            </td>
	                            <td class="table4_td3a">
	                            	{form_text name="date" size="40"}
	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td3a">	                            	
	                            	Error Description
	                            </td>
	                            <td class="table4_td3a">
	                            	{form_text name="message" size="40"}
	                            </td>
	                        </tr>
	                        
	                          <tr>
	                            <td class="table4_td3a">	                            	
	                            	Suggested Fix
	                            </td>
	                            <td class="table4_td3a">
	                            	{form_text name="instructions" size="40"}
	                            </td>
	                        </tr>
	                        
	                        <tr>
	                            <td class="table4_td3a">	                            	
	                            	Priority
	                            </td>
	                            <td class="table4_td3a">
	                            	{form_text name="priority" size="40"}
	                            </td>
	                        </tr>
	                        
	                        <tr>
	                            <td class="table4_td3a">
	                            	Assignee
	                            </td>
	                            <td class="table4_td3a">
	                                {form_text name="user_id" size="40"}
	                            </td>
	                        </tr>
	                        
	                        <tr>
	                            <td class="table4_td3a">	                            	
	                            	Status
	                            </td>
	                            <td class="table4_td3a">
	                            	{form_text name="status" size="40"}
	                            </td>
	                        </tr>
	                        
	                        
	                    </table>
	                </div>
	            </td>
	        </tr>
	    </table>
	    <div class="spacer1">
	    	{form_hidden name="id"}
        	{form_submit name="submit" class="botton" value="   Update Ticket   " no_div=true} or 
    		{link_to href="/admin/projects/list" confirm="Are you sure you want to cancel?"}cancel{/link_to}
        </div>
	</div>
	<div class="midline_con_bot">
		&nbsp;
	</div>
</div>
{/form}