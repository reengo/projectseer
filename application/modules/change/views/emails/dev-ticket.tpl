<div style="font:normal 11px arial">
Hi {$owner}, 
<br /><br />
Your Project Manager has assigned a change request ticket for your immediate attention.
<br /><br />
Please review the error and make changes to affected areas as necessary.
<br /><br />
The following information is registered with this new ticket:
<br /><br />
<table cellpadding="5" cellspacing="0" style="border:1px solid #333;font:normal 11px arial">
	<tr>
		<td>Request ID:</td>
		<td>{$request_id}</td>
	</tr>
	<tr>
		<td>Project Name:</td>
		<td>{$project}</td>
	</tr>
	<tr>
		<td>Priority:</td>
		<td>{$priority}</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td>Affected Area:</td>
		<td>{$page}</td>
	</tr>
	<tr>
		<td>Location:</td>
		<td>{if $page_url}{$page_url}{else}N/A{/if}</td>
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
		<td>Revision Instructions</td>
		<td>{$instructions}</td>
	</tr>
</table>
<br />
<br />
when this task is done you can update the status of this ticket at: http://rex2check.com/tickets/view/id/{$ticketid} or give an update to your project manager of task completion.
<br />
<br />
Please login by clicking on the URL below:
<br /><br />
http://www.rex2check.com/
<br /><br /><br /><br />
- REX2Check Admin
</div>