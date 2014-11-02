
{form}
{flash}
<div class="midline_con">
	<div class="midline_con_top2">
        
    	<div class="tab2">
        	{link_to class="linkstyle1" href="admin/qat/list/id/$formid"}QA GRID{/link_to}
        </div>
        <div class="tab1">
        	{link_to class="linkstyle1" href="#"}PROJECT INFO{/link_to}
        </div>
        <div class="tab2">
        	{link_to class="linkstyle1" href="admin/qat/report/id/$formid"}REPORTS{/link_to}
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
                        <tr>
                            <td width="125" class="table4_td2a">
                            	Project Name                                           </td>
                          <td width="722" class="table4_td2a">       
                            	{$project.project}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a">
                            	Project Division
                            </td>
                            <td class="table4_td3a">
                            	{$project.project_division}
                            </td>
                        </tr>
                         <tr>
                            <td class="table4_td3a">
                            	Project Description
                            </td>
                            <td class="table4_td3a">
                            	{$project.overall_remarks}
                            </td>
                        </tr
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
                            	{$project.project_manager}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Project Coordinator
                            </td>
                            <td class="table4_td2a">
                            	{$project.project_coordinator}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	QAT Officer
                            </td>
                            <td class="table4_td2a">
                            	{$project.qat_officer}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	QAT Initiator
                            </td>
                            <td class="table4_td2a">
                            	{$project.qat_supervisor}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Lead Developer
                            </td>
                            <td class="table4_td2a">
                            	{$project.project_developer}
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
                                			<span class="textstyle10">Testing Information</span>
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
                            	Test Login Type
                            </td>
                            <td class="table4_td2a">
                            	{$project.test_type}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Test Username
                            </td>
                            <td class="table4_td2a">
                            	{$project.test_login}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Test Password
                            </td>
                            <td class="table4_td2a">
                            	{$project.test_pass}
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Test Remarks
                            </td>
                            <td class="table4_td2a">
                            	{$project.test_remarks}
                            	<br />
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
                {/form}