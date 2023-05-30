<?php session_start(); 
if (!isset($_SESSION['username']) )
 { 	
 $_SESSION['msg'] = "You must log in first"; 	header('location: login.php'); 
 }
  if (isset($_GET['logout'])) 
  { 	
  session_destroy(); 	unset($_SESSION['username']); 	header("location: login.php"); 
  } 
  if($_SESSION['pass'] != $_SESSION['access'])
  {
   $_SESSION['msg'] = "You must log in first"; 	header('location: login.php'); 
  }
  
  
  
   include('db_connect.php');  
  

  $code = $_SESSION['access'];
  $pass = $_SESSION['pass'];
  $id = $_SESSION['id'];
  $level = $_SESSION['level'];
  

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

  
      
    

    <style type="text/css">

    

    
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
		 	 
		 			<br/>		
		 			
		 			<div class='warnBox' id='$id'>  
		 	  <div  class='inWarnBox'>   <div class='innerWarn'>This action will permanently delete account: $username.
Are you sure?</div><!-- innerWarn --></div>
		 	     
		 	     <div class='warnOps'>
		 	         
		 	         <div class='warnBtn cnclBtn' onclick='closeWarn()'>
		 	           <div class='wbh'>  <div>Cancel</div></div>
		 	             </div>
		 	             
		 	             
		 	         <div    onclick='delAdmin($id)'  class='warnBtn delBtn'>
		 	           <div class='wbh'>  <div>Delete</div></div>
		 	             </div>
		 	             
		 	             
		 	         
		 	     </div><!-- warnOps -->
		 	     
		 	 </div><!-- warnBox -->
		 	 		 			
		 		<script>		
		 
		 w = document.getElementById($id);
		 
		 
		 function warnin()   
		 {
		 
		 
		 
		 
		 if (w.style.display!='block')
		 {
		 w.style.display='block';
		 
		 
		 }
		    }
		    
		  function closeWarn()
		  {
		  if(w.style.display!='none')
		  {
		  w.style.display='none';
		  
		  
		  }
		  }  
		    
		    
		    
		</script>
		
		 			
		 				 
		 			 	 ";
		 			
		 			}
		 			}
				
				
				
				?>
				
				<!-- MAKE WARNING WINDOW TO APPEAR -->
		
			<!-- DELETE ACCOUNT AJAX -->
			
			<script>
function delAdmin(str) {
var item = str;
if (str =="") {
document.getElementById(item).innerHTML="";
return;
} else {
if 
(window.XMLHttpRequest) {
xmlhttp = new XMLHttpRequest();
} else {
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function()
{
if (this.readyState==4 && this.status==200) {
document.getElementById(item).innerHTML= this.responseText;
}
}
xmlhttp.open("GET","removeAdminAction.php?q=" +str, true);
xmlhttp.send();
}
}
</script>
		
			
			
			

</body>
