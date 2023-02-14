<?php   
session_start();


if($_SESSION['loggedin']==false){
  
  header("location:loginstudent.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Student Dashboard</title>
  <link rel="stylesheet" href="css/style1.css" />
  <link rel="stylesheet" href="css/profile.css" />

  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>


  <style>
  /*  import google fonts */
 @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

/* MAin Section */

/* .container {
 display: flex;
}

.main {
 position: relative;
 padding: 20px;
 width: 100%;
}

.main-top {
 display: flex;
 width: 100%;
}

.main-top i {
 position: absolute;
 right: 0;
 margin: 10px 30px;
 color: rgb(110, 109, 109);
 cursor: pointer;
}

.main .users {
 display: flex;
 width: 100%;
 align-items: center;
 justify-content: center;
 padding: 100px;

}

.users .card {
 width: 100%;
 margin: 10px;
 background: rgb(255, 255, 255);
 text-align: left;
 border-radius: 10px;
 padding: 30px;
 box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}

.users .card img {
 width: 200px;
 height: 200px;
 border-radius: 30%;
 float: left;
 margin-left: 4%;
 margin-top: 6%;
 padding: 5px;
}

.users .card h4 {
 text-transform: uppercase;
 font-size: 25px;
 padding-left: 40%;
}

.users .card p {
 font-size: 18px;
 padding-left: 40%; 
}


.users .card button {
 width: 100%;
 margin-top: 8px;
 padding: 7px;
 cursor: pointer;
 border-radius: 10px;
 background: transparent;
 border: transparent;
}

.users .card button:hover {
 background: #0b81ff;
 color: #fff;
 transition: 0.5s;
} */

  </style>

 
</head>



<body style="background:radial-gradient(circle, rgb(135, 209, 255) 0%, rgb(255, 255, 255) 100%); ">
  <div class="container">

   <!-- left nav -->
   <?php
    include_once("studentNav.php");
    ?>


    <section class="main">
      <div class="main-top">
        <h1><?php  echo "Welcome"." " .  $_SESSION['username'];  ?></h1>
        
<!-- notification make it button -->
<button1 style="position: absolute; right:0.5%;top: 5%; color:transparent;" class="btn"
          onclick="window.location.href='studentMessage.html';"><i class="fa fa-bell"></i></button1>
      </div>

      <div class="users">
        <div class="card">
          <img src="photo/profile.jpg">
          <h4 style="padding-top: 3%; color: red;"><b>Name : </b><label> Student name </label></h4>
          <p style="padding-top: 3%;">Enrollment Number : <label>csm21000</label></p>
          <p>Department : <label>Computer Science And Engineering</label></p>
          <p>Course : <label>Master In Computer Application</label></p>
          <p>Semester : <label>1st Semester</label></p>
          <p>Email : <label> emailid123@gmail.com</label></p>
          <p>Contact Number : <label> 9435312345</label></p>
          <p>Gender : <label>Male</label></p>
          <p>Date Of Birth : <label> 23/12/2000</label></p>
          <br>

          <!-- set default -->
          <button style="color:black ;" onclick="window.location.href='studentEditProfile.php';"><i class="fa fa-edit">&emsp; Edit Profile</i></button>
        </div>
      </div>
    </section>
    </div>
  </body>

</html>