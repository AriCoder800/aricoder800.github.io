<?php session_start();ob_start();
if (!isset($_SESSION['username']))
 { 	
 $_SESSION['msg'] = "You must log in first"; 	header('location: login.php'); 
 }
  if (isset($_GET['logout'])) 
  { 	
  session_destroy(); 	unset($_SESSION['username']); 	header("location: login.php"); 
  } 
  
  $pass = $_SESSION['pass'];
  $id = $_SESSION['id'];
  $level = $_SESSION['level'];
  
 include('db_connect.php');
 
 include('addContent.php');
  ?>      



<!DOCTYPE html>

<html lang="en">

<head>
 <title>Create Links</title>
    <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>



    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <meta name="viewport" content="width=device-width"/>



 <link rel="stylesheet" type="text/css" href="style.css" />
  

      <link rel="stylesheet" type="text/css" media="screen and (max-width:770px)" href="StyleMobile.css"> 
  
   <link rel="stylesheet" type="text/css" media="screen and (min-width:900px)" href="StyleWide.css">  
    

    <style type="text/css">

    

    

    

   .btnContent {
   background-color: transparent;
   color: black;
   font-size: 18px;
   font-weight:700;
   width:inherit;
   height:inherit;
   border: 1px solid transparent;
   }

  


    </style>



    <!--     Fonts     -->

  



</head>



<body>

	

	

	

	

		
	<div class="HeaderOne">
	    <div class="pageTitle creating">
Add Links

</div>
			</div>
			
			
			


			
		
		
 <form class="form"  method="post" action="addContent.php" > 	<?php include('errors.php'); ?> 	
		
		<h1>Add a new link</h1>

<h2></h2>
		
		 <div   class="input-group" >
		     
		      <label>Title of Website</label> 		
		     
		     
		 
		   <input id="title" type="text" name="title" ></input>
		    
		    <br/>
		    <br/>
		      <label>Type complete website address (include https://)</label> 		
		     
		     
		 
		   <input  id="link" type="text" name="link"></input>
		    
		    <br/>
		    <br/>
		    
		    
		    
		    <div class="stepsContainer" >
		 
		 
		 
		 <div class="floatR">
		     
		     
		 	 <a href="ready.html">
		 	  <div class="stepsBtn btn">
		   back  
 </div>
 </a>
 
   
		<div class="stepsBtn btn">
		    <button id="submit" type="submit" class="btnContent" name="add_link" onclick="loader(); loadertime()" >Add Link</button> 	
		 </div>		 
		 
		 
		 
		 </div><!-- steps container -->
		 
		 
		 </div><!-- input-group -->
		 
		    
		    
		    
		    </form>
		    
		  <a href="links.php"> <div class="stepsBtn">Go to Links Page</div></a>
		    <br/>
		    <br/>
		




		    
		    
		    
		    </div>

</body>
