<?php   
session_start();


if($_SESSION['loggedin']==false){
  
  header("location:loginfaculty.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Faculty Dashboard</title>
  <link rel="stylesheet" href="css/style1.css" />

  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />



  <style>
    /*  import google fonts */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

     /* MAin Section */   
    .container {
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
    }

    .users .card {
      width: 25%;
      margin: 10px;
      background: #fff;
      text-align: center;
      border-radius: 10px;
      padding: 10px;
      box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
    }

    .users .card img {
      width: 70px;
      height: 70px;
      border-radius: 50%;
    }

    .users .card h4 {
      text-transform: uppercase;
    }

    .users .card button {
      width: 100%;
      margin-top: 8px;
      padding: 7px;
      cursor: pointer;
      border-radius: 10px;
      background: transparent;
      border: 1px solid #4AD489;
    }

    .users .card button:hover {
      background: #4AD489;
      color: #fff;
      transition: 0.5s;
    }

  </style>
</head>



<body style="background:radial-gradient(circle, rgb(135, 209, 255) 0%, rgb(255, 255, 255) 100%); ">
  <div class="container">

    <!-- left bar -->
    <?php
    include_once("facultyNav.php");
    ?>


    <section class="main">
      <div class="main-top">
        <h1><?php  echo "Welcome"." " .  $_SESSION['username'];  ?></h1>

        <!-- notification bell -->
        <button1 style="position: absolute; right:0.5%;top: 5%; color:transparent;" class="btn"
          onclick="window.location.href='facultyMessage.php';"><i class="fa fa-bell"></i></button1>


      </div>
      <div class="users">
            
                            <div class="card">
                                <img src="photo/logo4.jpg"><br><br>
                                <h4>Total Admin </h4><br>
                                <label>
                                    <?php
                        require 'dbconnect.php';
                        $querry="SELECT id FROM admin ORDER BY id ";
                        $querry_run = mysqli_query($conn,$querry);
            
                        $row = mysqli_num_rows($querry_run);
            
                        echo'<h1>'.$row.'</h1>'
            
                        ?>
            
                                </label>
                            </div>
            
                            <div class="card">
                                <img src="photo/logo6.jpg"><br><br>
                                <h4>Total Faculty</h4><br>
                                <label>
                                    <?php
                        require 'dbconnect.php';
                        $querry="SELECT id FROM faculty ORDER BY id ";
                        $querry_run = mysqli_query($conn,$querry);
            
                        $row = mysqli_num_rows($querry_run);
            
                        echo'<h1>'.$row.'</h1>'
            
                        ?>
            
                                </label>
                                <div class="per">
            
                                </div>
                            </div>
            
                            <div class="card">
                                <img src="photo/logo6.jpg"><br><br>
                                <h4>Total Student</h4><br>
                                <label>
                                    <?php
                        require 'dbconnect.php';
                        $querry="SELECT rollno FROM student ORDER BY rollno ";
                        $querry_run = mysqli_query($conn,$querry);
            
                        $row = mysqli_num_rows($querry_run);
            
                        echo'<h1>'.$row.'</h1>'
            
                        ?>
            
                                </label>
                                <div class="per">
            
                                </div>
                            </div>
            
            
            
                            <div class="card">
                                <img src="photo/logo3.jpg"><br><br>
                                <h4>Total Task </h4><br>
                                <label>
                                    <?php
                        require 'dbconnect.php';
                        $querry="SELECT id FROM assignment ORDER BY id ";
                        $querry_run = mysqli_query($conn,$querry);
            
                        $row = mysqli_num_rows($querry_run);
            
                        echo'<h1>'.$row.'</h1>'
            
                        ?>
            
                                </label>
                            </div>
            
                            <div class="card">
                                <img src="photo/logo6.jpg"><br><br>
                                <h4>Total Course</h4><br>
                                <label>
                                    <?php
                        require 'dbconnect.php';
                        $querry="SELECT subject_code FROM subject ORDER BY subject_code ";
                        $querry_run = mysqli_query($conn,$querry);
            
                        $row = mysqli_num_rows($querry_run);
            
                        echo'<h1>'.$row.'</h1>'
            
                        ?>
            
                                </label>
        </div>
      </div>

    </section>

  </div>

</body>

</html>