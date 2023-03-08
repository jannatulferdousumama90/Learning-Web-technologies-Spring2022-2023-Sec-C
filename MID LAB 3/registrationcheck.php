<?php

session_start();

$name = $_POST["name"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"];

    if($name == null || $email == null || $username == null || $password == null || $confirmpassword == null)
	{
		echo "Null Values";
	}
    else
    {
    	   $user = $username."|".$password."|".$name."|".$email."\r\n";
		   $file = fopen('login.txt', 'a');
		   fwrite($file, $user);
		   header('location: home.php');
    }

?>

