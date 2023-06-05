<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>



    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <meta name="viewport" content="width=device-width"/>



  <link rel="stylesheet"  type="text/css" href="style.css">

  

    

    <style type="text/css">

    

    

    


.uploadBtn {
height: 100px;
width: 300px;
padding:10px;
border:1px solid white;
background-color:rgba(20,220,20,.9);
border-radius:50px;
color: white;
display:flex;
justify-content:center;
align-items:center;
}
  
.fileName {
height:50px;
width:300px;
font-size:20px;
font-weight:700;
text-align:center;
padding:10px;
border-radius:25px;
}  
  

  input::file-selector-button {
  background-color:red;
  display: none;
  border:1px solid white;
  border-radius:50px;
  color: white;
  }
  
  
  .subBtn {
  height:100px;
  width:300px;
  padding:10px;
  background-color:black;
  color:white;
  border-radius:50px;
  }
  
  
.marginC {
margin:auto;
}  


.petBox {
display:none;
}


input {
margin:auto;
}  


  



    </style>



    <!--     Fonts     -->

  



</head>



<body>

	

	

	

	

	<div class="HeaderOne">
	    <div class="pageTitle creating">
      Name the Details
     </div>
 </div><!-- HeaderOne -->
			
			
		<br/>
		<br/>
		
		<div class="center " id="zero">
		    		
	   	<h1> Ready to start your petiton? </h1>
		
	    	<div class="buttonHolder">
		  
	         <div class="btn readyBtn" onclick='firstStep()'>
		        Yes, let's begin  
		       
		       </div> <!-- btn -->
		  		    
		    <br/>
		    
		       <div class="btn readyBtn" onclick='goBack()';>
		   No, not yet     
		        
		      </div><!-- btn -->
		    
		   </div><!-- buttonHolder -->
		
		</div><!-- center -->
		
		<br/>
		
		



		
 <form class="form"  id="formOne" method="post" action="addTest.php" enctype="multipart/form-data"> 	
		
		
		
		<!-- TITLE SECTION -->
		
		
		
<div class="petBox" id="one">
		
		<h1>Write your petition title</h1>

<h2>Tell people what you want to change.</h2>
		
		 <div   class="input-group" > <label>Title of petition</label> 		
		
		   <input  type="name"  class="inputBord" name="title" id="titl"></input>
		   
		   </div><!-- inputGroup -->

 <!-- DISPLAYS ERROR MESSAGES IF ANY -->
<div class="regerror" id="error1"></div>	 


		    <br/>
		    <br/>
		    
		    <div class="stepsContainer" >
		 
		 
		 
		 <div class="floatR">
		 	
		 	  <div class="stepsBtn btn" onclick='startStep()'>
		   back  
 </div><!-- btn -->

 
    
		<div class="stepsBtn btn" onclick='secondStep()'>
		  next   
		 </div>		 <!-- btn -->
		 
		 </div><!-- floatR -->
		 
		 
		 </div><!-- stepContainer -->
		 
		    
		    
		    
		    
		    
		    <br/>
		    <br/>
		
		<div class="tipsBlock">
		    
<span class="bold"	> Tips </span>

Start with an action verb

<span class="ital"> Examples: “Stop, Save, Ban, Grant, Oppose, etc.” </span>

Name specific places, organizations, or people

<span class="ital">Example: “Raise the minimum wage in Minneapolis to $15 an hour.”</span>

Use longer titles to add key details

<span class="ital"> Example: “Improve the diagnosis of secondary breast cancer — let us have scans!”</span>


		    
		    
		    
		    </div><!-- tipsBlock -->


</div><!-- petBox -->
	
		
		
		<!-- STORY SECTION -->


<div class="petBox" id="two">

		<h1>Time for the details</h1>

<h2>What exactly is changing, why, what, and how</h2>
		
		 <div   class="input-group" >
		   <label>Details</label> 		
		   <textarea class="inputBord" name="details" id="details"></textarea>
		   </div><!-- inputGroup -->
		   

 <!-- DISPLAYS ERROR MESSAGES IF ANY -->
