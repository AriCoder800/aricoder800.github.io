<?php session_start(); 
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
    $code = $_SESSION['access'];
  
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

    

    


    
.adOpBar {
width:90vw;
height: 70px;
padding:0 20px;
border-top:1px solid rgba(220,220,220,.7);
border-bottom:1px solid rgba(10,10,10,.2);
margin:auto;
margin-top:10px;
display:flex;
align-items:center;
color:white;
font-size: 18px;
font-weight:500;
transition: .5s;
}

  .adOpBar:hover {
  background-color:rgba(220,220,220,.3);
  color:white;
  } 
   
   

.borderTop {
width:  80%;
border-top: 1px solid rgba(220,220,220,.5);
position: absolute;
top:0;
}


.pageUser {
    	width: 100%;
    	height: auto;
    	color: black;
    	font-size: 2em;
    	font-weight: 700;
    	padding:10px;
    	margin-left:10vw;
    	
    }


    </style>



    <!--     Fonts     -->

  



</head>



<body>

	

	

	

	

	<div class="HeaderOne">

		<div class="pageTitle">

			ChangeFloridaToday

			</div>

		

		</div>

		
	<div class="HeaderOne">
 <div class="pageUser">Welcome <?php echo $_SESSION['username'] . $pass . $code ?></div>
			</div>



<!-- Start of Options -->		

<!-- 1 -->

	<a href="petitions.php">	<div class="adOpBar">
		  <p>Active Petitions</p> 
		    
		</div>
		</a>
		
		<!-- 2 -->
			
	<a href="newPetition.php"><div class="adOpBar">
		  <p>Create New Petitions</p> 
		    
		</div></a>
		
		<!-- 3 -->
		
			<a href="links.php"><div class="adOpBar">
		  <p>Links</p> 
		    
		</div></a>
		
			
			<!-- 4 -->
			
		<a href="createLinks.php"><div class="adOpBar">
		  <p>Create a New Link</p> 
		    
		</div>
		</a>
		
		<?php 
		
		if($pass == $code)
		{
		include('edits.php');
		}
		?>
		
<br/>
<br/>
<br/>

		
</body>
