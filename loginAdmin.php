<!DOCTYPE html>
 <html>

  <head> 
  
  <title>Login</title> 
  
  
      <meta charset="utf-8"/>

    
    
    
  
 



  	

  
  <link rel="stylesheet" type="text/css" href="style.css"> 
  
 
  	 
  
 
  
  
	


  <style> 
    
   
  
    
   

    
   </style>
   
    </head> 
    
  <body> 
  
  
 
  <br/>
  

 <?php

echo 'hello';

?>
  
  
  
    <h2 class="logintitle">LOGIN PETITIONER</h2> 
   
  
  
  <form class="form"  method="post" action="login.html" > 	<?php include('errors.php'); ?> 	
  
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
 
 
 </form> 
  <div class="input-group"> 		



<a href="admin.html">
  <div  class="buttoncase">
  <button id="submit" class="btn"  onclick="loader(); loadertime()" >Login</button> 	
  </div>
  </a>  
  
  
   <div class="sendload" >
       
       
  <div class="loaderMain">
      
      </div>

 
  
 
  </div>
  </div> 	<!-- end input group -->
 
  

      
      
      
  </div>

  
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
   z= document.getElementsByClassName("btn")[0];
 
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
 
  
  

 
  
  
  
   
   
  
