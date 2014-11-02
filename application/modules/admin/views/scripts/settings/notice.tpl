{form}
<div class="midline_con">
 <div class="midline_con_top2">
		<div class="tab2">
        	{link_to class="linkstyle1" href="admin/settings"}General{/link_to}
        </div>
    	<div class="tab1">
        	{link_to class="linkstyle1" href="#"}Notifications{/link_to}
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
                        	<span class="textstyle3">NOTIFICATION SETTINGS</span>
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
                                			<span class="textstyle10">System Notice</span>
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
                            	System Name                                          </td>
                          <td width="722" class="table4_td2a">
                                {form_text name="sender" size="40"}
                            </td>
                      </tr>
                        <tr>
                            <td width="125" class="table4_td2a">
                            	System Email                                           </td>
                          <td width="722" class="table4_td2a">
                                {form_text name="sender_email" size="40"}
                            </td>
                      </tr>
                        <tr>
                            <td class="table4_td3a">
                            	BCC Reciepients
                            </td>
                            <td class="table4_td3a">
                                {form_checkbox name="email[]" value="maner@i-pay.com.ph" checked="yes"}
                                {form_checkbox name="email[]" value="debi.santos@i-pay.com.ph" checked="yes"}
                                {form_checkbox name="email[]" value="mark.soriano@i-pay.com.ph" checked="yes"}
                                {form_checkbox name="email[]" value="ringo.bautista@i-pay.com.ph"}
                                {link_to href="#"}Add Recipients{/link_to}<br /><br />
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
                                			<span class="textstyle10">QAT Project Initiation Notice</span>
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
                            	Title                                         </td>
                          <td width="722" class="table4_td2a">
                            	{form_text name="name"} 
                            </td>
                      </tr>
                        <tr>
                            <td width="125" class="table4_td2a">
                            	Subject                                         </td>
                          <td width="722" class="table4_td2a">
                            	{form_text name="subject"} 
                            </td>
                      </tr>
                      <tr>
                            <td width="125" class="table4_td2a">
                            	Content                                          </td>
                          	<td width="722" class="table4_td2a">
                            	{form_textarea name="body" cols="40" rows="4" value=""}
                            </td>
                      </tr>
					  <tr>
                            <td width="125" class="table4_td2a">
                            	Template                                   </td>
                          	<td width="722" class="table4_td2a">
                            	{form_text name="template" size="40"}
                            </td>
                      </tr>
                      
                      
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <div class="spacer1">
		{form_submit name="submit" value="   Save Settings   "}
	</div>
</div>
 <div class="midline_con_bot">
                	&nbsp;
                </div>
                </div>
                
                {/form}