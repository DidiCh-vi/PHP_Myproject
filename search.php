<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'tutorial_search');
 
/* Attempt to connect to MySQL database */
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


?>



<?php include 'header.php'; ?>




<div class="container">
	<div class="jumbotron">

		<h1>Search Page</h1>
		<br>
		<br>

	<?php 
		if (isset($_POST["submit"])) {
			$search = mysqli_real_escape_string($connection, $_POST["search"]);
			$sql = "SELECT * FROM article WHERE title LIKE '%$search%' OR text1 LIKE '%$search%' OR a_date LIKE '%$search%'";
			$result = mysqli_query($connection, $sql);
			$queryResult = mysqli_num_rows($result);

			echo "There are ".$queryResult." result(s) found";

			if ($queryResult > 0) {
           while ($row = mysqli_fetch_assoc($result)) {

             echo " <a href='news.php?title=&".$row['title']."&date=".$row['a_date']."'><div class='jumbotron'>

             <h3>".$row['title']."</h3>

             <p>".$row['text1']."</p>

             <p>".$row['a_date']."</p>

             </div></a>";
           }
         }else{
         	echo "No results found!";
         }
		}
	?>


</div>
</div>


</body>

<?php include 'footer.php'; ?>
</html>
