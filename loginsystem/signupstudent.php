<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
		  $sql = " INSERT INTO `student` (`username`, `password`) VALUES ('$username', '$password')";
    //    $sql2=" INSERT INTO `student`(`username`, `password`, `dt`) VALUES ('$username','$password',current_timestamp())";
        
        $result = mysqli_query($conn, $sql);
         header("location: index.php");
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
    
?>


<!DOCTYPE html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SignUp</title>




					




	<meta charset="UTF-8">
	<title>signup</title>
	<link href="css/style.css" rel="stylesheet">
</head>
			<body>
			
				

				<div class="form-box">
					<div class="header-text">Student Signup Form</div>
					<form action="signupstudent.php" method="post">
				
						<input placeholder="Your Email Address" type="text"   class="form-control" id="username" name="username" aria-describedby="emailHelp">
						<input placeholder="Your Password" type="password" class="form-control" id="password" name="password">
						<input placeholder="confirm password"type="password" class="form-control" id="cpassword" name="cpassword">
						
                 <button>signup</button>
						
				</div>
			</body>
</html>


