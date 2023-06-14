<?php session_start();

include('db_connect.php');


echo"START<br/>";

if(isset($_POST['send1']))
{





$newTxt = mysqli_real_escape_string($db,$_POST['texx']);


echo" $newTxt <br/>";


 $image_name = $_FILES['file9']['name']; 
$image_type = $_FILES['file9']['type'];


echo" imagename:".  $image_name;


$image_folder = 'Images/';

$image_path = $image_folder . basename($_FILES['file9']['name']);


if (move_uploaded_file($_FILES['file9']['tmp_name'], $image_path))
{
echo '<br/> image uploaded<br/>';
}
else 
{
echo '<br/> unable to upload image<br/>';
}

$newImg = $image_path;


 $query = "INSERT INTO Cover (cover, covera, coverb, coverc, coverd, imageOnea, imageOneB, imagetwo, imagetwoa,imagethree, imagethreea,  textB, textC, textD, textE, textF) 	 VALUES('$newImg', '$newImg', '$newImg', '$newImg',   '$newImg', '$newImg', '$newImg', '$newImg', '$newImg', '$newImg', '$newImg', '$newTxt', '$newTxt', '$newTxt', '$newTxt', '$newTxt' )"; 	  
if( mysqli_query($db, $query))  
 {
 
 		
		echo"
		
		GOT IT!
		

";

}
}

 
 
 






?>









