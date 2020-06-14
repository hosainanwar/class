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
		.title{margin-left: 25Px;font-size: larger;padding: 20px;font-family: initial;}
		.table td, .table th {padding: .75rem;border: 2px solid #572b8c;}		
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

		
		<div>
			<!-- Table Start -->
			<table class="table table-striped">
					<h2 ><u class="title">Employee Information Records Are Given Below:</u></h2>
					  <thead>
					    	<tr>
							      <th scope="col">Employee ID:</th>
							      <th scope="col">Employee Name:</th>
							      <th scope="col">Email:</th>
							      <th scope="col">Password:</th>
					    	</tr>
					  </thead>
					  <tbody scope="col">
					  	<?php 
							while ($rows = mysqli_fetch_array($res)) {
									$empno = $rows[0];
									$emp_name  = $rows[1];
									$email  = $rows[2];
									$password  = $rows[3];
								echo "<tr>";
								echo "<td>$empno</td>";
								echo "<td>$emp_name</td>";
								echo "<td>$email</td>";
								echo "<td>$password</td>";
								echo "</tr>";
							}				
						 ?>
					  </tbody>
			</table>
			<!-- Table End --> 
		</div>
		</section>

		<section class="footeroption">
			<h2>www.csoft.com.bd</h2>
		</section>
</div>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

</body>
</html>