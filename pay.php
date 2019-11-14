<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: Login.php");
    exit;
}
?>

<?php require_once 'header.php'; ?>


<html>
<head>
<title>Card Details</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery-slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<body>
<div class="container">
	<div class="jumbotron">

        <h1>Hello, <b><?php echo htmlspecialchars($_SESSION["email"]); ?></b> Welcome, </h1>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
</div>
</div>

	<div class="container">
		<div class="jumbotron">
		
				<h2>Card details</h2>
				<br>
				<br>
				<form>
					<h4> Card Number:</h4>
					<input placeholder="cardnumber" type="text" class="form-control">
					<br>
					<br>
					<h4>Card Expiring date:</h4>
					<input placeholder="Expiring date" type="date" class="form-control">
					<br>
					<br>
					<h4> Card CVV:</h4>
					<input placeholder="CVV" type="password" class="form-control">
					<br>
					<br>
					<h4>Card Pin:</h4>
					<input placeholder="Pin" type="password" class="form-control"> 
					<br>
					<br>
					<input value="submit" type="button" class="btn btn-primary">
					<br>
					<br>
				</form>
				<a href="index.php" class="btn btn-primary">Click here to return to home</a>
				</a></p>
		
		</div>
	</div>

	<?php require_once 'footer.php'; ?>

</body>
</head>
</html>
