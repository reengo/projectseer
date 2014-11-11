{literal}
<script language="javascript">
function effectOnFocus(dom)
{
    dom.setStyle({color:'#000000'});
    if (dom.value == 'search ...') {
        dom.value = '';
    }
}

function effectOnBlur(dom)
{
    dom.setStyle({color:'#707070'});
    if (dom.value == '') {
        dom.value = 'search ...';
    }
}
</script>
{/literal}

{flash}
<div class="midline_con">
	<div class="midline_con_top2">
		<div class="tab2">
        	{link_to class="linkstyle1" href="admin/settings"}General{/link_to}
        </div>
    	<div class="tab2">
        	{link_to class="linkstyle1" href="admin/settings/notice"}Notifications{/link_to}
        </div>
        
        <div class="tab2">
        	{link_to class="linkstyle1" href="admin/roles"}Roles{/link_to}
        </div>
        <div class="tab1">
        	{link_to class="linkstyle1" href="#"}Plugins{/link_to}
        </div>
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
		                        	<span class="textstyle3">Plug-ins</span>
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
		            	Tasklists are revision tickets set from QAT results made by the QAT officers. Project Managers' role is to review, approve and distribute these tasks to the developer and confirm the revisions made. Project Managers are also the only usergroup that can close a QAT tasklist.
		            </td>
		        </tr>
		        
			<tr>
				<td>
					<div class="tablecon1">
					<table border="0" cellpadding="0" cellspacing="1" class="table4">
					<tr>
					    <td class="table4_td1" width="20%"><span class="textstyle1">plug-in title</span></td>
					    <td class="table4_td1" width="30%"><span class="textstyle1">desription</span></td>
					    <td class="table4_td1" width="20%"><span class="textstyle1">installation date</span></td>
					    <td class="table4_td1" width="15%"><span class="textstyle1">status</span></td>
					    <td class="table4_td1" width="15%"><span class="textstyle1">actions</span></td>
					</tr>
					{foreach item=item from=$results}
					{assign var="id" value=$item.id}
					<tr id="role-{$item.id}" class="table4_td2row{cycle values=1,2}">
					    <td class="table4_td2">{$item.name}</td>
					    <td class="table4_td2">{$item.description|capitalize|default:'-'}</td>
					    {if $item.name eq "admin"}
					        <td class="table4_td2">-</td>
					        <td class="table4_td2">UNLIMITED ACCESS</td>
					        <td class="table4_td2">{link_to action="view" id=$item.id}view{/link_to}</td>
					    {else}
					        <td class="table4_td2">{display_roleinherited parents=$item.inherited_from}</td>
					        <td class="table4_td2">{link_to href="/admin/roles/view-add-resource/id/$id"}view/add resources{/link_to}</td>
					        <td class="table4_td2">
					        {link_to action="view" id=$item.id}view{/link_to} |
					        {link_to action="edit" id=$item.id}edit{/link_to} |
					        {link_to action="delete" id=$item.id confirm="Are you sure you want to delete this role?"}delete{/link_to}
					        </td>
					    {/if}
					</tr>
					{foreachelse}
					<tr class="row-color2">
					    <td colspan="5" align="center">No Plugins were found.</td>
					</tr>
					{/foreach}
					</table>
					
					{if $paginate.page_total > 1}
					<div class="list-control">
					    <br>
						<p>Page {paginate_prev} {paginate_middle format="page" link_suffix=" | " prefix="" suffix=""} {paginate_next}</p>
					</div>
					{/if}
					
					</div>
					</div>
					{form_submit name="Add Plugin"}
		            </td>
		        </tr>
		    </table>
		</div>
		<div class="midline_con_bot">
			&nbsp;
		</div>
	</div>
