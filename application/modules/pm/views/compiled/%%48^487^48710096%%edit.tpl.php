<?php /* Smarty version 2.6.19, created on 2009-01-25 23:41:28
         compiled from /home/rex2chek/public_html/application/modules/pm/views/scripts/projects/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'form', '/home/rex2chek/public_html/application/modules/pm/views/scripts/projects/edit.tpl', 1, false),array('block', 'link_to', '/home/rex2chek/public_html/application/modules/pm/views/scripts/projects/edit.tpl', 181, false),array('function', 'flash', '/home/rex2chek/public_html/application/modules/pm/views/scripts/projects/edit.tpl', 2, false),array('function', 'form_text', '/home/rex2chek/public_html/application/modules/pm/views/scripts/projects/edit.tpl', 64, false),array('function', 'form_textarea', '/home/rex2chek/public_html/application/modules/pm/views/scripts/projects/edit.tpl', 80, false),array('function', 'form_password', '/home/rex2chek/public_html/application/modules/pm/views/scripts/projects/edit.tpl', 162, false),array('function', 'form_submit', '/home/rex2chek/public_html/application/modules/pm/views/scripts/projects/edit.tpl', 180, false),)), $this); ?>
<?php $this->_tag_stack[] = array('form', array()); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php echo smarty_function_flash(array(), $this);?>

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
                        	<img src="../../../../images/icon_folder.jpg" border="0" />
                        </td>
                        <td>
                        	<span class="textstyle3"><?php echo $this->_tpl_vars['description']; ?>
<?php echo $this->_tpl_vars['project']['project']; ?>
</span>
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
                            	<?php echo smarty_function_form_text(array('name' => 'project','size' => '40'), $this);?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a">
                            	Project Division
                            </td>
                            <td class="table4_td3a">
                            	<?php echo smarty_function_form_text(array('name' => 'project_division','size' => '40'), $this);?>

                            </td>
                        </tr>
                         <tr>
                            <td class="table4_td3a">
                            	Project Description
                            </td>
                            <td class="table4_td3a">
                            	<?php echo smarty_function_form_textarea(array('name' => 'overall_remarks','rows' => '3','cols' => '30'), $this);?>

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
                            	<?php echo $this->_tpl_vars['project']['project_manager']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	QAT Officer
                            </td>
                            <td class="table4_td2a">
                            	<?php echo $this->_tpl_vars['project']['qat_officer']; ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Lead Developer
                            </td>
                            <td class="table4_td2a">
                            	<?php echo $this->_tpl_vars['project']['project_developer']; ?>

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
                            	<?php echo smarty_function_form_text(array('name' => 'test_type','size' => '40'), $this);?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Test Username
                            </td>
                            <td class="table4_td2a">
                            	<?php echo smarty_function_form_text(array('name' => 'test_login','size' => '40'), $this);?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Test Password
                            </td>
                            <td class="table4_td2a">
                            	<?php echo smarty_function_form_password(array('name' => 'test_pass','size' => '40'), $this);?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Test Remarks
                            </td>
                            <td class="table4_td2a">
                            	<?php echo smarty_function_form_textarea(array('name' => 'test_remarks','rows' => '3','cols' => '30'), $this);?>

                            	<br />
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <div class="spacer1">
		<?php echo smarty_function_form_submit(array('name' => 'submit','class' => 'botton','value' => '   Update Project   ','no_div' => true), $this);?>
 or 
    	<?php $this->_tag_stack[] = array('link_to', array('href' => "/admin/projects/list",'confirm' => "Are you sure you want to cancel?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</div>
</div>
 <div class="midline_con_bot">
                	&nbsp;
                </div>
                </div>
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>