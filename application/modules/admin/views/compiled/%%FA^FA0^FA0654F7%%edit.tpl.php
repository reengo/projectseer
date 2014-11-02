<?php /* Smarty version 2.6.19, created on 2008-10-20 09:02:33
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cadmin%5Cviews%5Cscripts%5Croles%5Cedit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'form', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\edit.tpl', 1, false),array('block', 'link_to', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\edit.tpl', 86, false),array('function', 'flash', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\edit.tpl', 2, false),array('function', 'form_text', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\edit.tpl', 62, false),array('function', 'form_select', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\edit.tpl', 70, false),array('function', 'form_checkbox', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\edit.tpl', 76, false),array('function', 'form_submit', 'C:\\xampp\\htdocs\\check\\application\\modules\\admin\\views\\scripts\\roles\\edit.tpl', 85, false),)), $this); ?>
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
            	Management of global settings and configuration.
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
                                			<span class="textstyle10">Project Information</span>
                                		</td>
                                	</tr>
                                </table>
                                <div class="horlinefade1">	
                					&nbsp;
               					</div>
                            </td>
                        </tr>
                        <tr>
						    <td width="10%" class="table4_td2a">Name:</td>
						    <td class="table4_td2a"><?php echo smarty_function_form_text(array('name' => 'name','size' => '40'), $this);?>
</td>
						</tr>
						<tr>
						    <td class="table4_td2a">Description:</td>
						    <td class="table4_td2a"><?php echo smarty_function_form_text(array('name' => 'description','size' => '40'), $this);?>
</td>
						</tr>
						<tr>
						    <td class="table4_td2a">Location:</td>
						    <td class="table4_td2a"><?php echo smarty_function_form_select(array('name' => 'home_location','options' => $this->_tpl_vars['locations'],'blank_text' => "-- no location --"), $this);?>
</td>
						</tr>
						<tr>
						    <td class="table4_td2a" valign="top">Parent:</td>
						    <td class="table4_td2a">
						    <?php $_from = $this->_tpl_vars['parents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['item']):
?>
						        <?php echo smarty_function_form_checkbox(array('name' => "parents_".($this->_tpl_vars['name']),'text' => $this->_tpl_vars['item'],'value' => $this->_tpl_vars['name'],'style_for_label' => "display:inline; float:none;"), $this);?>

						    <?php endforeach; endif; unset($_from); ?>
						    
						    <?php echo smarty_function_form_select(array('name' => 'parent','options' => $this->_tpl_vars['roles'],'blank_text' => "-- no parent --"), $this);?>

						    </td>
						</tr>
						<tr>
						    <td class="table4_td2a">&nbsp;</td>
						    <td class="table4_td2a">
						    <?php echo smarty_function_form_submit(array('name' => 'submit','class' => 'botton','value' => '   Update   ','no_div' => true), $this);?>
 or 
						    <?php $this->_tag_stack[] = array('link_to', array('href' => "/admin/roles/list",'confirm' => "Are you sure you want to cancel?")); $_block_repeat=true;smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link_to($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
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