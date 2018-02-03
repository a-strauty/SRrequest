<div id="infoMessage"><?php echo $message;?></div>

<div id="requests_count">
	<p>Total requests: <?php $count = count($request); echo $count;?>
</div>

<div id="requests_table">
<table cellpadding=0 cellspacing=10>
	<tr>
		<th>Account No.</th>
		<th>New Day</th>
		<th>Original Day</th>
		<th>New SR</th>
		<th>Original SR</th>
		<th>Status</th>
	</tr>
	<?php foreach ($request as $request):?>
		<tr>
            <td><?php echo $request->acctnum ?></td>
            <td><?php echo $request->newday ?></td>
            <td><?php echo $request->original_day ?></td>
			      <td><?php echo $request->newsr ?></td>
			      <td><?php echo $request->original_sr ?></td>
			      <td><?php echo $request->Status ?></td>
		</tr>
	<?php endforeach;?>
</table>
</div>

<p><?php echo anchor('auth/users', 'Users')?>
<p>
