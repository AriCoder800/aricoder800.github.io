<!DOCTYPE html>

<html lang="en">

<head>

	<title>Change Florida Today </title>

	

	 <link rel="image_src" href="https://aricoder800.github.io/cover.jpg">

	

		<meta property="og:type" content="website" /> 

	<meta property="og:image" content="https://aricoder800.github.io/cover.jpg" /> 

<meta property="og:description" content="Your signature matters. Join us in making Florida better." /> 

<meta property="og:url"content="https://aricoder800.github.io" /> 

<meta property="og:title" content="Lets chang Floriad one signature at a time" />

<meta property="fb:app_id" content="966242223397117">
	

    <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>



    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <meta name="viewport" content="width=device-width"/>



    

    <link rel="stylesheet" type="text/css" href="style.css"> 

      <link rel="stylesheet" type="text/css" media="screen and (max-width:770px)" href="StyleMobile.css"> 
  
   <link rel="stylesheet" type="text/css" media="screen and (min-width:900px)" href="StyleWide.css">     

    

    <style>
    	
    	
    	
   .linkBtn {
   height:50px;
   width:50px;
   padding:10px;
   background-color:orange;
   border-radius:50%;
   position: fixed;
   bottom:  30px;
   right: 30px;
   border:1px solid white;
   transition:1s ease-in-out;
   animation:border 2s linear infinite;
   } 	
   
   .linkBtn img {
   height:100%;
   width:100%;
   object-fit:cover;
   }
    	
    	

    	
    	
    	
    	@keyframes border {
    	0% {transform:scale(1);
         	opacity:1;}
    	
    	50% {transform:scale(1.1);
         	opacity:.7;}
    	
    	100% {transform:scale(1);
    	     opacity:1;
         	}
    	
    	}
    	
    	
    	</style>

    

   



    

  



</head>



<body>

	<?php 
	include('Header.php');
?>


	<div class="coverImg">

		   <div class="headerHolder">

	   		</div>

		</div>

	<div class="HeaderOne Ops">

			<h2 class="discoverBar">

				Petitions needing your Signature

	</div>

			
<a href="links.php">
		<div class="linkBtn">
		    
		    <img src="fl.png" alt="">
		</div>	
</a>


 


<?php 
include('db_connect.php');

$sql = "SELECT id, title, description, filepdf, covername FROM Petitions";
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

      	 
      	   <div class='summaryBox inText'	>

      	     <div class='summary'>   	"   ;
      	     
      	      echo substr($string, 0, 100).'... <a style="color:red;" href="petition.php?id='.$id.'">Read More</a>'; 




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
