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




<div class="midline_con">	
	<div class="midline_con_top">
    &nbsp;
    </div>
    <div class="midline_con_mid">{flash}
        <table class="table1">
        	<tr>
            	<td class="table1_td1">
                	<table class="table2" cellspadding="0">
                    	<tr>
                        	<td class="table2_td1">
                            	<img src="images/userpic.jpg" border="0" />
                            </td>
                        </tr>
                        
                        <tr>
                        	<td class="table2_td2">
                            	<span class="textstyle2">{$user.firstname} {$user.lastname}</span><br />
                                <span class="textstyle1">{$user.position}</span><br />
                                <span class="textstyle1">QAT Projects : 0</span><br />
                            </td>
                        </tr>
                        
                    </table>
                </td>
                <td valign="top">
                	<table class="table3" cellspadding="0">
                    	<tr>
                        	<td class="table3_td1">
                            	<div class="horlinefade1">
                                	&nbsp;
                                </div>
                                	<table>
                                    	<tr>
                                        	<td>	
                                            	<img src="images/icon_clipboard.jpg" />
                                            </td>
                                            <td>
                                            	<span class="textstyle3">DASHBOARD</span>
                                            </td>
                                        </tr>
                                    </table>
                                <div class="horlinefade1">
                                	&nbsp;
                                </div>
                                <br /><br />
                                Welcome &nbsp;<span class="textstyle4">{$user.firstname} {$user.lastname}</span>.<br /><br />
                                You are a System Administrator, you are responsible for the<br />
administration and configuration of the entire QAT system.<br /><br />
Your privileges are as follows:
								<ul>
                                	<li>
                                    	Create user accounts
                                    </li>
                                    <li>
                                    	Have full control over QAT projects and tasklists
                                    </li>
                                    <li>
                                    	Manage and add QAT projects
                                    </li>
                                    <li>
                                    	View, add, edit, and delete QAT Projects
                                    </li>
                                    <li>
                                    	Dispatch tasklists for the development team
                                    </li>
                                    <li>
                                    	Setup system configuration and setting of the entire QAT<br />
                                        management
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
              </td>
          </tr>
        </table>
    </div>
    <div class="midline_con_bot">
        &nbsp;
    </div>
</div>
<br />
{include file="scripts/index/bulletin.tpl" }
