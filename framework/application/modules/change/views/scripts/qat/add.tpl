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
	                                			<span class="textstyle10">Primary Review</span>
	                                		</td>
	                                	</tr>
	                                </table>
	                                <div class="horlinefade1">	
	                					&nbsp;
	               					</div>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td2a" colspan="2">
	                            	<table width="100%" class="table6">
	                                	<tr>
	                                		<td class="table4_td1"><span class="textstyle1">Element</span></td>	                                		
	                                		<td width="5%" class="table4_td1"><span class="textstyle1">Rating</span></td>
	                                	</tr>
	                                	<tr>
	                                		<td class="table4_td2row2"><span class="textstyle5">Layout:</span> Overall look and design</td>
	                                		<td class="table4_td2row1">{form_select name="layout" options=$rate blank_text="-- please rate --"}</td>
	                                		
	                                	</tr>
	                                	<tr>
	                                		<td class="table4_td2row2"><span class="textstyle5">Rollover:</span> System's aestetic reaction to mouseover events</td>
	                                		<td class="table4_td2row1">{form_select name="rollover" options=$rate blank_text="-- please rate --"}</td>
	                                		
	                                	</tr>
	                                	<tr>
	                                		<td class="table4_td2row2"><span class="textstyle5">Animation:</span> Design's independently moving element.</td>
	                                		<td class="table4_td2row1">{form_select name="animation" options=$rate blank_text="-- please rate --"}</td>
	                                		
	                                	</tr>
	                                	<tr>
	                                		<td class="table4_td2row2"><span class="textstyle5">Forms:</span> All form elements such as text boxes and buttons.</td>
	                                		<td class="table4_td2row1">{form_select name="forms" options=$rate blank_text="-- please rate --"}</td>
	                                		
	                                	</tr>
	                                	<tr>
	                                		<td class="table4_td2row2"><span class="textstyle5">Linkage:</span> Links connecting to other pages within the item in review.</td>
	                                		<td class="table4_td2row1">{form_select name="link" options=$rate blank_text="-- please rate --"}</td>
	                                		
	                                	</tr>
	                                	<tr>
	                                		<td class="table4_td2row2"><span class="textstyle5">Source Code:</span> General code review results for the particular item in review</td>
	                                		<td class="table4_td2row1">{form_select name="source" options=$rate blank_text="-- please rate --"}</td>
	                                		
	                                	</tr>
	                                	<tr>
	                                		<td class="table4_td2row2"><span class="textstyle5">Action:</span> All processing events within the item in review. </td>
	                                		<td class="table4_td2row1">{form_select name="action" options=$rate blank_text="-- please rate --"}</td>
	                                		
	                                	</tr>
	                                	<tr>
	                                		<td class="table4_td2row2"><span class="textstyle5">Validation:</span> The initial reaction to the process taken.</td>
	                                		<td class="table4_td2row1">{form_select name="validation" options=$rate blank_text="-- please rate --"}</td>
	                                		
	                                	</tr>
	                                </table>
	                            </td>
	                      </tr>                        
	                        
	                    </table>
	                </div>
	            </td>
	        </tr>
	    </table>
	    <div class="spacer1">
	    	{form_hidden name="form_id" value=$formid}
	    	{form_hidden name="active" value="1"}
        	{form_submit name="submit" class="botton" value="    Continue    " no_div=true} or 
    		{link_to href="/admin/projects/list" confirm="Are you sure you want to cancel?"}cancel{/link_to}
        </div>
	</div>
	<div class="midline_con_bot">
		&nbsp;
	</div>
</div>
{/form}