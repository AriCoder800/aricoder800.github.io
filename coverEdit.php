<?php session_start(); 
if (!isset($_SESSION['username']))
 { 	
 $_SESSION['msg'] = "You must log in first"; 	header('location: login.php'); 
 }
  if (isset($_GET['logout'])) 
  { 	
  session_destroy(); 	unset($_SESSION['username']); 	header("location: login.php"); 
  } 
  
  $pass = $_SESSION['pass'];
  $id = $_SESSION['id'];
  $level = $_SESSION['level'];
    $code = $_SESSION['access'];
  
 include('db_connect.php');
  ?> 
  
       
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <link rel="stylesheet" type="text/css" href="admin.css"> 
 




<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;500&family=Lexend+Peta:wght@100;300&family=Open+Sans:wght@300;800&family=Russo+One&display=swap" rel="stylesheet">



    
    
    <style type="text/css">        
        

/* ANIMATION TO CHANGE IMAGE ---------- CHANGE HERE NOT IN MAIN.CSS --------*/



.indexEditHold {
background-color:rgba(220,220,220,.3);
width:90vw;
margin:auto;
color:white;
margin-top:50px;
padding:25px;
}

.imgEditsHold {
display:block;
width:auto;

margin:auto;
}



.imgEdits {
width:300px;
height:200px;
background-color:rgba(20,20,20,.5);;
transition:.5s;
overflow:hidden;
margin-top:20px;
margin-bottom:20px;
position:relative;
}

.imgEdits img {
width:100%;
height:100%;
object-fit: cover;
}


.imgEdits:hover {
transform:scale(2);
z-index:200;
}

.indexImgEditBtn {
height:50px;
width:150px;
border:1px solid white;
border-radius:20px;
background-color:rgba(20,20,20,.1);
display:flex;
justify-content:center;
align-items:center;
}

.imgAndBtn {
display:flex;
align-items:center;
justify-content:space-around;
position:relative;
}

.savBtn {
color:rgba(220,220,220,.3);
border-color:rgba(220,220,220,.3);
}


.editIndexText {
width:100%;
height:50px;
font-size:20px;
}



.borderSec {
border-top:2px solid rgba(220,220,220,.5);
height:50px;
width:100%;
margin:100px 0 0 0;
}


.num1img {
height:50px;
width:50px;
border-radius:50%;
background-color:rgba(20,20,20,.7);
z-index:100;
position:absolute;
top:10px;
left:10px;
display:flex;
justify-content:center;
align-items:center;
font-weight:700;
border:2px solid rgba(220,220,220,.7);
}

.secOneImg {
border-bottom-left-radius:100% 70%;
}

.secTwoImg {

border-top-left-radius: 70% 20%;
 border-bottom-right-radius: 70% 50%;
}

.secThreeImg {

border-top-right-radius: 70% 50%;
 border-bottom-left-radius: 70% 30%;
}





    </style>

    <!--     Fonts     -->
  

</head>


	<body>
	    	<div class="HeaderOne">
	    <span onclick="javascript:history.back()"><i class="fas fa-arrow-left"></i></span> 	 
	    <div class="pageTitle creating">
Edit Cover Page

