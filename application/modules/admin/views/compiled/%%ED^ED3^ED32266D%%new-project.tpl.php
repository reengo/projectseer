<?php /* Smarty version 2.6.19, created on 2008-10-30 08:08:55
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cadmin%5Cviews%5Cemails%5Cnew-project.tpl */ ?>
<div style="font:normal 11px arial">
Hi Team, 
<br /><br />
A new QAT project has been started by <?php echo $this->_tpl_vars['qat_officer']; ?>
, under the supervision of <?php echo $this->_tpl_vars['project_manager']; ?>

<br /><br />
The following information is registered with this new project:
<br /><br />
<table cellpadding="5" cellspacing="0" style="border:1px solid #333;font:normal 11px arial">
	<tr>
		<td>Project Name:</td>
		<td><?php echo $this->_tpl_vars['project']; ?>
</td>
	</tr>
	<tr>
		<td>Project Division:</td>
		<td><?php echo $this->_tpl_vars['division']; ?>
</td>
	</tr>
	<tr>
		<td>Project Description:</td>
		<td><?php echo $this->_tpl_vars['overall_remarks']; ?>
</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td>Project Manager:</td>
		<td><?php echo $this->_tpl_vars['project_manager']; ?>
</td>
	</tr>
	<tr>
		<td>Project Developer:</td>
		<td><?php echo $this->_tpl_vars['project_developer']; ?>
</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td>Testing url/page:</td>
		<td><?php echo $this->_tpl_vars['test_location']; ?>
</td>
	</tr>
	<tr>
		<td>Username/ID/Card Number:</td>
		<td><?php echo $this->_tpl_vars['test_login']; ?>
</td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><?php echo $this->_tpl_vars['test_pass']; ?>
</td>
	</tr>
	<tr>
		<td>Testing Remarks: </td>
		<td><?php echo $this->_tpl_vars['test_remarks']; ?>
</td>
	</tr>
</table>
<br />
<br />
<?php echo $this->_tpl_vars['body']; ?>

<br />
<br />
Please login by clicking on the URL below:
<br /><br />
http://www.rex2check.com/
<br /><br /><br /><br />
- REX2Check Admin
</div>