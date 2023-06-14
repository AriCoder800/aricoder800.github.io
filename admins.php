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



  <link rel="stylesheet"  type="text/css" href="admin.css">

  
      <link rel="stylesheet" type="text/css" media="screen and (max-width:770px)" href="StyleMobile.css"> 
  
   <link rel="stylesheet" type="text/css" media="screen and (min-width:900px)" href="StyleWide.css">  

    

    <style type="text/css">

    

    


    


    </style>



    <!--     Fonts     -->

  



</head>



<body>

	

	

	

	

	<div class="HeaderOne">

		<div class="pageTitle">

			ChangeFloridaToday

			</div>

		<a href="logout.php"><div class="logoutBtn">Logout</div></a>
</div>

		</div>

		
	<div class="HeaderOne">
 <div class="pageUser">Welcome <?php echo $_SESSION['username'] ?></div>
			</div>



<!-- Start of Options -->		

<!-- 1 -->

	<a href="petitionList.php">	<div class="adOpBar">
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

<?php 
include('footer.php');
?>
		
</body>
