<?php /* Smarty version 2.6.19, created on 2008-11-21 03:14:29
         compiled from /home/rex2chek/public_html/application/modules/pm/views/scripts/index/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'flash', '/home/rex2chek/public_html/application/modules/pm/views/scripts/index/index.tpl', 28, false),)), $this); ?>
<?php echo '
<script language="javascript">
function effectOnFocus(dom)
{
    dom.setStyle({color:\'#000000\'});
    if (dom.value == \'search ...\') {
        dom.value = \'\';
    }
}

function effectOnBlur(dom)
{
    dom.setStyle({color:\'#707070\'});
    if (dom.value == \'\') {
        dom.value = \'search ...\';
    }
}
</script>
'; ?>





<div class="midline_con">	
	<div class="midline_con_top">
    &nbsp;
    </div>
    <div class="midline_con_mid"><?php echo smarty_function_flash(array(), $this);?>

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
                            	<span class="textstyle2"><?php echo $this->_tpl_vars['user']['firstname']; ?>
 <?php echo $this->_tpl_vars['user']['lastname']; ?>
</span><br />
                                <span class="textstyle1"><?php echo $this->_tpl_vars['user']['position']; ?>
</span><br />
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
                                Welcome &nbsp;<span class="textstyle4"><?php echo $this->_tpl_vars['user']['firstname']; ?>
 <?php echo $this->_tpl_vars['user']['lastname']; ?>
</span>.<br /><br />
                                You are a Project Manager, you are responsible for the<br />
distribution, and issuance and maintenance of tickets for the Lead Developer.<br /><br />
Your privileges are as follows:
								<ul>
                                	<li>
                                    	Issue Tickets
                                    </li>
                                    <li>
                                    	Overall mamagement of QAT Tickets
                                    </li>
                                    <li>
                                    	Confirmation of revised QAT Tickets
                                    </li>
                                    <li>
                                    	Finalize reports of completed revisions for QAT projects
                                    </li>
                                    <li>
                                    	Assign, reassign and replace assignees for QAT Tickets
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "scripts/index/bulletin.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>