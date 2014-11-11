{flash}

{form}
<div class="midline_mid">
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
		            	Add a user
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
	                                			<span class="textstyle10">Project Info</span>
	                                		</td>
	                                	</tr>
	                                </table>
	                                <div class="horlinefade1">	
	                					&nbsp;
	               					</div>
	                            </td>
	                        </tr>
		        <tr>	
		        	<td>
						<table class="table-list1" cellpadding="0" cellspacing="0">
						 <tr>
	                            <td class="table4_td3a">
	                            	Username
	                            </td>
	                            <td class="table4_td3a">
	                               {form_text name="username" size="20"}
	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td3a">
	                            	Password
	                            </td>
	                            <td class="table4_td3a">
	                                {form_password name="password" size="20"}
	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td3a">
	                            	Confirm Password
	                            </td>
	                            <td class="table4_td3a">
	                                {form_password name="confirm_password" size="20"}<br /><br />
	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td3a">
	                            	First Name
	                            </td>
	                            <td class="table4_td3a">
	                                {form_text name="firstname" size="40"}
	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td3a">
	                            	Last Name
	                            </td>
	                            <td class="table4_td3a">
	                                {form_text name="lastname" size="40"}
	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td3a">
	                            	Email
	                            </td>
	                            <td class="table4_td3a">
	                                {form_text name="email" size="40"}
	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td3a">
	                            	Role
	                            </td>
	                            <td class="table4_td3a">
	                                {form_select name="role" options=$roles blank_text="-- select --"}<br /><br />
	                            </td>
	                        </tr>
	                        <tr>
		                        <td>&nbsp;</td>
							    <td align="left">
							    {form_submit name="submit" class="botton" value="   Submit   " no_div=true} or 
							    {link_to href="/admin/users/list" confirm="Are you sure you want to cancel?"}cancel{/link_to}
							    </td>
							</tr>						
						</table>
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