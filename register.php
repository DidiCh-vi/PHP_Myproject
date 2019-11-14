<?php require_once "registerPHP.php"; ?>

<?php require_once 'header.php'; ?>



<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery-slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <body>


<div class="container">
  <div class="jumbotron">
<form  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" > 

	<div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">                   
       <span class="text-form">Name*</span>
       	<input name="name" type="text" placeholder="Name" class="form-control">
       	<span class="help-block"><?php echo $name_err; ?></span>
    </div>  
       <br>
       <br>
    <div  class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">   
         <span class="text-form">Email*</span>
         	<input name="email" type="text" placeholder="Email" class="form-control" value="<?php echo $email; ?>">
        <span class="help-block"><?php echo $email_err; ?></span> 	
    </div>  
         <br>
       <br> 
    <div>   
           <span class="text">Address*</span>
           	<input name="address" type="text" placeholder="Address" class="form-control">
           	<span class="help-block"><?php echo $address_err; ?></span>
    </div>       	
           <br>
       <br>
    <div>   
        	<span class="text">Mobile Number*</span>
           	<input name="mobile" type="text" placeholder="Mobile Number" class="form-control">
           	<span class="help-block"><?php echo $mobile_err; ?></span>
    </div>     
           <br>
       <br>
    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>       	
           <br>
       <br>
     <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>       
            <br>
       <br>
    <div>   
             <input type="radio" name="sex" value="male">Male
             <br>
             <input type="radio" name="sex" value="female" >Female
             <br>
             <span class="help-block"><?php echo $sex_err; ?></span>
    </div>         
      <br>
       <br>
    <div>   	
		<input type="submit" value="Create Account" class="btn btn-primary">
		<input type="reset" class="btn btn-primary" value="Reset">
	</div>
  <br>
  <br>	

	<p>Already have an account? <a href="login.php">Login here</a>.</p>	
</form>
</div>
</div>

<?php require_once 'footer.php'; ?>


</body>
</html>