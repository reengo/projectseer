<?php /* Smarty version 2.6.19, created on 2008-10-23 14:33:39
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cadmin%5Cviews%5Cscripts%5Ctickets%5Cedit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'form', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\tickets\\edit.tpl', 1, false),array('block', 'link_to', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\tickets\\edit.tpl', 154, false),array('function', 'flash', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\tickets\\edit.tpl', 2, false),array('function', 'form_text', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\tickets\\edit.tpl', 73, false),array('function', 'form_hidden', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\tickets\\edit.tpl', 152, false),array('function', 'form_submit', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\tickets\\edit.tpl', 153, false),)), $this); ?>
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
	                        	<span class="textstyle3">TICKET INFORMATION</span>
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
	                            <td width="125" class="table4_td2a">
	                            	Ticket ID:                                           </td>
	                          <td width="722" class="table4_td2a">
	                            	<span class="textstyle4"><?php echo $this->_tpl_vars['ticket']['id']; ?>
</span>
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
	                            	<?php echo smarty_function_form_text(array('name' => 'tab','size' => '40'), $this);?>

	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td3a">
	                            	Review Date
	                            </td>
	                            <td class="table4_td3a">
	                            	<?php echo smarty_function_form_text(array('name' => 'date','size' => '40'), $this);?>

	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td3a">	                            	
	                            	Error Description
	                            </td>
	                            <td class="table4_td3a">
	                            	<?php echo smarty_function_form_text(array('name' => 'message','size' => '40'), $this);?>

	                            </td>
	                        </tr>
	                        
	                          <tr>
	                            <td class="table4_td3a">	                            	
	                            	Suggested Fix
	                            </td>
	                            <td class="table4_td3a">
	                            	<?php echo smarty_function_form_text(array('name' => 'instructions','size' => '40'), $this);?>

	                            </td>
	                        </tr>
	                        
	                        <tr>
	                            <td class="table4_td3a">	                            	
	                            	Priority
	                            </td>
	                            <td class="table4_td3a">
	                            	<?php echo smarty_function_form_text(array('name' => 'priority','size' => '40'), $this);?>

	                            </td>
	                        </tr>
	                        
	                        <tr>
	                            <td class="table4_td3a">
	                            	Assignee
	                            </td>
	                            <td class="table4_td3a">
	                                <?php echo smarty_function_form_text(array('name' => 'user_id','size' => '40'), $this);?>

	                            </td>
	                        </tr>
	                        
	                        <tr>
	                            <td class="table4_td3a">	                            	
	                            	Status
	                            </td>
	                            <td class="table4_td3a">
	                            	<?php echo smarty_function_form_text(array('name' => 'status','size' => '40'), $this);?>

	                            </td>
	                        </tr>
	                        
	                        
	                    </table>
	                </div>
	            </td>
	        </tr>
	    </table>
	    <div class="spacer1">
	    	<?php echo smarty_function_form_hidden(array('name' => 'id'), $this);?>

        	<?php echo smarty_function_form_submit(array('name' => 'submit','class' => 'botton','value' => '   Update Ticket   ','no_div' => true), $this);?>
 or 
    		<?php $this->_tag_stack[] = array('link_to', array('href' => "/admin/projects/list",'confirm' => "Are you sure you want to cancel?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
	</div>
	<div class="midline_con_bot">
		&nbsp;
	</div>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>