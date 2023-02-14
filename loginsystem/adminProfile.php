
<?php  
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  include_once 'dbconnect.php';


$sql = "SELECT * FROM admin WHERE username='" . $_SESSION['username'] . "'";
$result = mysqli_query($conn, $sql);


}
?>
<html>

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
  </style>

</head>



<body style="background:radial-gradient(circle, rgb(135, 209, 255) 0%, rgb(255, 255, 255) 100%); ">
  <div class="container">

  
  <?php  
    include_once("adminNav.php");
    ?>


    <section class="main">
      <div class="main-top">
        <h1><?php  echo $_SESSION['username'];  ?> Profile</h1>

        <!-- notification bell -->
        <button1 style="position: absolute; right:0.5%; top: 1%; color:transparent;" class="btn" onclick="window.location.href='facultyMessage.html';"><i class="fa fa-bell"></i></button1>
        

      </div>
        <!--start table -->


          <div class="users">
            <div class="card">
                <img src="photo/logo18.jpg">
              <?php
                $user = mysqli_fetch_assoc($result);
                ?>
                  <h4 style="padding-top: 3%; color: red;"><b>Name : </b><label> <?php echo  $user['username']  ;?> </label></h4>
                      
                <p style="padding-top: 3%;">ID : <label> <?php echo  $user['id']  ;?></label></p>
                <p>Department : <label><?php echo  $user['department']  ;?></label></p>
                <p>Email : <label><?php echo  $user['email'] ;?></label></p>
                <p>Contact Number : <label> <?php echo  $user['contact'] ;?></label></p>
                <p>Gender : <label> <?php echo  $user['gender']  ;?></label></p>
                <p>Address: <label><?php echo  $user['address']  ;?></label></p>
                <br>
                <!-- Edit Profile -->
                <button style="color:black ;" onclick="window.location.href='adminEditProfile.php';"><i class="fa fa-edit">&emsp; Edit Profile</i></button>
            </div>
          </div>
        <!-- End -->
    </section>
  </div>
</body>
</html>