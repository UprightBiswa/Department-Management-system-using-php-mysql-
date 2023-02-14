<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Admin View Class Time Table</title>
    <link rel="stylesheet" href="css/style1.css" />
    <link rel="stylesheet" href="css/pdfview.css" />

    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />


    <style>
        /*  import google fonts */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

        /* MAin Section */
        
        
    h1 {
    text-align: center;
    color: #333;
  }
  
  .pdf-viewer {
    margin: 0 auto;
    width: 970px;
    height: 900px;
    border: 1px solid #ccc;
    background-color: #fff;
    margin-top: 80px;
  }
  
  iframe {
    width: 100%;
    height: 100%;
    border: none;

  }


    </style>

</head>




<body style="background:radial-gradient(circle, rgb(135, 209, 255) 0%, rgb(255, 255, 255) 100%); ">
    <div class="container">

        <!-- left bar -->
    <?php
    include_once("adminNav.php");
    ?>


<section class="main">
            <div class="main-top">
                <h1>Class Time Table</h1>

                <!-- notification make it button -->
                <button1 style="position: absolute; right:0.5%; top: 3%; color:transparent;" class="btn"
                    onclick="window.location.href='';"><i class="fa fa-bell"></i></button1>

            </div>

        </section>
  
        <div class="user">
            <div class="pdf-viewer">
            <?php   
                    include 'dbconnect.php';
                    $sql="SELECT pdf FROM timetable";
                    $query=mysqli_query($conn,$sql);
                    while ($info=mysqli_fetch_array($query)){
                        ?>
                    <iframe src="pdf/<?php echo $info['pdf'];?>" type="application/pdf"></iframe>;
                        <?php
                    }
                // <iframe src="photo/FSP Chapter 4.4.pdf"></iframe>



                ?>
                </div>
        </div>

    </div>
</body>

</html>