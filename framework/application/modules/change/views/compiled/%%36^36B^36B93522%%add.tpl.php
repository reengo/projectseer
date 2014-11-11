<?php /* Smarty version 2.6.19, created on 2008-11-18 10:41:07
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cchange%5Cviews%5Cscripts%5Cindex%5Cadd.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'form', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\add.tpl', 1, false),array('block', 'link_to', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\add.tpl', 142, false),array('function', 'flash', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\add.tpl', 2, false),array('function', 'form_text', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\add.tpl', 65, false),array('function', 'form_textarea', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\add.tpl', 83, false),array('function', 'form_select', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\add.tpl', 118, false),array('function', 'form_hidden', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\add.tpl', 138, false),array('function', 'form_submit', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\add.tpl', 141, false),)), $this); ?>
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
            	File a change request and monitor its progress.
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
                            <td class="table4_td3a" valign=top colspan="2">
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
                            <td width="125" class="table4_td2a" valign=top>
                            	Project Name                                           </td>
                          <td width="722" class="table4_td2a">                            	
                            	<?php echo smarty_function_form_text(array('name' => 'project','size' => '40'), $this);?>

                            	<div class="text-guide">Insert the name of the affected project on production.</div>
                            </td>
                        </tr>
                         <tr>
                            <td class="table4_td3a" valign=top>
                            	Short Name of Change Request
                            </td>
                            <td class="table4_td3a" valign=top>
                            	<?php echo smarty_function_form_text(array('name' => 'summary','size' => '40'), $this);?>

                            	<div class="text-guide">Please assign a shortname as the title for the project.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Brief Description of Change
                            </td>
                            <td class="table4_td3a" valign=top>
                            	<?php echo smarty_function_form_textarea(array('name' => 'detail','rows' => '5','cols' => '30'), $this);?>

                            	<div class="text-guide">Please define your instructions for the change.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top>
                            	Justification of Change
                            </td>
                            <td class="table4_td3a" valign=top>
                            	<?php echo smarty_function_form_textarea(array('name' => 'justification','rows' => '3','cols' => '30'), $this);?>

                            	<div class="text-guide">Please justify your change request by stating the reason for requesting.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a" valign=top colspan="2">
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
                            <td class="table4_td2a" valign=top>
                            	Project Manager
                            </td>
                            <td class="table4_td2a">
                            	<?php echo smarty_function_form_select(array('name' => 'manager','options' => $this->_tpl_vars['users']), $this);?>

                            	<div class="text-guide">Note: only registered users can be assigned as project manager for this request.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a" valign=top>
                            	Change Initiator
                            </td>
                            <td class="table4_td2a">
                            	<?php echo smarty_function_form_select(array('name' => 'initiator','options' => $this->_tpl_vars['users']), $this);?>

                            	<div class="text-guide">Note: please select your name on the list of registered users.</div>
                            </td>
                        </tr>  
                      
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <div class="spacer1">
    	<?php echo smarty_function_form_hidden(array('name' => 'owner','value' => '0'), $this);?>

    	<?php echo smarty_function_form_hidden(array('name' => 'active','value' => '1'), $this);?>

    	<?php echo smarty_function_form_hidden(array('name' => 'status','value' => '1'), $this);?>

		<?php echo smarty_function_form_submit(array('name' => 'submit','class' => 'botton','value' => '   Submit   ','no_div' => true), $this);?>
 or 
    	<?php $this->_tag_stack[] = array('link_to', array('href' => "/change/index/list",'confirm' => "Are you sure you want to cancel?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</div>
</div>
 <div class="midline_con_bot">
                	&nbsp;
                </div>
                </div>
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>