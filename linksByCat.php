<?php session_start(); 
$q = ($_GET['q']);

/* establishing connection */
include('db_connect.php');



	$sql = "SELECT title, link, description, categoryid FROM Links WHERE categoryid = $q";
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
