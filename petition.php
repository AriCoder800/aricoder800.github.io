<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>


    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <meta name="viewport" content="width=device-width"/>



  <link rel="stylesheet"  type="text/css" href="style.css">

  <link rel="stylesheet" type="text/css" media="screen and (max-width:770px)" href="StyleMobile.css"> 
  
   <link rel="stylesheet" type="text/css" media="screen and (min-width:900px)" href="StyleWide.css">     

    

    <style type="text/css">

    

    

    

   

  
 

  



 
    </style>



    <!--     Fonts     -->

  



</head>



<body>

	

	

	

	

	<?php 
	include('Header.php');
?>

			</div>

<?php 
include('db_connect.php');



if(isset($_GET['id']))
{
$newid = $_GET['id'];
}


$sql = "SELECT id, title, description, filepdf, covername FROM Petitions WHERE id = $newid";
if($query = mysqli_query($db,$sql))
{
 while($row = mysqli_fetch_assoc($query))
 {
 $title = $row['title'];
$detail = $row['description'];
$image = $row['covername'];
$pdf = $row['filepdf'];
$id =$row['id'];
 
echo "

   <div class='headerPetition'>

  

<h2 > $title</h2>



</div>

<div class='containerflex'>
    
    
    


<div class='columnContainer'>







    <div class='column columnOne'>

    	

          <div class='petitionImg'>

            	<img src='$image'>

	        </div><!-- petitionImg -->



<div class='petitionText'>
    
    <div class='textInner'>

$detail

	</div><!-- innerText -->
	

	</div><!-- petitionText -->



<a href='$pdf' download='$title'>
  <div class='signButton pet'>

   Download PDF of Petition

	</div>
</a>

    </div><!-- columnOne -->
</div>

</div>
";
 }

}
?>


<?php 
include('footer.php');
?>
   


</body>
