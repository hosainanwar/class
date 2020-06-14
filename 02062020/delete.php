<?php
	$conn = mysqli_connect("localhost", "root","","orcl") or die("Error Encountered.");

	$id = $_GET['id'];

	$queryforupdate = "DELETE from fluttertable where id = '$id'";

	$resforupdate = mysqli_query($conn, $queryforupdate);
		if ($resforupdate) {
			header("location: index.php");
		} else {
			header("location: index.php");
			// echo "<pre>";
			// print_r($_POST);
		}

	// echo "<pre>";
	// print_r($_POST);