<?php

session_start();

$name = $_POST["name"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"];
$gender=   $_POST['gender'];
$DateofBirth =  $_POST['date'];


    if($name == null || $email == null || $username == null || $password == null || $confirmpassword == null)
	{
		echo "Null Values";
	}
    else
    {
    	   $user = $username."|".$password."|".$name."|".$email."\r\n";
		   $file = fopen('login.txt', 'a');
		   fwrite($file, $user);
		   $_SESSION['username'] =$username;
		   $_SESSION['password'] =$password;
		   $_SESSION['name'] =$name;
		   $_SESSION['email'] =$email;
		   $_SESSION['gender'] =$gender;
		   $_SESSION['date'] =$DateofBirth;

		   header('location: home.php');

		   
    }

?>

