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
   <style type="text/css">
  	#main{
	border: 2px solid black;
	height: 2000px;
	width: 1335px;
}

#sec {
    width:450px;
    float:right;
    padding:0px; 
}

#nav {
	/*border: 2px solid brown;*/
    line-height:30px;
    background-color:transparent;
    height:150px;
    width:100px;
    float:left;
    margin-left: 10px; 
}

#register{
	width: 350px;
	float: left;
}

  </style> 
<body>
	

		
		  	<div class="container">
			 	<div id="nav">
					<a href="index.php">Home </a><br>
					<a href="DCpropertise.php">Propertise </a><br>
					<a href="DCcontact.php"> Contact </a><br>
					<a href="DCabout.php"> About </a>
				</div> 

				<div class="jumbotron" style="text-align: center;">
				    <a href="index.php" style="text-decoration: none;"><h1>DC Housing</h1> </a>      
				    <p> DC housing providing the best afordable housings since 2022 </p>
				</div>
				<div class="jumbotron" style="height: 200px;">
                        <div id="register">
                            <div class="indent">
                            	<a href="Login.php" class="btn btn-primary">Login</a>
                            	<a href="register.php" class="btn btn-primary">Sign Up</a>
                            </div>
                        </div>

				<div id="sec">
					
					<form action="search.php" method="POST">
					    <div class="form-group <?php echo (!empty($search_err)) ? 'has-error' : ''; ?>">
	
							 <input placeholder="Search" type="text" name="search" style="width: 100%">
							<button type="submit" name="submit" class="btn btn-primary">Search</button>
						</div>
					</form>
				</div>
			</div>
		</div>







