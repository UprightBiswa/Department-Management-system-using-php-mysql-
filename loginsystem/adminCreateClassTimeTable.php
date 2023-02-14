

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Admin Create Class Time Table</title>
    <link rel="stylesheet" href="css/style1.css" />
    <link rel="stylesheet" href="css/style1.css" />

    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <style>
        /*  import google fonts */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

        /* Main Section */

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
            align-items: right;
            justify-content: right;
            padding: 100px;

        }

        .users .card {
            width: 100%;
            height: 100%;
            margin: 10px;
            background: rgb(255, 255, 255);
            text-align: left;
            padding: 30px;
            box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
        }

        .users .card h4 {
            font-size: 17px;
            padding-left: 0%;
        }

        .users .card p {
            font-size: 14px;
            padding-left: 0%;
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
        }

    </style>
</head>



<body style="background:radial-gradient(circle, rgb(135, 209, 255) 0%, rgb(255, 255, 255) 100%); ">
    <div class="container">

    <!-- left nav -->
    <?php
        include_once("adminNav.php");
        ?>

        <section class="main">
            <div class="main-top">
                <h1>Create Class Time Table</h1>

                <!-- notification  -->
                <button1 style="position: absolute; right:0.5%; top: 5%; color:transparent;" class="btn"
                    onclick="window.location.href='studentMessage.php';"><i class="fa fa-bell"></i></button1>
            </div>

            <div class="users">
                <div class="card">

                    <h4 style="padding-top: 2%; color: rgb(0, 0, 0);"><b style="color: red;">Class Time Table</b>
                       
                <br><br><br>

                    </h4>

                    <!-- <p <spam><b>Department: &emsp;</b>
                        <select style="width: 600px;height:28px; background: #e7e7e7; border-radius: 5px;" name="filterCourse" id="filterCourse" class="form-control" ></select></p> -->

                    <br><br>
                    <form class ="" action ="adminCreateClassTimeTable.php" method="post" enctype="multipart/form-data">
                    <label for="">Choose your pdf file</label><br>
                    <input id="pdf" type="file" name ="pdf" value ="required"><br><br>
                    <input type="submit"name="submit" value="Upload" ></button>
                    
                    
                    <!-- <p><b>Upload New Class Time Table  :</b></p>
                    <div style="padding-bottom: 0%;">
                        <center><input id="pdf" type="file" name ="pdf" value ="required" style="font-size: 16px;"></center>
                    </div>

                    <br>

                  
                    <center><button type="submit"
                    name="submit" value="Upload"
                        style="color:rgb(255, 255, 255); background-color: #34AF6D ; cursor: pointer; font-size: 15px;  width: 600px;"
                        class="btn" onclick="window.location.href='';"><i
                            class="fa fa-upload">&emsp;Upload Class Time Table</i>
                    </button><center> --> 
                    <?php   
                    include 'dbconnect.php';

                    if(isset($_POST['submit'])){

                        $pdf=$_FILES['pdf']['name'];
                        $pdf_type=$_FILES['pdf']['type'];
                        $pdf_size=$_FILES['pdf']['size'];
                        $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
                        $pdf_store="pdf/".$pdf;
                    move_uploaded_file($pdf_tem_loc,$pdf_store);


                        $sql = "INSERT INTO `timetable` (`pdf`) VALUES ('$pdf');";
                        
                        $fq = mysqli_query($conn,$sql);


                    //     if($fq){

                    //       echo("<script>alert('ADDED SUCCESSFULLY')</script>");
                    //     }
                    //     else{
                    //       echo("<script>alert('FAILED!')</script>");
                    //     }
                    }

                    ?>
                    </form>
                </div>
            </div>
        </section>
    </div>

</body>

</html>