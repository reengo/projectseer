<?php /* Smarty version 2.6.19, created on 2008-10-27 13:45:52
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cdev%5Cviews%5Cscripts%5Ctickets%5Cview-detail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'flash', 'C:\\xampp\\htdocs\\check\\application\\modules\\dev\\views\\scripts\\tickets\\view-detail.tpl', 1, false),)), $this); ?>
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
	                                <?php echo $this->_tpl_vars['ticket']['page']; ?>

	                            </td>
	                        </tr>
	                         <tr>
	                            <td class="table4_td3a">
	                            	URL
	                            </td>
	                            <td class="table4_td3a">
	                                <?php echo $this->_tpl_vars['ticket']['page_url']; ?>

	                            </td>
	                        </tr>
	                         <tr>
	                            <td class="table4_td3a">
	                            	Element Reviewed
	                            </td>
	                            <td class="table4_td3a">
	                            	<?php echo $this->_tpl_vars['ticket']['tab']; ?>

	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td3a">
	                            	Review Date
	                            </td>
	                            <td class="table4_td3a">
	                            	<?php echo $this->_tpl_vars['ticket']['date']; ?>

	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td3a">	                            	
	                            	Error Description
	                            </td>
	                            <td class="table4_td3a">
	                            	<?php echo $this->_tpl_vars['ticket']['message']; ?>

	                            </td>
	                        </tr>
	                        
	                          <tr>
	                            <td class="table4_td3a">	                            	
	                            	Suggested Fix
	                            </td>
	                            <td class="table4_td3a">
	                            	<?php echo $this->_tpl_vars['ticket']['instructions']; ?>

	                            </td>
	                        </tr>
	                        
	                        <tr>
	                            <td class="table4_td3a">	                            	
	                            	Priority
	                            </td>
	                            <td class="table4_td3a">
	                            	<?php echo $this->_tpl_vars['ticket']['priority']; ?>

	                            </td>
	                        </tr>
	                        
	                        <tr>
	                            <td class="table4_td3a">
	                            	Assignee
	                            </td>
	                            <td class="table4_td3a">
	                                <?php echo $this->_tpl_vars['ticket']['user_id']; ?>

	                            </td>
	                        </tr>
	                        
	                        <tr>
	                            <td class="table4_td3a">	                            	
	                            	Status
	                            </td>
	                            <td class="table4_td3a">
	                            	<?php echo $this->_tpl_vars['ticket']['status']; ?>

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