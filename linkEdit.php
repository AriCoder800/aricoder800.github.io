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
  
 include('db_connect.php');
 
 include('addContent.php');
  ?>      



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>



    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <meta name="viewport" content="width=device-width"/>



 <link rel="stylesheet" type="text/css" href="admin.css" />
  

      
    

    <style type="text/css">

    

    

    .categoryName


    </style>



    <!--     Fonts     -->

  



</head>



<body>

	<!-- HEADER FOR ADMINS -->
		
	<div class="HeaderOne">
	    <div class="pageTitle creating">
Edit Links

</div>
			</div>
			
<!-- CURRENT CATEGORIES LIST -->	
		
		
		<div class="categList" id="catList">
		    
		    <?php
		    
		    
	$sql = "SELECT id, title, link, description FROM Links";
		
		if($queryc = mysqli_query($db,$sql))
		{
		
		
		while($rowc = mysqli_fetch_assoc($queryc))
		{
		
		
	
		$linkId = $rowc['id'];
		$title = $rowc['title'];
		$descrip= $rowc['description'];
		$link = $rowc['link'];
		
		
		echo "
			<div class='linkDisplay' id='linkDisplay'>
		
		 <div class='categoryName'> 
			       <div class='catNameInner'>$title</div>
			  <p>$link</p>
			  <p>$descrip</p>
			  </div>
			    
			   <div class='editBtn deleteCategory' onclick='delLink($linkId)'>
			        <div class='delCatInner'>Delete</div>
			    </div> 
		
		
			</div><!-- categoryDisplay -->

";

}
}
?>
			
		</div>
		
		
		
		
		
			
		  <script>
function delLink(str) {
if (str =="") {
document.getElementById("catList").innerHTML="";
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
document.getElementById("catList").innerHTML= this.responseText;
}
}
xmlhttp.open("GET","deleteLink.php?q=" +str, true);
xmlhttp.send();
}
}
</script>	 			


<script>
    
function  clearBox()
{
document.getElementById('newCat').value='';

}		 
</script>		


</body>
