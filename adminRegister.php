<?php include('serverReg.php'); ?>
<!DOCTYPE html> 
<html> 

<head> 
<title>Registration</title> 


	 <link rel="image_src" href="https://changefloridatoday.com/coverNew.jpg">

	

		<meta property="og:type" content="website" /> 

	<meta property="og:image" content="https://changefloridatoday.com/coverNew.jpg" /> 

<meta property="og:description" content="Your signature matters. Join us in making Florida better." /> 

<meta property="og:url"content="https://changefloridatoday.com" /> 

<meta property="og:title" content="Lets change Florida one signature at a time" />

<meta property="fb:app_id" content="966242223397117">






<link rel="stylesheet" type="text/css" href="style.css"> 


<meta name="viewport" content="width=device-width, initial-scale=1">

  	<!-- theme color for browser address bar -->
  	<meta name="theme-color" content="#000000" />
<!-- Windows Phone --> 
<meta name="msapplication-navbutton-color" content="#000000"> 
<!-- iOS Safari --> 
<meta name="apple-mobile-web-app-capable" content="yes"> 
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  	

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css?family=Audiowide|Gaegu|Montserrat|Permanent+Marker" rel="stylesheet">


	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">  	
  	



<style>


 

label {
	margin-left: auto;
	margim-right: auto;
	
}



.logoholdsmall {
	height:100px;
	width:100px;
	margin:auto;	

}


.regblock {
	width:100vw;
	height:100vh;
	
	position:absolute;
	top:0;
	left:0;
	display:flex;
	justify-content:center;
	align-items: center;
}

.regblockin {
	position: absolute;
	top: 50px;
	
}

.btn {
  width: 80vw;
  padding: 10px; 
  font-size: 15px; 
  color: black; 
  margin-left:auto;
  margin-right:auto;
  background: white;
  transition: .5s;
  border: 0px groove white; 
  border-radius: 25px;
 } 


.btn:focus {
	outline: none;
	border: 1px ridge white; 
}

.secondreg {
	display:none;
	
	
}


.regreturn {
	width:98%;
	height: 50px;
	position: fixed;
	top:0;
	left: 0;
	border-bottom: 1px solid rgba(128,128,128,.3);
	display: flex;
	align-items: center;
}



#fndiv {
	width:45%;
	display:inline-block;
	
}




#lndiv {
	display:inline-block;
	width:45%;
	
}

.regerror {
	height:20px;
	color: red;
	
}


.regback {
	display: flex;
	align-items: center;
	height:50px;
	width:50px;
	color:white;
	padding: 10px;
	margin-left: 10px;
}


</style>





</head> 
<body  > 






<div class='regblock' id='firstjoin'>

<!-- BLOCK FOR RETURN ARROW -->
<div class="regreturn">
<div class="regback"  onclick="javascript:history.back()"> <span><i class="fas fa-arrow-left"></i></span></div>
</div>



     <div>


<p>Lets get your Administrator account set up</p>
</br>





	   <div  class="btn"  onclick="nextname() "  >Next</div> 	
	   
    </div>
</div>








<form class="form2" method="post" action="adminRegister.php"  enctype="multipart/form-data"> 	<?php include('errors.php'); ?> 	


</br>




<!-- USER NAME -->
<div class='regblock secondreg' id="thirdjoin">

<!-- BLOCK FOR RETURN ARROW -->
<div class="regreturn">
<div class="regback"  onclick="back2()"  ><span><i class="fas fa-arrow-left"></i></span></div>
</div>

     <div  class="regblockin">

<div class="input-group"> 	 
<label>Create a Username</label> 	


 </br>
 
<input  class="inputbord" id="username" type="text" name="username" value="<?php echo $username; ?>"  >

	<!-- DISPLAYS ERROR MESSAGES IF ANY -->
<div class="regerror" id="error2"></div>	 

 	</div> 	
 


<!-- VALIDATES AND OPENS NEXT SECTION -->
 <div  class="btn"  onclick="nextname3()"  >Next</div> 	
	   
    </div>
</div>











<!-- EMAIL -->

<div class='regblock secondreg' id="fifthjoin">

<!-- BLOCK FOR RETURN ARROW -->
<div class="regreturn">
<div class="regback"   onclick="back3()"  ><span><i class="fas fa-arrow-left"></i></span></div>
</div>

     <div   class="regblockin">


<div class="input-group"> 	 

