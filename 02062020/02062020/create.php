
<!-- Database Connection -->
<?php
	$conn = mysqli_connect("localhost", "root","","orcl") or die("Error Encountered.");
	$query = "SELECT  * from emp_info";
	$res = mysqli_query($conn, $query);

?>
<!-- End -->

<!DOCTYPE html>
<html>
<head>
	<title>My First Php Class</title>
	<!-- CSS only -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
	<style>
		.phpcoding{width: 900px;margin: 0 auto;background: #ddd;}
		.headeroption,.footeroption{background: #333;color: #fff;text-align: center;}
		.maincontent{min-height: 400px;padding: 20px;}
		.headeroption h2,.footeroption h2{margin: 0;padding: 20px;}
		.title{margin-left: 226Px;font-size: larger;font-family: initial;}
		.item_title{margin-left: 20Px;font-size: 18px;font-family: initial;font-weight: bold;}
		.item{margin-left: 20Px;width: 230px;}

	</style>
</head>
  <body>
	<div class="phpcoding">
		<section class="headeroption">
			<h2>Confidence Software Limited</h2>
		</section>
		<section class="maincontent">
			

        <!-- Navigation Bar Start -->
		<nav class="navbar navbar-dark bg-dark">
		    <form class="form-inline">
		    <button class="btn btn-outline-warning" type="submit"><a href="index.php"> Home</a></button>
		    <button class="btn btn-outline-warning" type="submit"><a href="create.php">Create</a></button>
		    <button class="btn btn-outline-warning" type="submit"><a href="home.php">Update</a></button>
		    <button class="btn btn-outline-warning" type="submit"><a href="home.php">Delete</a></button>
		    <button class="btn btn-outline-warning" type="submit"><a href="home.php">About Us</a></button>
		  </form>
		</nav>
		<!-- Navigation Bar End -->


<h2><u class="title">Employee Information</u></h2>
<form method="post" action="insert.php">
	<h4 class="item_title">Employee ID No:<input type="text" class="item" required="" name="emp_no"><br><br></h4>
	<h4 class="item_title">Employee Name :<input type="text" class="item" required="" name="emp_name"><br><br></h4>	
	<h4 class="item_title">Email Address :<input type="Email" class="item" name="email"><br><br></h4>
	<h4 class="item_title">Password	  :<input type="Password"  class="item" name="password"><br><br></h4>
	<input type="submit" name="insert" value="Save">
</form>

		</section>
		<section class="footeroption">
			<h2>www.csoft.com.bd</h2>
		</section>
	</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
  </body>
</html>