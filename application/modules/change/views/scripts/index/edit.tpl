
{form}
{flash}
<div class="midline_con">
	<div class="midline_con_top2">
        
    	<div class="tab1">
        	{link_to class="linkstyle1" href="#"}OVERVIEW{/link_to}
        </div>
        <div class="tab2">
        	{link_to class="linkstyle1" href="change/index/eva/id/$change_id"}EVALUATION{/link_to}
        </div>
        <div class="tab2">
        	{link_to class="linkstyle1" href="change/index/approve/id/$change_id"}APPROVAL{/link_to}
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
            	View details on Change Requests issued by the Change Manager.
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
                                			<span class="textstyle10">Change Information</span>
                                		</td>
                                	</tr>
                                </table>
                                <div class="horlinefade1">	
                					&nbsp;
               					</div>
                            </td>
                        </tr>
                        <tr>
                            <td width="50" class="table4_td2a">
                            	Request Number                                       </td>
                          <td width="722" class="table4_td2a">                            	
                          	<span class="textstyle3">{$change.request_id}</span>
                            </td>
                        </tr>
                        <tr>
                            <td width="125" class="table4_td2a">
                            	Project Name                                           </td>
                          <td width="722" class="table4_td2a">                            	
                            	{form_text name=project size="80"}
                            </td>
                        </tr>
                         <tr>
                            <td class="table4_td3a">
                            	Short Name of Change Request
                            </td>
                            <td class="table4_td3a">
                            	{form_text name=summary size="80"}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a">
                            	Brief Description of Change
                            </td>
                            <td class="table4_td3a">
                            	{form_textarea name=detail rows="5" cols="60"}<br />
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a">
                            	Justification of Change
                            </td>
                            <td class="table4_td3a">
                            	{form_textarea name=justification rows="5" cols="60"}<br />
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
                                			<span class="textstyle10">People and Resources</span>
                                		</td>
                                	</tr>
                                </table>
                                <div class="horlinefade1">	
                					&nbsp;
               					</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Project Manager
                            </td>
                            <td class="table4_td2a">
                            	{$change.manager} | {link_to href="#"}change{/link_to}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Change Initiator
                            </td>
                            <td class="table4_td2a">
                            	{$change.initiator} | {link_to href="#"}change{/link_to}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Assignee / Process Owner
                            </td>
                            <td class="table4_td2a">
                            	{$change.owner} | {link_to href="#"}change{/link_to}
                            </td>
                        </tr>        
                      
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <div class="spacer1">
    	{form_hidden name="active" value="1"}
    	{form_hidden name="status" value="1"}
		{form_submit name="submit" class="botton" value="   Submit   " no_div=true} or 
    	{link_to href="/change/index/list" confirm="Are you sure you want to cancel?"}cancel{/link_to}
	</div>
</div>
 <div class="midline_con_bot">
                	&nbsp;
                </div>
                </div>
                {/form}