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
        <div class="midline_con_top2">			
        	<div class="tab1">
            	{link_to class="linkstyle1" href="#"}QA GRID{/link_to}
            </div>
            <div class="tab2">
            	{link_to class="linkstyle1" href="qa/projects/viewqat/id/$formid"}PROJECT INFO{/link_to}
            </div>
            <div class="tab2">
            	{link_to class="linkstyle1" href="qa/qat/report/id/$formid"}REPORTS{/link_to}
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
                                	<img src="../../../../images/icon_warning.jpg" border="0" />
                                </td>
                                <td>
                                	<span class="textstyle3">{$project.project}</span><br />
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
                		Project Description: {$project.overall_remarks}<br /><br />
                		Project Status: <span class="textstyle4">{$project.status}</span>
                    </td>
                </tr>
                <tr>
                	<td>
                    	<div class="tablecon1">                    		
                            <table class="table4" cellspacing="0">
                                <tr>
                                    <td colspan="2" class="table4_td1">
                                    	&nbsp;   
                                    </td>
                                    <td class="table4_td1" colspan="4" align="center">                                        
                                        <span class="textstyle1">Front End</span>
                                    </td>
                                    <td class="table4_td1" colspan="4" align="center">                                        
                                        <span class="textstyle1">Backend</span>
                                    </td>
                                     <td class="table4_td1">
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table4_td1">
                                        &nbsp;
                                    </td>
                                    <td class="table4_td1" width="300">
                                        <span class="textstyle1">Page Title</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Layout</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Rollovers</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Animation</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Forms</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Linkage</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Codes</span>
                                    </td>
                                     <td class="table4_td1">
                                        <span class="textstyle1">Action</span>
                                    </td>
                                     <td class="table4_td1">
                                        <span class="textstyle1">Validation</span>
                                    </td>
                                     <td class="table4_td1" width="100">
                                        <span class="textstyle1">Actions</span>
                                    </td>
                                </tr>
                                {foreach item=item from=$results}
                                {assign var="id" value=$item.id}
                                <tr id="user-{$item.id}" class="table4_td2row{cycle values=1,2}">
                                	<td class="table4_td2">
                                    	{form_checkbox checked="no"} 
                                    </td>
                                    <td class="table4_td2">
                                    	<span class="textstyle5">{$item.page}</span><br />
                                    	<em>{$item.description}</em>
                                    	
                                    </td>
                                    <td class="table4_td2">
                                    	{$item.layout}
                                    </td>
                                    <td class="table4_td2">
                                    	{$item.rollover}
                                    </td>
                                    <td class="table4_td2">
                                    	{$item.animation}
                                    </td>
                                    <td class="table4_td2">
                                    	{$item.forms}
                                    </td>
                                    <td class="table4_td2">
                                    	{$item.link}
                                    </td>
                                    <td class="table4_td2">
                                    	{$item.source}
                                    </td>
                                    <td class="table4_td2">
                                    	{$item.action}
                                    </td>
                                    <td class="table4_td2">
                                    	{$item.validation}
                                    </td>
                                    <td class="table4_td2a">
                                    	{link_to action="view" id=$item.id}view{/link_to} |
						       			{link_to action="edit" id=$item.id}edit{/link_to} |
						        		{link_to action="delete" id=$item.id confirm="Are you sure you want to delete this user?"}delete{/link_to}
                                    </td>
                                </tr>
                                {foreachelse}
								<tr class="table4_td2">
								    <td colspan="11" align="center">No Reviews were found.</td>
								</tr>
								{/foreach}
								<tr>
									<td colspan="11">
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
        		{link_to action="add" id=$formid}Add Review Item{/link_to}
        	</div>
        </div>
        <div class="midline_con_bot">
        	&nbsp;
        </div>
    </div>
</div>