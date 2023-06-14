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

    

    

    

   .btnContent {
   background-color: transparent;
   color: black;
   font-size: 18px;
   font-weight:700;
   width:inherit;
   height:inherit;
   border: 1px solid transparent;
   }

.catList {
width:100vw;
height:auto;
border:red;
}  


    </style>



    <!--     Fonts     -->

  



</head>



<body>

	<!-- HEADER FOR ADMINS -->
		
	<div class="HeaderOne">
	    <div class="pageTitle creating">
Edit Categories

</div>
			</div>
			
<!-- CURRENT CATEGORIES LIST -->	
		
		
		<div class="categList" id="catList">
		    
		    <?php
		    
		    
	$sql = "SELECT id, category FROM Categories";
		
		if($queryc = mysqli_query($db,$sql))
		{
		
		
		while($rowc = mysqli_fetch_assoc($queryc))
		{
		
		
	
		$catId = $rowc['id'];
		$cat = $rowc['category'];
		
		
		echo "
			<div class='categoryDisplay' id='catDisplay'>
		
		 <div class='categoryName'> 
			       <div class='catNameInner'>$cat</div>
			  
			  </div>
			    
			   <div class='deleteCategory' onclick='delCat($catId)'>
			        <div class='delCatInner'>Delete</div>
			    </div> 
		
		
			</div><!-- categoryDisplay -->

";

}
}
?>
			
		</div>
		
		
		
		
		<!-- START FORM -->
 <form class="form"  >
			
		 <div   class="input-group"  >
		     
		      <label>Create a New Category</label> 		
		     
		     		   <input id="newCat" type="text" name="newCat1" ></input>
		 	    
		    <div class="stepsContainer" >
		 
		 
		 
		 <div class="floatR">
		        
		<div class="stepsBtn" >
		    <button id="submit" type="button" class="btnContent"  onclick="createCat(); clearBox();" >Add Category</button> 	
		 </div>		 
		 
		 </div><!-- floatR -->
		 
		 </div><!-- steps container -->
		 
		 
		 </div><!-- input-group -->
		 
		    
		    
		    
		    </form>
		    
		    <br/>
		    <br/>
			    
		    
		    
		    </div>
		
			


			 <script>
			     


function createCat()
{
var message = 
document.getElementById("newCat").value;


var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = 
function()
{
if (this.readyState==4 && this.status==200)
{
document.getElementById("catList").innerHTML=this.responseText;
}
};
xhttp.open("POST","addCategory.php",true);
xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
// uses userid variable for references
xhttp.send("send1=<?php echo  "$id";?>&message1=" + message);
}

</script>	 			

		
		
		  <script>
function delCat(str) {
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
xmlhttp.open("GET","deleteCat.php?q=" +str, true);
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
