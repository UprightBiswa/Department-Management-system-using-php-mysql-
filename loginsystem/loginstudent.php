<?php
session_start();
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once("dbconnect.php");
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from student where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num > 0){
        $login = true;
       
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['roll'] = $_SESSION['rollno'];
        header("location: studentDashboard.php");

    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>




<!DOCTYPE html>

<html lang="en">
<head>

<title>StudentLogin</title>
	
	<meta charset="UTF-8">
	<title>Transparent Login Form HTML CSS</title>
	<link href="css/style.css" rel="stylesheet">
	</style>
 
</head>


<body>


	<div class="form-box">
		<div class="header-text">Student Login Form</div>
		<form action="loginstudent.php" method="post">

		<input placeholder="Your Email Address" type="text"   class="form-control" id="username" name="username" aria-describedby="emailHelp">
		<input placeholder="Your Password" type="password" class="form-control" id="password" name="password">
		
		<input id="terms" type="checkbox">
		<label for="terms"></label>

		 <span>Agree with <a href="">Terms & Conditions</a>
		 </span> <button>login</button>
	</div>

	
	
</body>
</html>

