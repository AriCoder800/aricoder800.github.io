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

    

    

    







    </style>



    <!--     Fonts     -->

  



</head>



<body>

	<!-- HEADER FOR ADMINS -->
		
	<div class="HeaderOne">
	   <span onclick="javascript:history.back()"><i class="fas fa-arrow-left"></i></span> 	 
	    <div class="pageTitle creating">
Edit Petitions

</div>
			</div>
			
<!-- CURRENT CATEGORIES LIST -->	
		
		
		<div class="categList" id="catList">
		    
		    <?php
		    
		    
	$sql = "SELECT id, title, covername, active FROM Petitions";
		
		if($queryc = mysqli_query($db,$sql))
		{
		
		
		while($rowc = mysqli_fetch_assoc($queryc))
		{
		
		
	
		$petId = $rowc['id'];
		$title = $rowc['title'];
		$image = $rowc['covername'];
		$activity = $rowc['active'];
		
		echo "
			<div class='linkDisplay' id='linkDisplay'>
		
		<div class='petImHold'><img src='$image' alt=''></div>
		
		 <div class='categoryName'> 
			       <div class='catNameInner'>$title</div>
			 
			  </div>
			 
			 
			 <div class='buttonCase'>
			   <div class='editBtn deletePet' onclick='delPet($petId)'>
			        <div class='delCatInner'>Delete </div>
			    </div> 
			
			
			";
			
			if($activity==0)
			{
			
			echo"
			    
			   <div class='editBtn activityCategory' onclick='changeActivity($petId,$activity)'>
			        <div class='delCatInner'>Active</div>
			    </div> 
			    
			    ";
			    }
			    else
			    {
			    echo "  <div class='editBtn inactiveCategory' onclick='changeActivity($petId,$activity)'>
			        <div class='delCatInner'>Inactive</div>
			    </div> 
			    ";
			  }  
			  
			  
			    echo "
			    
		</div>   
		
			</div><!-- categoryDisplay -->
";

}
}
?>
			
		</div>
		
		
		
		
		
			
		  <script>
function delPet(str) {
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
xmlhttp.open("GET","deletePet.php?q=" +str, true);
xmlhttp.send();
}
}
</script>	 			



<script>
function changeActivity(str, z) {
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
xmlhttp.open("GET","activityPet.php?q=" +str + "&ac=" +z, true);
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



