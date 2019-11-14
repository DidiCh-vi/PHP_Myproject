<?php 

require_once "config.php";
//require_once "rest-password.php";

if (isset($_POST['submit'])) {
	$email = $_POST["email"];

if(empty(trim($_POST["email"]))){
        $email_err = "Please enter an email.";
    }else{
    	$sql = "SELECT id FROM register WHERE email = $email ";
    	$result = mysqli_query($connection, $sql);
    	$user = mysqli_fetch_assoc($result);
    	
    	echo $user;




    	//$token = $user['token']



    	// sendPasswordResetLink($email, $token);

    	// header('location:  password-message.php');

    	// exit(0);

    }





}

 ?>