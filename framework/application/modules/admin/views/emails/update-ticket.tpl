<div style="font:normal 11px arial">
Hi {$user_id}, 
<br /><br />
This is to remind you that you have a pending unresolved ticket on your {$project} project.
<br />
Please review the error and update the status of this ticket to your project manager to have this issue resolved.
<br /><br />
The following information is registered with this ticket:
<br /><br />
<table cellpadding="5" cellspacing="0" style="border:1px solid #333;font:normal 11px arial">
	<tr>
		<td>Project Name:</td>
		<td>{$project}</td>
	</tr>
	<tr>
		<td>Assignee:</td>
		<td>{$user_id}</td>
	</tr>
	<tr>
		<td>Priority:</td>
		<td>{$priority}</td>
	</tr>
	<tr>
		<td>Status:</td>
		<td>{$status}</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td>Review Item:</td>
		<td>{$page}</td>
	</tr>
	<tr>
		<td>Location:</td>
		<td>{$page_url}</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td>Element:</td>
		<td>{$tab}</td>
	</tr>
	<tr>
		<td>Error Description:</td>
		<td>{$message}</td>
	</tr>
	<tr>
		<td>Revision Suggestion</td>
		<td>{$instructions}</td>
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