{form}
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
                        	<span class="textstyle3">Add Roles</span>
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
            	Management of global settings and configuration.
            </td>
        </tr>
        <tr>
        	<td>
            	<div class="tablecon1">
                    <table class="table4" cellspacing="0">
                        <tr>
                            <td class="table4_td1" colspan="2">
                                <span class="textstyle1">General Information</span>
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
                                			<span class="textstyle10">Project Information</span>
                                		</td>
                                	</tr>
                                </table>
                                <div class="horlinefade1">	
                					&nbsp;
               					</div>
                            </td>
                        </tr>
                        <tr>
						    <td width="10%" class="table4_td2a">Name:</td>
						    <td class="table4_td2a">{form_text name="name" size="40"}</td>
						</tr>
						<tr>
						    <td width="10%" class="table4_td2a">Description:</td>
						    <td class="table4_td2a">{form_text name="description" size="40"}</td>
						</tr>
						<tr>
						    <td width="10%" class="table4_td2a">Location:</td>
						    <td class="table4_td2a">{form_select name="location" options=$locations blank_text="-- no location --"}</td>
						</tr>
						<tr>
						    <td width="10%" class="table4_td2a">Parent:</td>
						    <td class="table4_td2a">{form_select name="parent" options=$roles blank_text="-- no parent --"}</td>
						</tr>
						<tr>
						    <td colspan="2" class="table4_td2a">{form_submit name="submit" class="botton" value="   Submit   " no_div=true} or 
    {link_to href="/admin/roles/list" confirm="Are you sure you want to cancel?"}cancel{/link_to}</td>
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