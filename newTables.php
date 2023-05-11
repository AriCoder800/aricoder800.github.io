<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#9400d3" />
<!-- Windows Phone --> 
<meta name="msapplication-navbutton-color" content="#9400d3"> 
<!-- iOS Safari --> 
<meta name="apple-mobile-web-app-capable" content="yes"> 
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

</head>
<body>
New Tables
<br />
<br />
<?php
 // connect to the database
 include_once('Db_conx.php');

if (mysqli_set_charset($db,"utf8mb4"))
{
echo "<br />DB Altered";
} else {
echo "<br />DB NOT Altered";
}

if(mysqli_query($db,"ALTER TABLE critique CONVERT TO CHARACTER SET utf8mb4"))
{
echo "<br />Table Altered";
} else {
echo "<br />Table NOT Altered";
}

 
 if(isset($_POST['this']))
 {
  echo "<br />
  <br />Congratulations<br />";
  




// Petitions table
$sql="CREATE TABLE IF NOT EXISTS Petitions(
Id INT(10) UNSIGNED AUTO_INCREMENT,
Title VARCHAR(100) NOT NULL,
Description VARCHAR(6000) NOT NULL,
Date DATETIME NOT NULL,
Totalneeded INT(16) NOT NULL,
Signatures INT(16) NOT NULL,
PRIMARY KEY(Id))";
if (mysqli_query($db, $sql))
{
echo "<br />Petitiona table created";
}



// Signatures table
$sql="CREATE TABLE IF NOT EXISTS Signatures(
Id INT(10) UNSIGNED AUTO_INCREMENT,
Signature VARCHAR(200) NOT NULL,
Petitionid INT(16) NOT NULL,
Datesigned DATETIME NOT NULL,
PRIMARY KEY(Id))";
if (mysqli_query($db, $sql))
{
echo "<br />Signatures table created";
}





// Users table
$sql="CREATE TABLE IF NOT EXISTS Users(
Id INT(10) UNSIGNED AUTO_INCREMENT,
Firstname VARCHAR(100) NOT NULL,
Lastname VARCHAR(100) NOT NULL,
Email VARCHAR(150) NOT NULL,
Password VARCHAR(150) NOT NULL,
Startdate DATETIME NOT NULL,
Age VARCHAR(5) NOT NULL,
City INT(25) NOT NULL,
State INT(25) NOT NULL,
Phone VARCHAR(25) NOT NULL,
PRIMARY KEY(Id))";
if (mysqli_query($db, $sql))
{
echo "<br />Users table created";
}



 
}
 ?>
 <form action="NewTables.php" method="POST">
 <button type="submit" name="this">press</button>
 </form>
 </body>
