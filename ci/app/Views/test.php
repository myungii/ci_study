<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test test!!!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

</head>

<body>
	<table border="1">
		<thead>
			<tr>
				<th> id </th>
				<th> name </th>
				<th> content </th>
				<th> timecreated </th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($test as $list):  ?>	
			<tr>
				<td> <?= $list->id; ?> </td>
				<td> <?= $list->name; ?> </td>
				<td> <?= $list->content; ?> </td>
				<td> <?= $list->timecreated; ?> </td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>


</body>
</html>
