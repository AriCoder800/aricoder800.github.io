<!DOCTYPE html>

<html lang="en">

<head>

	<title>Petition List</title>

	
	<meta property="og:type" content="website" /> 
	<meta property="og:image" content="https://changefloridatoday.com/800log.png" /> 
<meta property="og:description" content="Your signature matters. Join us in making Florida better." /> 
<meta property="og:url"content="https://changefloridatoday.com" /> 
<meta property="og:title" content="Changing Florida one signature at a time" />
<meta property="fb:app_id" content="966242223397117">
	
	

	

	

    <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>



    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <meta name="viewport" content="width=device-width"/>
    
    

<!-- THE STYLING LINKS*********************** -->

   <!-- STYLING REFERENCES ****************** -->

  <link rel="stylesheet" type="text/css" href="main.css"> 
  
 <link rel="stylesheet" type="text/css" media="screen and (max-width:770px)" href="mainMobile.css">    

    
    
    
    
<!-- FOR FONTS ********************* -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;500&family=Lexend+Peta:wght@100;300&family=Open+Sans:wght@300;800&family=Russo+One&display=swap" rel="stylesheet">  

    

    <style>
        

 
    	.headerCurve::after {
    	background-image:url('800log.png');
    	
    	}
    	
    	
    	    	
   .borderPetition {
   border-color:rgba(255,136,0,.3);
   }
    	
    	
    	</style>

    

   



    

  



</head>



<body>

	<?php 
	include('Header.php');
?>



	<div class="headerCurve hc1 ">
<div class='borderPetition'></div>
<div class="headerTitle">Active Petitions</div>
	</div>


			
<!-- <a href="links.php">
		<div class="linkBtn">
		    
		    <img src="fl.png" alt="">
		</div>	
</a>
 -->

 


<?php 
include('db_connect.php');

$sql = "SELECT id, title, description, filepdf, covername FROM Petitions WHERE active = 0";
if($query = mysqli_query($db,$sql))
    {
    while($row = mysqli_fetch_assoc($query))
    {

$title = $row['title'];
$detail = $row['description'];
$image = $row['covername'];
$pdf = $row['filepdf'];
$id =$row['id'];

$string = $detail; 

// Starts at the beginning of the string and ends after 100 characters 






echo "

<div class='containerOne'>

	     <div class='picOne'>

         <img src='$image'></img>

     </div> <!-- end of picOne -->

      <div class='containerTwo'>

         	  <div class='infoContainer'>

      	  	      	   <div class='titleBarBox inText' >

      	             <h3 class='titleBar'>
      	             	$title $id
      	             	  </h3>  	
      	           	
      	           	</div><!-- close titleBarBox -->

      	 <br/>
      	   <div class='summaryBox inText'	>

      	     <div class='summary'>   	"   ;
      	     
      	      echo substr($string, 0, 100).'... <a style="color:rgba(255,136,0,.7);" href="petition.php?id='.$id.'">Read More</a>'; 




      	  echo "     	     

      	     	</div>

      	   </div>  	<!-- summaryBox -->          	 

      	 </div> <!-- infoContainer -->      	

      	</div> <!-- close of containerTwo-->

</div> <!-- close containerOne -->


<a href='$pdf' download='$title'>
  <div class='signButton ind'>

   Download PDF of Petition

	</div>
</a>




<!-- close of petition block -->











";
}
}
?>


		






















<br/>
<br/>
<br/>
<?php 
include('footer.php');
?>

</body>
