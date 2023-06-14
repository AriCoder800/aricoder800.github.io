<?php session_start(); 

/* establishing connection */
include('db_connect.php');

$number = mysqli_real_escape_string($db,$_POST['number']);










 $image_name = $_FILES['file']['name']; 
$image_type = $_FILES['file']['type'];



$image_folder = 'Images/';

$image_path = $image_folder . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $image_path))
{

}

$newImg = $image_path;




if($number=='1')
{
$sqli = "UPDATE Cover SET  cover = '$newImg' WHERE id = 1";
if($query = mysqli_query($db,$sqli))
{

$sql = "SELECT cover FROM Cover WHERE id = 1 ";
	  
	  if($query = mysqli_query($db,$sql))
	  {
	  while($row = mysqli_fetch_assoc($query))
	  {
	  
	  $imgOne = $row["cover"];
	  
echo "

<div class='imgEdits secOneImg'><img src='$imgOne' id='preview1' >
    		  <input type='file' style='display:none'  id='file1' name='picture' accept='image/*' onchange='previewFile(1)'>  
    		    
    		         		  
    </div>
    <div class='num1img'>1</div>
    
    
    <div class='indexImgEditBtn' id='changeBtn1' onclick='document.getElementById(\"file1\").click();' >Change Image</div>
    <div class='indexImgEditBtn savBtn' id='saveBtn1'  onclick='createCov(1);'  >Save Change</div>
    

";

}
}




} 

}

else if($number=='2')
{
$sqli = "UPDATE Cover SET  covera = '$newImg' WHERE id = 1";
if($query = mysqli_query($db,$sqli))
{

$sql = "SELECT covera FROM Cover WHERE id = 1 ";
	  
	  if($query = mysqli_query($db,$sql))
	  {
	  while($row = mysqli_fetch_assoc($query))
	  {
	  
	  $imgTwo= $row["covera"];
	  
echo "

<div class='imgEdits secOneImg'><img src='$imgTwo' id='preview2' >
    		  <input type='file' style='display:none'  id='file2' name='picture' accept='image/*' onchange='previewFile(2)'>  
    		
    		         		  
    </div>
        <div class='num1img'>2</div>
    
    <div class='indexImgEditBtn' id='changeBtn2' onclick='document.getElementById(\"file2\").click();'  >Change Image</div>
    <div class='indexImgEditBtn savBtn' id='saveBtn2'  onclick='createCov(2);'  >Save Change</div>
    


";

}
}

} 

}

else if($number=='3')
{
$sqli = "UPDATE Cover SET  coverb = '$newImg' WHERE id = 1";
if($query = mysqli_query($db,$sqli))
{

$sql = "SELECT coverb FROM Cover WHERE id = 1 ";
	  
	  if($query = mysqli_query($db,$sql))
	  {
	  while($row = mysqli_fetch_assoc($query))
	  {
	  
	  $imgThree= $row["coverb"];
	  
echo "

<div class='imgEdits secOneImg'><img src='$imgThree' id='preview3' >
    		  <input type='file' style='display:none'  id='file3' name='picture' accept='image/*' onchange='previewFile(3)'> 
    		    
    		          		  
    </div>
    <div class='num1img'>3</div>
    
    
    <div class='indexImgEditBtn' id='changeBtn3' onclick='document.getElementById(\"file3\").click();' >Change Image</div>
    <div class='indexImgEditBtn savBtn' id='saveBtn3'  onclick='createCov(3);'    >Save Change</div>
    


";


}
}

} 

}


else if($number=='4')
{
$sqli = "UPDATE Cover SET  coverc = '$newImg' WHERE id = 1";
if($query = mysqli_query($db,$sqli))
{

$sql = "SELECT coverc FROM Cover WHERE id = 1 ";
	  
	  if($query = mysqli_query($db,$sql))
	  {
	  while($row = mysqli_fetch_assoc($query))
	  {
	  
	  $imgFour = $row["coverc"];
	  
echo "

<div class='imgEdits secOneImg'><img src='$imgFour' id='preview4' >
    		  <input type='file' style='display:none'  id='file4' name='picture' accept='image/*' onchange='previewFile(4)'>     
    		 
    		      		  
    </div>
     <div class='num1img'>4</div>
    
    
    <div class='indexImgEditBtn' id='changeBtn4' onclick='document.getElementById(\"file4\").click();' >Change Image</div>
    <div class='indexImgEditBtn savBtn' id='saveBtn4'  onclick='createCov(4);' >Save Change</div>
    


";


}
}

} 

}

