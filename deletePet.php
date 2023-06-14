<?php session_start(); 
$q = ($_GET['q']);

/* establishing connection */
include('db_connect.php');


$sqli = "DELETE FROM Petitions WHERE id = '$q'";
if($query = mysqli_query($db, $sqli))
{ 
	
		 	 
		 	
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
			        <div class='delCatInner'>Delete</div>
			    </div> 
			
			
			";
			
			if($activity==0)
			{
			
			echo"
			    
			   <div class='editBtn activityCategory' onclick='changeActivity($petId, $activity)'>
			        <div class='delCatInner'>Active</div>
			    </div> 
			    
			    ";
			    }
			    else
			    {
			    echo "  <div class='editBtn inactiveCategory' onclick='changeActivity($petId, $activity)'>
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


}


?>
