<?php session_start();

include('db_connect.php');


if(isset($_POST['send1']))
{

$newCat = mysqli_real_escape_string($db,$_POST['message1']);


 $query = "INSERT INTO Categories (category) 	 VALUES('$newCat')"; 	  
if( mysqli_query($db, $query))  
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

}

?>









