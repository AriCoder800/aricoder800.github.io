<?php session_start(); 
$q = ($_GET['q']);

/* establishing connection */
include('db_connect.php');


$sql = "DELETE FROM Admins WHERE id = '$q'";
if($query = mysqli_query($db, $sql))
{ 
echo " 	 <div class='strqicogal'  ><img src='strokeiconem.png' >
 </div> 
<div class='strqto' >$total $strokes</div>
	";

}


?>
