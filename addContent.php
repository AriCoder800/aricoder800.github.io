<?php session_start();ob_start();
// initializing variables
 $title = ""; 
 $link = ""; 
 $errors = array();
   
	   
  // connect to the database 
include('db_connect.php'); 
  // REGISTER USER
   
 date_default_timezone_set('America/New_York');
   
   if (isset($_POST['add_link'])) { 
   // receive all input values from the form
           
    $title = mysqli_real_escape_string($db,$_POST['title']); 
    $title = preg_replace('/\s+/', '_', $title);
    
    $link= mysqli_real_escape_string($db, $_POST['link']); 

//update database
  
  $query = "INSERT INTO Links (Title, Link, Revised)	 VALUES('$title','$link', NOW())"; 	  
if( mysqli_query($db, $query))  
 {
 header('location: links.php');
 } 
}
?>