</div>
			</div>
	
	   
	  
	  <?php 
	  
	  include('db_connect.php');
	  
	  $sql = "SELECT cover, covera, coverb, coverc, coverd, imageOnea, imageOneb, imagetwo, imagetwoa,imagethree, imagethreea,  textB, textC, textD, textE, textF FROM Cover ";
	  
	  if($query = mysqli_query($db,$sql))
	  {
	  while($row = mysqli_fetch_assoc($query))
	  {
	  
	  $imgOne = $row["cover"];
	  $imgTwo = $row['covera'];
	  $imgThree = $row['coverb'];
	  $imgFour = $row['coverc'];
	  $imgFive = $row['coverd'];
	  $imgSix = $row['imageOnea'];
	  $imgSeven= $row['imageOneb'];
	  $imgEight = $row['imagetwo'];
	  $imgNine = $row['imagetwoa'];
	  $imgTen = $row['imagethree'];
	  $imgEleven= $row['imagethreea'];
	  
	  
	  $text1= $row['textB'];
	  $text2 = $row['textC'];
	  $text3 = $row['textD'];
	  $text4 = $row['textE'];
	  $text5 = $row['textF'];
	  
	  
	  
	  echo "

<!-- FIRST SECTION IMAGES *********************** -->


<div class='indexEditHold'>
<h2>Section One (Slideshow Images)</h2>

<div class='imgEditsHold'>


<!-- 1 -->    
    
  <div class='imgAndBtn' id='ihold1'>
    
    <div class='imgEdits secOneImg'><img src='$imgOne' id='preview1' >
    		  <input type='file' style='display:none'  id='file1' name='picture' accept='image/*' onchange='previewFile(1)'>  
    		    
    		         		  
    </div>
    <div class='num1img'>1</div>
    
    
    <div class='indexImgEditBtn' id='changeBtn1' onclick='document.getElementById(\"file1\").click();' >Change Image</div>
    <div class='indexImgEditBtn savBtn' id='saveBtn1'  onclick='createCov(1);'  >Save Change</div>
    
</div><!-- imgAndBtn --> 
    
    
<!-- 2 -->


<div class='imgAndBtn'  id='ihold2' >
    
    <div class='imgEdits secOneImg'><img src='$imgTwo' id='preview2' >
    		  <input type='file' style='display:none'  id='file2' name='picture' accept='image/*' onchange='previewFile(2)'>  
    		
    		         		  
    </div>
        <div class='num1img'>2</div>
    
    <div class='indexImgEditBtn' id='changeBtn2' onclick='document.getElementById(\"file2\").click();'  >Change Image</div>
    <div class='indexImgEditBtn savBtn' id='saveBtn2'  onclick='createCov(2);'  >Save Change</div>
    
</div><!-- imgAndBtn -->

<!-- 3 -->    
    
  <div class='imgAndBtn'   id='ihold3'  >
    
    <div class='imgEdits secOneImg'><img src='$imgThree' id='preview3' >
    		  <input type='file' style='display:none'  id='file3' name='picture' accept='image/*' onchange='previewFile(3)'> 
    		    
    		          		  
    </div>
    <div class='num1img'>3</div>
    
    
    <div class='indexImgEditBtn' id='changeBtn3' onclick='document.getElementById(\"file3\").click();' >Change Image</div>
    <div class='indexImgEditBtn savBtn' id='saveBtn3'  onclick='createCov(3);'    >Save Change</div>
    
</div><!-- imgAndBtn --> 
    
    

<!-- 4 -->


<div class='imgAndBtn'  id='ihold4'    >
    
    <div class='imgEdits secOneImg'><img src='$imgFour' id='preview4' >
    		  <input type='file' style='display:none'  id='file4' name='picture' accept='image/*' onchange='previewFile(4)'>     
    		 
    		      		  
    </div>
     <div class='num1img'>4</div>
    
    
    <div class='indexImgEditBtn' id='changeBtn4' onclick='document.getElementById(\"file4\").click();' >Change Image</div>
    <div class='indexImgEditBtn savBtn' id='saveBtn4'  onclick='createCov(4);' >Save Change</div>
    
</div><!-- imgAndBtn -->

<!-- 5. -->


<div class='imgAndBtn'  id='ihold5'     >
    
    <div class='imgEdits secOneImg'><img src='$imgFive' id='preview5' >
    		  <input type='file' style='display:none'  id='file5' name='picture'  accept='image/*' onchange='previewFile(5)'>  
    
    		         		  
    </div>
    		    <div class='num1img'>5</div>
    
    
    
    <div class='indexImgEditBtn' id='changeBtn5' onclick='document.getElementById(\"file5\").click();' >Change Image</div>
    <div class='indexImgEditBtn savBtn' id='saveBtn5'   onclick='createCov(5);'>Save Change</div>
    
</div><!-- imgAndBtn -->




</div><!-- imgEditHold -->
	
	
	<!-- FIRST SECTION TEXT **************** -->
	
	
	<h2>Section One (Headline Title)</h2>
	
	<div class='img1'>
	    <div class='bloc'>
	        <div class='inbloc'>CHANGE</div>
	         <div class='inbloc'>FLORIDA</div>
	         <div class='inbloc'>TODAY</div>   
	             
	    </div>
	  
	    </div>
	    
	    
	   <!-- DIVISION BORDER --> 
	    
	    <div class='borderSec'></div>








	    
	    
 <!-- SECOND SECTION TEXT ONLY ************************ -->	    
	
<h2>SectionTwo (Text Only)</h2>
	
	
	
	
			
			    <div>
			        <input type='text' value='$text1' id='line1' name='line1' class='editIndexText'>
			    </div>

	    


<!-- DIVISION BORDER -->

<div class='borderSec'></div>






<!-- THIRD SECTION (IMAGE) ************************************* -->			
    
   
   
 <h2>Section Three (Slideshow Images)</h2> 
    
    
    <!-- 6 -->    
    
  <div class='imgAndBtn'     id='ihold6'   >
    
    <div class='imgEdits secTwoImg'><img src='$imgSix' id='preview6' >
    		  <input type='file' style='display:none'  id='file6' name='picture' accept='image/*' onchange='previewFile(6)'>  
    		
    		         		  
    </div>
    
       <div class='num1img'>6</div>
    
    <div class='indexImgEditBtn' id='changeBtn6' onclick='document.getElementById(\"file6\").click();' >Change Image</div>
    <div class='indexImgEditBtn savBtn' id='saveBtn6'  onclick='createCov(6);'   >Save Change</div>
    
</div><!-- imgAndBtn --> 
    
    

<!-- 7 -->



<div class='imgAndBtn'     id='ihold7' >
    
    <div class='imgEdits secTwoImg'><img src='$imgSeven' id='preview7' >
    		  <input type='file' style='display:none'  id='file7' name='picture' accept='image/*' onchange='previewFile(7)'>  
    		 
    		         		  
    </div>
       <div class='num1img'>7</div>
    
    
    <div class='indexImgEditBtn' id='changeBtn7' onclick='document.getElementById(\"file7\").click();' >Change Image</div>
    <div class='indexImgEditBtn savBtn' id='saveBtn7' onclick='createCov(7);'  >Save Change</div>
    
</div><!-- imgAndBtn -->

        
<!-- THIRD SECTION TEXT ****************** -->   

 <h2>Section Three (Text)</h2> 

		
		   		     <div><input   class='editIndexText'  type='text' value='$text2' id='line2' name='line2'></input>
		        </div>
		    
		    
		
		
	<!-- DIVISION BORDER -->

<div class='borderSec'></div>

		
		
		
		    
		        
		 <!-- FOURTH SECTION  TEXT ONLY ****************************-->	    
	
		
		 <h2>Section Four (Text Only)</h2> 
		
			
			               <input class='editIndexText' value='$text4' type='text' id='line3'>
			                   
			               </input>
			  
	    



	<!-- DIVISION BORDER -->

<div class='borderSec'></div>



<!-- FIFTH SECTION (IMAGE) ******************************* -->			
    
  <h2>Section Five (Slideshow Images)</h2>   
    
    
		 <!-- 8 -->    
    
  <div class='imgAndBtn'    id='ihold8'  >
    
    <div class='imgEdits secThreeImg'><img src='$imgEight' id='preview8' >
    		  <input type='file' style='display:none'  id='file8' name='file8' accept='image/*' onchange='previewFile(8)'>  
    		 
    		         		  
    </div>
    
       <div class='num1img'>8</div>
    
    <div class='indexImgEditBtn' id='changeBtn8' onclick='document.getElementById(\"file8\").click();' >Change Image</div>
    <div class='indexImgEditBtn savBtn' id='saveBtn8' onclick='createCov(8)'>Save Change</div>
    
</div><!-- imgAndBtn --> 
    
    
         
    

<!-- 9 -->



<div class='imgAndBtn'      id='ihold9'  >
    
    <div class='imgEdits secThreeImg'><img src='$imgNine' id='preview9' >
    		  <input type='file' style='display:none'   id='file9' name='file9' accept='image/*' onchange='previewFile(9)'>  
    		 
    		         		  
    </div>
       <div class='num1img'>9</div>
    
    
    <div class='indexImgEditBtn' id='changeBtn9' onclick='document.getElementById(\"file9\").click();' >Change Image</div>
    <div class='indexImgEditBtn savBtn' id='saveBtn9' onclick='createCov(9);'>Save Change</div>
    
</div><!-- imgAndBtn -->




    <div id='edco'></div>
    
		
		 
		 
	<!-- DIVISION BORDER -->

<div class='borderSec'></div>
	 
		 
		  
		  
		 <!-- SIXTH SECTION (TEXT ONLY)*************************** -->	    
	
		
	 <h2>Section Six (Text Only)</h2> 
			
			        <input type='text' class='editIndexText' value='$text5' id='line4'></input>
			   
			   
			   
			   
			   
			   
</div><!-- INDEX EDIT HOLD -->
   
    


";
}
	  }
	  ?>