else if($number=='5')
{
$sqli = "UPDATE Cover SET  coverd = '$newImg' WHERE id = 1";
if($query = mysqli_query($db,$sqli))
{

$sql = "SELECT coverd FROM Cover WHERE id = 1 ";
	  
	  if($query = mysqli_query($db,$sql))
	  {
	  while($row = mysqli_fetch_assoc($query))
	  {
	  
	  $imgFive = $row["coverd"];
	  
echo "

<div class='imgEdits secOneImg'><img src='$imgFive' id='preview5' >
    		  <input type='file' style='display:none'  id='file5' name='picture'  accept='image/*' onchange='previewFile(5)'>  
    
    		         		  
    </div>
    		    <div class='num1img'>5</div>
    
    
    
    <div class='indexImgEditBtn' id='changeBtn5' onclick='document.getElementById(\"file5\").click();' >Change Image</div>
    <div class='indexImgEditBtn savBtn' id='saveBtn5'   onclick='createCov(5);'>Save Change</div>
    


";

}
}


} 

}


else if($number=='6')
{
$sqli = "UPDATE Cover SET  imageOnea = '$newImg' WHERE id = 1";
if($query = mysqli_query($db,$sqli))
{

$sql = "SELECT imageOnea FROM Cover WHERE id = 1 ";
	  
	  if($query = mysqli_query($db,$sql))
	  {
	  while($row = mysqli_fetch_assoc($query))
	  {
	  
	  $imgSix = $row["imageOnea"];
	  
echo "


<div class='imgEdits secTwoImg'><img src='$imgSix' id='preview6' >
    		  <input type='file' style='display:none'  id='file6' name='picture' accept='image/*' onchange='previewFile(6)'>  
    		
    		         		  
    </div>
    
       <div class='num1img'>6</div>
    
    <div class='indexImgEditBtn' id='changeBtn6' onclick='document.getElementById(\"file6\").click();' >Change Image</div>
    <div class='indexImgEditBtn savBtn' id='saveBtn6'  onclick='createCov(6);'   >Save Change</div>
    

";


}
}

} 

}


else if($number=='7')
{
$sqli = "UPDATE Cover SET  imageOneb = '$newImg' WHERE id = 1";
if($query = mysqli_query($db,$sqli))
{

$sql = "SELECT imageOneb FROM Cover WHERE id = 1 ";
	  
	  if($query = mysqli_query($db,$sql))
	  {
	  while($row = mysqli_fetch_assoc($query))
	  {
	  
	  $imgSeven = $row["imageOneb"];
	  
echo "

<div class='imgEdits secTwoImg'><img src='$imgSeven' id='preview7' >
    		  <input type='file' style='display:none'  id='file7' name='picture' accept='image/*' onchange='previewFile(7)'>  
    		 
    		         		  
    </div>
       <div class='num1img'>7</div>
    
    
    <div class='indexImgEditBtn' id='changeBtn7' onclick='document.getElementById(\"file7\").click();' >Change Image</div>
    <div class='indexImgEditBtn savBtn' id='saveBtn7' onclick='createCov(7);'  >Save Change</div>
    

";


}
}

} 

}


else if($number=='8')
{
$sqli = "UPDATE Cover SET  imagetwo = '$newImg' WHERE id = 1";
if($query = mysqli_query($db,$sqli))
{

$sql = "SELECT imagetwo FROM Cover WHERE id = 1 ";
	  
	  if($query = mysqli_query($db,$sql))
	  {
	  while($row = mysqli_fetch_assoc($query))
	  {
	  
	  $imgEight = $row["imagetwo"];
	  
echo "

<div class='imgEdits secThreeImg'><img src='$imgEight' id='preview8' >
    		  <input type='file' style='display:none'  id='file8' name='file8' accept='image/*' onchange='previewFile(8)'>  
    		 
    		         		  
    </div>
    
       <div class='num1img'>8</div>
    
    <div class='indexImgEditBtn' id='changeBtn8' onclick='document.getElementById(\"file8\").click();' >Change Image</div>
    <div class='indexImgEditBtn savBtn' id='saveBtn8' onclick='createCov(8)'>Save Change</div>
    


";

}
}


} 

}

else if($number=='9')
{
$sqli = "UPDATE Cover SET  imagetwoa = '$newImg' WHERE id = 1";
if($query = mysqli_query($db,$sqli))
{

$sql = "SELECT imagetwoa FROM Cover WHERE id = 1 ";
	  
	  if($query = mysqli_query($db,$sql))
	  {
	  while($row = mysqli_fetch_assoc($query))
	  {
	  
	  $imgNine = $row["imagetwoa"];
	  
echo "

<div class='imgEdits secThreeImg'><img src='$imgNine' id='preview9' >
    		  <input type='file' style='display:none'   id='file9' name='file9' accept='image/*' onchange='previewFile(9)'>  
    		 
    		         		  
    </div>
       <div class='num1img'>9</div>
    
    
    <div class='indexImgEditBtn' id='changeBtn9' onclick='document.getElementById(\"file9\").click();' >Change Image</div>
    <div class='indexImgEditBtn savBtn' id='saveBtn9' onclick='createCov(9);'>Save Change</div>
    


";


}
}

} 

}

		 	 
		 	
				
?>
