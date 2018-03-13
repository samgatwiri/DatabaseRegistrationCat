<?php
include "connection.php";
session_start();


//login
if (isset($_POST['login'])){
	extract($_POST);
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$query= "SELECT * FROM 6470users WHERE username='$user' AND password= '$pass';";
	
	$run= mysqli_query ($connect,$query);
	

	$count=mysqli_num_rows($run);

	if($count==1){
		$_SESSION['usernameLogin']= $user;
		echo "<h4>WELCOME To Your Dashboard ". $_SESSION['usernameLogin']. "!";
		header('Location:dashboard.php');
	}else {
		echo "<h5> Wrong username or Password. Please Try Again</h5>";
	}
//register


}elseif (isset($_POST['register'])){
	extract($_POST);
	$query= "INSERT INTO  6470users SET name='$name', username='$user', password='$pass', phone='$number';";
	$input=mysqli_query ($connect,$query);
	if ($input) {
		echo "<h5>User Registration is Successful</h5>";
	}else {
		echo "<h5 class='wrong'> User Registration Failed. Please Check Fields and try Again</h5><br>". mysqli_error($connect);
	}
};



	//forgot login
if (isset($_POST['forgotlogin'])){
	extract($_POST);
	$forgotuser=$_POST['forgotuser'];
	$forgotphone=$_POST['forgotphone'];
	$convertpass= sha1($pass);

	$query= "SELECT * FROM 6470users WHERE username='$forgotuser' AND phone='$forgotphone';";
	$run= mysqli_query ($connect, $query);

	$count= mysqli_num_rows($run);

	if ($count==1){
		$_SESSION['correctUser']=$forgotuser;
		header('Location:dashboard.php');
	}else {
		echo "Username or Phone Number Incorrect. Please Try Again";
	};
}
?>
