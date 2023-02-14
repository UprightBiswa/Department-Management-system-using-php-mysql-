<?php   
session_start();
 include 'dbconnect.php';

  if(isset($_POST['submit'])){
    $roll=$_POST['rollnum'];
     $name=$_POST['username'];
     $email=$_POST['email'];
    $mob_no=$_POST['pnumber'];
    $pass=$_POST['password'];
    $address=$_POST['address'];
    $gender=$_POST['Gender'];
    $subject=$_POST['subject'];


    $sql = "INSERT into student(`rollno`,`username`,`email`,`mobile`,`password`,`address`,`gender`,`subject`)values('$roll','$name','$email','$mob_no','$pass','$address','$gender','$subject')";
     
   $fq = mysqli_query($conn,$sql);


    if($fq){
    $_SESSION['rollno']=$roll;
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
    <title>AddStudent</title>
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



        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;

        }

        .container {
            display: flex;
        }

        /* MAin Section */
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

        .main button {
            width: 100%;
            margin-top: 10px;
            padding: 7px;
            cursor: pointer;
            border-radius: 10px;
            background: rgb(0, 145, 255);
            color: black;
        }

        #submit_btn:hover {
            color: white;
            background-color: green;
            transition: all 0.3s ease;
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
                <h1>Add New Student</h1>

                <!-- notification make it button -->
                <i class="fas fa-bell" style="color: rgb(100, 98, 99);"></i>

            </div>
            <div>
                <form method="post">
                    <div class="form-group">
                        <label><b>Name</label></b><label style="color: red;">*</label>
                        <input type="text" class="form-control" placeholder="Enter your Name" name="username"
                            autocomplete="off" required>
                    </div>


                    <div class="form-group">
                        <label><b>Rollno</label></b><label style="color: red;">*</label>
                        <input type="text" class="form-control" placeholder="Enter your Rollnumber" name="rollnum"
                            autocomplete="off" required>
                    </div>





                    <div class="form-group">
                        <label><b>Email</b></label><label style="color: red;">*</label>
                        <input type="email" class="form-control" style="height: 40px; width:100%; padding:1%"
                            placeholder="Enter your Email" name="email" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label><b>Mobile Number</b></label>
                        <input type="text" class="form-control" placeholder="Enter your Mobile Number" name="pnumber"
                            autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label><b>Password</b></label><label style="color: red;">*</label>
                        <input type="text" class="form-control" placeholder="Enter your Password" name="password"
                            autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label><b>Address</b></label>
                        <input type="text" class="form-control" placeholder="Enter your Address" name="address"
                            autocomplete="off">
                    </div>

                    <p>
                    <div class="form-group">
                        <p><b>Gender : </b>&nbsp;&nbsp;</p>
                        <p><input type="radio" name="Gender" value="male">Male
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="Gender" value="female">Female
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="Gender" value="other">Other
                        </p>
                    </div>
                    </p>
                    <div class="form-group">
                        <label><b>Subject</b></label>
                        <input type="text" class="form-control" placeholder="Enter subject nane" name="subject"
                            autocomplete="off">
                    </div>

                    <br>

                    <button type="submit" name="submit" class="btn btn-primary" id="submit_btn"><i
                            class="fa fa-save">&emsp;Submit</i></button>


                </form>
            </div>



        </section>
    </div>

</body>

</html>