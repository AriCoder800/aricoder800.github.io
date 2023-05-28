



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
    	
    	
    	
    	
    	
    	</style>

    

   



    

  



</head>



<body>

	

	<div class="HeaderOne ">

		<div class="pageTitle">
			
		   <div class="mainTitle"	>ChangingFloridaToday
		   </div>
      
		
  	</div>

	</div><!-- headerOne -->

	<div class="coverImg">

		   <div class="headerHolder">

	   		</div>

		</div>

	<div class="HeaderOne Ops">

			<h2 class="discoverBar">

				Petitions needing your Signature

	</div>

			

			



 


<?php 
include('db_connect.php');

$sql = "SELECT title, description, filepdf FROM Petitions";
if($query = mysqli_query($db,$sql))
    {
    while($row = mysqli_fetch_assoc($query))
    {

$title = $row['title'];
$detail = $row['description'];

$pdf = $row['filepdf'];


echo "

<div class='containerOne'>

	     <div class='picOne'>

         <img src='$image'></img>

     </div> <!-- end of picOne -->

      <div class='containerTwo'>

         	  <div class='infoContainer'>

      	  	      	   <div class='titleBarBox inText' >

      	             <h3 class='titleBar'>
      	             	$title
      	             	  </h3>  	
      	           	
      	           	</div><!-- close titleBarBox -->

      	 
      	   <div class='summaryBox inText'	>

      	     <div class='summary'>   	   

      	     $detail	      	     

      	     	</div>

      	   </div>  	<!-- summaryBox -->          	 

      	 </div> <!-- infoContainer -->      	

      	</div> <!-- close of containerTwo-->

</div> <!-- close containerOne -->


<a href='$pdf' download='$title'>
  <div class='signButton'>

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
<br/><p> Terms</p>





</body>
