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
  
  echo '<br/>$title<br/>';
  
  $details = mysqli_real_escape_string($db,$_POST['details']);


echo '<br/>$details<br/>';


 $image_name = $_FILES['cover']['name']; 
$image_type = $_FILES['cover']['type'];

echo '<br/>$image_type'. $image_type ;
echo '<br/>$image_name'. $image_name ;



 $file_name = $_FILES['pdf_file']['name']; 
$file_type = $_FILES['pdf_file']['type'];

echo '<br/>$file_type'. $file_type ;
echo '<br/>$file_name'. $file_name ;



if ($file_type=='application/pdf')
{
echo '<br/>pdf file<br/>';
}
else
{
echo '<br/> file not a pdf, try again <br/>';
}



$image_folder = 'Images/';
$target_folder = 'Pdf/';


$image_path = $image_folder . basename($_FILES['cover']['name']);
$pdf_path =  $target_folder . basename($_FILES['pdf_file']['name']);




// FOR THE PDF PROCESSING 

if (move_uploaded_file($_FILES['pdf_file']['tmp_name'], $pdf_path))
{
echo '<br/> pdf uploaded<br/>';
}
else 
{
echo '<br/> unable to upload <br/>';
}


if (move_uploaded_file($_FILES['cover']['tmp_name'], $image_path))
{
echo '<br/> image uploaded<br/>';
}
else 
{
echo '<br/> unable to upload image<br/>';
}

$img = $image_path;
$pdf = $pdf_path;


  $query = "INSERT INTO Petitions (title, description, date, filepdf, covername) 			 VALUES('$title', '$details', NOW(),  '$pdf', '$img')"; 	  
if( mysqli_query($db, $query) )  
 {
 header('location: petitionList.php');
}


}


?>
