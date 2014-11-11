<?php /* Smarty version 2.6.19, created on 2009-01-26 01:47:49
         compiled from /home/rex2chek/public_html/application/modules/admin/views/scripts/qat/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'flash', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/view.tpl', 1, false),array('function', 'cycle', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/view.tpl', 231, false),array('function', 'form_checkbox', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/view.tpl', 233, false),array('function', 'paginate_prev', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/view.tpl', 279, false),array('function', 'paginate_middle', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/view.tpl', 279, false),array('function', 'paginate_next', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/view.tpl', 279, false),array('block', 'link_to', '/home/rex2chek/public_html/application/modules/admin/views/scripts/qat/view.tpl', 5, false),)), $this); ?>
<?php echo smarty_function_flash(array(), $this);?>

<div class="midline_con">
	<div class="midline_con_top2">
		<div class="tab1">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "#")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Overview<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
    	<div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "admin/qat/list/id/".($this->_tpl_vars['qaid']))); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>QA GRID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        
        <div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "admin/projects/viewqat/id/".($this->_tpl_vars['qaid']))); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>PROJECT INFO<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        <div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "admin/qat/report/id/".($this->_tpl_vars['qaid']))); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>REPORTS<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
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
	                        	<span class="textstyle3">REVIEW INFORMATION</span>
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
	                                			<span class="textstyle10">Review Results</span>
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
	                                		<td width="5%" class="table4_td1"><span class="textstyle1">Rating</span></td>
	                                	</tr>
	                                	<tr class="table4_td2row1">
	                                		<td><span class="textstyle5">Layout:</span> Overall look and design</td>
	                                		<td><?php echo $this->_tpl_vars['qat']['layout']; ?>
</td>
	                                	</tr>
	                                	<tr class="table4_td2row2">
	                                		<td><span class="textstyle5">Rollover:</span> System's aestetic reaction to mouseover events</td>
	                                		<td><?php echo $this->_tpl_vars['qat']['rollover']; ?>
</td>
	                                	</tr>
	                                	<tr class="table4_td2row1">
	                                		<td><span class="textstyle5">Animation:</span> Design's independently moving element.</td>
	                                		<td><?php echo $this->_tpl_vars['qat']['animation']; ?>
</td>
	                                	</tr>
	                                	<tr class="table4_td2row2">
	                                		<td><span class="textstyle5">Forms:</span> All form elements such as text boxes and buttons.</td>
	                                		<td><?php echo $this->_tpl_vars['qat']['forms']; ?>
</td>
	                                	</tr>
	                                	<tr class="table4_td2row1">
	                                		<td><span class="textstyle5">Linkage:</span> Links connecting to other pages within the item in review.</td>
	                                		<td><?php echo $this->_tpl_vars['qat']['link']; ?>
</td>
	                                	</tr>
	                                	<tr class="table4_td2row2">
	                                		<td><span class="textstyle5">Source Code:</span> General code review results for the particular item in review</td>
	                                		<td><?php echo $this->_tpl_vars['qat']['source']; ?>
</td>
	                                	</tr>
	                                	<tr class="table4_td2row1">
	                                		<td><span class="textstyle5">Action:</span> All processing events within the item in review. </td>
	                                		<td><?php echo $this->_tpl_vars['qat']['action']; ?>
</td>
	                                	</tr>
	                                	<tr class="table4_td2row2">
	                                		<td><span class="textstyle5">Validation:</span> The initial reaction to the process taken.</td>
	                                		<td><?php echo $this->_tpl_vars['qat']['validation']; ?>
</td>
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
	                                			<span class="textstyle10">Tickets Issued</span>
	                                		</td>
	                                	</tr>
	                                </table>
	                                <div class="horlinefade1">	
	                					&nbsp;
	               					</div>
	                            </td>                  		
                            <table class="table4" cellspacing="0">
                            <?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                <?php $this->assign('id', $this->_tpl_vars['item']['id']); ?>
                                <tr>
                                    <td colspan="2" class="table4_td1">
                                    	&nbsp;   
                                    </td>
                                    <td class="table4_td1" colspan="4" align="center">                                        
                                        <span class="textstyle1">Front End</span>
                                    </td>
                                    <td class="table4_td1" colspan="4" align="center">                                        
                                        <span class="textstyle1">Backend</span>
                                    </td>
                                     <td class="table4_td1">
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table4_td1">
                                        &nbsp;
                                    </td>
                                    <td class="table4_td1" width="300">
                                        <span class="textstyle1">Page Title</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Layout</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Rollovers</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Animation</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Forms</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Linkage</span>
                                    </td>
                                    <td class="table4_td1">
                                        <span class="textstyle1">Codes</span>
                                    </td>
                                     <td class="table4_td1">
                                        <span class="textstyle1">Action</span>
                                    </td>
                                     <td class="table4_td1">
                                        <span class="textstyle1">Validation</span>
                                    </td>
                                     <td class="table4_td1" width="100">
                                        <span class="textstyle1">Actions</span>
                                    </td>
                                </tr>
                                
                                <tr id="user-<?php echo $this->_tpl_vars['item']['id']; ?>
" class="table4_td2row<?php echo smarty_function_cycle(array('values' => "1,2"), $this);?>
">
                                	<td class="table4_td2">
                                    	<?php echo smarty_function_form_checkbox(array('checked' => 'no'), $this);?>
 
                                    </td>
                                    <td class="table4_td2">
                                    	<span class="textstyle5"><?php echo $this->_tpl_vars['item']['page']; ?>
</span><br />
                                    	<em><?php echo $this->_tpl_vars['item']['description']; ?>
</em>
                                    	
                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['layout']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['rollover']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['animation']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['forms']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['link']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['source']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['action']; ?>

                                    </td>
                                    <td class="table4_td2">
                                    	<?php echo $this->_tpl_vars['item']['validation']; ?>

                                    </td>
                                    <td class="table4_td2a">
                                    	<?php $this->_tag_stack[] = array('link_to', array('action' => 'view','id' => $this->_tpl_vars['item']['id'])); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>view<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> |
						       			<?php $this->_tag_stack[] = array('link_to', array('action' => 'edit','id' => $this->_tpl_vars['item']['id'])); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> |
						        		<?php $this->_tag_stack[] = array('link_to', array('action' => 'delete','id' => $this->_tpl_vars['item']['id'],'confirm' => "Are you sure you want to delete this user?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>delete<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                                    </td>
                                </tr>
                                <?php endforeach; else: ?>
								<tr class="table4_td2">
								    <td colspan="11" align="center">No tickets were issued.</td>
								</tr>
								<?php endif; unset($_from); ?>
								<tr>
									<td colspan="11">
								<?php if ($this->_tpl_vars['paginate']['page_total'] > 1): ?>
								
								<p class="textstyle7">Page <?php echo smarty_function_paginate_prev(array(), $this);?>
 <?php echo smarty_function_paginate_middle(array('format' => 'page','link_suffix' => " | ",'prefix' => "",'suffix' => ""), $this);?>
 <?php echo smarty_function_paginate_next(array(), $this);?>
</p>
	
								<?php endif; ?>
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