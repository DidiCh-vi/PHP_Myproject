<?php require_once 'header.php'; ?>

 <?php require_once 'feedback.php'; ?>
 




<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
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

	<h1 style="color: blue;"> Feedback </h1>

  <br>
  <br>

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
    <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>"> 
           <span class="text">Phone*</span>
           	<input name="phone" type="text" placeholder="Phone" class="form-control">
           	<span class="help-block"><?php echo $phone_err; ?></span>
    </div>       	
           <br>
       <br>


        <div class="form-group <?php echo (!empty($message_err)) ? 'has-error' : ''; ?>"> 
           <span class="text">Message*</span>
            <textarea name="message" type="text" placeholder="Talk to us" class="form-control" style="height: 200px;"></textarea>
            <span class="help-block"><?php echo $message_err; ?></span>
    </div>

       <br>
       <br>

    <div>   	
		<input value="Submit" type="Submit" class="btn btn-primary">
	</div>

</form>




</div>
</div>


<div class="container">
  <div class="jumbotron">
   <h1 style="color: blue;"> Contact us </h1>

   <br>
   <br>

    <p>Email: didichinedu@gmail.com</p>

    <p>Tel: 0927863726738 | 0251149461154</p>

    <p>Address: 99A Obiyebe Off Obite road ONELGA </p>

    <div style="float: left;"> 

      <img src="Pic/fb.jpg" style="height:45px; width:49px; margin-top:2px; "> 

    </div>

    <div style="float: left; margin-left: 20px;">

      <img src="Pic/tw.jpg" style="height:45px; width:49px; margin-top:2px; ">
    </div>

    <div style=" float:left; margin-left: 20px;">

      <img src="Pic/insta.jpg" style="height:45px; width:49px; margin-top:2px; ">

    </div>

    

  </div>
</div>


 


</body>

<?php require_once 'footer.php'; ?>

</head>
</html>