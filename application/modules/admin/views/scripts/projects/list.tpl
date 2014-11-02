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
{$acl.role_id}

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
                                	<img src="../../images/icon_warning.jpg" border="0" />
                                </td>
                                <td>
                                	<span class="textstyle3">QA PROJECTS</span>
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
                    	Quality Assurance Testing (QAT) forms display the results of the quality assurance testing officer, below is a list of QAT review under your supervision. Please be reminded that only the Project Manager can add projects for review.
                    </td>
                </tr>
                <tr>
                	<td>
                    	<div class="tablecon1">
                            <table class="table4" cellspacing="0">
                                <tr>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Project Name</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Project Manager</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Project Developer</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Review Date</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Errors</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">QAT Status</span>
                                    </td>
                                    <td class="table4_td1" width="120">
                                        <span class="textstyle1">Actions</span>
                                    </td>
                                </tr>
                                {foreach item=item from=$results}
                                {assign var="id" value=$item.id}
                                <tr id="user-{$item.id}" class="table4_td2row{cycle values=1,2}">
                                	
                                    <td class="table4_td2">
                                    	<span class="textstyle5">{$item.project}</span><br />
                                    	<em>{$item.overall_remarks}</em>
                                    </td>
                                    <td class="table4_td2">
                                    	{$item.project_manager}
                                    </td>
                                    <td class="table4_td2">
                                    	{$item.project_developer}
                                    </td>
                                    <td class="table4_td2">
                                    	{$item.review_date}
                                    </td>
                                    <td class="table4_td2">
                                    	{$item.revisions}
                                    </td>
                                    <td class="table4_td2">
                                    	{$item.status}
                                    </td>
                                    <td class="table4_td2a">
                                    {if $item.test_type eq "uat"}
                                    	{link_to controller="uat" id=$item.id}review{/link_to} |
                                    	{else}
                                    	{link_to controller="qat" id=$item.id}review{/link_to} |
                                    {/if}
						       			{link_to action="edit" id=$item.id}edit{/link_to} |
						        		{link_to action="delete" id=$item.id confirm="Are you sure you want to delete this user?"}delete{/link_to}
                                    </td>
                                </tr>
                                {foreachelse}
								<tr class="table4_td2">
								    <td colspan="8" align="center">No Projects were found.</td>
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
        		{form_button name="addproject" value="  add project  " class="botton" no_div=true location="/admin/projects/add"}
        	</div>
        </div>
        <div class="midline_con_bot">
        	&nbsp;
        </div>
    </div>
</div>