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
                        	<img src="../../../../images/icon_folder.jpg" border="0" />
                        </td>
                        <td>
                        	<span class="textstyle3">{$description}{$project.project}</span>
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
{assign var="id" value=$__PARAMS.id}
    
<table cellpadding="0" cellspacing="0" width="100%" class="table4">
<tr>
    <td class="table4_td2a" width="150">Resources:</td>
    <td class="table4_td2a">
    {form_select name="resource_name" options=$resources blank_text="-- select --" location="/admin/roles/add-resource/id/$id/resource/" redirect_if_value=true}
    </td>
</tr>
{if is_array($privileges) and count($privileges)}
<tr>
    <td class="table4_td2a" valign="top">Priviledges:</td>
    <td class="table4_td2a">
    {foreach item=item key=privilege_name from=$privileges}
        {form_checkbox name="privilege[$privilege_name]" text=$item value=$privilege_name}
    {/foreach}
    </td>
</tr>
{/if}
</table>

<br>
<label>&nbsp;</label>

</table>
            </td>
        </tr>
    </table>
    <div class="spacer1">
		{form_hidden name="role_id"}
		{form_submit name="submit" class="botton" value="   Add   " no_div=true} or 
		{link_to href="/admin/roles/view-add-resource/id/$id" confirm="Are you sure you want to cancel?"}cancel{/link_to}

	</div>
</div>
 <div class="midline_con_bot">
                	&nbsp;
                </div>
                {/form}