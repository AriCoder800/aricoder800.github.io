<?php session_start();ob_start();
// initializing variables
 $username = ""; 
 $email = ""; 
 $errors = array();
   
	   
  // connect to the database 
include('db_connect.php'); 
  // REGISTER USER
   
 date_default_timezone_set('America/New_York');







   
   if (isset($_POST['reg_user'])) { 
   // receive all input values from the form
    
        echo'<br/>great';
        
        
    $username = mysqli_real_escape_string($db,$_POST['username']); 
    $username = preg_replace('/\s+/', '_', $username);
    
    echo'<br/>$username';
    
    echo $username ;
    
    $email = mysqli_real_escape_string($db, $_POST['email']); 
    
    echo'<br/>$email';
    
    echo $email;
    
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']); 
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']); 
    
    echo '<br/> password:';
echo $password_1 ;

$startdate = date('d•m•Y h:i:s a');
 
 echo $startdate;
 
    $level = 0;
    
    echo $level;
 
    // by adding (array_push()) corresponding error unto $errors array
  
    
    /* first check the database to make sure 
     a user does not already exist with the same username and/or email */
 
$user_check_query = "SELECT username, email FROM Admins WHERE username='$username' OR email='$email' LIMIT 1"; 
$result = mysqli_query($db,$user_check_query);
if ($result) {
	echo'<br/>one';
	
	
$user = mysqli_fetch_assoc($result);     
}

if ($user) { 
// if user exists
 echo'<br/>less';


if ($user['username'] == $username) { array_push($errors, "Username - $username - already exists"); 

 echo'<br/>already exists';


} 


 if ($user['email'] == $email) { array_push($errors, "email - $email - already exists");
 
  echo'<br/>more emails';
 
  } 
  
  
  
    
 
 }



 
 
 
  /* Finally, register user if there are no errors in the form */  
   if (count($errors) == 0) 
   { 
   
    echo'<br/>no errors';
   
   
   	$password = md5($password_1);  
   //encrypt the password before saving in the database 	
   
   echo'<br/>$password:';
   
   echo $password;
  $to = "$email";
$subject = "Welcome to Change Florida Admin Team";

$message = "
<html>
<head>
<title>Let's Start Making Florida Better</title>




</head>
<body >
<p style='font-size:24;margin:auto;'>Welcome to the Changing Florida Today Admin Team</p>
<table   style='width:100%;height:500px;'>
<tr >
<td colspan='2' style='background:black;color:white;text-align:center;height:50px;'>$username</td></tr>
<tr>
  <td style='text-align:center;width:45%;padding:10px;'>
 <a href='https://changefloridatoday.com'><img src='https://changefloridatoday.com/coverNew.jpg' width='100%'></a>
 </td>
<td  style='text-align:center;width:45%;padding:10px;' >Lets dedicate our efforts to improving Florida, please log in to verify your account</td>
</tr>
<tr>
<td colspan='2' style='background:black;height:50px;width:100%'></td>

</tr>




</table>


</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: aricoder@inf.fxx.mybluehost.me' . "\r\n";


mail($to,$subject,$message,$headers);


//update database
  
  $query = "INSERT INTO Admins (Username, Email, Password, Startdate, Level) 			 VALUES('$username','$email', '$password', NOW(), $level)"; 	  
if( mysqli_query($db, $query) )  
 {
 
 	
echo'<br/>database updated';

 }
 
$sql = " SELECT id, level, access FROM Admins WHERE email = '$email'";
if ($queri = mysqli_query($db,$sql))
{
$getid = mysqli_fetch_assoc($queri);
}
$id2 = $getid['id'];

$access =  $getid['access'];
} 
 
 
 $query4= "SELECT entry FROM Access"; /* this is to get a matching code for higher clearance */
  $results4 = mysqli_query($db, $query4);
if($accez = mysqli_fetch_assoc($results4))
{
$accessCode = $accez['entry'];
}

  

 
 
 
$_SESSION['username'] = $username; 
   $_SESSION['id'] = $id2; 	
   $_SESSION['level'] = $level; /* to provide access to certain admin functions */
$_SESSION['pass'] = $accessCode;
$_SESSION['access'] = $access;
header('location:admins.php');
} 












// LOGIN USER

 if (isset($_POST['login_user']))
  { 
  $username = mysqli_real_escape_string($db, $_POST['username']); 
  $username = preg_replace('/\s+/', '_', $username);
  $email = mysqli_real_escape_string($db, $_POST['username']); 
  $password = mysqli_real_escape_string($db, $_POST['password']); 

 
  
  if (empty($username)) { 	array_push($errors, "Username is required");
   } 
  
  if (empty($password)) 
  { 	
  array_push($errors, "Password is required"); 
  } 
  
  if (count($errors) == 0) { 	
  $password = md5($password);
 	$query2 = "SELECT * FROM Admins WHERE email='$email' AND 
 password='$password'	 ";
 $query= "SELECT * FROM Admins WHERE  username='$username' AND 
 password='$password'	";


 	$results = mysqli_query($db, $query); 
 $results2 = mysqli_query($db, $query2); 
 
  $query3= "SELECT id, username, level, access FROM Admins WHERE  email ='$email' OR username = '$username'";
 $results3 = mysqli_query($db, $query3); 
 
 
 $query4= "SELECT entry FROM Access"; /* this is to get a matching code for higher clearance */
  $results4 = mysqli_query($db, $query4);
if($accez = mysqli_fetch_assoc($results4))
{
$accessCode = $accez['entry'];
}

  

  
 
 if ($userz = mysqli_fetch_assoc($results3))
 	{
 	$user2 = $userz['username'];
 	$id2 = $userz['id'];
 	$level = $userz['level'];
 	$access = $userz['access'];
 	}
 		if (mysqli_num_rows($results) == 1) 
 		{	echo"</br> Only one ";
$_SESSION['user'] = mysqli_fetch_assoc($results);
$_SESSION['username'] = $username; 	
$_SESSION['id'] = $id2;
$_SESSION['level'] = $level;
$_SESSION['access'] = $access;
$_SESSION['pass'] = $accessCode;
$_SESSION['success'] = "You are now logged in";
header('location: admins.php'); 	
  }
  else if
(mysqli_num_rows($results2) == 1) 
 		{	echo"</br> Maybe one ";	$_SESSION['user'] = mysqli_fetch_assoc($results);	
$_SESSION['username'] = $user2;
$_SESSION['id'] = $id2;
$_SESSION['level'] = $level;
$_SESSION['pass'] = $accessCode;
$_SESSION['access'] = $access;
$_SESSION['success'] = "You are now logged in";
header('location: admins.php'); 	
  }
  else
  { 		
  array_push($errors, "Wrong username/password combination"); 	
  } 
  } 
  } 
  ?>
