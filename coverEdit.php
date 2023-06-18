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
transition:.5s;
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


.txtArea {
width:90%;
height:50px;
padding:10px;
margin:auto;
border-radius:15px; background-color: rgba(200,200,220,.3);
 color: white;
 outline: none;
font-size:18px;
}

.txtSav {
float:right;
}


@keyframes bw 
{
0%{transform:scale(1.1);}
50%{transform:scale(.9);}
100%{transform:scale(1.1);}

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
    <button class='indexImgEditBtn savBtn' id='saveBtn1'  onclick='chkOn(1);'  >Save Change</button>
    
</div><!-- imgAndBtn --> 
    
    
<!-- 2 -->


<div class='imgAndBtn'  id='ihold2' >
    
    <div class='imgEdits secOneImg'><img src='$imgTwo' id='preview2' >
    		  <input type='file' style='display:none'  id='file2' name='picture' accept='image/*' onchange='previewFile(2)'>  
    		
    		         		  
    </div>
        <div class='num1img'>2</div>
    
    <div class='indexImgEditBtn' id='changeBtn2' onclick='document.getElementById(\"file2\").click();'  >Change Image</div>
    <button class='indexImgEditBtn savBtn' id='saveBtn2'  onclick='chkOn(2);'  >Save Change</button>
    
</div><!-- imgAndBtn -->

<!-- 3 -->    
    
  <div class='imgAndBtn'   id='ihold3'  >
    
    <div class='imgEdits secOneImg'><img src='$imgThree' id='preview3' >
    		  <input type='file' style='display:none'  id='file3' name='picture' accept='image/*' onchange='previewFile(3)'> 
    		    
    		          		  
    </div>
    <div class='num1img'>3</div>
    
    
    <div class='indexImgEditBtn' id='changeBtn3' onclick='document.getElementById(\"file3\").click();' >Change Image</div>
    <button class='indexImgEditBtn savBtn' id='saveBtn3'  onclick='chkOn(3);'    >Save Change</button>
    
</div><!-- imgAndBtn --> 
    
    

<!-- 4 -->


<div class='imgAndBtn'  id='ihold4'    >
    
    <div class='imgEdits secOneImg'><img src='$imgFour' id='preview4' >
    		  <input type='file' style='display:none'  id='file4' name='picture' accept='image/*' onchange='previewFile(4)'>     
    		 
    		      		  
    </div>
     <div class='num1img'>4</div>
    
    
    <div class='indexImgEditBtn' id='changeBtn4' onclick='document.getElementById(\"file4\").click();' >Change Image</div>
    <button class='indexImgEditBtn savBtn' id='saveBtn4'  onclick='chkOn(4);' >Save Change</button>
    
</div><!-- imgAndBtn -->



<!-- 5.   ***********  CURRENTLY NOT IN USE ********************-->


<!-- <div class='imgAndBtn'  id='ihold5'     >
    
    <div class='imgEdits secOneImg'><img src='$imgFive' id='preview5' >
    		  <input type='file' style='display:none'  id='file5' name='picture'  accept='image/*' onchange='previewFile(5)'>  
    
    		         		  
    </div>
    		    <div class='num1img'>5</div>
    
    
    
    <div class='indexImgEditBtn' id='changeBtn5' onclick='document.getElementById(\"file5\").click();' >Change Image</div>
    <button class='indexImgEditBtn savBtn' id='saveBtn5'   onclick='createCat();'>Save Change</button>
     
</div><!-- imgAndBtn -->



</div><!-- imgEditHold -->
	<br/>
	
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
	
	
		<div id='txtedt1'>
	
			
			    <div>
			 <textarea class='txtArea' rows='3'  value='$text1' id='nwtxt1' name='nwtxt1' class='editIndexText' onkeyup='openSav(1);'   onkeydown='openSav(1);'>$text1</textarea>
			    </div>
			    
			   

<button class='indexImgEditBtn savBtn txtSav' id='saveTxt1'   onclick='chkOnTxt(1);'>Save Change</button>
     

	    </div><!-- TXTEDT1 -->


<!-- DIVISION BORDER -->

<div class='borderSec'></div>






<!-- THIRD SECTION (IMAGE) ************************************* -->			
    
   
   
 <h2>Section Three (Slideshow Images)</h2> 
    
    <div class='imgEditsHold'>
        
        
    <!-- 6 -->    
    
  <div class='imgAndBtn'     id='ihold6'   >
    
    <div class='imgEdits secTwoImg'><img src='$imgSix' id='preview6' >
    		  <input type='file' style='display:none'  id='file6' name='picture' accept='image/*' onchange='previewFile(6)'>  
    		
    		         		  
    </div>
    
       <div class='num1img'>6</div>
    
    <div class='indexImgEditBtn' id='changeBtn6' onclick='document.getElementById(\"file6\").click();' >Change Image</div>
    <button class='indexImgEditBtn savBtn' id='saveBtn6'  onclick='chkOn(6); disSav(6);'   >Save Change</button>
    
</div><!-- imgAndBtn --> 
    
    

<!-- 7 -->



<div class='imgAndBtn'     id='ihold7' >
    
    <div class='imgEdits secTwoImg'><img src='$imgSeven' id='preview7' >
    		  <input type='file' style='display:none'  id='file7' name='picture' accept='image/*' onchange='previewFile(7)'>  
    		 
    		         		  
    </div>
       <div class='num1img'>7</div>
    
    
    <div class='indexImgEditBtn' id='changeBtn7' onclick='document.getElementById(\"file7\").click();' >Change Image</div>
    <button class='indexImgEditBtn savBtn' id='saveBtn7' onclick='chkOn(7);'  >Save Change</button>
    
</div><!-- imgAndBtn -->

</div><!-- imgEditHold -->
	<br/>
        
<!-- THIRD SECTION TEXT ****************** -->   

 <h2>Section Three (Text)</h2> 

		<div id='txtedt2'>
		    
		    
		   		        <div>
			 <textarea class='txtArea' rows='3'  value='$text2' id='nwtxt2' name='nwtxt2' class='editIndexText' onkeyup='openSav(2);'   onkeydown='openSav(2);'>$text2</textarea>
			    </div>
			   

<button class='indexImgEditBtn savBtn txtSav' id='saveTxt2'   onclick='chkOnTxt(2);'>Save Change</button>
     
		  </div><!-- TXTEDT2 --> 
		    
		
		
	<!-- DIVISION BORDER -->

<div class='borderSec'></div>

		
		
		
		    
		        
		 <!-- FOURTH SECTION  TEXT ONLY ****************************-->	    
	
		
		 <h2>Section Four (Text Only)</h2> 
		
				<div id='txtedt3'>
				    
			                 <div>
			 <textarea class='txtArea' rows='3'  value='$text3' id='nwtxt3' name='nwtxt3' class='editIndexText' onkeyup='openSav(3);'   onkeydown='openSav(3);'>$text3</textarea>
			    </div>
			   

<button class='indexImgEditBtn savBtn txtSav' id='saveTxt3'   onclick='chkOnTxt(3);'>Save Change</button>
     
			  
	    </div><!-- TXTEDT3 -->



	<!-- DIVISION BORDER -->

<div class='borderSec'></div>



<!-- FIFTH SECTION (IMAGE) ******************************* -->			
    
  <h2>Section Five (Slideshow Images)</h2>   
  
<div class='imgEditsHold'>   
    
		 <!-- 8 -->    
    
  <div class='imgAndBtn'    id='ihold8'  >
    
    <div class='imgEdits secThreeImg'><img src='$imgEight' id='preview8' >
    		  <input type='file' style='display:none'  id='file8' name='file8' accept='image/*' onchange='previewFile(8)'>  
    		 
    		         		  
    </div>
    
       <div class='num1img'>8</div>
    
    <div class='indexImgEditBtn' id='changeBtn8' onclick='document.getElementById(\"file8\").click();' >Change Image</div>
    <button class='indexImgEditBtn savBtn' id='saveBtn8' onclick='chkOn(8);'>Save Change</button>
    
</div><!-- imgAndBtn --> 
    
    
         
    

<!-- 9 -->



<div class='imgAndBtn'      id='ihold9'  >
    
    <div class='imgEdits secThreeImg'><img src='$imgNine' id='preview9' >
    		  <input type='file' style='display:none'   id='file9' name='file9' accept='image/*' onchange='previewFile(9)'>  
    		 
    		         		  
    </div>
       <div class='num1img'>9</div>
    
    
    <div class='indexImgEditBtn' id='changeBtn9' onclick='document.getElementById(\"file9\").click();' >Change Image</div>
    <button class='indexImgEditBtn savBtn' id='saveBtn9' onclick='chkOn(9);'>Save Change</button>
    
</div><!-- imgAndBtn -->

</div><!-- imgEditHold -->
	<br/>

<!-- USED AS A TEST FOR AJAX RESPONSE  -->

    <div id='edco'></div>
    
		
		 
		 
	<!-- DIVISION BORDER -->

<div class='borderSec'></div>
	 
		 
		  
		  
		 <!-- SIXTH SECTION (TEXT ONLY)*************************** -->	    
	
		
	 <h2>Section Six (Text Only)</h2> 
			
				<div id='txtedt4'>			
				    
				    
			           <div>
			 <textarea class='txtArea' rows='3'  value='$text4' id='nwtxt4' name='nwtxt4 class='editIndexText' onkeyup='openSav(4);'   onkeydown='openSav(4);'>$text4</textarea>
			    </div>
			   

<button class='indexImgEditBtn savBtn txtSav' id='saveTxt4'   onclick='chkOnTxt(4);'>Save Change</button>
     
			   
			  </div> <!-- TXTEDT4 -->
			   <br/>
			   <br/>
			   
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
  saveon.disabled= false;
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

function updateText(u)
{

var ntxt =
    document.getElementById("nwtxt" + u).value;

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = 
function()
{
if (this.readyState==4 && this.status==200)
{
document.getElementById("txtedt" + u).innerHTML=this.responseText;
}
};

xhttp.open("POST","updateCoverTxt.php",true);
xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");


xhttp.send("send1=" + u + "&message1=" + ntxt);
}

</script>


<script>
    
    
// ACTIVATES THE SAVE BUTTON FOR THE TEXT EDITS    

  function openSav(a)
  {

var   sbt =
   document.getElementById('saveTxt'+ a);

   sbt.style='color:white; border-color:white; background-color:black;';
sbt.disabled = false;
  
  }


//FOR THE IMAGE UPDATES

function chkOn(j)
{

var   sbt =
   document.getElementById('saveBtn'+ j);

if(sbt.style.backgroundColor=='black')
{
sbt.innerHTML= 'Uploading...';
sbt.style.animation='bw 3s infinite linear';
createCov(j);

}

}



//FOR THE TEXT BOX EDITS 

function chkOnTxt(j)
{

var   sbt =
   document.getElementById('saveTxt'+ j);

if(sbt.style.backgroundColor=='black')
{
sbt.innerHTML= 'Uploading...';
sbt.style.animation='bw 3s infinite linear';
updateText(j);

}

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



<script>
    
    
function createCat()
{
var message = 
document.getElementById("nwtxt").value;


var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = 
function()
{
if (this.readyState==4 && this.status==200)
{
document.getElementById("testTh").innerHTML=this.responseText;
}
};
xhttp.open("POST","updateCoverTxt.php",true);
xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
// uses userid variable for references
xhttp.send("send1=<?php echo  "$id";?>&message1=" + message);
}

</script>	 			


</body>
</html>
