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
  
  $sqlp ="SELECT entry FROM Access WHERE id =1";
    if ($queryp = mysqli_query($db,$sqlp))
    {
    while ($rowp = mysqli_fetch_assoc($queryp))
    {
    $comp = $rowp['entry'];
    }
  }
  
  $pass = $_SESSION['pass'];
  $id = $_SESSION['id'];
  $level = $_SESSION['level'];
  
 if ($pass != $comp) 
 {
  $_SESSION['msg'] = "not authorized"; 	header('location: admins.php'); 

 }
 else
 {
  echo "go";
  }
  ?>      




<!DOCTYPE html>

<html lang="en">

<head>

<title>Admin Edit</title>

    <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>



    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <meta name="viewport" content="width=device-width"/>



  <link rel="stylesheet"  type="text/css" href="style.css">

  
      <link rel="stylesheet" type="text/css" media="screen and (max-width:770px)" href="StyleMobile.css"> 
  
   <link rel="stylesheet" type="text/css" media="screen and (min-width:900px)" href="StyleWide.css">  

    

    <style type="text/css">

    

    .adminEditBox {
    width: 90vw;
    padding:10px;
    border-top: 1px solid rgba(220,220,220,.5);
    border-bottom: 1px solid rgba(20,20,20,.5);
    margin: auto;
    color:white;
    font-size:18px;
    background-color: rgba(20,20,20,.7);
    border-radius: 25px;
    transition: .5s;
    position:relative;
    }

    
.linkTitle {
font-size:20px;
font-weight:700;
margin-bottom:-2px;

}
  
  
  .linkAddress {
  font-size:15px;
  color:rgba(220,220,220,.9);
  }

.removeBtn {
height:60px;
width:100%;
display:flex;
    justify-content:center;
    align-items:center;
background-color:red;
border-radius:20px;

transition:.5s;
}


.removeBtn:hover {
background-color:rgba(220,10,10,.7);
}



    </style>



    <!--     Fonts     -->

  



</head>



<body>

	

	

	

	
<!-- 
	<div class="HeaderOne">

		<div class="pageTitle">

			ChangingFlorida.org

			</div>

		

		</div>
 -->
		
	<div class="HeaderOne">
	    <div class="pageTitle creating">
Admin List

</div>
			</div>
		
		
		<br/>
				<br/>
				
				<?php
				
				
			
				$sql = "SELECT id, username, email FROM Admins";
				if($querya = mysqli_query($db,$sql))
				    {
				    
				    while ($roww = mysqli_fetch_assoc($querya))
				    {
				 $id = $roww['id'];   
				$usrnm = $roww['username'];
				$eml = $roww['email'];
				
			echo "	
				<div class='adminEditBox'> 
		 	     
		 	
		 	 
		 	
		 	<span class='linkTitle'> <p>$usrnm</p></span>
		 	<span class='linkAddress'> <p>$eml</p>  </span>  
		 	     
		 	     <br/>
		 	     
		 	     
		 	     
		 	   <div class='removeBtn'>
		 	    <div onclick='warning();'  >Remove</div>        
		 	   </div>
		 	   
		 	 </div>
		 	 
		 			<br/>		 	 ";
		 			
		 			}
		 			}
				
				
				
				?>
				
				
		<script>
		  
		  
		 function warning(ac)   
		 {
		 wind = 
		 document.getElementById('warn');
		 acct = 
		 document.getElementById(ac);
		 
		 }
		    
		    
		    </script>		
			

</body>
