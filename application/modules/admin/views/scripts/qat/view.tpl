{flash}
<div class="midline_con">
	<div class="midline_con_top2">
		<div class="tab1">
        	{link_to class="linkstyle1" href="#"}Overview{/link_to}
        </div>
    	<div class="tab2">
        	{link_to class="linkstyle1" href="admin/qat/list/id/$qaid"}QA GRID{/link_to}
        </div>
        
        <div class="tab2">
        	{link_to class="linkstyle1" href="admin/projects/viewqat/id/$qaid"}PROJECT INFO{/link_to}
        </div>
        <div class="tab2">
        	{link_to class="linkstyle1" href="admin/qat/report/id/$qaid"}REPORTS{/link_to}
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
	                        	<img src="../../../../images/icon_folder.jpg" border="0" />
	                        </td>
	                        <td>
	                        	<span class="textstyle3">REVIEW INFORMATION</span>
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
	            	Detailed information regarding your review on this page is explained below.
	            </td>
	        </tr>
	        <tr>
	        	<td>
	            	<div class="tablecon1">
	                    <table class="table4" cellspacing="0">
	                        <tr>
	                            <td class="table4_td1" colspan="2">
	                                <span class="textstyle1">General Review Information</span>
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
	                                			<span class="textstyle10">Project Info</span>
	                                		</td>
	                                	</tr>
	                                </table>
	                                <div class="horlinefade1">	
	                					&nbsp;
	               					</div>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td width="125" class="table4_td2a">
	                            	Title                                           </td>
	                          <td width="722" class="table4_td2a">
	                            	{$qat.page}
	                            </td>
	                      </tr>
	                        <tr>
	                            <td class="table4_td3a">
	                            	Location
	                            </td>
	                            <td class="table4_td3a">
	                                {$qat.url}
	                            </td>
	                        </tr>
	                         <tr>
	                            <td class="table4_td3a">
	                            	Procedure
	                            </td>
	                            <td class="table4_td3a">
	                                {$qat.description}
	                            </td>
	                        </tr>
	                         <tr>
	                            <td class="table4_td3a">
	                            	Purpose
	                            </td>
	                            <td class="table4_td3a">
	                                {$qat.remarks}
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
	                                			<span class="textstyle10">Review Results</span>
	                                		</td>
	                                	</tr>
	                                </table>
	                                <div class="horlinefade1">	
	                					&nbsp;
	               					</div>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td2a" colspan="2">	                            	
	                            	<table width="100%" class="table6">
	                                	<tr>
	                                		<td width="40%" class="table4_td1"><span class="textstyle1">Element</span></td>
	                                		<td width="5%" class="table4_td1"><span class="textstyle1">Rating</span></td>
	                                	</tr>
	                                	<tr class="table4_td2row1">
	                                		<td><span class="textstyle5">Layout:</span> Overall look and design</td>
	                                		<td>{$qat.layout}</td>
	                                	</tr>
	                                	<tr class="table4_td2row2">
	                                		<td><span class="textstyle5">Rollover:</span> System's aestetic reaction to mouseover events</td>
	                                		<td>{$qat.rollover}</td>
	                                	</tr>
	                                	<tr class="table4_td2row1">
	                                		<td><span class="textstyle5">Animation:</span> Design's independently moving element.</td>
	                                		<td>{$qat.animation}</td>
	                                	</tr>
	                                	<tr class="table4_td2row2">
	                                		<td><span class="textstyle5">Forms:</span> All form elements such as text boxes and buttons.</td>
	                                		<td>{$qat.forms}</td>
	                                	</tr>
	                                	<tr class="table4_td2row1">
	                                		<td><span class="textstyle5">Linkage:</span> Links connecting to other pages within the item in review.</td>
	                                		<td>{$qat.link}</td>
	                                	</tr>
	                                	<tr class="table4_td2row2">
	                                		<td><span class="textstyle5">Source Code:</span> General code review results for the particular item in review</td>
	                                		<td>{$qat.source}</td>
	                                	</tr>
	                                	<tr class="table4_td2row1">
	                                		<td><span class="textstyle5">Action:</span> All processing events within the item in review. </td>
	                                		<td>{$qat.action}</td>
	                                	</tr>
	                                	<tr class="table4_td2row2">
	                                		<td><span class="textstyle5">Validation:</span> The initial reaction to the process taken.</td>
	                                		<td>{$qat.validation}</td>
	                                	</tr>
	                                </table><br /><br />
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
	                                			<span class="textstyle10">Tickets Issued</span>
	                                		</td>
	                                	</tr>
	                                </table>
	                                <div class="horlinefade1">	
	                					&nbsp;
	               					</div>
	                            </td>                  		
                            <table class="table4" cellspacing="0">
                            {foreach item=item from=$results}
                                {assign var="id" value=$item.id}
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
								    <td colspan="11" align="center">No tickets were issued.</td>
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
	</div>
	<div class="midline_con_bot">
		&nbsp;
	</div>
</div>