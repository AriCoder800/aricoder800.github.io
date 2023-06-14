
<!DOCTYPE html>

<html lang="en">

<head>



    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>


	<meta property="og:type" content="website" /> 
	<meta property="og:image" content="https://changefloridatoday.com/800log.png" /> 
<meta property="og:description" content="Your signature matters. Join us in making Florida better." /> 
<meta property="og:url"content="https://changefloridatoday.com" /> 
<meta property="og:title" content="Changing Florida one signature at a time" />
<meta property="fb:app_id" content="966242223397117">
	




    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <meta name="viewport" content="width=device-width"/>



<!-- STYLING REFERENCES ****************** -->

  <link rel="stylesheet" type="text/css" href="main.css"> 
  
 <link rel="stylesheet" type="text/css" media="screen and (max-width:770px)" href="mainMobile.css">    


  
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;500&family=Lexend+Peta:wght@100;300&family=Open+Sans:wght@300;800&family=Roboto:wght@100;400&family=Russo+One&display=swap" rel="stylesheet">

    

    <style type="text/css">

    

    
    </style>



    <!--     Fonts     -->

  



</head>



<body>

	

	

	

	
	<?php 
	include('Header.php');
?>
		

	<!-- TITLE OF PETITION -->
		
		<div class="headerCurve ">
<div class="borderPetition"></div>
<div class="headerTitle">Links</div>
	</div>

	
		
		<br/>
				<br/>


	<div class="categoryList">
	    
	    <div class='linkCat' onclick='openCatAll("all");selectCat(this);'>
	        
	      <div class='catInner'>  All</div>
	        
	        </div>
	    
	  <?php   
	  include('db_connect.php');
	  
	  $sqlc = "SELECT id, category FROM Categories";
	  
	  if($queryc = mysqli_query($db,$sqlc))
	  {
	  while($rowc = mysqli_fetch_assoc($queryc))
	  {
	  
	  
	  $categ = $rowc['id'];
	  $catName = $rowc['category'];
	  
	  echo"
		    <div class='linkCat' id='$categ' onclick='openCat($categ);selectCat(this);'>
		        
		        <div class='catInner'>$catName</div>
		        
		        </div>
		  ";
		  
		  }
		  
		  }
		  
		  
		  
		  ?>  
		</div>

		
	<br/>
				<br/>
		
		<div class="linkHolder" id="linkHolder">
		
		<?php
include('db_connect.php');


  	 	 	 
	if ($db)
	{
	
	}
  	
  	$sql = "SELECT title, link, description, categoryid FROM Links";
  	 	 if ($queryl = mysqli_query($db,$sql))
  	 	 {
  	 	 
  	 	 
  	 	 
  	 	 while ($rowl = mysqli_fetch_assoc($queryl))
  	 	 {
  	 	 $title = $rowl['title'];
  	 	 $link = $rowl['link'];
  	 	$des = $rowl['description'];
  	 	 
echo"
 <div class='linkBox'> 
		 	     
		 	     
		 	 
		 	     
		 	<a href=$link>
		 	 <div class='linkDiv'></div>
		 	 </a>
		 	
		 	<span class='linkTitle'> <p>$title</p></span>
		 	<span class='linkAddress'> <p>$link</p>  </span>  
		 	     
		 	     <p>$des</p>   
		 	     		 	     
		 	 
		 	 
		 	   <img src='link.png'alt=''>  
		 	 
		 	     
		 	 </div>
		 	 
		 	 
		 	 
		 	 
		 	 
		 	 
		 	 
		 	 
		 			<br/>		 	 
		 	 
";

	

	
  	 	 }
  	 	 
  	 	 
  	 	 }
  	 	 
		

		 
		?>
		
		
</div><!-- END LINKHOLDER*********************** -->
		
<?php 
include('footer.php');
?>




  <script>
function openCat(str) {
if (str =="") {
document.getElementById("linkHolder").innerHTML="";
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
document.getElementById("linkHolder").innerHTML= this.responseText;
}
}
xmlhttp.open("GET","linksByCat.php?q=" +str, true);
xmlhttp.send();
}
}
</script>	 			




  <script>
function openCatAll(str) {
if (str =="") {
document.getElementById("linkHolder").innerHTML="";
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
document.getElementById("linkHolder").innerHTML= this.responseText;
}
}
xmlhttp.open("GET","linksByCatAll.php?q=" +str, true);
xmlhttp.send();
}
}
</script>	 			



<script>
    
    function selectCat(x)
    {
    
    allTabs = document.getElementsByClassName('linkCat');
    
    
  
  for(y = 0; y < allTabs.length ; y++ )		
		{
				
		
    
    allTabs[y].style='border-color:rgba(255,136,0,.7); background-color:transparent;';
 
    x.style='background-color:rgba(255,136,0,.7);';
    
    }
    }
    
    
</script>
			

</body>
