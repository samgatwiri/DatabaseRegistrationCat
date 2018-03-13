<?php
include "process.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
	<?php
	include "header.php"
	?>

	<div class="container content">
		<h3 style="text-align: center; color: darkgreen; ">Reset Password</h3>
		<br>
		<br>
		<img src="img/register2.png" class="img-responsive img-circle center-block">
		<form role='form' action='reset.php' method="post">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Username:</label>
						<input class="form-control" type="text" name="resetuser" placeholder="Enter Username" required>
					</div>
					<div class="form-group">
						<label>Password:</label>
						<input class="form-control" type="text" name="resetpass" placeholder="Enter Phone Number" required>
					</div>
					<div class="form-group">
						<label>Re-Enter Password:</label>
						<input class="form-control" type="text" name="resetpass" placeholder="Enter Phone Number" required>
					</div>
					<button class="btn btn-default" name="resetlogin" type="submit">Submit</button>
					<hr>
					<br>

					<li class="reset">
						<a href="reset.php">Reset Password</a>
					</li>
					<br>
				</div>
			</div>
		</form>
</div>
<br>
<br>

	<?php include "footer.php" ?>

</body>
</html>