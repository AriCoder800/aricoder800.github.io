 <!DOCTYPE html>
 <html>

  <head> 
  
  <title>Pdf Test</title> 
  
  
 

<!-- theme color for browser address bar -->
  	<meta name="theme-color" content="#000000" />
<!-- Windows Phone --> 
<meta name="msapplication-navbutton-color" content="#000000"> 
<!-- iOS Safari --> 
<meta name="apple-mobile-web-app-capable" content="yes"> 
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  	




  
  <link rel="stylesheet" type="text/css" href="style.css"> 
  
  
  	  
  	 
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  	

  
  <style>
  
  


.uploadBtn {
height: 100px;
width: 300px;
padding:10px;
border:1px solid white;
background-color:rgba(120,220,20,.9);
border-radius:50px;
color: white;
display:flex;
justify-content:center;
align-items:center;
}

.downloadBtn {
height: 100px;
width: 300px;
padding:10px;
border:1px solid white;
background-color:rgba(220,220,20,.9);
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





input {
margin:auto;

}  


  </style>
  

  
  </head> 
  <body> 
  
  
  
<br />
  
  

 

   
  
  
  <form class="form"  method="post" action="addTest.php"   enctype="multipart/form-data" > 	
      
      
  
  <div class="uploadBtn marginC" onClick="myFile()"><div>Upload PDF</div></div>
  
  
  
  
  <br/>
<div class="marginC"> 
    
    
     <input class="fileName marginC" type="file" id="file" name="pdf_file" accept=".pdf">
  <br/><br/>
  
  
  
  <input class="subBtn marginC" type="submit" name="add_pdf"></div>
  
 
  </form>
 
 
 
 <?php
 include('db_connect.php');
 
 $sql = "SELECT title, filepdf FROM Petitions";
 if($queryp = mysqli_query($db,$sql))
 {
 
 while($rowp = mysqli_fetch_assoc($queryp))
 {
 
 $pfile = $rowp['filepdf'];
 $ttl = $rowp['title'];
 
 echo "
 
 <h2> $ttl </h2>
 
 <a href='$pfile' download>
 <div class='downloadBtn'>
    Download 
 </div>
 </a>
 
 ";
}
 
 }
 ?>
 

 

  
  <script>
  
  function myFile() 
  {
  document.getElementById('file').click();
  
  
  
  
  }
  </script>
  
  
  </body> 
  </html>
