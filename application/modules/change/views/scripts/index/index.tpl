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
                                	<img src="../images/icon_warning.jpg" border="0" />
                                </td>
                                <td>
                                	<span class="textstyle3">CHANGE MANAGEMENT SYSTEM</span>
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
                    	Plug-ins are add-on modules to the REX2Check System enabling selectable enhancements for the REXCheck System and its functionalities. These plugins can be turned off by the administrator on the settings page. 
                    </td>
                </tr>
                <tr>
                	<td>
                    	<div class="tablecon1">
                            <table class="table4" cellspacing="0">
                                <tr>
                                    <td class="table4_td1" width="60">
                                        <span class="textstyle1">Req ID</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Project Name / Summary</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Initiator</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Process Owner</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Date Issued</span>
                                    </td>
                                    <td class="table4_td1" width="60">
                                        <span class="textstyle1">Status</span>
                                    </td>
                                    <td class="table4_td1" width="100">
                                        <span class="textstyle1">Actions</span>
                                    </td>
                                </tr>
                                {foreach item=item from=$results}
                                {assign var="id" value=$item.id}
                                <tr id="user-{$item.id}" class="table4_td2row{cycle values=1,2}">
                                	
                                    <td class="table4_td2">
                                    	<span class="textstyle3">{$item.request_id}</span>
                                    </td>
                                    <td class="table4_td2">
                                    	<span class="textstyle5">{$item.project}</span>
                                    	<br />
                                    	{$item.summary}
                                    </td>
                                    <td class="table4_td2">
                                    	{$item.initiator}
                                    </td>
                                    <td class="table4_td2">
                                    	{$item.owner}
                                    </td>
                                    <td class="table4_td2">
                                    	{$item.date_issued}
                                    </td>
                                    <td class="table4_td2">
                                    	{$item.status}
                                    </td>
                                    <td class="table4_td2a">
                                    	{link_to action="view" id=$item.id}view{/link_to} |
						       			{link_to action="edit" id=$item.id}edit{/link_to} |
						       			{link_to action="delete" id=$item.id confirm="Are you sure you want to delete this user?"}delete{/link_to}
						       			<br />
						       			{if $item.status|lower|strip_tags:false eq 'pending'}
						       				{link_to action="eva" id=$item.id}evaluate{/link_to}
						       			{/if}
						       			{if $item.status|lower|strip_tags:false eq 'evaluated'}
						       				{link_to action="app" id=$item.id}approve{/link_to}
						       			{/if}
						       			{if $item.status|lower|strip_tags:false eq 'approved'}
						       				{link_to action="confirmed" id=$item.id}confirm change{/link_to}
						       			{/if}
						        		
                                    </td>
                                </tr>
                                {foreachelse}
								<tr class="table4_td2">
								    <td colspan="9" align="center">No Projects were found.</td>
								</tr>
								{/foreach}
								<tr>
									<td colspan="8">
								{if $paginate.page_total > 1}
								
								<p class="textstyle7">Page {paginate_prev} {paginate_middle format="page" link_suffix=" | " prefix="" suffix=""} {paginate_next}</p>
	
								{/if}
									</td>
								</tr>
								
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="spacer1">       		
        		{form_button name="addchange" value="  add change request  " class="botton" no_div=true location="/change/index/add"}
        	</div>
        </div>
        <div class="midline_con_bot">
        	&nbsp;
        </div>
    </div>
</div>