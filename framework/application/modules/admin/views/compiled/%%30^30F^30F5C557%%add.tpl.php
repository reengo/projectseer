<?php /* Smarty version 2.6.19, created on 2009-01-22 20:57:22
         compiled from /home/rex2chek/public_html/application/modules/admin/views/scripts/tickets/add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'form', '/home/rex2chek/public_html/application/modules/admin/views/scripts/tickets/add.tpl', 1, false),array('function', 'flash', '/home/rex2chek/public_html/application/modules/admin/views/scripts/tickets/add.tpl', 2, false),array('function', 'form_text', '/home/rex2chek/public_html/application/modules/admin/views/scripts/tickets/add.tpl', 66, false),array('function', 'form_select', '/home/rex2chek/public_html/application/modules/admin/views/scripts/tickets/add.tpl', 90, false),array('function', 'form_textarea', '/home/rex2chek/public_html/application/modules/admin/views/scripts/tickets/add.tpl', 98, false),array('function', 'form_hidden', '/home/rex2chek/public_html/application/modules/admin/views/scripts/tickets/add.tpl', 130, false),array('function', 'form_submit', '/home/rex2chek/public_html/application/modules/admin/views/scripts/tickets/add.tpl', 137, false),)), $this); ?>
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
	                                			<span class="textstyle10">Ticket Details</span>
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
	                            	Project Name
	                            </td>
	                            <td class="table4_td3a">
	                                <?php echo smarty_function_form_text(array('name' => 'page_remarks','size' => '40'), $this);?>

	                            </td>
	                        </tr>                       
	                        <tr>
	                            <td class="table4_td3a">
	                            	Review Item
	                            </td>
	                            <td class="table4_td3a">
	                                <?php echo smarty_function_form_text(array('name' => 'page','size' => '40'), $this);?>

	                            </td>
	                        </tr>
	                         <tr>
	                            <td class="table4_td3a">
	                            	URL
	                            </td>
	                            <td class="table4_td3a">
	                                <?php echo smarty_function_form_text(array('name' => 'page_url','size' => '40'), $this);?>

	                            </td>
	                        </tr>
	                         <tr>
	                            <td class="table4_td3a">
	                            	Element Reviewed
	                            </td>
	                            <td class="table4_td3a">
	                            	<?php echo smarty_function_form_select(array('name' => 'tab','options' => $this->_tpl_vars['element']), $this);?>

	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td3a">	                            	
	                            	Error Description
	                            </td>
	                            <td class="table4_td3a">
	                            	<?php echo smarty_function_form_textarea(array('name' => 'message','cols' => '30','rows' => '3'), $this);?>

	                            </td>
	                        </tr>
	                        
	                          <tr>
	                            <td class="table4_td3a">	                            	
	                            	Suggested Fix
	                            </td>
	                            <td class="table4_td3a">
	                            	<?php echo smarty_function_form_textarea(array('name' => 'instructions','cols' => '30','rows' => '3'), $this);?>

	                            </td>
	                        </tr>
	                        
	                        <tr>
	                            <td class="table4_td3a">	                            	
	                            	Priority
	                            </td>
	                            <td class="table4_td3a">
	                            	<?php echo smarty_function_form_select(array('name' => 'priority','options' => $this->_tpl_vars['priority']), $this);?>

	                            </td>
	                        </tr>
	                        
	                        <tr>
	                            <td class="table4_td3a">
	                            	Assignee
	                            </td>
	                            <td class="table4_td3a">
	                                <?php echo smarty_function_form_select(array('name' => 'user_id','options' => $this->_tpl_vars['users']), $this);?>

	                            </td>
	                        </tr>	         
	                        <tr>
	                        	<td class="table4_td3a">
	                        		<?php echo smarty_function_form_hidden(array('name' => 'tab','value' => 'layout'), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'form_id','value' => '1'), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'status','value' => 0), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'active','value' => 1), $this);?>

	                        	</td>
	                        	<td class="table4_td3a">
	                        	 
	                                <?php echo smarty_function_form_submit(array('name' => 'submit','value' => '  Post Ticket  '), $this);?>

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
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>