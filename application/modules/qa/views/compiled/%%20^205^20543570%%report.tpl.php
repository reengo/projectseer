<?php /* Smarty version 2.6.19, created on 2008-10-27 11:15:19
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cqa%5Cviews%5Cscripts%5Cqat%5Creport.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'flash', 'C:\\xampp\\htdocs\\check\\application\\modules\\qa\\views\\scripts\\qat\\report.tpl', 1, false),array('function', 'form_button', 'C:\\xampp\\htdocs\\check\\application\\modules\\qa\\views\\scripts\\qat\\report.tpl', 214, false),array('function', 'form_textarea', 'C:\\xampp\\htdocs\\check\\application\\modules\\qa\\views\\scripts\\qat\\report.tpl', 240, false),array('block', 'link_to', 'C:\\xampp\\htdocs\\check\\application\\modules\\qa\\views\\scripts\\qat\\report.tpl', 5, false),)), $this); ?>
<?php echo smarty_function_flash(array(), $this);?>

<div class="midline_con">
	<div class="midline_con_top2">
    	<div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "qa/qat/list/id/".($this->_tpl_vars['id']))); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>QA GRID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        
        <div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "qa/projects/viewqat/id/".($this->_tpl_vars['id']))); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>PROJECT INFO<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        <div class="tab1">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "#")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>REPORTS<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
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
	                        	<span class="textstyle3">REVIEW REPORT</span>
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
	                            <td width="150" class="table4_td2a">
	                            	Current Status                                        </td>
	                          <td width="770" class="table4_td2a">
	                            	<span class="textstyle4"><?php echo $this->_tpl_vars['project']['status']; ?>
</span>
	                            </td>
	                      </tr>
	                        <tr>
	                            <td class="table4_td3a">
	                            	Total Pass
	                            </td>
	                            <td class="table4_td3a">
	                                0
	                            </td>
	                        </tr>
	                         <tr>
	                            <td class="table4_td3a">
	                            	Total Fail
	                            </td>
	                            <td class="table4_td3a">
	                                0
	                            </td>
	                        </tr>
	                         <tr>
	                            <td class="table4_td3a">
	                            	Total Unrated
	                            </td>
	                            <td class="table4_td3a">
	                                0
	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td3a">
	                            	Total Tickets 
	                            </td>
	                            <td class="table4_td3a">
	                                0
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
	                                			<span class="textstyle10">Detailed Element Review Results</span>
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
	                                		<td width="30%" class="table4_td1"><span class="textstyle1">Comment</span></td>
	                                		<td class="table4_td1"><span class="textstyle1">Total Errors</span></td>
	                                		<td class="table4_td1"><span class="textstyle1">Total Rated</span></td>
	                                		<td width="5%" class="table4_td1"><span class="textstyle1">Rating</span></td>
	                                	</tr>
	                                	<tr class="table4_td2row1">
	                                		<td><span class="textstyle5">Layout:</span> Overall look and design</td>
	                                		<td>--</td>
	                                		<td>0</td>
	                                		<td>0</td>
	                                		<td>100%</td>
	                                	</tr>
	                                	<tr class="table4_td2row2">
	                                		<td><span class="textstyle5">Rollover:</span> System's aestetic reaction to mouseover events</td>
	                                		<td>--</td>
	                                		<td>0</td>
	                                		<td>0</td>
	                                		<td>100%</td>
	                                	</tr>
	                                	<tr class="table4_td2row1">
	                                		<td><span class="textstyle5">Animation:</span> Design's independently moving element.</td>
	                                		<td>--</td>
	                                		<td>0</td>
	                                		<td>0</td>
	                                		<td>100%</td>
	                                	</tr>
	                                	<tr class="table4_td2row2">
	                                		<td><span class="textstyle5">Forms:</span> All form elements such as text boxes and buttons.</td>
	                                		<td>--</td>
	                                		<td>0</td>
	                                		<td>0</td>
	                                		<td>100%</td>
	                                	</tr>
	                                	<tr class="table4_td2row1">
	                                		<td><span class="textstyle5">Linkage:</span> Links connecting to other pages within the item in review.</td>
	                                		<td>--</td>
	                                		<td>0</td>
	                                		<td>0</td>
	                                		<td>100%</td>
	                                	</tr>
	                                	<tr class="table4_td2row2">
	                                		<td><span class="textstyle5">Source Code:</span> General code review results for the particular item in review</td>
	                                		<td>--</td>
	                                		<td>0</td>
	                                		<td>0</td>
	                                		<td>100%</td>
	                                	</tr>
	                                	<tr class="table4_td2row1">
	                                		<td><span class="textstyle5">Action:</span> All processing events within the item in review. </td>
	                                		<td>--</td>
	                                		<td>0</td>
	                                		<td>0</td>
	                                		<td>100%</td>
	                                	</tr>
	                                	<tr class="table4_td2row2">
	                                		<td><span class="textstyle5">Validation:</span> The initial reaction to the process taken.</td>
	                                		<td>--</td>
	                                		<td>0</td>
	                                		<td>0</td>
	                                		<td>100%</td>
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
	                                			<span class="textstyle10">Export Data</span>
	                                		</td>
	                                	</tr>
	                                </table>
	                                <div class="horlinefade1">	
	                					&nbsp;
	               					</div>
	                            </td>
	                        </tr>
	                        
	                        <tr>
	                        	<td class="table4_td3a">
	                        		<?php echo smarty_function_form_button(array('name' => 'excel','value' => '  Export to Excel   ','no_div' => true,'location' => "#"), $this);?>

	                        		<?php echo smarty_function_form_button(array('name' => 'pdf','value' => '  Export to PDF   ','no_div' => true,'location' => "#"), $this);?>

	                        	</td>
	                        	<td></td>
	                        </tr>
	                         <tr>
	                            <td class="table4_td3a" colspan="2">
	                                <div class="horlinefade1">	
	                					&nbsp;
	               					</div>
	                                <table>
	                                	<tr>
	                                    	<td>
	                                			<span class="textstyle10">Update Review Status</span>
	                                		</td>
	                                	</tr>
	                                </table>
	                                <div class="horlinefade1">	
	                					&nbsp;
	               					</div>
	                            </td>
	                        </tr>
	                        <?php if ($this->_tpl_vars['project']['final_remarks']): ?>
	                        <?php else: ?>
	                        <tr>
	                        	<td class="table4_td3a">
	                        		&nbsp;&nbsp;&nbsp;<?php echo smarty_function_form_textarea(array('name' => 'final_remarks','value' => "-- Final Remarks --",'cols' => '40','rows' => '4'), $this);?>

	                        	</td>
	                        	<td></td>
	                        </tr>
	                        <?php endif; ?>
	                       <tr>
	                            <td class="table4_td3a" colspan="2">
	                            	<?php echo smarty_function_form_button(array('name' => 'continue','value' => '  continue review   ','class' => 'botton','no_div' => true,'location' => "admin/qat/list/id/".($this->_tpl_vars['qaid'])), $this);?>

	                            	<?php echo smarty_function_form_button(array('name' => 'finalize','value' => '  finalize   ','class' => 'botton','no_div' => true,'location' => "/admin/qat/finalize"), $this);?>

	                            </td>
	                               
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