<?php /* Smarty version 2.6.19, created on 2009-02-04 00:46:34
         compiled from /home/rex2chek/public_html/application/modules/change/views/emails/new-change.tpl */ ?>
<div style="font:normal 11px arial">
Hi Administrator, 
<br /><br />
A new Change Request has been filed by Ringo Bautista for the <?php echo $this->_tpl_vars['project']; ?>
 project. This change was requested by <?php echo $this->_tpl_vars['initiator']; ?>
 and has been endorsed by Debrielle Santos.
<br /><br />
The following information was registered on the Change Management Module on REX2Check:
<br /><br />
<table cellpadding="5" cellspacing="0" style="border:1px solid #333;font:normal 11px arial">	
	<tr>
		<td style="border-right:1px dotted #333" valign="top">Project Name:</td>
		<td><?php echo $this->_tpl_vars['project']; ?>
</td>
	</tr>
	<tr>
		<td style="border-right:1px dotted #333" valign="top">Change Status:</td>
		<td><?php echo $this->_tpl_vars['status']; ?>
</td>
	</tr>
	<tr>
		<td style="border-right:1px dotted #333" valign="top">Summary of Description:</td>
		<td><?php echo $this->_tpl_vars['summary']; ?>
</td>
	</tr>
	<tr>
		<td style="border-right:1px dotted #333" valign="top">Brief Description of Change:</td>
		<td><?php echo $this->_tpl_vars['detail']; ?>
</td>
	</tr>
	<tr>
		<td style="border-right:1px dotted #333" valign="top">Justification of Change:</td>
		<td><?php echo $this->_tpl_vars['justification']; ?>
</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td style="border-right:1px dotted #333" valign="top">Project Manager:</td>
		<td><?php echo $this->_tpl_vars['manager']; ?>
</td>
	</tr>
</table>
<br />
This request is now pending for evaluation and Approval by the Chief Technology Officer. 
<br />

Please login to your QAT account by clicking on the URL below:
<br /><br />
http://www.rex2check.com/
<br /><br /><br /><br />
- REX2Check Admin
</div>