<br/>
<br/>
<br/>

<!-- FOOTER PHP LINK -->

<?php include('footer.php'); ?>






<script>
    


/*	PREVIEWING PICTURE FOR MULTIPLE IMAGES ---- USES VARIABLE OF A NUMBER ---- */
	
	function previewFile(x)
 { 
  var chngBtn = document.getElementById('changeBtn' + x);
 var saveon = document.getElementById('saveBtn' + x);
 var preview = document.getElementById('preview' + x); 
 var file = document.querySelector('#file'+x+'[type=file]').files[0]; 
 preview.style="border-color:white";
 var reader = new FileReader(); reader.addEventListener("load", function () { preview.src = reader.result; }, false); 
 if (file)
  { reader.readAsDataURL(file);
  saveon.style='color:white; border-color:white; background-color:black;';
  chngBtn.style=' background-color:rgba(220,220,220,.3);';
   }
   }





    </script>

<script>
    
//FUNCTIONAL TO SEND FILES IMAGES USING AJAX CODE

function createCov(y)
{


var formData = new FormData();
formData.append("number", y);

if(y==1)
{
 formData.append("file", file1.files[0]);
}

if(y==2)
{
 formData.append("file", file2.files[0]);
}

if(y==3)
{
 formData.append("file", file3.files[0]);
}

if(y==4)
{
 formData.append("file", file4.files[0]);
}

if(y==5)
{
 formData.append("file", file5.files[0]);
}

if(y==6)
{
 formData.append("file", file6.files[0]);
}

if(y==7)
{
 formData.append("file", file7.files[0]);
}

if(y==8)
{
 formData.append("file", file8.files[0]);
}

if(y==9)
{
 formData.append("file", file9.files[0]);
}



var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = 
function()
{
if (this.readyState==4 && this.status==200)
{
document.getElementById("ihold" + y).innerHTML=this.responseText;
}
};

xhttp.open("POST","updateCover.php",true);
//xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
// uses userid variable for references

xhttp.send(formData);
}
    
</script>	 			






  
   <script> 
     
 //FUNCTIONAL    
       
       async function uploadFile() 
       
       {
       
        let formData = new FormData();
       
        formData.append("file", file8.files[0]);
        
        var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = 
function()
{
if (this.readyState==4 && this.status==200)
{
document.getElementById("edco").innerHTML=this.responseText;
}
};        
        
        
         await fetch('/updateCover.php', { method: "POST", body: formData }); 
         
         alert('The file has been uploaded successfully.'); }

</script>






</body>
</html>
