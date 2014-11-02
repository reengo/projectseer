<?php /* Smarty version 2.6.19, created on 2008-11-10 08:24:47
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cadmin%5Cviews%5Cscripts%5Cprojects%5Cadd.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'form', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\projects\\add.tpl', 1, false),array('block', 'link_to', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\projects\\add.tpl', 190, false),array('function', 'flash', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\projects\\add.tpl', 2, false),array('function', 'form_text', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\projects\\add.tpl', 64, false),array('function', 'form_textarea', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\projects\\add.tpl', 82, false),array('function', 'form_select', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\projects\\add.tpl', 108, false),array('function', 'form_password', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\projects\\add.tpl', 167, false),array('function', 'form_hidden', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\projects\\add.tpl', 187, false),array('function', 'form_submit', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\projects\\add.tpl', 189, false),)), $this); ?>
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
                        	<img src="../../images/icon_folder.jpg" border="0" />
                        </td>
                        <td>
                        	<span class="textstyle3"><?php echo $this->_tpl_vars['description']; ?>
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
                            <td class="table4_td3a" valign="top" colspan="2">
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
                            <td width="125" class="table4_td2a" valign="top">
                            	Project Name                                           </td>
                          <td width="722" class="table4_td2a" valign="top">                            	
                            	<?php echo smarty_function_form_text(array('name' => 'project','size' => '40'), $this);?>
 
                            	<div class="text-guide">Name your QA Project.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign="top">
                            	Project Division
                            </td>
                            <td class="table4_td3a" valign="top">
                            	<?php echo smarty_function_form_text(array('name' => 'project_division','size' => '40'), $this);?>
 
                            	<div class="text-guide">Please state where the project is categorized into. </div>
                            </td>
                        </tr>
                         <tr>
                            <td class="table4_td3a" valign="top">
                            	Project Description
                            </td>
                            <td class="table4_td3a" valign="top">
                            	<?php echo smarty_function_form_textarea(array('name' => 'overall_remarks','rows' => '3','cols' => '30'), $this);?>

                            	<div class="text-guide">A short description of the project.</div>
                            </td>
                        </tr
                        <tr>
                            <td class="table4_td3a" valign="top" colspan="2">
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
                            <td class="table4_td2a" valign="top">
                            	Project Manager
                            </td>
                            <td class="table4_td2a" valign="top">
                            	<?php echo smarty_function_form_select(array('name' => 'project_manager','options' => $this->_tpl_vars['users']), $this);?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign="top">
                            	Lead Developer
                            </td>
                            <td class="table4_td2a" valign="top">
                            	<?php echo smarty_function_form_select(array('name' => 'project_developer','options' => $this->_tpl_vars['users']), $this);?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign="top">
                            	QAT Officer
                            </td>
                            <td class="table4_td2a" valign="top">
                            	<?php echo smarty_function_form_select(array('name' => 'qat_officer','options' => $this->_tpl_vars['users']), $this);?>

                            </td>
                        </tr>        
                        <tr>
                            <td class="table4_td3a" valign="top" colspan="2">
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
                            <td class="table4_td2a" valign="top">
                            	Test Login Type
                            </td>
                            <td class="table4_td2a" valign="top">
                            	<?php echo smarty_function_form_text(array('name' => 'test_type','size' => '40'), $this);?>

                            	<div class="text-guide">Please specify what type of login was used. (e.g. web, mobile, local)</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign="top">
                            	Test Username
                            </td>
                            <td class="table4_td2a" valign="top">
                            	<?php echo smarty_function_form_text(array('name' => 'test_login','size' => '40'), $this);?>

                            	<div class="text-guide">Please specify what username was used for testing.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign="top">
                            	Test Password
                            </td>
                            <td class="table4_td2a" valign="top">
                            	<?php echo smarty_function_form_password(array('name' => 'test_pass','size' => '40'), $this);?>

                            	<div class="text-guide">Please specify what password was used.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign="top">
                            	Test Notes
                            </td>
                            <td class="table4_td2a" valign="top">
                            	<?php echo smarty_function_form_textarea(array('name' => 'test_remarks','rows' => '3','cols' => '30'), $this);?>

                            	<div class="text-guide">Please note of any comment you can add on the testing info.</div>
                            	<br />
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <div class="spacer1">
    	<?php echo smarty_function_form_hidden(array('name' => 'active','value' => '1'), $this);?>

    	<?php echo smarty_function_form_hidden(array('name' => 'status','value' => 'Pending'), $this);?>

		<?php echo smarty_function_form_submit(array('name' => 'submit','class' => 'botton','value' => '   Submit   ','no_div' => true), $this);?>
 or 
    	<?php $this->_tag_stack[] = array('link_to', array('href' => "/admin/projects/list",'confirm' => "Are you sure you want to cancel?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</div>
</div>
 <div class="midline_con_bot">
                	&nbsp;
                </div>
                </div>
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>