<!-- Database Connection -->
<?php

	session_start();
	$_SESSION['status'] = 0;
	$conn = mysqli_connect("localhost", "root","","orcl") or die("Error Encountered.");

	$query = "SELECT  * from fluttertable";
	$res = mysqli_query($conn, $query);

	$querydesignation = "SELECT  * from designation";
	$resdesignation = mysqli_query($conn, $querydesignation);

?>
<!-- End -->

<!DOCTYPE html>
<html>
<head>
	<title>My Second Php Class</title>
	<!-- CSS only -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
  <body>
	<div class="phpcoding">
		<section class="headeroption">
			<h2>Confidence Software Limited</h2>
		</section>

		<section class="maincontent">	

		<?php require 'nav.php'; ?>

		
		<div>
			<!-- Table Start -->
			<table class="table table-striped">
					<h2 ><u class="title">Employee Information Records Are Given Below:</u></h2>
					  <thead>
					    	<tr>
							      <th scope="col">Employee ID:</th>
							      <th scope="col">Employee Name:</th>
							      <th scope="col">Employee Designation:</th>
							      <th scope="col">Email:</th>
							      <th scope="col">Password:</th>
							      <th scope="col">Action</th>
							      <th scope="col">Action</th>
					    	</tr>
					  </thead>
					  <tbody scope="col">
					  	<?php 
							while ($rows = mysqli_fetch_array($res)) {
									$empno = $rows[0];
									$emp_name  = $rows[1];
									$email  = $rows[2];
									$password  = $rows[3];
									$designation  = $rows[4];
										$queryfordes = "SELECT * from designation where id = $designation";
										$resfordes = mysqli_query($conn, $queryfordes);

									while ($row = mysqli_fetch_array($resfordes)) {
										$designation = $row[1];
									}
								echo "<tr>";
								echo "<td>$empno</td>";
								echo "<td>$emp_name</td>";
								echo "<td>$designation</td>";
								echo "<td>$email</td>";
								echo "<td>$password</td>"; ?>
								<td><a href = "update.php?id=<?php echo $empno; ?>&status=<?php echo '1'; ?>" class = 'btn btn-info'>Update</a>
									</td>
								<td><a href = "delete.php?id=<?php echo $empno; ?>" class = ' alertt btn btn-info'>Delete</a>
									</td><?php
								echo "</tr>";
							}				
						 ?>
					  </tbody>
			</table>

			<!-- Table End --> 
		</div>
		<div>
			<!-- Table Start -->
			<table class="table table-striped">
					<h2 ><u class="title">Designation Information Records Are Given Below:</u></h2>
					  <thead>
					    	<tr>
							      <th scope="col">Designation ID:</th>
							      <th scope="col">Designation Name:</th>
							      <!-- <th scope="col">Action</th> -->
					    	</tr>
					  </thead>
					  <tbody scope="col">
					  	<?php 
							while ($rows = mysqli_fetch_array($resdesignation)) {
									$desno = $rows[0];
									$des_name  = $rows[1];

								echo "<tr>";
								echo "<td>$desno</td>";
								echo "<td>$des_name</td>"; ?>
<!-- 								<td><a href = "delete.php?des=<?php echo $desno; ?>" class = ' alertt btn btn-info'>Delete</a>
									</td> --><?php
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
<script>
	
	$('.alertt').click(function() {
		alert('Are You Sure? ');
	});

</script>
</body>
</html>