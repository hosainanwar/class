<?php
	$conn = mysqli_connect("localhost", "root","","orcl") or die("Error Encountered.");

	if (isset($_POST['insert'])) {
		$emp_no = $_POST['emp_no'];
		$emp_name = $_POST['emp_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$query = "INSERT into emp_info(emp_no,emp_name,email,password) values('$emp_no','$emp_name','$email','$password')";
		mysqli_query($conn, $query);

		header("location: index.php");
	}