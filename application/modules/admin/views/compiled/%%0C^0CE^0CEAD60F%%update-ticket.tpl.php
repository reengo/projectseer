<?php /* Smarty version 2.6.19, created on 2008-11-06 05:58:27
         compiled from C:%5Cxampp%5Chtdocs%5Ccheck%5Capplication%5Cmodules%5Cadmin%5Cviews%5Cemails%5Cupdate-ticket.tpl */ ?>
<div style="font:normal 11px arial">
Hi <?php echo $this->_tpl_vars['user_id']; ?>
, 
<br /><br />
This is to remind you that you have a pending unresolved ticket on your <?php echo $this->_tpl_vars['project']; ?>
 project.
<br />
Please review the error and update the status of this ticket to your project manager to have this issue resolved.
<br /><br />
The following information is registered with this ticket:
<br /><br />
<table cellpadding="5" cellspacing="0" style="border:1px solid #333;font:normal 11px arial">
	<tr>
		<td>Project Name:</td>
		<td><?php echo $this->_tpl_vars['project']; ?>
</td>
	</tr>
	<tr>
		<td>Assignee:</td>
		<td><?php echo $this->_tpl_vars['user_id']; ?>
</td>
	</tr>
	<tr>
		<td>Priority:</td>
		<td><?php echo $this->_tpl_vars['priority']; ?>
</td>
	</tr>
	<tr>
		<td>Status:</td>
		<td><?php echo $this->_tpl_vars['status']; ?>
</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td>Review Item:</td>
		<td><?php echo $this->_tpl_vars['page']; ?>
</td>
	</tr>
	<tr>
		<td>Location:</td>
		<td><?php echo $this->_tpl_vars['page_url']; ?>
</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td>Element:</td>
		<td><?php echo $this->_tpl_vars['tab']; ?>
</td>
	</tr>
	<tr>
		<td>Error Description:</td>
		<td><?php echo $this->_tpl_vars['message']; ?>
</td>
	</tr>
	<tr>
		<td>Revision Suggestion</td>
		<td><?php echo $this->_tpl_vars['instructions']; ?>
</td>
	</tr>
</table>
<br />
Please note that this message will be sent {$period] until the ticket is closed.
<br />
Please login by clicking on the URL below:
<br /><br />
http://www.rex2check.com/
<br /><br /><br /><br />
- REX2Check Admin
</div>