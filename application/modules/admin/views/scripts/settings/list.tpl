{form}

<div class="midline_con">
 <div class="midline_con_top2">
		<div class="tab1">
        	{link_to class="linkstyle1" href="#"}General{/link_to}
        </div>
    	<div class="tab2">
        	{link_to class="linkstyle1" href="admin/settings/notice"}Notifications{/link_to}
        </div>
        
        <div class="tab2">
        	{link_to class="linkstyle1" href="admin/roles/"}Roles{/link_to}
        </div>
        <div class="tab2">
        	{link_to class="linkstyle1" href="admin/plugins/list"}Plugins{/link_to}
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
                        	<span class="textstyle3">ADMINISTRATIVE SETTINGS</span>
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
                                <span class="textstyle1">Configure Settings</span>
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
                                			<span class="textstyle10">Logo</span>
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
                            	Site Theme                                            </td>
                          <td width="722" class="table4_td2a">
                            	{form_text name="theme" size="40" nodiv=true} 
                                <span class="textstyle6">*</span>
                            </td>
                      </tr>
                        <tr>
                            <td class="table4_td3a">
                            	Base URL
                            </td>
                            <td class="table4_td3a">
                            	{form_text name="base_url" size="40" nodiv=true}
                                <span class="textstyle6">*</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a">
                            	Main Stylesheet
                            </td>
                            <td class="table4_td3a">
                            	{form_text name="stylesheet" size="40" nodiv=true}
                                <span class="textstyle6">*</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a">
                            	Secondary Stylesheet
                            </td>
                            <td class="table4_td3a">
                            	{form_text name="stylesheet_inner" size="40" nodiv=true}
                                <span class="textstyle6">*</span>
                            </td>
                        </tr>
                         <tr>
                            <td class="table4_td3a">
                            	Install Date
                            </td>
                            <td class="table4_td3a">
                            	{form_text name="install_date" size="40" nodiv=true}
                                <span class="textstyle6">*</span>
                            </td>
                        </tr>
                        <br />
                        <br />
                        <tr>
                            <td class="table4_td3a" colspan="2">
                                <div class="horlinefade1">	
                					&nbsp;
               					</div>
                                <table>
                                	<tr>
                                    	<td>
                                			<span class="textstyle10">Administrator Settings</span>
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
                            	System Admin
                            </td>
                            <td class="table4_td2a">
                            	{form_text name="system_admin" size="40" nodiv=true}
                                <span class="textstyle6">*</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Company Name
                            </td>
                            <td class="table4_td2a">
                            	{form_text name="company_name" size="40" nodiv=true}
                                <span class="textstyle6">*</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a">
                            	Webmaster Email
                            </td>
                            <td class="table4_td3a">
                            	{form_text name="system_email" size="40" nodiv=true}
                                <span class="textstyle6">*</span>
                            </td>
                        </tr>
                    </table>
                    {form_submit name="submit" value="  Update Settings  "}
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