
<!-- Database Connection -->
<?php
	session_start();
	$conn = mysqli_connect("localhost", "root","","orcl") or die("Error Encountered.");
	$query = "SELECT  * from emp_info";
	$res = mysqli_query($conn, $query);

	$queryfordesignation = "SELECT * from designation";
	$resfordesignation = mysqli_query($conn, $queryfordesignation);

	$designation = "<option value= ''>Select Designation</option>";
	while ($rows = mysqli_fetch_array($resfordesignation)) {
		$designation .= "<option value= $rows[0] >$rows[1]</option>";
	}

	$queryforid = "SELECT * from fluttertable";
	$resforid = mysqli_query($conn, $queryforid);

	$id = "<option value= ''>Select Id and Name</option>";
	while ($rows = mysqli_fetch_array($resforid)) {
		$name = $rows[1];
		$id .= "<option value= '$rows[0]' >$rows[0] => $name</option>";
	}


/*	if ($_SESSION['status']) {*/
		$singleid = $_GET['id'];
		$queryforsingleupdate = "SELECT * from fluttertable where id = '$singleid' ";
		$resforsingleupdate = mysqli_query($conn, $queryforsingleupdate);

	

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
			
		<?php require 'nav.php'; ?>


<h2><u class="title">Employee Information</u></h2>
	<form method="post" action="updatecheck.php">
<table>
		<?php
		while ($rows = mysqli_fetch_array($resforsingleupdate)) {
			$id = $rows[0];
			$name = $rows[1];
			$idandname = '<option value= '.$id.' >'."$id".' => '."$name".'</option>';
			$email = $rows[2];
			$pass = $rows[3];
			$desig = $rows[4];
			$des = '<option value= '.$desig.' >'.$desig.'</option>';
		?>
		<tr>
			<th>Employee ID </th>
			<td> </td>
			<td>
				<select name="id" class="form-control">
					<?php echo $idandname; ?>
				</select>

			</td>
		</tr>
		<tr>
			<td></td>
		</tr>

		<tr>
			<th>Employee Name </th>
			<td> </td>
			<td><input type="text" class="form-control" class="item" required="" name="emp_name" value="<?php echo $name; ?>"></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<th>Designation </th>
			<td> </td>
			<td>
				<select name="desig" class="form-control">
					<?php echo $designation; ?>
				</select>

			</td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<th>Email Address </th>
			<td> </td>
			<td><input type="email" class="form-control" name="email" value="<?php echo $email; ?>"></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<th>Password </th>
			<td> </td>
			<td><input type="Password"  class="form-control" name="password" value="<?php echo $pass; ?>"></td>
		</tr>
		<tr>
			<td></td>
		</tr>
	<?php } ?>

</table>
	<input type="submit" class="btn btn-primary" name="update" value="Update">
	</form>
<!-- <form method="post" action="insert.php">
	<h4 class="item_title">Employee ID No:<input type="text" class="item" required="" name="emp_no"><br><br></h4>
	<h4 class="item_title">Employee Name :<input type="text" class="item" required="" name="emp_name"><br><br></h4>	
	<h4 class="item_title">Email Address :<input type="Email" class="item" name="email"><br><br></h4>
	<h4 class="item_title">Password	  :<input type="Password"  class="item" name="password"><br><br></h4>
	<input type="submit" name="insert" value="Save">
</form> -->

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