<?php session_start();ob_start();
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

    .adminEditBox {
    z-index:1;
    }
    
    .warnBox {
    z-index:300;
    }

    </style>



    <!--     Fonts     -->

  



</head>



<body>

	

	

	



		
	<div class="HeaderOne">
	    <div class="pageTitle creating">
Admin List
<a href="logout.php"><div>Logout</div></a>
</div>
			</div>
		
		
		<br/>
				<br/>
				
				
				
			
				    
			<div id="adminAjax">
				<?php
				
				
			
				$sql = "SELECT id, username, email FROM Admins";
				if($querya = mysqli_query($db,$sql))
				    {
				    
				    while ($roww = mysqli_fetch_assoc($querya))
				    {
				 $idp = $roww['id'];   
				$usrnm = $roww['username'];
				$eml = $roww['email'];
				
				$wn = 1;
				$aj = 'ajaxBox';
			echo "	
				<div class='adminEditBox'> 
		 	     
		 	
		 	 
		 	
		 	<span class='linkTitle'> <p>$usrnm  </p></span>
		 	<span class='linkAddress'> <p>$eml </p>  </span>  
		 	     
		 	     <br/>
		 	     
		 	     
		 	     
		 	   <div class='removeBtn' onclick='verifyDel($wn$idp)' >
		 	    <div   >Remove</div>        
		 	   </div><!-- removeBtn -->
		 	   
		 	 </div><!-- adminEditBox -->
		 	 
		 			<br/>		
		 			
		 			<div class='warnBox' id='$wn$idp'>  
		 	  <div  class='inWarnBox'>   <div class='innerWarn'>This action will permanently delete account: $usrnm.
Are you sure?</div><!-- innerWarn --></div>
		 	     
		 	     <div class='warnOps'>
		 	         
		 	         <div class='warnBtn cnclBtn' onclick='closeVer($wn$idp)'>
		 	           <div class='wbh'>  <div>Cancel</div></div>
		 	             </div>
		 	             
		 	             
		 	         <div      class='warnBtn delBtn'  onclick='delAdmin($idp)'>
		 	           <div class='wbh'>  <div>Delete</div></div>
		 	             </div>
		 	             
		 	     
		 	         
		 	     </div><!-- warnOps -->
		 	     
		 	 </div><!-- warnBox -->
		 	 		 			
		 	 		 			
		 	 		 			
		 			
		 				 
		 			 	 ";
		 			
		 			}
		 			}
				
				
				
				?>
			
			</div>	  <!-- adminAjax -->  
			
				<!-- MAKE WARNING WINDOW TO APPEAR -->
		
		

		
		<?php 
include('footer.php');
?>
		
		
			
			
	

			
			
			<script>
	// OPENS VERIFY DELETE AND CLOSES OPTIONS
function verifyDel(ver)
{


v =
document.getElementById(ver);

v.style.display="block"

}



// CANCELS DELETE AND CLOSES WINDOW
function closeVer(ver)
{



verwin =
document.getElementById(ver);



verwin.style.display="none";
}


	
	
</script>
		



  <script>
function delAdmin(str) {
if (str =="") {
document.getElementById("adminAjax").innerHTML="";
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
document.getElementById("adminAjax").innerHTML= this.responseText;
}
}
xmlhttp.open("GET","removeAdminAction.php?q=" +str, true);
xmlhttp.send();
}
}
</script>	 			


			

</body>
