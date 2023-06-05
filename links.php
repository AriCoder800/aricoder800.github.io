
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

    

    .linkBox {
    width: 90vw;
    padding:  5px;
    padding-left:10px;
    border: 1px solid rgba(220,220,220,.5);
    margin: auto;
    color:white;
    font-size:18px;
    background-color: rgba(210,110,20,.9);
    border-radius: 20px 0 20px 20px;
    transition: .5s;
    position:relative;
    }

    .linkBox:hover {
    
    background-color: rgba(200,200,210,.6);
    }

   
.linkTitle {
font-size:22px;
font-weight:700;
margin-bottom:-2px;
}
  
  
  .linkAddress {
  font-size:16px;
  color:rgba(220,220,220,.9);
  }

.linkBox img {
height: 100%;
position:  absolute;
top:0;
right:10%;
opacity:.3;
}


    </style>



    <!--     Fonts     -->

  



</head>



<body>

	

	

	

	
	<?php 
	include('Header.php');
?>
		
	<div class="HeaderOne">
	    <div class="pageTitle creating">
Links

</div>
			</div>
		
		
		<br/>
				<br/>

		
		<?php
include('db_connect.php');


  	 	 	 
	if ($db)
	{
	
	}
  	
  	$sql = "SELECT title, link, description FROM Links";
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

		
<?php 
include('footer.php');
?>

</body>
