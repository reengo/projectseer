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
	                            <td class="table4_td3a">
	                            	Project Name
	                            </td>
	                            <td class="table4_td3a">
	                                {form_text name="page_remarks" size="40"}
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
	                            	{form_select name="tab" options=$element}
	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td3a">	                            	
	                            	Error Description
	                            </td>
	                            <td class="table4_td3a">
	                            	{form_textarea name="message" cols="30" rows="3"}
	                            </td>
	                        </tr>
	                        
	                          <tr>
	                            <td class="table4_td3a">	                            	
	                            	Suggested Fix
	                            </td>
	                            <td class="table4_td3a">
	                            	{form_textarea name="instructions" cols="30" rows="3"}
	                            </td>
	                        </tr>
	                        
	                        <tr>
	                            <td class="table4_td3a">	                            	
	                            	Priority
	                            </td>
	                            <td class="table4_td3a">
	                            	{form_select name="priority" options=$priority}
	                            </td>
	                        </tr>
	                        
	                        <tr>
	                            <td class="table4_td3a">
	                            	Assignee
	                            </td>
	                            <td class="table4_td3a">
	                                {form_select name="user_id" options=$users}
	                            </td>
	                        </tr>	         
	                        <tr>
	                        	<td class="table4_td3a">
	                        		{form_hidden name=tab value="layout"}
	                                {form_hidden name="form_id" value="1"}
	                                {form_hidden name="status" value=0}
	                                {form_hidden name="active" value=1}
	                        	</td>
	                        	<td class="table4_td3a">
	                        	 
	                                {form_submit name="submit" value="  Post Ticket  "}
	                        	</td>
	                        </tr>                                    
	                        
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
{/form}