<?php include "connection.php" ?>
<?php include "process.php" ?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Welcome To Yor Dashboard!</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
	<?php include "header.php" ?>
	<div>
		<header><h2 class="dashboard">Welcome To Your <span class="l">D</span><span class="i">A</span><span class="t">S</span><span class="m">H</span><span class="u">B</span><span class="s">O</span></span><span class="l">A</span></span><span class="i">R</span></span><span class="m">D <?php echo  $_SESSION['usernameLogin']; ?></span></h2> 
		</header>
		<br>
		<br>
		<br>
	</div>
	<div class="container dash">
		<div class="panel-group" id="accordion">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
						Add, Delete, Edit Jobs</a>
					</h4>
				</div>
				<div id="collapse1" class="panel-collapse collapse in">
					<div class="panel-body">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Jobs</th>
									<th scope="col">Add</th>
									<th scope="col">Delete</th>
									<th scope="col">Edit</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>IT Specialist</td>
									<td><button type="submit" name="add" class="btn btn-success">Add</button></td>
									<td><button type="submit" name="delete" class="btn btn-danger">Delete</button></td>
									<td><button type="submit" name="edit" class="btn btn-warning">Edit</button></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Software Engineer</td>
									<td><button type="submit" name="add" class="btn btn-success">Add</button></td>
									<td><button type="submit" name="delete" class="btn btn-danger">Delete</button></td>
									<td><button type="submit" name="edit" class="btn btn-warning">Edit</button></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Lead Data Scientist</td>
									<td><button type="submit" name="add" class="btn btn-success">Add</button></td>
									<td><button type="submit" name="delete" class="btn btn-danger">Delete</button></td>
									<td><button type="submit" name="edit" class="btn btn-warning">Edit</button></td>
								</tr>
							</tbody>
						</table>

					</div>
				</div>
			</div>
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
						View To-Do Jobs</a>
					</h4>
				</div>
				<div id="collapse2" class="panel-collapse collapse">
					<div class="panel-body">


					</div>
				</div>
			</div>
			<div class="panel panel-warning">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
						Search Job</a>
					</h4>
				</div>
				<div id="collapse3" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-6">
								<form action="/action_page.php">
									<input type="text" placeholder="Search Jobs" class="form-control" name="search">
									<br>
									<button class="btn btn-default" type="submit">Submit</button>
								</form>
							</div>

						</div>	

					</div>
				</div>
			</div>
		</div>
	</div>




	<br>
	<br>
	<br>
	<br>
	<?php
	include "footer.php"
	?>
</body>
</html>

