{flash}

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
                	<td align="right">
						{assign var="id" value=$__PARAMS.id}
						{form_button name="add" value="  add resource  " class="botton" location="/admin/roles/add-resource/id/$id" no_div=true}{form_button name="back" value="  back  " class="botton" location="/admin/roles/list" no_div=true}<br><br>
						<div class="tablecon1">
						<table cellpadding="0" cellspacing="1" class="table4">
						<tr>
						    <td class="table4_td1" width="20%"><span class="textstyle1">resources</span></td>
						    <td class="table4_td1" width="55%"><span class="textstyle1">privileges</span></td>
						    <td class="table4_td1" width="15%"><span class="textstyle1">actions</span></td>
						</tr>
						{foreach item=item from=$results}
						<tr id="resource-{$item.id}" class="table4_td2row{cycle values=1,2}">
						    <td class="table4_td2">{$item.name}</td>
						    <td class="table4_td2">
						        {if $item.privilege}
						            {if strlen($item.privilege) > 60}
						            <div id="privilege-truncated-{$item.id}">
						                {$item.privilege|truncate:60} [ <a href="javascript:;" onclick="$('privilege-truncated-{$item.id}').hide(); $('privilege-{$item.id}').show(); return false;">expand</a> ]
						            </div>
						            <div id="privilege-{$item.id}" style="display:none;">
						                {$item.privilege} [ <a href="javascript:;" onclick="$('privilege-truncated-{$item.id}').show(); $('privilege-{$item.id}').hide(); return false;">close</a> ]
						            </div>
						            {else}
						                {$item.privilege}
						            {/if}
						        {else}
						            -- NO ACCESS --
						        {/if}
						    </td>
						    <td class="table4_td2">
						    {link_to action="edit-resource" id=$item.id}edit{/link_to} | {link_to action="delete-resource" id=$item.id confirm="Are you sure you want to delete this resource?"}delete{/link_to}
						    </td>
						</tr>
						{foreachelse}
						<tr>
						    <td class="table4_td2" colspan="3" align="center">-- NO ACCESS TO ALL RESOURCES --</td>
						</tr>
						{/foreach}
						</table>
						
						{if $paginate.page_total > 1}
						<div class="list-control">
						    <br>
							<p>Page {paginate_prev} {paginate_middle format="page" link_suffix=" | " prefix="" suffix=""} {paginate_next}</p>
						</div>
						{/if}
						</table>
						</td>
                </tr>
            </table>
        </div>
        <div class="midline_con_bot">
        	&nbsp;
        </div>
   
</div>