
<!DOCTYPE html>
<html>
<head>
	<title>Registration System Cat</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">

</head>
<body>
	<?php include "header.php" ?>
	<br>
	<br>
	

	<div class="container">
		<div class="jumbotron">
			<br>
			<br>
			<br>
			<br>
			<br>
			<h2 class="welcome">Welcome To The <span class="l">L</span><span class="i">I</span><span class="t">T</span><span class="m">M</span><span class="u">U</span><span class="s">S</span></h2>
			<h4>Your Go-To Dashboard</h4>

		</div>
	</div>
	
	<div class="container content">
		<br>
		<ul class="nav nav-pills">
			<li class="active"><a data-toggle="pill" href="#login">Login</a></li>
			<li><a data-toggle="pill" href="#register">Register</a></li>
		</ul>
		<hr class="hr1">

		<div class="tab-content actualform">
			<div id="login" class="tab-pane fade in active">
				<br>
				<form role="form" action="process.php" method="post">
					<div class="row">
						<div class="col-md-5">
							<div class="form-group">

								<label>Username:</label>
								<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</div>
								<input class="form-control" type="user" name="user" placeholder="Enter Username" required>
							</div>
								
							</div>
							<div class="form-group">

								<label>Password:</label>
								<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</div>
								<input class="form-control" type="password" name="pass" placeholder="Enter Password" required>
							</div>
								
							</div>
						<div class="form-group">
							<input type="checkbox" name="check">
							<label>Remember Me</label>
						</div>
						<button class="btn btn-default" type="submit" name="login">Login</button>
						<hr class="hr1">
						
					</div>
				</div>
				</form>
				<li class="reset">
						<a href="forgot.php">Forgot Password</a>
					</li>
					<br>
					
				

			</div>

			<div id="register" class="tab-pane fade">
				<br>
				<form role="form" action="process.php" method="post">
					<div class="row">
						<div class="col-md-5">
							<div class="form-group">
								<label>Name:</label>
								<input type="text" name="name" class="form-control" placeholder="Enter Name" required>
							</div>
							<div class="form-group">
								<label>Username:</label>
								<input type="text" name="user" class="form-control" placeholder="Enter Email" required>
							</div>
							<div class="form-group">
								<label>Password:</label>
								<input type="password" name="pass" class="form-control" placeholder="Enter Password" required>
							</div>
							<div class="form-group">
								<label>Phone Number:</label>
								<input type="text" name="number" class="form-control" placeholder="Enter Phone Number" required>
							</div>
							<button class="btn btn-default" type="submit" name="register">Register</button>
							<br>
							<br>

						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<br>
	<br>
	<?php
		include "footer.php";
		?>


</body>
</html>

<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>