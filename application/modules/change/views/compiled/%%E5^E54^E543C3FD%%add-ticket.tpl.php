<?php /* Smarty version 2.6.19, created on 2008-10-23 13:37:53
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cadmin%5Cviews%5Cscripts%5Cqat%5Cadd-ticket.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'flash', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\qat\\add-ticket.tpl', 1, false),array('function', 'form_textarea', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\qat\\add-ticket.tpl', 121, false),array('function', 'form_hidden', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\qat\\add-ticket.tpl', 125, false),array('function', 'form_submit', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\qat\\add-ticket.tpl', 131, false),array('block', 'form', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\qat\\add-ticket.tpl', 111, false),array('block', 'link_to', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\qat\\add-ticket.tpl', 132, false),)), $this); ?>
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
	                            	<?php echo $this->_tpl_vars['qat']['page']; ?>

	                            </td>
	                      </tr>
	                        <tr>
	                            <td class="table4_td3a">
	                            	Location
	                            </td>
	                            <td class="table4_td3a">
	                                <?php echo $this->_tpl_vars['qat']['url']; ?>

	                            </td>
	                        </tr>
	                         <tr>
	                            <td class="table4_td3a">
	                            	Procedure
	                            </td>
	                            <td class="table4_td3a">
	                                <?php echo $this->_tpl_vars['qat']['description']; ?>

	                            </td>
	                        </tr>
	                         <tr>
	                            <td class="table4_td3a">
	                            	Purpose
	                            </td>
	                            <td class="table4_td3a">
	                               <?php echo $this->_tpl_vars['qat']['remarks']; ?>

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
	                                			<span class="textstyle10">Issue Tickets for Failed Review Results</span>
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
	                            
	                            <?php if ($this->_tpl_vars['qat']['layout'] == 2 && $this->_tpl_vars['setticket'] == 0): ?>
	                            <?php $this->_tag_stack[] = array('form', array()); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	                            	<table width="100%" class="table6">	
	                            		<tr>
	                            			<td colspan="4"><span class="textstyle4">Layout Ticket</span></td>
	                            		</tr>                            	
	                                	<tr>	                                		       
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Error Description</span></td>
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Suggested Fix</span></td> 
	                                	</tr>	                                
	                                	<tr>	                                		
	                                		<td colspan="2" class="table4_td2row1"><?php echo smarty_function_form_textarea(array('name' => 'message','cols' => '40','rows' => '3'), $this);?>
</td>
	                                		<td colspan="2" class="table4_td2row1"><?php echo smarty_function_form_textarea(array('name' => 'instructions','cols' => '40','rows' => '3'), $this);?>
</td>	                                		
	                        	                                		
	                                </table>
	                                <?php echo smarty_function_form_hidden(array('name' => 'tab','value' => 'layout'), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'form_id','value' => $this->_tpl_vars['qat']['form_id']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'user_id','value' => $this->_tpl_vars['project']['project_developer']), $this);?>
<?php echo smarty_function_form_hidden(array('name' => 'page','value' => $this->_tpl_vars['qat']['page']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'page_url','value' => $this->_tpl_vars['qat']['location']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'status','value' => 1), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'priority','value' => 5), $this);?>

	                                <?php echo smarty_function_form_submit(array('name' => 'submit','class' => 'botton','value' => '   Submit   ','no_div' => true), $this);?>
 or 
    								<?php $this->_tag_stack[] = array('link_to', array('href' => "/admin/projects/list",'confirm' => "Are you sure you want to cancel?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	                            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>	<br /><br /><br />
	                            <?php endif; ?>   
	                            
	                            <?php if ($this->_tpl_vars['qat']['rollover'] == 2 && $this->_tpl_vars['setticket'] == 0): ?>
	                            <?php $this->_tag_stack[] = array('form', array()); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	                            	<table width="100%" class="table6">	
	                            		<tr>
	                            			<td colspan="4"><span class="textstyle4">Rollover Ticket</span></td>
	                            		</tr>                            	
	                                	<tr>	                                		       
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Error Description</span></td>
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Suggested Fix</span></td> 
	                                	</tr>	                                
	                                	<tr>	                                		
	                                		<td colspan="2" class="table4_td2row1"><?php echo smarty_function_form_textarea(array('name' => 'message','cols' => '40','rows' => '3'), $this);?>
</td>
	                                		<td colspan="2" class="table4_td2row1"><?php echo smarty_function_form_textarea(array('name' => 'instructions','cols' => '40','rows' => '3'), $this);?>
</td>	                                		
	                        	                                		
	                                </table>
	                                <?php echo smarty_function_form_hidden(array('name' => 'tab','value' => 'rollover'), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'form_id','value' => $this->_tpl_vars['qat']['form_id']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'user_id','value' => $this->_tpl_vars['project']['project_developer']), $this);?>
<?php echo smarty_function_form_hidden(array('name' => 'page','value' => $this->_tpl_vars['qat']['page']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'page_url','value' => $this->_tpl_vars['qat']['location']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'status','value' => 1), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'priority','value' => 5), $this);?>

	                                <?php echo smarty_function_form_submit(array('name' => 'submit','class' => 'botton','value' => '   Submit   ','no_div' => true), $this);?>
 or 
    								<?php $this->_tag_stack[] = array('link_to', array('href' => "/admin/projects/list",'confirm' => "Are you sure you want to cancel?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	                            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>	<br /><br /><br />
	                            <?php endif; ?>
	                            
	                            <?php if ($this->_tpl_vars['qat']['animation'] == 2 && $this->_tpl_vars['setticket'] == 0): ?>
	                            <?php $this->_tag_stack[] = array('form', array()); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	                            	<table width="100%" class="table6">	
	                            		<tr>
	                            			<td colspan="4"><span class="textstyle4">Animation Ticket</span></td>
	                            		</tr>                            	
	                                	<tr>	                                		       
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Error Description</span></td>
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Suggested Fix</span></td> 
	                                	</tr>	                                
	                                	<tr>	                                		
	                                		<td colspan="2" class="table4_td2row1"><?php echo smarty_function_form_textarea(array('name' => 'message','cols' => '40','rows' => '3'), $this);?>
</td>
	                                		<td colspan="2" class="table4_td2row1"><?php echo smarty_function_form_textarea(array('name' => 'instructions','cols' => '40','rows' => '3'), $this);?>
</td>	                                		
	                        	                                		
	                                </table>
	                                <?php echo smarty_function_form_hidden(array('name' => 'tab','value' => 'animation'), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'form_id','value' => $this->_tpl_vars['qat']['form_id']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'user_id','value' => $this->_tpl_vars['project']['project_developer']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'page','value' => $this->_tpl_vars['qat']['page']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'page_url','value' => $this->_tpl_vars['qat']['location']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'status','value' => 1), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'priority','value' => 5), $this);?>

	                                <?php echo smarty_function_form_submit(array('name' => 'submit','class' => 'botton','value' => '   Submit   ','no_div' => true), $this);?>
 or 
    								<?php $this->_tag_stack[] = array('link_to', array('href' => "/admin/projects/list",'confirm' => "Are you sure you want to cancel?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	                            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>	<br /><br /><br />
	                            <?php endif; ?>
	                            
	                            <?php if ($this->_tpl_vars['qat']['forms'] == 2 && $this->_tpl_vars['setticket'] == 0): ?>
	                            <?php $this->_tag_stack[] = array('form', array()); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	                            	<table width="100%" class="table6">	
	                            		<tr>
	                            			<td colspan="4"><span class="textstyle4">Forms Ticket</span></td>
	                            		</tr>                            	
	                                	<tr>	                                		       
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Error Description</span></td>
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Suggested Fix</span></td> 
	                                	</tr>	                                
	                                	<tr>	                                		
	                                		<td colspan="2" class="table4_td2row1"><?php echo smarty_function_form_textarea(array('name' => 'message','cols' => '40','rows' => '3'), $this);?>
</td>
	                                		<td colspan="2" class="table4_td2row1"><?php echo smarty_function_form_textarea(array('name' => 'instructions','cols' => '40','rows' => '3'), $this);?>
</td>	                                		
	                        	                                		
	                                </table>
	                                <?php echo smarty_function_form_hidden(array('name' => 'tab','value' => 'forms'), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'form_id','value' => $this->_tpl_vars['qat']['form_id']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'user_id','value' => $this->_tpl_vars['project']['project_developer']), $this);?>
<?php echo smarty_function_form_hidden(array('name' => 'page','value' => $this->_tpl_vars['qat']['page']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'page_url','value' => $this->_tpl_vars['qat']['location']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'status','value' => 1), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'priority','value' => 5), $this);?>

	                                <?php echo smarty_function_form_submit(array('name' => 'submit','class' => 'botton','value' => '   Submit   ','no_div' => true), $this);?>
 or 
    								<?php $this->_tag_stack[] = array('link_to', array('href' => "/admin/projects/list",'confirm' => "Are you sure you want to cancel?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	                            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>	<br /><br /><br />
	                            <?php endif; ?>
	                            
	                            <?php if ($this->_tpl_vars['qat']['link'] == 2 && $this->_tpl_vars['setticket'] == 0): ?>
	                            <?php $this->_tag_stack[] = array('form', array()); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	                            	<table width="100%" class="table6">	
	                            		<tr>
	                            			<td colspan="4"><span class="textstyle4">Linkage Ticket</span></td>
	                            		</tr>                            	
	                                	<tr>	                                		       
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Error Description</span></td>
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Suggested Fix</span></td> 
	                                	</tr>	                                
	                                	<tr>	                                		
	                                		<td colspan="2" class="table4_td2row1"><?php echo smarty_function_form_textarea(array('name' => 'message','cols' => '40','rows' => '3'), $this);?>
</td>
	                                		<td colspan="2" class="table4_td2row1"><?php echo smarty_function_form_textarea(array('name' => 'instructions','cols' => '40','rows' => '3'), $this);?>
</td>	                                		
	                        	                                		
	                                </table>
	                                <?php echo smarty_function_form_hidden(array('name' => 'tab','value' => 'link'), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'form_id','value' => $this->_tpl_vars['qat']['form_id']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'user_id','value' => $this->_tpl_vars['project']['project_developer']), $this);?>
<?php echo smarty_function_form_hidden(array('name' => 'page','value' => $this->_tpl_vars['qat']['page']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'page_url','value' => $this->_tpl_vars['qat']['location']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'status','value' => 1), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'priority','value' => 5), $this);?>

	                                <?php echo smarty_function_form_submit(array('name' => 'submit','class' => 'botton','value' => '   Submit   ','no_div' => true), $this);?>
 or 
    								<?php $this->_tag_stack[] = array('link_to', array('href' => "/admin/projects/list",'confirm' => "Are you sure you want to cancel?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	                            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>	<br /><br /><br />
	                            <?php endif; ?>
	                            
	                            <?php if ($this->_tpl_vars['qat']['source'] == 2 && $this->_tpl_vars['setticket'] == 0): ?>
	                            <?php $this->_tag_stack[] = array('form', array()); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	                            	<table width="100%" class="table6">	
	                            		<tr>
	                            			<td colspan="4"><span class="textstyle4">Code Review Ticket</span></td>
	                            		</tr>                            	
	                                	<tr>	                                		       
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Error Description</span></td>
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Suggested Fix</span></td> 
	                                	</tr>	                                
	                                	<tr>	                                		
	                                		<td colspan="2" class="table4_td2row1"><?php echo smarty_function_form_textarea(array('name' => 'message','cols' => '40','rows' => '3'), $this);?>
</td>
	                                		<td colspan="2" class="table4_td2row1"><?php echo smarty_function_form_textarea(array('name' => 'instructions','cols' => '40','rows' => '3'), $this);?>
</td>	                                		
	                        	                                		
	                                </table>
	                                <?php echo smarty_function_form_hidden(array('name' => 'tab','value' => 'source'), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'form_id','value' => $this->_tpl_vars['qat']['form_id']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'user_id','value' => $this->_tpl_vars['project']['project_developer']), $this);?>
<?php echo smarty_function_form_hidden(array('name' => 'page','value' => $this->_tpl_vars['qat']['page']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'page_url','value' => $this->_tpl_vars['qat']['location']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'status','value' => 1), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'priority','value' => 5), $this);?>

	                                <?php echo smarty_function_form_submit(array('name' => 'submit','class' => 'botton','value' => '   Submit   ','no_div' => true), $this);?>
 or 
    								<?php $this->_tag_stack[] = array('link_to', array('href' => "/admin/projects/list",'confirm' => "Are you sure you want to cancel?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	                            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>	<br /><br /><br />
	                            <?php endif; ?>
	                            
	                            <?php if ($this->_tpl_vars['qat']['action'] == 2 && $this->_tpl_vars['setticket'] == 0): ?>
	                            <?php $this->_tag_stack[] = array('form', array()); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	                            	<table width="100%" class="table6">	
	                            		<tr>
	                            			<td colspan="4"><span class="textstyle4">Action Ticket</span></td>
	                            		</tr>                            	
	                                	<tr>	                                		       
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Error Description</span></td>
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Suggested Fix</span></td> 
	                                	</tr>	                                
	                                	<tr>	                                		
	                                		<td colspan="2" class="table4_td2row1"><?php echo smarty_function_form_textarea(array('name' => 'message','cols' => '40','rows' => '3'), $this);?>
</td>
	                                		<td colspan="2" class="table4_td2row1"><?php echo smarty_function_form_textarea(array('name' => 'instructions','cols' => '40','rows' => '3'), $this);?>
</td>	                                		
	                        	                                		
	                                </table>
	                                <?php echo smarty_function_form_hidden(array('name' => 'tab','value' => 'action'), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'form_id','value' => $this->_tpl_vars['qat']['form_id']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'user_id','value' => $this->_tpl_vars['project']['project_developer']), $this);?>
<?php echo smarty_function_form_hidden(array('name' => 'page','value' => $this->_tpl_vars['qat']['page']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'page_url','value' => $this->_tpl_vars['qat']['location']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'status','value' => 1), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'priority','value' => 5), $this);?>

	                                <?php echo smarty_function_form_submit(array('name' => 'submit','class' => 'botton','value' => '   Submit   ','no_div' => true), $this);?>
 or 
    								<?php $this->_tag_stack[] = array('link_to', array('href' => "/admin/projects/list",'confirm' => "Are you sure you want to cancel?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	                            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>	<br /><br /><br />
	                            <?php endif; ?>
	                            
	                            <?php if ($this->_tpl_vars['qat']['validation'] == 2 && $this->_tpl_vars['setticket'] == 0): ?>
	                            <?php $this->_tag_stack[] = array('form', array()); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	                            	<table width="100%" class="table6">	
	                            		<tr>
	                            			<td colspan="4"><span class="textstyle4">Validation Ticket</span></td>
	                            		</tr>                            	
	                                	<tr>	                                		       
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Error Description</span></td>
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Suggested Fix</span></td> 
	                                	</tr>	                                
	                                	<tr>	                                		
	                                		<td colspan="2" class="table4_td2row1"><?php echo smarty_function_form_textarea(array('name' => 'message','cols' => '40','rows' => '3'), $this);?>
</td>
	                                		<td colspan="2" class="table4_td2row1"><?php echo smarty_function_form_textarea(array('name' => 'instructions','cols' => '40','rows' => '3'), $this);?>
</td>	                                		
	                        	                                		
	                                </table>
	                                <?php echo smarty_function_form_hidden(array('name' => 'tab','value' => 'validation'), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'form_id','value' => $this->_tpl_vars['qat']['form_id']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'user_id','value' => $this->_tpl_vars['project']['project_developer']), $this);?>
<?php echo smarty_function_form_hidden(array('name' => 'page','value' => $this->_tpl_vars['qat']['page']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'page_url','value' => $this->_tpl_vars['qat']['location']), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'status','value' => 1), $this);?>

	                                <?php echo smarty_function_form_hidden(array('name' => 'priority','value' => 5), $this);?>

	                                <?php echo smarty_function_form_submit(array('name' => 'submit','class' => 'botton','value' => '   Submit   ','no_div' => true), $this);?>
 or 
    								<?php $this->_tag_stack[] = array('link_to', array('href' => "/admin/projects/list",'confirm' => "Are you sure you want to cancel?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	                            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>	<br /><br /><br />
	                            <?php endif; ?>
	                            
	                            <?php if ($this->_tpl_vars['qat']['layout'] > 2 || $this->_tpl_vars['qat']['rollover'] > 2 || $this->_tpl_vars['qat']['animation'] > 2 || $this->_tpl_vars['qat']['forms'] > 2 || $this->_tpl_vars['qat']['link'] > 2 || $this->_tpl_vars['qat']['source'] > 2 || $this->_tpl_vars['qat']['action'] > 2 || $this->_tpl_vars['qat']['validation'] > 2): ?>
	                            <table width="100%" class="table6">	
	                            		<tr>
	                            			<td colspan="4">No tickets to Issue</td>
	                            		</tr>                  		
	                                </table>
	                                  
	                            </td>
	                            <?php endif; ?>
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