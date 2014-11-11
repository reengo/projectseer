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
	                                			<span class="textstyle10">Change Password</span>
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
							    <td class="table4_td3a">Username</td>
							    <td class="table4_td3a">{$user.username}</td>
							</tr>
							<tr>
							    <td class="table4_td3a">New Password</td>
							    <td class="table4_td3a">{form_password name="new_password" size="20"}</td>
							</tr>
							<tr>
							    <td class="table4_td3a">Confirm Password</td>
							    <td class="table4_td3a">{form_password name="confirm_password" size="20"}</td>
							</tr>
							<tr>
							    <td class="table4_td3a">&nbsp;</td>
							    <td class="table4_td3a">
							    {form_submit name="submit" class="botton" value="   Submit   " no_div=true} or 
							    {if $user.username eq "admin"}
							        {link_to href="/admin/users/list" confirm="Are you sure you want to cancel?"}cancel{/link_to}
							    {else}
							        {assign var="user_id" value=$user.id}
							        {link_to href="/admin/users/edit/id/$user_id" confirm="Are you sure you want to cancel?"}cancel{/link_to}
							    {/if}
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