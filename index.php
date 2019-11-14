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
	

<?php require_once 'header.php'; ?>

<div style="margin-top: 20px;">
	<div class="container">
		<div class="jumbotron">
	

		<div class="col-md-12">
			<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
	  			<div class="carousel-inner">
				    <div class="carousel-item active" data-interval="10000">
				      <img src="Pic/1.jpg" style="width: 100%; height: 400px;" class="d-block w-100" alt="...">
				    </div>
				    <div class="carousel-item" data-interval="2000">
				      <img src="Pic/2.jpg" style="width: 100%; height: 400px;" class="d-block w-100" alt="...">
				    </div>
				    <div class="carousel-item">
				      <img src="Pic/3.jpg" style="width: 100%; height: 400px;" class="d-block w-100" alt="...">
				    </div>
		  		</div>
			  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>
</div>
</div>


<div class="container" style="margin-top: 20px;">
	<div class="jumbotron">
	<div class="row">
		<div class="col-md-4">
			<div class="card" style="width: 18rem;">
			  <img src="Pic/4.jpg" class="card-img-top" alt="...">
				<div class="card-body">
				    <h5 class="card-title">Lake Estate</h5>
				    <p class="card-text">The lake estate, is located along NTA road, very affordable houses with lake views.</p>
				    <a href="DCpropertise.php" class="btn btn-primary">Buy a Property today</a>
			  	</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card" style="width: 18rem;">
			  <img src="Pic/5.jpg" style="height: 200px;" class="card-img-top" alt="...">
			  	<div class="card-body">
				    <h5 class="card-title">Garden Estate</h5>
				    <p class="card-text">Peaceful and Calm estate with the best recrational park in Nigeria. It is located along Choba.</p>
				    <a href="DCpropertise.php" class="btn btn-primary">Buy a Property today</a>
			 	</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card" style="width: 18rem;">
			  <img src="Pic/6.jpg" class="card-img-top" alt="...">
			  	<div class="card-body">
				    <h5 class="card-title">Elite Estate</h5>
				    <p class="card-text">Built for luxury and relaxation, Smart houses with the latest technologies. Located along airport road. </p>
				    <a href="DCpropertise.php" class="btn btn-primary">Buy a Property today</a>
			  	</div>
			</div>
		</div>
	</div>
</div>
</div>

		
		


		
<?php require_once 'footer.php'; ?>

</div> 

</body>
</html>