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
  <title>Faculty Dashboard</title>
  <link rel="stylesheet" href="css/style1.css" />
  <link rel="stylesheet" href="css/admindashboard.css" />
  
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

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
          onclick="window.location.href='studentMessage.php';"><i class="fa fa-bell"></i></button1>

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
                        $querry="SELECT subject_code FROM subject ORDER BY subject_code";
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