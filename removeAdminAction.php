<?php session_start(); 
$q = ($_GET['q']);

/* establishing connection */
include('db_connect.php');


$sqli = "DELETE FROM Admins WHERE id = '$q'";
if($query = mysqli_query($db, $sqli))
{ 
	
		 	 
		 	
			$sql = "SELECT id, username, email FROM Admins";
				if($querya = mysqli_query($db,$sql))
				    {
				    
				    while ($roww = mysqli_fetch_assoc($querya))
				    {
				 $idp = $roww['id'];   
				$usrnm = $roww['username'];
				$eml = $roww['email'];
				
				$wn = 1;
				$aj = 'ajaxBox';
				
				
				
			echo "	
				<div class='adminEditBox'> 
		 	     
		 	
		 	 
		 	
		 	<span class='linkTitle'> <p>$usrnm - $idp </p></span>
		 	<span class='linkAddress'> <p>$eml - $id</p>  </span>  
		 	     
		 	     <br/>
		 	     
		 	     
		 	     
		 	   <div class='removeBtn' onclick='verifyDel($wn$idp)' >
		 	    <div   >Remove</div>        
		 	   </div><!-- removeBtn -->
		 	   
		 	 </div><!-- adminEditBox -->
		 	 
		 			<br/>		
		 			
		 			<div class='warnBox' id='$wn$idp'>  
		 	  <div  class='inWarnBox'>   <div class='innerWarn'>This action will permanently delete account: $usrnm.
Are you sure? $idp</div><!-- innerWarn --></div>
		 	     
		 	     <div class='warnOps'>
		 	         
		 	         <div class='warnBtn cnclBtn' onclick='closeVer($wn$idp)'>
		 	           <div class='wbh'>  <div>Cancel</div></div>
		 	             </div>
		 	             
		 	             
		 	         <div      class='warnBtn delBtn'  onclick='delAdmin($idp)'>
		 	           <div class='wbh'>  <div>Delete</div></div>
		 	             </div>
		 	             
		 	        
		 	         
		 	     </div><!-- warnOps -->
		 	     
		 	 </div><!-- warnBox -->
		 	 		 			
		 	 		 			
		 	 		 			
		 			
				
			
	";
}
}
}


?>
