
<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
	<?php
	include "header.php"
	?>

	<div class="container content">
		<h3 style="text-align: center;">Forgot Password?</h3>
		<br>
		<br>
		<img src="img/register.png" class="img-responsive img-circle center-block" style="height: 18em; width: 18em;">
		<form id="forgotform" role='form' action="forgot.php" method="post">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Username:</label>
						<input class="form-control" type="text" name="forgotuser" placeholder="Enter Username" required>
					</div>
					<div class="form-group">
						<label>Phone Number:</label>
						<input class="form-control" type="text" name="forgotphone" placeholder="Enter Phone Number" required>
					</div>
					<button class="btn btn-default" name="forgotlogin" type="submit">Submit</button>
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

<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>