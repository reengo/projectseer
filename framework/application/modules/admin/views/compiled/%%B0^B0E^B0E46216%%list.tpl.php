<?php /* Smarty version 2.6.19, created on 2008-11-21 03:20:56
         compiled from /home/rex2chek/public_html/application/modules/admin/views/scripts/settings/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'form', '/home/rex2chek/public_html/application/modules/admin/views/scripts/settings/list.tpl', 1, false),array('block', 'link_to', '/home/rex2chek/public_html/application/modules/admin/views/scripts/settings/list.tpl', 6, false),array('function', 'form_text', '/home/rex2chek/public_html/application/modules/admin/views/scripts/settings/list.tpl', 76, false),array('function', 'form_submit', '/home/rex2chek/public_html/application/modules/admin/views/scripts/settings/list.tpl', 163, false),)), $this); ?>
<?php $this->_tag_stack[] = array('form', array()); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

<div class="midline_con">
 <div class="midline_con_top2">
		<div class="tab1">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "#")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>General<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
    	<div class="tab2">
        	<?php $this->_tag_stack[] = array('link_to', array('class' => 'linkstyle1','href' => "admin/settings/notice")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Notifications<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
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
                        	<span class="textstyle3">ADMINISTRATIVE SETTINGS</span>
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
                                			<span class="textstyle10">Logo</span>
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
                            	Site Theme                                            </td>
                          <td width="722" class="table4_td2a">
                            	<?php echo smarty_function_form_text(array('name' => 'theme','size' => '40','nodiv' => true), $this);?>
 
                                <span class="textstyle6">*</span>
                            </td>
                      </tr>
                        <tr>
                            <td class="table4_td3a">
                            	Base URL
                            </td>
                            <td class="table4_td3a">
                            	<?php echo smarty_function_form_text(array('name' => 'base_url','size' => '40','nodiv' => true), $this);?>

                                <span class="textstyle6">*</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a">
                            	Main Stylesheet
                            </td>
                            <td class="table4_td3a">
                            	<?php echo smarty_function_form_text(array('name' => 'stylesheet','size' => '40','nodiv' => true), $this);?>

                                <span class="textstyle6">*</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a">
                            	Secondary Stylesheet
                            </td>
                            <td class="table4_td3a">
                            	<?php echo smarty_function_form_text(array('name' => 'stylesheet_inner','size' => '40','nodiv' => true), $this);?>

                                <span class="textstyle6">*</span>
                            </td>
                        </tr>
                         <tr>
                            <td class="table4_td3a">
                            	Install Date
                            </td>
                            <td class="table4_td3a">
                            	<?php echo smarty_function_form_text(array('name' => 'install_date','size' => '40','nodiv' => true), $this);?>

                                <span class="textstyle6">*</span>
                            </td>
                        </tr>
                        <br />
                        <br />
                        <tr>
                            <td class="table4_td3a" colspan="2">
                                <div class="horlinefade1">	
                					&nbsp;
               					</div>
                                <table>
                                	<tr>
                                    	<td>
                                			<span class="textstyle10">Administrator Settings</span>
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
                            	System Admin
                            </td>
                            <td class="table4_td2a">
                            	<?php echo smarty_function_form_text(array('name' => 'system_admin','size' => '40','nodiv' => true), $this);?>

                                <span class="textstyle6">*</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td2a">
                            	Company Name
                            </td>
                            <td class="table4_td2a">
                            	<?php echo smarty_function_form_text(array('name' => 'company_name','size' => '40','nodiv' => true), $this);?>

                                <span class="textstyle6">*</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="table4_td3a">
                            	Webmaster Email
                            </td>
                            <td class="table4_td3a">
                            	<?php echo smarty_function_form_text(array('name' => 'system_email','size' => '40','nodiv' => true), $this);?>

                                <span class="textstyle6">*</span>
                            </td>
                        </tr>
                    </table>
                    <?php echo smarty_function_form_submit(array('name' => 'submit','value' => '  Update Settings  '), $this);?>

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