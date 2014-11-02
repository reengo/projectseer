{flash}


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
		            	Detailed user information
		            </td>
		        </tr>
		        <tr>
		        	<td>
						<table cellpadding="0" cellspacing="0" class="table4" width="100%">
						<tr>
							<td class="table1_td1">
								<table class="table2" cellspadding="0">
			                    	<tr>
			                        	<td class="table2_td1">
			                            	<img src="../../../../images/userpic.jpg" border="0" />
			                            </td>
			                        </tr>
			                        
			                        <tr>
			                        	<td class="table2_td2">
			                            	<span class="textstyle2">{$user.firstname} {$user.lastname}</span><br />
			                                <span class="textstyle1">{$user.position}</span><br />
			                                <span class="textstyle1">QAT Projects : 0</span><br />
			                            </td>
			                        </tr>			                        
			                    </table>
							</td>						
						    <td valign="top">
						    <div class="table3_td1">
						        <p><b><label>Username</label>: <span class="textstyle4">{$user.username}</span></b></p>
						        <p><label>Role</label>: {$user.role}</p>
						        <p><label>Firstname</label>: {$user.firstname|capitalize|default:'-'}</p>
						        <p><label>Lastname</label>: {$user.lastname|capitalize|default:'-'}</p>
						        <p><label>Email</label>: {$user.email|default:'-'}</p>
						        {form_button name="back" value="Back" class="botton" location="/admin/users/list"}
						    </div>
						    </td>
						</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
		<div class="midline_con_bot">
			&nbsp;
		</div>
	</div>
</div>