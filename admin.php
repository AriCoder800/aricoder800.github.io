<?php session_start(); 
if (!isset($_SESSION['username']))
 { 	
 $_SESSION['msg'] = "You must log in first"; 	header('location: login.php'); 
 }
  if (isset($_GET['logout'])) 
  { 	
  session_destroy(); 	unset($_SESSION['username']); 	header("location: login.php"); 
  } 
  
 include('db_connect.php');
  ?>      


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

	

	

	

	

	<div class="HeaderOne">

		<div class="pageTitle">

			ChangingFlorida.org

			</div>

		

		</div>

		
	<div class="HeaderOne">

			</div>
		
		
		
	<div class="adminOptions">
	    
	    
	    <!-- one -->
		
		<div class="adminCol activePetitions">
			
			<div class="adminSub">
			
			<div class="vert">
			    
			    <div>
			Active Petitions
			</div>
			
			<div>
			    3
			    </div>
			
			</div>
			
			
			</div>
			</div>

<!-- end one -->

<!-- two -->

   <div class="adminCol createPetition">
  <a href="ready.html">
  <div class="linkDiv">
      
  </div>
  </a>
    

  
  	<div class="adminSub">
  	    
  	     
  	    
			
			<div class="vert">
  
   
  
  
  <div>
   	Create New Petition
   	</div>
   	<div>
			    
			    </div>
   	
   		  <div>
   	
   	
   	
   	
   	</div>
   		
   		
   		
			</div>
			
			
			
			<!-- end two -->
			
			
			
			</div>
   	
   	</div>
   	
   	</div>
		
</body>
