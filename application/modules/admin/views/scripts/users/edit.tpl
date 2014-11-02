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
		            	Change your password
		            </td>
		        </tr>
		        <tr>
	        	<td>
	            	<div class="tablecon1">
	                    <table class="table4" cellspacing="0">
	                        <tr>
	                            <td class="table4_td1" colspan="2">
	                                <span class="textstyle1">Profile Update</span>
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
	                                			<span class="textstyle10">Change Profile</span>
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
<table cellpadding="0" cellspacing="0" class="table4">
<tr>
    <td class="table4_td3a">Username</td>
    <td class="table4_td3a">{form_text name="username" size="20"}</td>
</tr>
<tr>
    <td class="table4_td3a">Password</td>
    <td class="table4_td3a">{link_to action="change-password" id=$__PARAMS.id}change password{/link_to}</td>
</tr>
<tr><td style="height:10px">&nbsp;</td></tr>
<tr>
    <td class="table4_td3a">Firstname</td>
    <td class="table4_td3a">{form_text name="firstname" size="40"}</td>
</tr>
<tr>
    <td class="table4_td3a">Lastname</td>
    <td class="table4_td3a">{form_text name="lastname" size="40"}</td>
</tr>
<tr>
    <td class="table4_td3a">Email</td>
    <td class="table4_td3a">{form_text name="email" size="40"}</td>
</tr>
<tr>
    <td class="table4_td3a">Role</td>
    <td class="table4_td3a">{form_select name="role" options=$roles blank_text="-- select --"}</td>
</tr>
<tr>
    <td class="table4_td3a">&nbsp;</td>
    <td class="table4_td3a">
    {form_submit name="submit" class="botton" value="   Update   " no_div=true} or 
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