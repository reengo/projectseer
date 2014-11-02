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
	                        	<span class="textstyle3">View Role</span>
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
	                                <span class="textstyle1">Role Information</span>
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
	                                			<span class="textstyle10">Role</span>
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
									<table>
										 <tr>
				                            <td class="table4_td3a">
				                            	Role
				                            </td>
				                            <td class="table4_td3a">
				                                <span class="textstyle4">{$role.name}</span>
				                            </td>
				                        </tr>
				                        <tr>
				                            <td class="table4_td3a">
				                            	Description
				                            </td>
				                            <td class="table4_td3a">
				                                {$role.description|capitalize|default:'-'}
				                            </td>
				                        </tr>
				                        <tr>
				                            <td class="table4_td3a">
				                            	Inherited From
				                            </td>
				                            <td class="table4_td3a">
				                                {$role.parents|default:'-'}
				                            </td>
				                        </tr>
				                        <tr>
				                            <td class="table4_td3a">
				                            	Home Location
				                            </td>
				                            <td class="table4_td3a">
				                                {$role.home_location|default:'-'}
				                               
				                            </td>
				                        </tr>
				                        <tr>
				                        	<td colspan="2"> {form_button name="back" value="Back" class="botton" location="/admin/roles/list"}</td>
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