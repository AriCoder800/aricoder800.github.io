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


//ADDING PETITION INCLUDING PDF

  if (isset($_POST['add_pdf'])) { 
   // receive all input values from the form

  $title = mysqli_real_escape_string($db,$_POST['title']);  


 $file_name = $_FILES['pdf_file']['name']; 
$file_type = $_FILES['pdf_file']['type'];

echo '$file_type'. $file_type ;
echo '$file_name'. $file_name ;



if ($file_type=='application/pdf')
{
echo '<br/>pdf file<br/>';
}
else
{
echo '<br/> file not a pdf, try again <br/>';
}



$target_folder = 'Pdf/';

$pdf_path =  $target_folder . basename($_FILES['pdf_file']['name']);

echo $pdf_path;


// FOR THE PDF PROCESSING 

if (move_uploaded_file($_FILES['pdf_file']['tmp_name'], $pdf_path))
{
echo '<br/> pdf uploaded<br/>';
}
else 
{
echo '<br/> unable to upload <br/>';
}

$pdf = $pdf_path;



  $query = "INSERT INTO Petitions (filepdf, date) 			 VALUES( '$pdf', NOW())"; 	  
if( mysqli_query($db, $query) )  
 {
echo '<br/> data successful <br/>';
}
else 
{
echo '<br/> data did not go through <br/>';
}


}


?>
