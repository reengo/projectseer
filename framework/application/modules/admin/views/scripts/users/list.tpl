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
		            	Tasklists are revision tickets set from QAT results made by the QAT officers. Project Managers' role is to review, approve and distribute these tasks to the developer and confirm the revisions made. Project Managers are also the only usergroup that can close a QAT tasklist.
		            </td>
		        </tr>
		        <tr>
		        	<td>
		        		<table width="100%">
		        			<tr>
					        	<td class="table5_td1">
					            	{form method="get"}
									{form_text name="search" value="search ..." size="30" no_div=true onfocus="effectOnFocus(this)" onblur="effectOnBlur(this);" style="color:#707070"}
									{form_submit name="submitsearch" value="search" class="botton" no_div=true}
									{/form}
					            </td>
					            <td align="right">
								{form_button name="adduser" value="  add user  " class="botton" no_div=true location="/admin/users/add"}
								</td>
							</tr>
						</table>
					</td>
		        </tr>
		        <tr>
		        	<td>
		            	<div class="tablecon1">
						<table class="table4" cellspacing="0">
						<tr>
							<td class="table4_td1" width="60" align="center"><span class="textstyle1">Avatar</span></td>
						    
						    <td class="table4_td1"><span class="textstyle1">Name</span></td>
						    <td class="table4_td1"><span class="textstyle1">Email</span></td>
						    <td class="table4_td1"><span class="textstyle1">Role</span></td>
						    <td class="table4_td1" width="100"><span class="textstyle1">Actions</span></td>
						</tr>
						{foreach item=item from=$results}
						{assign var="id" value=$item.id}
						<tr id="user-{$item.id}" class="table4_td2row{cycle values=1,2}">
							<td class="table4_td2"><img src="../../images/userpic.jpg" width="50" height="50" /></td>
						    
						    <td class="table4_td2">{$item.firstname} {$item.lastname}</td>
						    <td class="table4_td2">{$item.email}</td>
						    <td class="table4_td2"><span class="textstyle5">{$item.role|default:'-'}</span></td>
						    {if $item.username eq "admin"}
						        <td class="table4_td2">
						        {link_to action="sendpass" id=$item.id}send password{/link_to} |
						        {link_to action="view" id=$item.id}view{/link_to} |
						        {link_to action="change-password" id=$item.id}change password{/link_to}
						        </td>
						    {else}
						        <td class="table4_td2">
						        {link_to action="view" id=$item.id}view{/link_to} |
						        {link_to action="edit" id=$item.id}edit{/link_to} |
						        {link_to action="delete" id=$item.id confirm="Are you sure you want to delete this user?"}delete{/link_to}
						        </td>
						    {/if}
						</tr>
						{foreachelse}
						<tr class="row-color2">
						    <td colspan="5" align="center">No Users were found.</td>
						</tr>
						{/foreach}
						</table>
				
						{if $paginate.page_total > 1}
						<div class="list-control">
						    <br>
							<p>Page {paginate_prev} {paginate_middle format="page" link_suffix=" | " prefix="" suffix=""} {paginate_next}</p>
						</div>
						{/if}
						</td>
		            </td>
		        </tr>
		    </table>
		</div>
		<div class="midline_con_bot">
			&nbsp;
		</div>
	</div>
</div>