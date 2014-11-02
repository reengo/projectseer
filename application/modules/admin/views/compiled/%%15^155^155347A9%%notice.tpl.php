<?php /* Smarty version 2.6.19, created on 2008-10-28 05:22:37
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cadmin%5Cviews%5Cscripts%5Csettings%5Cnotice.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'form', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\settings\\notice.tpl', 1, false),array('block', 'link_to', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\settings\\notice.tpl', 5, false),array('function', 'form_text', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\settings\\notice.tpl', 75, false),array('function', 'form_checkbox', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\settings\\notice.tpl', 90, false),array('function', 'form_textarea', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\settings\\notice.tpl', 132, false),array('function', 'form_submit', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\settings\\notice.tpl', 150, false),)), $this); ?>
<?php $this->_tag_stack[] = array('form', array()); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div class="midline_con">
 <div class="midline_con_top2">
		<div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "admin/settings")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>General<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
    	<div class="tab1">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "#")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Notifications<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        
        <div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "admin/roles/")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Roles<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        <div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "admin/plugins/list")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Plugins<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
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
                        	<span class="textstyle3">NOTIFICATION SETTINGS</span>
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
                                <span class="textstyle1">Configure Settings</span>
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
                                			<span class="textstyle10">System Notice</span>
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
                            	System Name                                          </td>
                          <td width="722" class="table4_td2a">
                                <?php echo smarty_function_form_text(array('name' => 'sender','size' => '40'), $this);?>

                            </td>
                      </tr>
                        <tr>
                            <td width="125" class="table4_td2a">
                            	System Email                                           </td>
                          <td width="722" class="table4_td2a">
                                <?php echo smarty_function_form_text(array('name' => 'sender_email','size' => '40'), $this);?>

                            </td>
                      </tr>
                        <tr>
                            <td class="table4_td3a">
                            	BCC Reciepients
                            </td>
                            <td class="table4_td3a">
                                <?php echo smarty_function_form_checkbox(array('name' => "email[]",'value' => "maner@i-pay.com.ph",'checked' => 'yes'), $this);?>

                                <?php echo smarty_function_form_checkbox(array('name' => "email[]",'value' => "debi.santos@i-pay.com.ph",'checked' => 'yes'), $this);?>

                                <?php echo smarty_function_form_checkbox(array('name' => "email[]",'value' => "mark.soriano@i-pay.com.ph",'checked' => 'yes'), $this);?>

                                <?php echo smarty_function_form_checkbox(array('name' => "email[]",'value' => "ringo.bautista@i-pay.com.ph"), $this);?>

                                <?php $this->_tag_stack[] = array('link_to', array('href' => "#")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Recipients<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br /><br />
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
                                			<span class="textstyle10">QAT Project Initiation Notice</span>
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
                            	Title                                         </td>
                          <td width="722" class="table4_td2a">
                            	<?php echo smarty_function_form_text(array('name' => 'name'), $this);?>
 
                            </td>
                      </tr>
                        <tr>
                            <td width="125" class="table4_td2a">
                            	Subject                                         </td>
                          <td width="722" class="table4_td2a">
                            	<?php echo smarty_function_form_text(array('name' => 'subject'), $this);?>
 
                            </td>
                      </tr>
                      <tr>
                            <td width="125" class="table4_td2a">
                            	Content                                          </td>
                          	<td width="722" class="table4_td2a">
                            	<?php echo smarty_function_form_textarea(array('name' => 'body','cols' => '40','rows' => '4','value' => ""), $this);?>

                            </td>
                      </tr>
					  <tr>
                            <td width="125" class="table4_td2a">
                            	Template                                   </td>
                          	<td width="722" class="table4_td2a">
                            	<?php echo smarty_function_form_text(array('name' => 'template','size' => '40'), $this);?>

                            </td>
                      </tr>
                      
                      
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <div class="spacer1">
		<?php echo smarty_function_form_submit(array('name' => 'submit','value' => '   Save Settings   '), $this);?>

	</div>
</div>
 <div class="midline_con_bot">
                	&nbsp;
                </div>
                </div>
                
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>