<label>Email</label> 


 </br>

	
 <input  class="inputbord" id="email" type="text" name="email" value="<?php echo $email; ?>" > 
 
 <!-- DISPLAYS ERROR MESSAGES IF ANY --><div class="regerror" id="error4"></div>	 
 
	</div> 	
	
	
	<!-- VALIDATES AND OPENS NEXT SECTION -->
	 <div  class="btn"  onclick="nextname5()"  >Next</div> 	
	   
    </div>
</div>

	
	
	
<!-- PASSWORD AND CONFIRMATION -->
<div class='regblock secondreg' id="sixthjoin">

<!-- BLOCK FOR RETURN ARROW -->
<div class="regreturn">
<div class="regback"  onclick="back5()"  ><span><i class="fas fa-arrow-left"></i></span></div>
</div>

     <div   class="regblockin"  >
	
	
	<div class="input-group"> 	 
	
	<label>Create a Password</label> 
	
	<!-- DISPLAYS ERROR MESSAGES IF ANY -->
	
	
		
	 <input  class="inputbord" id="password1" type="password" name="password_1" > 	
	 <div class="regerror" id="error5"></div>	 
 
	 </div> 
	 
	 <div class="input-group"> 
	 	 
	 <label>Confirm Password</label> 	
	  <input  class="inputbord" id="password2" type="password" name="password_2"> 	
	  <!-- DISPLAYS ERROR MESSAGES IF ANY -->
	<div class="regerror" id="error6"></div>	 
 </br>
 </div>

	<!-- VALIDATES AND OPENS NEXT SECTION -->
	 <div  class="btn"  onclick="nextname6()"  >Next</div> 	
	   
    </div>
</div>

	
	
	
	  
	<!-- LAST BUTTON TO SUBMIT INPUT -->  
	<div class='regblock secondreg' id="lastjoin">
	
	<!-- BLOCK FOR RETURN ARROW -->
<div class="regreturn">
<div class="regback"   onclick="back7()"  ><span><i class="fas fa-arrow-left"></i></span></div>
</div>
	
     <div >  
	   
	   	
	     <div  class="buttoncase">
	  <div class="input-group" id="submit" > 	
	   <button type="submit"  class="btn" name="reg_user" onclick="loader(); loadertime()"  >Create New Admin Account</button> 	
	   </div>
	    </div>
	    
	  <div class="sendload" >
     <img src="lolow.png"  id="the2">
    </div> 
    
    	
	   
    </div>
</div>
    
    
    
    
	  <br/>
	  
	  
	  
	  
	  <br/>
	 </form> 
	   
	   
	  
	  
	  	
	  	<script>
	  	

 
	  		


	   function loader() {
  lo =  document.getElementsByClassName("sendload")[0];
   z= document.getElementsByClassName("buttoncase")[0];
 
 if (z.style.display!="none")
 {
z.style.display="none";
  lo.style.display="flex";
  }
  else
   {
z.style.display="flex";
  lo.style.display="none";
  }  
	}

// sets a timeout for loader  
function  loadertime()
{
setTimeout(loader, 20000);
  }
   	
	
	
	
	
	// VARIABLE FOR ALL INDUVIDUAL INPUT SECTION BLOCKS
	allin =
		document.getElementsByClassName("regblock");
	

// VARIABLE FOR ALL INPUT TEXT AREAS
		allerr =
		document.getElementsByClassName("inputbord");



// VARIABLE FOR ALL ERROR ALERT DIVS		
		allerr2 =
		document.getElementsByClassName("regerror");
		
	

		
		one = 
		document.getElementById('firstjoin');


		
		three =
		document.getElementById('thirdjoin');	
		
		

	
	
	
five =
		document.getElementById('fifthjoin');
		
		six =
		document.getElementById('sixthjoin');	
		
			
		
		
	last =
		document.getElementById('lastjoin');	
	
	
	
//OPENS FIRST REGISTRATION INPUT FIELD	
	function nextname()
	{
		
		
		// RESETS ALL INPUT BORDER COLOR
for(y = 0; y < allerr.length ; y++ )		
		{
				
		allerr[y].style="border-color:";
		
		}		
		
for(i = 0; i < allin.length ; i++ )		
		{
				
		allin[i].style.display="none";
		three.style.display="flex"; //Altered for Change Florida site
		}
		
	}
	


	
	
