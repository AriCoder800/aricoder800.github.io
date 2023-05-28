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





<?php

<!-- ADDING PETITION INCLUDING PDF -->

  if (isset($_POST['add_pdf'])) { 
   // receive all input values from the form


$title = mysqli_real_escape_string($db,$_POST['username']); 

$detail =  mysqli_real_escape_string($db,$_POST['detail']); 

$cover_path = mysqli_real_escape_string($db, 'Images/'.$title . $_FILES['cover']['name']);

$pdf_path =  mysqli_real_escape_string($db, 'Pdf/'.$title . $_FILES['pdfFile']['name']);




<!-- FOR THE PDF PROCESSING -->

move_uploaded_file($_FILES['name']['tmp_name'], $pdf_path);

$pdf = $pdf_path;

$cover = $cover_path;

  $query = "INSERT INTO Petitions (title, detail, covername, date, filepdf) 			 VALUES('$title', '$detail', '$cover', NOW(),  'pdf')"; 	  
if( mysqli_query($db, $query) )  
 {
header('location:admins.php');
}