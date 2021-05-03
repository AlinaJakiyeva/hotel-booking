<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'phpmyadmin');

		$email = "";
		$password = "";
		$username = "";
		$rpassword = "";
	$id = 0;
	$update = false;

if(isset($_POST["submit"]))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];
    
    if($password != $rpassword){
         $msg = "passwords don't match";
    }
    else{
          $result = mysqli_query($db,"INSERT INTO users (username, password,rpassword, email) VALUES ('$username', '$password', '$rpassword', '$email')");
          if($result){
             $msg = "User Created Successfully.";
             header('location: attract.html');
          }
 
    }

   }



  

?>