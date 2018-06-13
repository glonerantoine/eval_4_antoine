<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', 'antoine', 'eval_4');

	// initialize variables
	$clientId= "";
	$chambreId = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$clientId = $_POST['clientId'];
		$chambreId = $_POST['chambreId'];

		mysqli_query($db, "INSERT INTO reservations (clientId, chambreId) VALUES ('$clientId', '$chambreId')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: index.php');
	}
