<?php session_start(); 
$q = ($_GET['q']);

/* establishing connection */
include('db_connect.php');


$sqli = "DELETE FROM Links WHERE id = '$q'";
if($query = mysqli_query($db, $sqli))
{ 
	
		 	 
		 	
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
			    
			   <div class='deleteCategory' onclick='delLink($linkId)'>
			        <div class='delCatInner'>Delete</div>
			    </div> 
		
		
			</div><!-- categoryDisplay -->

	";
}
}
}


?>
