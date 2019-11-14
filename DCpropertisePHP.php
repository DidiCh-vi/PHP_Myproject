<?php require_once 'header.php'; ?>
<?php require_once 'uploadPHP.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<title>DC Housing Home page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery-slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
   
<body>


<div class="container" style="margin-top: 20px;">
	<div class="jumbotron">
	
	<form action=" header.php" method="post" enctype="multipart/form-data">

	<div>
		
	<span class="text">Select Image File to Upload:</span>

	<br>
	<br>	

    <input type="file" name="file" class="btn btn-primary">

	</div>

    <br>
    <br>


    <div class="form-group <?php echo (!empty($info_err)) ? 'has-error' : ''; ?>"> 
           <span class="text">Info*</span>
            <textarea name="info" type="text" placeholder="Info abt house" class="form-control" style="height: 200px;"></textarea>
            <span class="help-block"><?php echo $info_err; ?></span>
    </div>


    <br>
    <br> 


    <div class="form-group <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>"> 
           <span class="text">Price*</span>
           	<input name="price" type="text" placeholder="Price" class="form-control">
           	<span class="help-block"><?php echo $price_err; ?></span>
    </div>       	
    
    <br>
    <br>




    <input type="submit" name="submit" value="Upload" class="btn btn-primary">

	</form>


	</div>
</div>

</body>

<?php require_once 'footer.php'; ?>


</head>
</html>