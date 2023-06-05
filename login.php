<?php include('serverReg.php'); 
?> 

 <!DOCTYPE html>
 <html>

  <head> 
  
  <title>Login</title> 
  
  
 

<!-- theme color for browser address bar -->
  	<meta name="theme-color" content="#000000" />
<!-- Windows Phone --> 
<meta name="msapplication-navbutton-color" content="#000000"> 
<!-- iOS Safari --> 
<meta name="apple-mobile-web-app-capable" content="yes"> 
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  	




  
  <link rel="stylesheet" type="text/css" href="style.css"> 
  
  
  	  
  	 
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css?family=Audiowide|Gaegu|Montserrat|Permanent+Marker" rel="stylesheet">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  
  <style>
  
  
  .loadMine {
  	height:100px;
  	width:100px;
  	
  	border: 16px solid gray;
  	border-radius:50%;
  	border-top: 16px solid rgba(10,20,200,.9);
  	animation: spin 2s linear infinite;
  }
  
  @keyframes spin {
  	
  	0% {transform: rotate(0deg); }
  	100% {transform:rotate(360deg); }
  }
  
  .passcase {
  height: 60px;
  
  }
  
  .see {
  position: relative;

  bottom: 70%;
  width: 20px;
  left: 85%;
  padding:10px;
  display: block;
  }
  
  
  
  
  h1 {
  	font-size:14px;
  	 overflow: hidden; 
  	 text-align: center; 
  	 padding: 10px;
  	 } 



  
  </style>
  
  
  
  </head> 
  <body> 
  
  
  
<br />
  
  

 
  
  
  
    <h2 class="logintitle">ADMIN LOGIN</h2> 
   
  
  
  <form class="form"  method="post" action="login.php" > 	<?php include('errors.php'); ?> 	
  
  <div class="input-group"> 		<label>Username or Email</label> 		
  <input   id="username" type="text" name="username"  onkeyup="activate(this, 'submit', 'password')"> 	
  </div> 	
  <div class="input-group"> 		<label>Password</label> 		
  
   <div class="passcase">
  <input id="password" type="password" name="password" autocomplete="off"  onkeyup="activate(this, 'submit', 'username')"> 	
  <div  class='see' id='slash' onclick="showpass(this, 'eye')"><i   class="far fa-eye-slash"></i></div>

<div  class='see' id='eye' style='display:none;' onclick="showpass(this, 'slash')">  
  <i     class="far fa-eye"></i></div>
  
  </div>
  </div> 	
  
  <div class="input-group"> 		
  
  <div  class="buttoncase">
  <button id="submit" type="submit" class="btn" name="login_user" onclick="loader(); loadertime()" >Login</button> 	
  </div>
  
  
   <div class="sendload" >
   <div class="loadMine"></div>
  </div>
  </div> 	
 
  
  
  
<?php 
include('footer.php');
?>
 
  
    
  
   
  
 
  
  
  <script>
  
  /* disabling submit button until boxes are filled */	
  button = 
document.getElementById("submit");

button.disabled= true;
button.style="background-color:rgba(61,61,61,.4);color:rgba(180,180,180,1);";
  

	
	
	// activatin buttons
	function activate(z, y, v)
	{
	sub=
	document.getElementById(y);
	two=
	document.getElementById(v);	
	 
if (z.value.length>0 && two.value.length>0)
{
sub.style="background-color:green;color:white";
sub.disabled = false;
}
else 
{
sub.style="background-color:rgba(61,61,61,.4);color:rgba(128,128,128,.3);";
sub.disabled = true;
}
	}
  
    // make loader appear
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
setTimeout(loader, 10000);
  }

function showpass(z, e)
  {
  pas=
  document.getElementById('password');
   eye=
  document.getElementById(e);
  
  
if ( pas.type==='password')
  {
  pas.type='text'; 
  eye.style.display='block';
  z.style.display='none';
  }
  else
  {
   pas.type='password';  
   eye.style.display='block';
  z.style.display='none';
  }
   
  }
  

  
  
  </script>
  
  
  </body> 
  </html>
