<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>


    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <meta name="viewport" content="width=device-width"/>



<!-- STYLING REFERENCES ****************** -->

  <link rel="stylesheet" type="text/css" href="main.css"> 
  
 <link rel="stylesheet" type="text/css" media="screen and (max-width:770px)" href="mainMobile.css">    


  
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;500&family=Lexend+Peta:wght@100;300&family=Open+Sans:wght@300;800&family=Roboto:wght@100;400&family=Russo+One&display=swap" rel="stylesheet">


    <style type="text/css">

    

    

    

   

  
 

  



 
    </style>



    <!--     Fonts     -->

  



</head>



<body>

	

	

	

	

	<?php 
	include('Header.php');
?>

		
<!-- PETITION PHP DATA -->

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


<style>
    .headerCurve::after {
    background-image:url('$image');
    }
    
    </style>
    
    
	<!-- TITLE OF PETITION -->
				
		<div class='headerCurve hc'>
<div class='borderPetition'></div>
<div class='headerTitle'>$title</div>
	</div>


<br/>


   <div class='headerPetition'>


</div>

<div class='containerflex'>
    
    
    


<div class='columnContainer'>







    <div class='column columnOne'>

    	

          <div class='petitionImg'>

            	<img src='$image'>

	        </div><!-- petitionImg -->



<div class='petitionText'>
   
   <!-- INNER CURVE DESIGN --> 
    <div class='borderPetInner'></div>
    <div class='borderPetInner2'></div>
    
    
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
