<?php /* Smarty version 2.6.19, created on 2009-01-26 02:17:35
         compiled from /home/rex2chek/public_html/application/modules/admin/views/emails/dev-ticket.tpl */ ?>
<div style="font:normal 11px arial">
Hi <?php echo $this->_tpl_vars['developer']; ?>
, 
<br /><br />
Your Project Manager has assigned a ticket for your immediate attention.
<br /><br />
Please review the error and make changes to affected areas as necessary.
<br /><br />
The following information is registered with this new ticket:
<br /><br />
<table cellpadding="5" cellspacing="0" style="border:1px solid #333;font:normal 11px arial">
	<tr>
		<td>Project Name:</td>
		<td><?php echo $this->_tpl_vars['project']; ?>
</td>
	</tr>
	<tr>
		<td>Priority:</td>
		<td><?php echo $this->_tpl_vars['priority']; ?>
</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td>Affected Area:</td>
		<td><?php echo $this->_tpl_vars['page']; ?>
</td>
	</tr>
	<tr>
		<td>Location:</td>
		<td><?php if ($this->_tpl_vars['page_url']): ?><?php echo $this->_tpl_vars['page_url']; ?>
<?php else: ?>N/A<?php endif; ?></td>
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
		<td>Revision Instructions</td>
		<td><?php echo $this->_tpl_vars['instructions']; ?>
</td>
	</tr>
</table>
<br />
<br />
when this task is done you can update the status of this ticket at: http://rex2check.com/tickets/view/id/<?php echo $this->_tpl_vars['ticketid']; ?>
 or give an update to your project manager of task completion.
<br />
<br />
Please login by clicking on the URL below:
<br /><br />
http://www.rex2check.com/
<br /><br /><br /><br />
- REX2Check Admin
</div>