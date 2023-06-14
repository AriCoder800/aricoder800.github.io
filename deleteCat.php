<?php session_start(); 
$q = ($_GET['q']);

/* establishing connection */
include('db_connect.php');


$sqli = "DELETE FROM Categories WHERE id = '$q'";
if($query = mysqli_query($db, $sqli))
{ 
	
		 	 
		 	
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
}


?>
