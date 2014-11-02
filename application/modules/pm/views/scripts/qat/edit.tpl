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
	                        	<span class="textstyle3">{$description}{$review.page}</span>
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
	            	Project Description: {$review.remarks}
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
	                                			<span class="textstyle10">Review Info</span>
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
	                            	Title                                           </td>
	                          <td width="722" class="table4_td2a">
	                            	{form_text name="page" size="40"}
	                            </td>
	                      </tr>
	                        <tr>
	                            <td class="table4_td3a">
	                            	Location
	                            </td>
	                            <td class="table4_td3a">
	                                {form_text name="url" size="40"}
	                            </td>
	                        </tr>
	                         <tr>
	                            <td class="table4_td3a">
	                            	Procedure
	                            </td>
	                            <td class="table4_td3a">
	                                {form_text name="description" size="40"}
	                            </td>
	                        </tr>
	                         <tr>
	                            <td class="table4_td3a">
	                            	Purpose
	                            </td>
	                            <td class="table4_td3a">
	                               {form_text name="remarks" size="40"}
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
	                                			<span class="textstyle10">Review Results</span>
	                                		</td>
	                                	</tr>
	                                </table>
	                                <div class="horlinefade1">	
	                					&nbsp;
	               					</div>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td3a" colspan="2">
	                                <table width="100%" class="table6">
	                                	<tr>
	                                		<td width="40%" class="table4_td1"><span class="textstyle1">Element</span></td>
	                                		<td width="55%" class="table4_td1"><span class="textstyle1">Comment</span></td>
	                                		<td width="5%" class="table4_td1"><span class="textstyle1">Rating</span></td>
	                                	</tr>
	                                	<tr class="table4_td2row1">
	                                		<td><span class="textstyle5">Layout:</span> Overall look and design</td>
	                                		<td>--</td>
	                                		<td>{form_text name="layout" size="3"}</td>
	                                	</tr>
	                                	<tr class="table4_td2row2">
	                                		<td><span class="textstyle5">Rollover:</span> System's aestetic reaction to mouseover events</td>
	                                		<td>--</td>
	                                		<td>{form_text name="rollover" size="3"}</td>
	                                	</tr>
	                                	<tr class="table4_td2row1">
	                                		<td><span class="textstyle5">Animation:</span> Design's independently moving element.</td>
	                                		<td>--</td>
	                                		<td>{form_text name="animation" size="3"}</td>
	                                	</tr>
	                                	<tr class="table4_td2row2">
	                                		<td><span class="textstyle5">Forms:</span> All form elements such as text boxes and buttons.</td>
	                                		<td>--</td>
	                                		<td>{form_text name="forms" size="3"}</td>
	                                	</tr>
	                                	<tr class="table4_td2row1">
	                                		<td><span class="textstyle5">Linkage:</span> Links connecting to other pages within the item in review.</td>
	                                		<td>--</td>
	                                		<td>{form_text name="link" size="3"}</td>
	                                	</tr>
	                                	<tr class="table4_td2row2">
	                                		<td><span class="textstyle5">Source Code:</span> General code review results for the particular item in review</td>
	                                		<td>--</td>
	                                		<td>{form_text name="source" size="3"}</td>
	                                	</tr>
	                                	<tr class="table4_td2row1">
	                                		<td><span class="textstyle5">Action:</span> All processing events within the item in review. </td>
	                                		<td>--</td>
	                                		<td>{form_text name="action" size="3"}</td>
	                                	</tr>
	                                	<tr class="table4_td2row2">
	                                		<td><span class="textstyle5">Validation:</span> The initial reaction to the process taken.</td>
	                                		<td>--</td>
	                                		<td>{form_text name="validation" size="3"}</td>
	                                	</tr>
	                                </table>
	                            </td>
	                        </tr>
	                        
	                        <tr>
	                            <td class="table4_td2a" colspan="2">
	                            	{link_to action="edit" id=$qaid confirm="Repeating the review will overwrite your previous review, proceed?"}Restart Review{/link_to}
	                            </td>
	                      </tr>  
	                                 
	                    </table>
	                </div>
	            </td>
	        </tr>
	    </table>
	    <div class="spacer1">
	    	{form_hidden name="id"}
        	{form_submit name="submit" class="botton" value="   Update Review page   " no_div=true} or 
    		{link_to href="/admin/projects/list" confirm="Are you sure you want to cancel?"}cancel{/link_to}
        </div>
	</div>	
	<div class="midline_con_bot">
		&nbsp;
	</div>
</div>
{/form}