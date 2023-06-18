<?php session_start(); ob_start();
/* establishing connection */
include('db_connect.php');














if(isset($_POST['send1']))
{

$nt =  mysqli_real_escape_string($db,$_POST['send1']);

$nutxt = mysqli_real_escape_string($db,$_POST['message1']);




if($nt=='1')
{

$sqli = "UPDATE Cover SET  textB = '$nutxt' WHERE id = 1";
if($query = mysqli_query($db,$sqli))
{

$sql = "SELECT textB FROM Cover WHERE id = 1 ";
	  
	  if($query = mysqli_query($db,$sql))
	  {
	  while($row = mysqli_fetch_assoc($query))
	  {


$text1 = $row['textB'];


echo  " <div>
			 <textarea class='txtArea' rows='3'  value='$text1' id='nwtxt4' name='nwtxt1 class='editIndexText' onkeyup='openSav(1);'   onkeydown='openSav(1);'>$text1</textarea>
			    </div>
			   

<button class='indexImgEditBtn savBtn txtSav' id='saveTxt1'   onclick='chkOnTxt(1);'>Save Change</button>


";    
}

}

}
}




else if($nt=='2')
{

$sqli = "UPDATE Cover SET  textC = '$nutxt' WHERE id = 1";
if($query = mysqli_query($db,$sqli))
{

$sql = "SELECT textC FROM Cover WHERE id = 1 ";
	  
	  if($query = mysqli_query($db,$sql))
	  {
	  while($row = mysqli_fetch_assoc($query))
	  {


$text2 = $row['textC'];


echo  " <div>
			 <textarea class='txtArea' rows='3'  value='$text2' id='nwtxt2' name='nwtxt2 class='editIndexText' onkeyup='openSav(2);'   onkeydown='openSav(2);'>$text2</textarea>
			    </div>
			   

<button class='indexImgEditBtn savBtn txtSav' id='saveTxt2'   onclick='chkOnTxt(2);'>Save Change</button>


" ;    
}

}

}
}



else if($nt=='3')
{

$sqli = "UPDATE Cover SET  textD = '$nutxt' WHERE id = 1";
if($query = mysqli_query($db,$sqli))
{

$sql = "SELECT textD FROM Cover WHERE id = 1 ";
	  
	  if($query = mysqli_query($db,$sql))
	  {
	  while($row = mysqli_fetch_assoc($query))
	  {


$text3 = $row['textD'];


echo  " <div>
			 <textarea class='txtArea' rows='3'  value='$text1' id='nwtxt3' name='nwtxt1 class='editIndexText' onkeyup='openSav(3);'   onkeydown='openSav(3);'>$text3</textarea>
			    </div>
			   

<button class='indexImgEditBtn savBtn txtSav' id='saveTxt3'   onclick='chkOnTxt(3);'>Save Change</button>


" ;    
}

}

}
}


else if($nt=='4')
{

$sqli = "UPDATE Cover SET  textE = '$nutxt' WHERE id = 1";
if($query = mysqli_query($db,$sqli))
{

$sql = "SELECT textE FROM Cover WHERE id = 1 ";
	  
	  if($query = mysqli_query($db,$sql))
	  {
	  while($row = mysqli_fetch_assoc($query))
	  {


$text4 = $row['textE'];


echo  " <div>
			 <textarea class='txtArea' rows='3'  value='$text1' id='nwtxt4' name='nwtxt1 class='editIndexText' onkeyup='openSav(4);'   onkeydown='openSav(4);'>$text4</textarea>
			    </div>
			   

<button class='indexImgEditBtn savBtn txtSav' id='saveTxt4'   onclick='chkOnTxt(4);'>Save Change</button>


" ;    
}

}

}
}


}

?>
