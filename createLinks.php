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
   
   .catSelect {
width:85vw;
height:50px;
padding:10px;
border-radius:10px;
outline:transparent;
color:white;
background-color:rgba(140,140,140,.3);
font-size:16px;
}  

#countdown {
float:right;
color:rgba(220,220,220,.5);
margin-right:50px;
}
   
   
   

  </style>

</head>



<body>


	<div class="HeaderOne">
	    <div class="pageTitle creating">
Add Links

</div>
			</div>
			
			
			


			
		
		
 <form class="form"  method="post" action="addContent.php" > 	
		
		<h1>Add a new link</h1>

				 <div   class="input-group" >
		     
		      <label>Title of Website</label> 		
		     		     		 
		   <input id="title" type="text" name="title" ></input>
		    
		    <br/>
		    <br/>
		      <label>Type complete website address (include https://)</label> 		
		     		     		 
		   <input  id="link" type="text" name="link"></input>
		    
		    <br/>
		    <br/>
		    
		     <label>Give a brief Description</label> 		
		     		     		 
		   <input  id="description" type="text" name="description" onkeyup="countdown(this.value);limitText(this,100)" onkeydown="limitText(this,100);"></input>
		   
		
		<div id="countdown">100</div>
		    
		    
		    <br/>
		    <br/>
		   
		   
		    
		      <label>Select a Category</label> 		
<select class='catSelect' name="category">

<!-- DIPLAYS THE CATEGORIES AVAILABLE -->    

   <?php 
   include('db_connect.php');
   
     $sqlc = "SELECT id, category FROM Categories";
	  
	  if($queryc = mysqli_query($db,$sqlc))
	  {
	  while($rowc = mysqli_fetch_assoc($queryc))
	  {
	   
	  $categ = $rowc['id'];
	  $catName = $rowc['category'];
	  
	  echo "
	  
<option  value='$categ' >$catName </option>
    ";
    }
    }
    ?>

		    </select>
		    
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
		    
		  
		    <br/>
		    <br/>
		    
		<?php 
include('footer.php');
?>   
	
	
	<script>
	    
	   //LIMITS CHARACTER AMOUNT IN INPUT FIELD
	   
	    function countdown(cnt)
	    {
	    wrd = cnt.length;
	    c = document.getElementById("countdown");
	    
	    c.innerHTML = 100 - wrd;
	     if(cn.length>100)
	    {
	    c.innerHTML = 0;
	    }
	   
	    }
	    
// ASSISTS TO STOP EXCESS CHARCTERS IN INPUT BOX
      function limitText(limitField, limitNum)
   {
   if(limitField.value.length > limitNum)
   {
   limitField.value = limitField.value.substr(0, limitNum);
   }
   }

		    
 
</script>

</body>
