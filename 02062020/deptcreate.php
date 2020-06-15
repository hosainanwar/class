
<!-- Database Connection -->
<?php
	$conn = mysqli_connect("localhost", "root","","orcl") or die("Error Encountered.");
	$query = "SELECT  * from emp_info";
	$res = mysqli_query($conn, $query);

	$queryfordesignation = "SELECT * from designation";
	$resfordesignation = mysqli_query($conn, $queryfordesignation);

	$designation = "<option value= ''>Select Designation</option>";
	while ($rows = mysqli_fetch_array($resfordesignation)) {
		$designation .= "<option value= $rows[0] >$rows[1]</option>";
	}

?>
<!-- End -->

<!DOCTYPE html>
<html>
<head>
	<title>My First Php Class</title>
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


<h2><u class="title">Designation Information</u></h2>
	<form method="post" action="insert.php">
<table>

		<tr>
			<th>Designation Name </th>
			<td> </td>
			<td><input type="text" class="form-control" class="item" name="dept_name"></td>
		</tr>


</table>
	<input type="submit" class="btn btn-primary" name="deptinsert" value="Add">
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