<?php
	$conn = mysqli_connect("localhost", "root","","orcl") or die("Error Encountered.");

	if (isset($_POST['insert'])) {
		$emp_name = $_POST['emp_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$desig = $_POST['desig'];

		$query = "INSERT into fluttertable(fullname,email,password, designation) values('$emp_name','$email','$password', '$desig')";
		$res = mysqli_query($conn, $query);

		if ($res) {
			header("location: index.php");
		} else header("location: create.php");
	}
	if (isset($_POST['deptinsert'])) {
		$dept_name = $_POST['dept_name'];

		$query = "INSERT into designation(desname) values('$dept_name')";
		$res = mysqli_query($conn, $query);

		if ($res) {
			header("location: index.php");
		} else header("location: deptcreate.php");
	}
?>