<div class="regerror" id="error2"></div>	 


		    <br/>
		    <br/>
	
		 <div class="stepsContainer" >
		 
		 
		 
		 <div class="floatR">
		 	
		 	  <div class="stepsBtn btn"  onclick='firstStep()'>
		   back  
 </div> <!-- stepsBtn -->

 
    
		<div class="stepsBtn btn" onclick='thirdStep()'>
		  next   
		 </div>		 <!-- stepsBtn -->
		 
		 </div> <!-- floatR -->
		 
		 
		 </div> <!-- stepsContainer -->
		 
		   
		  
		 
		 
		 
		 
		 
		 
		 
		    
		    <br/>
		    <br/>
		
		<div class="tipsBlock">
		    
Tips

Our petitions experts recommend this structure:

<span>Paragraph 1: Who is impacted?</span>

Describe how people are concretely affected by the problem.

Paragraph 2: What is at stake?

Explain what it will mean if things change or stay the same.

Paragraph 3: Why is now the time to act?

Summarize and stress the importance of immediate action.


		    
		    </div><!-- tipsBlock -->


</div><!-- storyBox -->



<!-- IMAGE SECTION -->

<div class="petBox" id="three">
    
    
    <h1>Add an Image</h1>

<h2>Petitions with images are more effective</h2>
		
		 
		     
	 
		  <div class="imagePreview"> 
		       <img   id="preview" src="" alt="">  
		      
		   <div  class="centerAll">	    
		         
		  <input  class="inputBord" type="file" style="display:none"  id="file" name="cover" accept="image/*" onchange="previewFile()">         
		        <img  src="addImg.png" align="center" onclick="document.getElementById('file').click();"  alt="Image preview..." >
		  
		       
		   </div>   <!-- centerAll -->
		  </div><!-- imagePreview -->
		   
		 <!-- DISPLAYS ERROR MESSAGES IF ANY -->
<div class="regerror" id="error3"></div>	 

		   
		   
		    <br/>
		    <br/>
	
		 <div class="stepsContainer" >
		 
		 
		 
		 <div class="floatR">
		 	
		 	  <div class="stepsBtn btn" onclick='secondStep()'>
		   back  
 </div><!-- btn -->

 
    
		<div class="stepsBtn btn" onclick='fourthStep()'>
		  next   
		 </div>		 <!-- btn -->
		 
		 </div><!-- floatR -->
		 
		 
		 </div><!-- stepsContainer -->
		 
		   
		  		    
		    <br/>
		    <br/>
		
		<div class="tipsBlock">
		    
<span>Tips</span>

<div class="inlineBlock">
    
    <div class="smallIcon inline">
        <img src="greenCheck.png" alt="">
        </div><!-- smallIcon -->
         <div class="bold inline">Do</div><!-- bold -->

</div><!-- inline -->

Use a close-up image of a person or animal that conveys emotion

Use a simple image with a good color contrast

Use image of public figures or local landmarks if applicable

<div class="inlineBlock">
    
    <div class="smallIcon inline">
        <img src="redX.png" alt="">
        </div> <!-- smallIcon -->
        <div class="bold inline">Don't</div><!-- bold -->

</div><!-- inlineBlock -->

Avoid images with text

Avoid busy images

Don't show graphic violence or sexual content.
		    
		    </div><!-- tipsBlock -->

    
</div><!--petBox -->




<!-- PDF SECTION -->





<div class="petBox" id="four">
    
    
      <div class="uploadBtn marginC" onClick="myFile()"><div>Upload PDF</div></div><!-- uploadBtn -->
  <br/>
<div class="marginC">  <input class="fileName marginC" type="file" id="pdf_file" name="pdf_file">
  <br/><br/>

</div><!-- marginC -->

