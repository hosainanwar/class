<?php
	$conn = mysqli_connect("localhost", "root","","orcl") or die("Error Encountered.");

	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$emp_name = $_POST['emp_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$desig = $_POST['desig'];

	$queryforupdate = "UPDATE fluttertable set fullname = '$emp_name' , email = '$email' , password = '$password', designation = '$desig' where id = '$id'";

	$resforupdate = mysqli_query($conn, $queryforupdate);
		if ($resforupdate) {
			header("location: index.php");
		} else {
			header("location: update.php");
			// echo "<pre>";
			// print_r($_POST);
		};

	// echo "<pre>";
	// print_r($_POST);

	}