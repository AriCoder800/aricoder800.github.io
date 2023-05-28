<html>
<head>

 <style type="text/css">

  


.newTablesButton {
height:100px;
width:50vw;
background-color:orchid;
margin: auto;
}

    </style>


</head>
<body>
New Tables
<br />
<br />
<?php
 // connect to the database
 include_once('db_connect.php');

if (mysqli_set_charset($db,"utf8mb4"))
{
echo "<br />DB Altered";
} else {
echo "<br />DB NOT Altered";
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
Filepdf VARCHAR(200) NOT NULL,
Totalneeded INT(16) NOT NULL,
Signatures INT(16) NOT NULL,
Covername VARCHAR(100) NOT NULL,
Covertype VARCHAR(100) NOT NULL,
Coversize VARCHAR(100) NOT NULL,
PRIMARY KEY(Id))";
if (mysqli_query($db, $sql))
{
echo "<br />Petitions table created";
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


// Pdf table

$sql="CREATE TABLE IF NOT EXISTS Pdf(
Id INT(10) UNSIGNED AUTO_INCREMENT,
Name VARCHAR(200) NOT NULL,
Petitionid INT(16) NOT NULL,
Datesigned DATETIME NOT NULL,
PRIMARY KEY(Id))";
if (mysqli_query($db, $sql))
{
echo "<br />Pdf table created";
}






// Access table - for purpose of high level access in admin section

$sql="CREATE TABLE IF NOT EXISTS Access(
Id INT(10) UNSIGNED AUTO_INCREMENT,
Entry VARCHAR(200) NOT NULL,
PRIMARY KEY(Id))";
if (mysqli_query($db, $sql))
{
echo "<br />Access table created";
}



// Cover table - to be able to edit the cover image

$sql="CREATE TABLE IF NOT EXISTS Cover(
Id INT(10) UNSIGNED AUTO_INCREMENT,
Cover VARCHAR(200) NOT NULL,
PRIMARY KEY(Id))";
if (mysqli_query($db, $sql))
{
echo "<br />Cover table created";
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
Signature VARCHAR(200) NOT NULL,
Phone VARCHAR(25) NOT NULL,
PRIMARY KEY(Id))";
if (mysqli_query($db, $sql))
{
echo "<br />Users table created";
}


// Admins table
$sql="CREATE TABLE IF NOT EXISTS Admins(
Id INT(10) UNSIGNED AUTO_INCREMENT,
Username VARCHAR(200) NOT NULL,
Email VARCHAR(150) NOT NULL,
Password VARCHAR(150) NOT NULL,
Startdate DATETIME NOT NULL,
Level INT(1) NOT NULL,
Access VARCHAR(100) NOT NULL,
PRIMARY KEY(Id))";
if (mysqli_query($db, $sql))
{
echo "<br /> Admins table created";
}
else
{ 
echo "<br/>no Admins";
}



// Links table
$sql="CREATE TABLE IF NOT EXISTS Links(
Id INT(10) UNSIGNED AUTO_INCREMENT,
Title VARCHAR(200) NOT NULL,
Link VARCHAR(300) NOT NULL,
Revised DATETIME NOT NULL,
PRIMARY KEY(Id))";
if (mysqli_query($db, $sql))
{
echo "<br />Links table created";
}
else
{ 
echo "<br/>no Links";
}

 
}
 ?>
 
 
 
 <form action="newTables.php" method="POST">
 <button class="newTablesButton" type="submit" name="this">Press</button>
 </form>
 </body>
 
 