<!-- DISPLAYS ERROR MESSAGES IF ANY -->
<div class="regerror" id="error4"></div>	 


 <div class="stepsContainer" >
		 
		 
		 
		 <div class="floatR">
		 	
		 	  <div class="stepsBtn btn" onclick='thirdStep()'>
		   back  
 </div><!-- btn -->

 
    
		<div class="stepsBtn btn" onclick='fifthStep()'>
		  next   
		 </div>	<!-- btn -->	 
		 
		 </div><!-- floatR -->
		 
		 
		 </div><!-- stepsContainer -->



</div><!-- petBox -->




<!-- SUBMIT SECTION -->



<div class="petBox" id="five">
    
      <input class="subBtn marginC" type="submit" name="add_pdf">
      
      </div><!-- petBox -->
  
    </form>

  
<?php 
include('footer.php');
?> 
  
  
  <script>
  
  function myFile() 
  {
  document.getElementById('pdf_file').click();
  
  
  
  
  }
  </script>


<script>
    
    /*	PREVIEWING PICTURE */
	
	function previewFile()
 { 
 var preview = document.getElementById('preview'); 
 var file = document.querySelector('input[type=file]').files[0]; 
 preview.style="border-color:white";
 var reader = new FileReader(); reader.addEventListener("load", function () { preview.src = reader.result; }, false); 
 if (file)
  { reader.readAsDataURL(file); }
   }

    
    </script>

<script>
	allin =
		document.getElementsByClassName("petBox");


zero =
document.getElementById('zero');

one = 
document.getElementById('one');

two =
document.getElementById('two');

three =
document.getElementById('three');

four =
document.getElementById('four');

five =
document.getElementById('five');

// VARIABLE FOR ALL INPUT TEXT AREAS
		allerr =
		document.getElementsByClassName("inputbord");



// VARIABLE FOR ALL ERROR ALERT DIVS		
		allerr2 =
		document.getElementsByClassName("regerror");
		
	


function firstStep()
{

// RESETS ALL INPUT BORDER COLOR
for(y = 0; y < allerr.length ; y++ )		
		{
				
		allerr[y].style="border-color:";
		
		}		
		
for(i = 0; i < allin.length ; i++ )		
		{
				
		allin[i].style.display="none";
		one.style.display="block";
		zero.style.display="none";
		}
		





}




function secondStep()
{

// RESETS ALL INPUT BORDER COLOR
for(y = 0; y < allerr.length ; y++ )		
		{
				
		allerr[y].style="border-color:";
		
		}		
		
for(i = 0; i < allin.length ; i++ )		
		{
				
		allin[i].style.display="none";
		two.style.display="block";
		}




}




function thirdStep()
{

// RESETS ALL INPUT BORDER COLOR
for(y = 0; y < allerr.length ; y++ )		
		{
				
		allerr[y].style="border-color:";
		
		}		
		
for(i = 0; i < allin.length ; i++ )		
		{
				
		allin[i].style.display="none";
		three.style.display="block";
		}


}

function fourthStep()
{


// RESETS ALL INPUT BORDER COLOR
for(y = 0; y < allerr.length ; y++ )		
		{
				
		allerr[y].style="border-color:";
		
		}		
		
for(i = 0; i < allin.length ; i++ )		
		{
				
		allin[i].style.display="none";
		four.style.display="block";
		}

}


function fifthStep()
{

// RESETS ALL INPUT BORDER COLOR
for(y = 0; y < allerr.length ; y++ )		
		{
				
		allerr[y].style="border-color:";
		
		}		
		
for(i = 0; i < allin.length ; i++ )		
		{
				
		allin[i].style.display="none";
		five.style.display="block";
		}

}




function startStep()
{

// RESETS ALL INPUT BORDER COLOR
for(y = 0; y < allerr.length ; y++ )		
		{
				
		allerr[y].style="border-color:";
		
		}		
		
for(i = 0; i < allin.length ; i++ )		
		{
				
		allin[i].style.display="none";
		zero.style.display="block";
		}

}



</script>
</body>
