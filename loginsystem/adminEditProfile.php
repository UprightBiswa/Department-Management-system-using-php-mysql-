<?php  
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    include_once 'dbconnect.php';
  
  
  $sql = "SELECT * FROM admin WHERE username='" . $_SESSION['username'] . "'";
  $result = mysqli_query($conn, $sql);
  
  
  }
  $user = mysqli_fetch_assoc($result);
//   $admin_id = $user['id'];
  
//
 if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $id=$_POST['id'];
    $dept = $_POST['department'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pnum = $_POST['pnumber'];
     $dob = $_POST['fdob'];
   // $dte = date('Y-m-d',strtotime($dob));
    $gender = $_POST['Gender'];
   // $father = $_POST['sfname'];
   // $mother = $_POST['smname'];
    $addr = $_POST['address'];
   // $state = $_POST['sstate'];
   // $dis = $_POST['sdistrict'];
   // $pin = $_POST['fpin'];



    //   $sq = "SELECT * from admin where id='$aid'";
    //   $mys = mysqli_query($conn,$sq);

    //   $c = mysqli_num_rows($mys);

    //   if($c>0){


    $qu = "SELECT id,username,password,department,email,contact,gender,address,from admin where id='$id' and username='$name'";
    $ex = mysqli_query($conn,$qu);

     if($ex){
      
         $update = "UPDATE admin set id='$id',username='$name',password='$pass',department='$dept',email='$email',contact='$pnum',gender='$gender',address='$addr'";


            $exc = mysqli_query($conn,$update);
         if($exc){
            echo ("<script>alert('updated successfully')</script>");
            header('location:adminProfile.php');
            
         }
         else{
            echo "failed";
         }

     }
   
 }
// }



?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Edit admin Profile</title>
    <link rel="stylesheet" href="css/style1.css" />

    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />



    <style>
        /*  import google fonts */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

        /* MAin Section */
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

        .main-top img {

            width: 60px;
            height: 60px;
            border-radius: 20%;
            position: absolute;
            right: 4%;
        }

        .container button {
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
        <!-- nav here  -->
        <!-- include here  -->
        <?php  
    include_once("adminNav.php");
    ?>



        <section class="main">
            <div class="main-top">
                <h1>Edit <?php echo $_SESSION['username']  ; ?> Profile</h1>

                <!-- notification make it button -->
                <!-- <i class="fas fa-bell" style="color: rgb(100, 98, 99);"></i> -->

                <img src="photo/logo1.jpg">
                <!-- <button1 style="position: absolute; right:0.5%;top: 5%; color:transparent;" class="btn"><i
                        class="fa fa-edit"></i></button1> -->


                <input type="file" style="position: absolute; right:0%; top: 6%; " name="file" />

            </div>
            <div>
                <!-- <form method="post"> //update admin details -->
                <form action="" method="post" >
                    <div class="form-group">
                        <br><br>
                        <label><b>Name</label></b><label style="color: red;">*</label>&emsp;&emsp;&emsp;&ensp;
                        <input type="text" class="form-control" style="height: 400%; width:33%; padding:1%"
                            placeholder="<?php echo $_SESSION['username']  ; ?>" name="name" autocomplete="off" required>

                        &emsp;&emsp;&emsp;&emsp;

                        <label><b>ID </b></label><label style="color: red;">*</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                        <input type="text" class="form-control" style="height: 400%; width:37%; padding:1%"
                            placeholder="<?php echo  $user['id']  ;?>" name="id" autocomplete="off"required>

                    </div>
                    <div class="form-group">

                        <label><b>Department</b></label><label style="color: red;">*</label>&ensp;
                        <input type="text" class="form-control" style="height: 400%; width:33%; padding:1%"
                            placeholder="<?php echo  $user['department']  ;?>" name="department" autocomplete="off" required>

                        &emsp;&emsp;&emsp;&emsp;

                        <label><b>Email ID</b></label><label style="color: red;">*</label>&emsp;&emsp;
                        <input type="email" class="form-control" style="height: 400%; width:37%; padding:1%"
                            placeholder="<?php echo  $user['email']  ;?>" name="email" autocomplete="off" required>

                    </div>

            </div>
            <div class="form-group">
                <label><b>Password</b></label><label style="color: red;">*</label>&emsp;&ensp;
                <input type="text" class="form-control" style="height: 400%; width:22%; padding:1%"
                    placeholder="<?php echo  $user['password']  ;?>" name="password" autocomplete="off" required>

                &emsp;&ensp;

                <label><b>Contact</b></label>&emsp;
                <input type="number" class="form-control" style="height: 400%; width:20.6%; padding:1%"
                    placeholder="<?php echo  $user['contact']  ;?>" name="pnumber" autocomplete="off">

                &emsp;&ensp;

            </div>
            <br>

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


            <br><br>


            

            <div class="form-group">
                <label><b>Address </b></label>
                <input type="text" class="form-control" placeholder="<?php echo  $user['address']  ;?>" name="address"
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