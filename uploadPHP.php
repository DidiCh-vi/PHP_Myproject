<?php 

require_once "config.php";

$price = $info = "";
$price_err = $info_err = "";


  // Validate Information about house
    if(empty(($_POST["info"]))){
        $info_err = "Please enter the Information.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM images WHERE info = ?";
        
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_info);
            
            // Set parameters
            $param_info = $_POST["info"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }



// Validate price
    if(empty(($_POST["price"]))){
        $price_err = "Please enter the Price.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM images WHERE price = ?";
        
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_price);
            
            // Set parameters
            $param_price = $_POST["price"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }




 // Check input errors before inserting in database
    if(empty($info_err) && empty($price_err) ){
        
        // Prepare an insert statement
        $sql = "INSERT INTO images (info, price ) VALUES (?, ? )"; 
         
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_info, $param_price );
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                 header("location: upload.php");

            } else{
                echo "Something went wrong. Please try again later. 5";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($connection);







 ?>