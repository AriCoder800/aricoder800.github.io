<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    
 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend+Peta:wght@100;300&family=Russo+One&display=swap" rel="stylesheet">




    
    
    <style type="text/css">

body {
background-color:rgba(20,20,20,1);
color:white;
margin:0;
padding:0;
}    
    
    
    
  .bgImg {
 <!--  font-family: 'Russo One', sans-serif; -->
  font-family: 'Lexend Peta', sans-serif;  
  background-color: rgba(20,20,20,.7);
  height:  130vh;
  width:100vw;
  position: relative;
  font-size:100px;
  font-weight:900;
  text-align:right;
  display:flex;
  justify-content:center;
  align-items:center;
  background:linear-gradient(45deg,rgba(20,20,20,1), rgba(20,20,20,1));
  background-size:cover;
  background-repeat:no-repeat;
  }

.bloc div {

height:100px;
}

.bloc {
display:block;
width:100%;
height:300px;

} 

.bubble {

  background-color: rgba(20,20,20,.7);
  height:  150vh;
  width:100vw;
  position: relative;
  font-size:30px;
  font-weight:700;
  text-align:right;
  display:flex;
  justify-content:center;
  align-items:center;
  
  background-size:cover;
  background-repeat:no-repeat;


height:150vh;

background-image:url(dark2.jg);
}

.bubble::after {
content: '';
 border-top-left-radius: 60% 10%; 
 border-bottom-right-radius:50% 10%; 
 position: absolute; 
 bottom: 0;
  z-index: -1; 
 width: 100%; 
 background-image: url(dark2.jpg); 
 height: 150vh;
}


.img1 {
background-image:url(dark2.jpg);
height:130vh;
border-bottom-left-radius:100% 60%;
}

.img4 {
background-image:url(dakQ.jpg);
background-color: rgba(20,20,20,.7);
}

.img4::after {
content: '';
 border-top-left-radius: 60% 20%; 
 border-bottom-right-radius:100% 30%; 
 position: absolute; 
 bottom: 0;
  z-index: -1; 
 width: 100%; 
 background-image: url(darkQ.jpg); 
 height: 150vh;

}

.img2 {
background-image:url(dark2.jpg);
}


.stry {
font-size: 30px;
text-align:center;
}



.bgBtn {

padding:30px;
border-radius:45px;
background:rgba(20,20,20,1);
font-size:30px;
border:1px solid white;
}


section { 
position: relative; 
display: flex; 
flex-direction: column; 
align-items: center; 
min-height: 400px; 
padding-top: 100px; 

} 



.borderOut {
border-bottom:1px solid white;
position:absolute;
height:130vh;
top:15px;
border-bottom-left-radius:100% 60%;
left:0;
width:100vw;
z-index:1;
}

    </style>

    <!--     Fonts     -->
  

</head>


	<body>
	
	<div class="bgImg img1">
	    <div class="bloc">
	        <div class="inbloc">CHANGE</div>
	         <div class="inbloc">FLORIDA</div>
	         <div class="inbloc">TODAY</div>
	      
	          
	    </div>
	   
	    
	    </div>
	   <div class="borderOut"></div>  
	    
	
			<div class="bgImg stry img">
			    <div><p>Our mission is simple, to improve Florida one signature at a time</p></div>
			    </div>
			    
			
			
			    
			   
			    
		<section class="bubble">
		   
		    <div>
		        <p>We as a people have power we often do not exercise, and when change is needed it is that power that can make it happen.</p>
		        </div>
		  
		    </section>
		    
		    
		  <div class="bgImg stry img3">
		    <div><p>Every decision our government leaders make affects our lives, we must be vigilant to their choices and guide them in the correct path</p></div>
		    
		       <div class="borderOut"></div>  
		    </div> 
		    
		    
		    
		  <a href="petitionList.php"><div class="bgImg stry img4">
		    <div><div class="bgBtn">View Active Petitions</div></div>
		    </div> 
		</a>


 <div class="bgImg stry img">
		    <div>
		        <p>Join the movement</p>
		        </div>
		    </div>


	<section> <!-- content here --> <div class="curve"></div> </section>


		<?php 
include('footer.php');
?>   


</body>
</html>
