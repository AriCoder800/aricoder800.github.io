<!DOCTYPE html>
<html lang="en">
<head>    
    <title>ChangeFloridaToday</title>

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



<!-- STYLING REFERENCES ****************** -->

  <link rel="stylesheet" type="text/css" href="main.css"> 
  
 <link rel="stylesheet" type="text/css" media="screen and (max-width:770px)" href="mainMobile.css">    




<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;500&family=Lexend+Peta:wght@100;300&family=Open+Sans:wght@300;800&family=Quicksand:wght@300;600&family=Roboto:wght@100;400&family=Russo+One&display=swap" rel="stylesheet">


    
    
    <style type="text/css">        
        

/* ANIMATION TO CHANGE IMAGE ---------- CHANGE HERE NOT IN MAIN.CSS --------*/

<?php 
include('db_connect.php');

  $sql = "SELECT cover, covera, coverb, coverc, coverd, imageOnea, imageOneb, imagetwo, imagetwoa,imagethree, imagethreea,  textB, textC, textD, textE, textF FROM Cover ";
	  
	  if($query = mysqli_query($db,$sql))
	  {
	  while($row = mysqli_fetch_assoc($query))
	  {
	  
	  $imgOne = $row["cover"];
	  $imgTwo = $row['covera'];
	  $imgThree = $row['coverb'];
	  $imgFour = $row['coverc'];
	  $imgFive = $row['coverd'];
	  $imgSix = $row['imageOnea'];
	  $imgSeven= $row['imageOneb'];
	  $imgEight = $row['imagetwo'];
	  $imgNine = $row['imagetwoa'];
	  $imgTen = $row['imagethree'];
	  $imgEleven= $row['imagethreea'];
	  
	  $text1= $row['textB'];
	  $text2 = $row['textC'];
	  $text3 = $row['textD'];
	  $text4 = $row['textE'];
	  $text5 = $row['textF'];
	  
	  
echo "


@keyframes slideShowHead {
0%{ background-image:url('$imgOne');}
25%{ background-image:url('$imgTwo');}
50% {background-image:url('$imgThree');}
75%{ background-image:url('$imgFour');}
100% {background-image:url('$imgOne');}

}





@keyframes slideShow {
0%{ background-image:url('$imgSix');}
50%{ background-image:url('$imgSeven');}
100% {background-image:url('$imgSix');}
}



@keyframes slideShow2 {
0%{ background-image:url('$imgEight');}
50%{ background-image:url('$imgNine');}
100% {background-image:url('$imgEight');}

}

";

}
}

?>

    </style>

    <!--     Fonts     -->
  

</head>


	<body>
	    
	   <div class="invisible"><img src="800log.png" alt=""></div>
	   
	   <?php include('Header.php'); ?>







	
	<!-- FIRST SECTION (IMAGE) -->
	
	<div class="img1">
	    <div class="bloc">
	        <div class="inbloc">CHANGE</div>
	         <div class="inbloc">FLORIDA</div>
	         <div class="inbloc">TODAY</div>   
	             
	    </div>
	    
	   <div class="borderOut"></div> 
	    </div>
	    
	    
	   <!-- SECOND SECTION -->	    
	
			<div class="bgImg fontCenter img2">
			    <div>
			        <p><?php echo"$text1"; ?></p>
			    </div>
	   </div>
	    


<!-- THIRD SECTION (IMAGE) -->			
    
		<div class="imgSec rad1">	   
		   		     <div><p><?php echo"$text2"; ?></p>
		        </div>
		        <div class="borderGen borderTwo"></div>   
		      
		    </div>
		    
		 <!-- FOURTH SECTION -->	    
	
			<div class="bgImg fontCenter img2">
			    <div>
			               <p><?php echo"$text3"; ?></p>
			    </div>
	   </div>
	    


<!-- FIFTH SECTION (IMAGE) -->			
    
		<div class="imgSec rad2">	   
		   		     <div> 
		   		         
		   		       
		        </div>
		        <div class="borderGen borderThree">
		            
		            <div><a href="petitionList.php"><div class="bgBtn">View Active Petitions</div></a></div> 
		        </div>   
		      
		    </div>  
		  
		  
		 <!-- SIXTH SECTION -->	    
	
			<div class="bgImg fontCenter img2">
			    <div>
			        <p><?php echo"$text4"; ?></p>
			    </div>
	   </div>   


<br/>
<br/>
<br/>

<!-- FOOTER PHP LINK -->

<?php include('footer.php'); ?>

</body>
</html>
