<?php   
session_start();
 include 'dbconnect.php';

  if(isset($_POST['submit'])){
  
     $sub_code=$_POST['code'];
     
    $subject=$_POST['subject'];


    $sql = "INSERT INTO `subject` (`subject_code`, `subject_name`) VALUES ('$sub_code', '$subject')";
     
   $fq = mysqli_query($conn,$sql);


    if($fq){
    $_SESSION['code']=$sub_code;
      echo("<script>alert('ADDED SUCCESSFULLY')</script>");
    }
    else{
      echo("<script>alert('FAILED!')</script>");
    }
  }

  


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/style1.css" />
    <link rel="stylesheet" href="css/profile.css" />
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


        .users .card button {
            width: 100%;
            margin-top: 8px;
            padding: 7px;
            cursor: pointer;
            border-radius: 10px;
            background: rgb(0, 195, 255);
            color: black;
            border: transparent;
        }

        .users .card button:hover {
            background: red;
            style=color: white;
            transition: 0.3s;
        }
    </style>


</head>



<body style="background:radial-gradient(circle, rgb(135, 209, 255) 0%, rgb(255, 255, 255) 100%); ">
    <div class="container">


        <?php  
    include_once("adminNav.php");
    ?>


        <section class="main">
            <div class="main-top">
                <h1>Add Course</h1>

                <!-- notification bell -->
                <button1 style="position: absolute; right:0.5%;top: 5%; color:transparent;" class="btn"
                    onclick="window.location.href='facultyMessage.html';"><i class="fa fa-bell"></i></button1>


            </div>


            <form method="post">
                <div class="users">
                    <div class="card">

                        <div class="form-group">
                            <label><b>Subject Title </b></label><label style="color: red;">*</label> &emsp;
                            <input type="text" class="form-control"
                                style="height: 500%; width:100%; padding:1%; background:#e7e7e7;"
                                placeholder="Enter Course Title" name="subject" autocomplete="off" required>
                        </div>

                        <br>

                        <div class="form-group">
                            <label><b>Subject Code </b></label><label style="color: red;">*</label>&emsp;
                            <input type="text" class="form-control"
                                style="height: 500%; width:100%; padding:1%; background:#e7e7e7;"
                                placeholder="Enter Course Code" name="code" autocomplete="off" required>
                        </div>

                        <br>

                        <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-save">&emsp;Add
                                Course</i></button>
                    </div>
                </div>
            </form>
        </section>
    </div>

  </body>

</html>