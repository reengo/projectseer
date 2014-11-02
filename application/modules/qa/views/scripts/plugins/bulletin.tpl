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
                            	<img src="images/icon_warning.jpg" border="0" />
                            </td>
                            <td>
                            	<span class="textstyle3">ANNOUNCEMENTS</span>
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
                	Administrative announcements and other system generated notices
                </td>
            </tr>
            <tr>
            	<td>
                	<div class="tablecon1">
                        <table class="table4" cellspacing="0">
                            <tr>
                                <td class="table4_td1" width="100">
                                    <span class="textstyle1">Posted By</span>
                                </td>
                                <td class="table4_td1">
                                    <span class="textstyle1">Message</span>
                                </td>
                                <td class="table4_td1">
                                    <span class="textstyle1">Date</span>
                                </td>
                            </tr>
                            {foreach item=item from=$results}
                            {assign var="id" value=$item.id}
                            <tr id="user-{$item.id}" class="table4_td2row{cycle values=1,2}">
                            	<td class="table4_td2">
                                	{$item.name}
                                </td>
                                <td class="table4_td2">
                                    {$item.message}
                                </td>
                                <td class="table4_td2a">
                                	{$item.date}
                                </td>
                            </tr>
                            {foreachelse}
							<tr class="table4_td2">
							    <td colspan="8" align="center">No Announcements were found.</td>
							</tr>
							{/foreach}
							<tr>
								<td colspan="8">
							{if $paginate.page_total > 1}
							<span class="textstyle7">Page {paginate_prev} {paginate_middle format="page" link_suffix=" | " prefix="" suffix=""} {paginate_next}</p>
							
							{/if}
								</td>
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