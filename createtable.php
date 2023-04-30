<?php
$message = 'lets begin test';
$message0 = 'waiting to connect';   
if (isset($_POST['mysubmit']))
{
// Create connection
$db = mysqli_connect('localhost', 'id7246178_aries', 'firefly', 'id7246178_artistsi');
$newtab = mysqli_real_escape_string($db,$_POST['nametable']); 
$newid = '10';
if($db){
$message0 = 'connected';   
 }  
if(!$db){
$message = 'no go';
}
$sql1="CREATE TABLE one(
Id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Message VARCHAR(200), Datestamp VARCHAR(100), Timestamp VARCHAR(100), Sender VARCHAR(100), Avatar VARCHAR(100), Avatar2 VARCHAR(100), Feel VARCHAR(50))";

$sql2="CREATE TABLE two(
Id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Message VARCHAR(200), Datestamp VARCHAR(100), Timestamp VARCHAR(100), Sender VARCHAR(100), Avatar VARCHAR(100), Avatar2 VARCHAR(100), Feel VARCHAR(50))";

$sql3="CREATE TABLE three(
Id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Message VARCHAR(200), Datestamp VARCHAR(100), Timestamp VARCHAR(100), Sender VARCHAR(100), Avatar VARCHAR(100), Avatar2 VARCHAR(100), Feel VARCHAR(50))";

$tables = [$sql1, $sql2, $sql3];

if(mysqli_multi_query($db, $sql1)) 
{
$message = "Tables created successfully";
}
else
{
$message = 'Error creating table: ';
}

if(mysqli_multi_query($db, $sql2)) 
{
$message1 = "Tables created successfully";
}
else
{
$message2 = 'Error creating table: ';
}
if(mysqli_multi_query($db, $sql3)) 
{
$message = "Tables created successfully";
}
else
{
$message = 'Error creating table: ';
}





mysqli_close($db);
}
?>

<!DOCTYPE html> 
  
  <html> 
  <head> 	
  <title>Home</title> 
  
 <meta charset="UTF-8"/>
  
  	<link rel="stylesheet" type="text/css" href="style.css"> 
  	
  	<link rel="stylesheet" type="text/css" href="0acubefull.css"> 
  	  	<link rel="stylesheet" type="text/css" href="0cubes.css"> 
  	
  	 	<link rel="stylesheet" type="text/css" href="0acubesmall.css"> 
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	
 <link href="https://fonts.googleapis.com/css?family=Audiowide|Gaegu|Montserrat|Permanent+Marker" rel="stylesheet">
  	
  	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300" rel="stylesheet">  	
  	
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">  	
  	
  <style>
  	<?php
  	 	include('menubars.php');
  	 	?>
  	
  	</style>
  	
  	
  	</head> 
  	
  	<body>
  	
  	<div id="mzflashone" class="mzflashall">
	<form  class="mzflashform"  action="createtable.php" method="post" name"comments">
	
	
	 <br />
	 <?php echo "$message0";?>
	 <br />
	 <br />
	 <?php echo "$message";?>
	 <br />
	 <br />
	 <?php echo "$message1";?>
	 <br />
	 <br />
	 <?php echo "$messag2";?>
	 <br />
	  <br />
	 <?php echo "$messag3";?>
	 <br />
	 
		
		<div class="mzflashsubmit">
		<button id="submit" type="submit" class="mzflashbtn " name="mysubmit" onclick="loader(this)">Post</button> 	
	</div>
	<div class="mzflashinput"> 		
	<input type="text" name="nametable">
</div>
	</form>
	</div>
	</body>
	</html>