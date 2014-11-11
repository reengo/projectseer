{flash}
{form}
<div class="midline_mid">
    <div class="midline_con">
        <div class="midline_con_top">	&nbsp;
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
                                	<img src="../../../../images/icon_warning.jpg" border="0" />
                                </td>
                                <td>
                                	<span class="textstyle3">{$description}</span><br />
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
						<table cellpadding="0" cellspacing="0" width="100%" class="table4">
						<tr>
						    <td width="125" class="table4_td2">Resource name:</td>
						    <td class="table4_td2">
						    <span class="textstyle4"">{$resource.name}</span>
						    </td>
						</tr>
						<tr>
						    <td class="table4_td2" valign="top">Privileges:</td>
						    <td class="table4_td2">
						    {foreach item=item key=privilege_name from=$privileges}
						        {form_checkbox name="privilege[$privilege_name]" text=$item value=$privilege_name}
						    {/foreach}
						    </td>
						</tr>
						<tr>
							<td>
						
						<br>
						<label>&nbsp;</label>
						{assign var="role_id" value=$resource.role_id}
						{form_hidden name="id"}
						{form_submit name="submit" class="botton" value="   Update   " no_div=true} or 
						{link_to href="/admin/roles/view-add-resource/id/$role_id" confirm="Are you sure you want to cancel?"}cancel{/link_to}
						{/form}
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
