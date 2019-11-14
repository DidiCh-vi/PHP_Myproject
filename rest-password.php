<?php require_once 'header.php'; ?>
<?php require_once 'resetpasswordPHP.php'; ?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Password reset</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery-slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
   
<body>


    <div class="container" style="margin-top: 20px;">
    <div class="jumbotron">

         <h2>Password reset</h2>
        <p>Please enter the email used for registeration.</p>
         <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                <div class="form-group ">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
                </div>    
            <input type="button" name="submit" class="btn btn-warning" value="submit">
        </form>

    </div>
    </div>

</body>

<?php require_once 'footer.php'; ?>

</html>