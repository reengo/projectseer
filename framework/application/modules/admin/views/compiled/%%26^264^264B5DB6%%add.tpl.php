<?php /* Smarty version 2.6.19, created on 2008-12-22 02:54:09
         compiled from /home/rex2chek/public_html/application/modules/admin/views/scripts/qat/add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'form', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/add.tpl', 1, false),array('block', 'link_to', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/add.tpl', 168, false),array('function', 'flash', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/add.tpl', 2, false),array('function', 'form_text', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/add.tpl', 64, false),array('function', 'form_select', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/add.tpl', 117, false),array('function', 'form_hidden', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/add.tpl', 165, false),array('function', 'form_submit', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/add.tpl', 167, false),)), $this); ?>
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
	                                			<span class="textstyle10">Review Info</span>
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
	                            	Title                                           </td>
	                          <td width="722" class="table4_td2a">
	                            	<?php echo smarty_function_form_text(array('name' => 'page','size' => '40'), $this);?>

	                            </td>
	                      </tr>
	                        <tr>
	                            <td class="table4_td3a">
	                            	Location
	                            </td>
	                            <td class="table4_td3a">
	                                <?php echo smarty_function_form_text(array('name' => 'url','size' => '40'), $this);?>

	                            </td>
	                        </tr>
	                         <tr>
	                            <td class="table4_td3a">
	                            	Procedure
	                            </td>
	                            <td class="table4_td3a">
	                                <?php echo smarty_function_form_text(array('name' => 'description','size' => '40'), $this);?>

	                            </td>
	                        </tr>
	                         <tr>
	                            <td class="table4_td3a">
	                            	Purpose
	                            </td>
	                            <td class="table4_td3a">
	                               <?php echo smarty_function_form_text(array('name' => 'remarks','size' => '40'), $this);?>

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
	                                			<span class="textstyle10">Primary Review</span>
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
	                                		<td class="table4_td1"><span class="textstyle1">Element</span></td>	                                		
	                                		<td width="5%" class="table4_td1"><span class="textstyle1">Rating</span></td>
	                                	</tr>
	                                	<tr>
	                                		<td class="table4_td2row2"><span class="textstyle5">Layout:</span> Overall look and design</td>
	                                		<td class="table4_td2row1"><?php echo smarty_function_form_select(array('name' => 'layout','options' => $this->_tpl_vars['rate'],'blank_text' => "-- please rate --"), $this);?>
</td>
	                                		
	                                	</tr>
	                                	<tr>
	                                		<td class="table4_td2row2"><span class="textstyle5">Rollover:</span> System's aestetic reaction to mouseover events</td>
	                                		<td class="table4_td2row1"><?php echo smarty_function_form_select(array('name' => 'rollover','options' => $this->_tpl_vars['rate'],'blank_text' => "-- please rate --"), $this);?>
</td>
	                                		
	                                	</tr>
	                                	<tr>
	                                		<td class="table4_td2row2"><span class="textstyle5">Animation:</span> Design's independently moving element.</td>
	                                		<td class="table4_td2row1"><?php echo smarty_function_form_select(array('name' => 'animation','options' => $this->_tpl_vars['rate'],'blank_text' => "-- please rate --"), $this);?>
</td>
	                                		
	                                	</tr>
	                                	<tr>
	                                		<td class="table4_td2row2"><span class="textstyle5">Forms:</span> All form elements such as text boxes and buttons.</td>
	                                		<td class="table4_td2row1"><?php echo smarty_function_form_select(array('name' => 'forms','options' => $this->_tpl_vars['rate'],'blank_text' => "-- please rate --"), $this);?>
</td>
	                                		
	                                	</tr>
	                                	<tr>
	                                		<td class="table4_td2row2"><span class="textstyle5">Linkage:</span> Links connecting to other pages within the item in review.</td>
	                                		<td class="table4_td2row1"><?php echo smarty_function_form_select(array('name' => 'link','options' => $this->_tpl_vars['rate'],'blank_text' => "-- please rate --"), $this);?>
</td>
	                                		
	                                	</tr>
	                                	<tr>
	                                		<td class="table4_td2row2"><span class="textstyle5">Source Code:</span> General code review results for the particular item in review</td>
	                                		<td class="table4_td2row1"><?php echo smarty_function_form_select(array('name' => 'source','options' => $this->_tpl_vars['rate'],'blank_text' => "-- please rate --"), $this);?>
</td>
	                                		
	                                	</tr>
	                                	<tr>
	                                		<td class="table4_td2row2"><span class="textstyle5">Action:</span> All processing events within the item in review. </td>
	                                		<td class="table4_td2row1"><?php echo smarty_function_form_select(array('name' => 'action','options' => $this->_tpl_vars['rate'],'blank_text' => "-- please rate --"), $this);?>
</td>
	                                		
	                                	</tr>
	                                	<tr>
	                                		<td class="table4_td2row2"><span class="textstyle5">Validation:</span> The initial reaction to the process taken.</td>
	                                		<td class="table4_td2row1"><?php echo smarty_function_form_select(array('name' => 'validation','options' => $this->_tpl_vars['rate'],'blank_text' => "-- please rate --"), $this);?>
</td>
	                                		
	                                	</tr>
	                                </table><br /><br />
	                            </td>
	                      </tr>                        
	                        
	                    </table>
	                </div>
	            </td>
	        </tr>
	    </table>
	    <div class="spacer1">
	    	<?php echo smarty_function_form_hidden(array('name' => 'form_id','value' => $this->_tpl_vars['formid']), $this);?>

	    	<?php echo smarty_function_form_hidden(array('name' => 'active','value' => '1'), $this);?>

        	<?php echo smarty_function_form_submit(array('name' => 'submit','class' => 'botton','value' => '    Continue    ','no_div' => true), $this);?>
 or 
    		<?php $this->_tag_stack[] = array('link_to', array('href' => "/admin/projects/list",'confirm' => "Are you sure you want to cancel?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
	</div>
	<div class="midline_con_bot">
		&nbsp;
	</div>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>