// VALIDATES ARTISTNAME/USERNAME BEFORE GOING TO NEXT SCREEN	
	function nextname3()
	{
				
			un = 	document.getElementById('username');
				unb = un.value;
				fillun = unb.length;
				
				er1 = "Please fill out your Artist name";
	
	// RESETS ALL INPUT BORDER COLOR
for(y = 0; y < allerr.length ; y++ )		
		{
				
		allerr[y].style="border-color:";
		
		}
	
// RESETS ALL ERROR ALERTS
for(j = 0; j < allerr2.length ; j++ )		
		{
				
		allerr2[j].innerHTML="";
		
		}
		


				
				if( fillun < 	1)
				{
					document.getElementById('error2').innerHTML = er1;
					un.style="border-color:red";
					
					
				} else {
				
for(i = 0; i < allin.length ; i++ )		
		{
				
		allin[i].style.display="none";
		five/*four*/.style.display="flex";
		}
		
		}
	}
	


// VALIDATES EMAIL BEFORE GOING TO NEXT SCREEN	
	
	function nextname5()
	{
				
			 mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			
				em = 	document.getElementById('email');
		
		emb		= em.value;
				
		fillem = emb.length;
				
				er1 = "Please fill out your Email";
				er2 = "Not a valid email";
				
				
// RESETS ALL INPUT BORDER COLOR				
			for(y = 0; y < allerr.length ; y++ )		
		{
				
		allerr[y].style="border-color:";
		
		}
				
// RESETS ALL ERROR ALERTS
for(j = 0; j < allerr2.length ; j++ )		
		{
				
		allerr2[j].innerHTML="";
		
		}			
				
				
		if(fillem < 1)		
				{
					
			document.getElementById('error4').innerHTML = er1;	
					em.style="border-color:red";
					
			}		 else if(!emb.match(mailformat)) 
				{ 
				 document.getElementById('error4').innerHTML = er2;	
					em.style="border-color:red";
				 }
			
		 else	 {
					
					
for(i = 0; i < allin.length ; i++ )		
		{
				
		allin[i].style.display="none";
		six.style.display="flex";
		}
		
		}
	}


//USED NEW

// VALIDATES PASSWORD AND CONFIRMATION B3FORE GOING TO NEXT SECTION	
	function nextname6()
	{
				
		pb1 = 		document.getElementById('password1');		
				
	pb2 = 	document.getElementById('password2');			
				
		
		p1 = pb1.value;
		p2 = 	pb2.value;			
				
				fillp1 = p1.length;
				fillp2 = p2.length;
				
				er1 = "Password must have at least eight characters";
				er2 = "Password and confirm password do not match";


// RESETS ALL INPUT BORDER COLOR
for(y = 0; y < allerr.length ; y++ )		
		{
				
		allerr[y].style="border-color:";
		
		}
		
// RESETS ALL ERROR ALERTS
for(j = 0; j < allerr2.length ; j++ )		
		{
				
		allerr2[j].innerHTML="";
		
		}
		

				
			if( fillp1 < 8)
			{
		document.getElementById('error5').innerHTML = er1;	
				pb1.style="border-color:red";
				
			}
			
			 else if ( p2 != p1)
				
				{
		document.getElementById('error6').innerHTML = er2;		
				pb2.style="border-color:red";
				
				
					
				} else {
				
for(i = 0; i < allin.length ; i++ )		
		{
				
		allin[i].style.display="none";
		last.style.display="flex"; //altered for ChangeFlorida
		}
		
		}
	}
	
	
	
	
	function back1()  
	{	
		for(i = 0; i < allin.length ; i++ )		
		{
				
		allin[i].style.display="none";
		one.style.display="flex";
		}
		
		}
		
	function back2()  
	{	
		for(i = 0; i < allin.length ; i++ )		
		{
				
		allin[i].style.display="none";
		two.style.display="flex";
		}
		
		}
		
	function back3()  
	{	
		for(i = 0; i < allin.length ; i++ )		
		{
				
		allin[i].style.display="none";
		three.style.display="flex";
		}
		
		}
		
	
	function back4()  
	{	
for(i = 0; i < allin.length ; i++ )		
		{
				
		allin[i].style.display="none";
		four.style.display="flex";
		}
		
		}
		
		
		
	function back5()  
	{	
for(i = 0; i < allin.length ; i++ )		
		{
				
		allin[i].style.display="none";
		five.style.display="flex";
		}
		
		}
		
		
	function back6()  
	{	
		for(i = 0; i < allin.length ; i++ )		
		{
				
		allin[i].style.display="none";
		six.style.display="flex";
		}
		
		}
		
		
	
	function back7()  
	{	
		
		for(i = 0; i < allin.length ; i++ )		
		{
				
		allin[i].style.display="none";
		seven.style.display="flex";
		}
		
		}
	
		
		

	
	
	  	</script>
	  	 </body>
	  	 </html>
