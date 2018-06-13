<?php  include('codePhp.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Evalutation n4</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php $results = mysqli_query($db, "SELECT * FROM reservations"); ?>

<table>
	<thead>
		<tr>
			<th>Client</th>
			<th>Chambre</th>
			<th>Date</th>
			<th>Statut</th>
			<th colspan="5">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['clientId']; ?></td>
			<td><?php echo $row['chambreId']; ?></td>
			<td><?php echo $row['dateEntree']; ?></td>
			<td><?php echo $row['statut']; ?></td>
			<td>
				<a href="edit.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>

</body>
</html>