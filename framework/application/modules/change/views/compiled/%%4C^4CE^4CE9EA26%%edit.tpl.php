<?php /* Smarty version 2.6.19, created on 2008-11-18 10:48:39
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cchange%5Cviews%5Cscripts%5Cindex%5Cedit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'form', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\edit.tpl', 2, false),array('block', 'link_to', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\edit.tpl', 8, false),array('function', 'flash', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\edit.tpl', 3, false),array('function', 'form_text', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\edit.tpl', 81, false),array('function', 'form_textarea', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\edit.tpl', 97, false),array('function', 'form_hidden', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\edit.tpl', 156, false),array('function', 'form_submit', 'C:\\xampp\\htdocs\\check\\application\\modules\\change\\views\\scripts\\index\\edit.tpl', 158, false),)), $this); ?>

<?php $this->_tag_stack[] = array('form', array()); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php echo smarty_function_flash(array(), $this);?>

<div class="midline_con">
	<div class="midline_con_top2">
        
    	<div class="tab1">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "#")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>OVERVIEW<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        <div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "change/index/eva/id/".($this->_tpl_vars['change_id']))); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>EVALUATION<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        <div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "change/index/approve/id/".($this->_tpl_vars['change_id']))); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>APPROVAL<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
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
            	View details on Change Requests issued by the Change Manager.
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
                            <td width="50" class="table4_td2a">
                            	Request Number                                       </td>
                          <td width="722" class="table4_td2a">                            	
                          	<span class="textstyle3"><?php echo $this->_tpl_vars['change']['request_id']; ?>
</span>
                            </td>
                        </tr>
                        <tr>
                            <td width="125" class="table4_td2a">
                            	Project Name                                           </td>
                          <td width="722" class="table4_td2a">                            	
                            	<?php echo smarty_function_form_text(array('name' => 'project','size' => '80'), $this);?>

                            </td>
                        </tr>
                         <tr>
                            <td class="table4_td3a">
                            	Short Name of Change Request
                            </td>
                            <td class="table4_td3a">
                            	<?php echo smarty_function_form_text(array('name' => 'summary','size' => '80'), $this);?>

                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a">
                            	Brief Description of Change
                            </td>
                            <td class="table4_td3a">
                            	<?php echo smarty_function_form_textarea(array('name' => 'detail','rows' => '5','cols' => '60'), $this);?>
<br />
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a">
                            	Justification of Change
                            </td>
                            <td class="table4_td3a">
                            	<?php echo smarty_function_form_textarea(array('name' => 'justification','rows' => '5','cols' => '60'), $this);?>
<br />
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
                            	<?php echo $this->_tpl_vars['change']['manager']; ?>
 | <?php $this->_tag_stack[] = array('link_to', array('href' => "#")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>change<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Change Initiator
                            </td>
                            <td class="table4_td2a">
                            	<?php echo $this->_tpl_vars['change']['initiator']; ?>
 | <?php $this->_tag_stack[] = array('link_to', array('href' => "#")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>change<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Assignee / Process Owner
                            </td>
                            <td class="table4_td2a">
                            	<?php echo $this->_tpl_vars['change']['owner']; ?>
 | <?php $this->_tag_stack[] = array('link_to', array('href' => "#")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>change<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                            </td>
                        </tr>        
                      
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <div class="spacer1">
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