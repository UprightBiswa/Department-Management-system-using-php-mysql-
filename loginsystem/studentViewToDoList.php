<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Student View To Do List</title>
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
            height: 100;
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
        #upld{
        border:2px solid black;
        }

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
                <h1>View To Do List</h1>

                <!-- notification  -->
                <button1 style="position: absolute; right:0.5%; top: 5%; color:transparent;" class="btn"
                    onclick="window.location.href='studentMessage.php';"><i class="fa fa-bell"></i></button1>
            </div>

            <div class="users">
                <div class="card">

                    <h4 style="padding-top: 4%; color: rgb(0, 0, 0);"><b>Assigned Date: </b><label>12/1/1222</label>
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <b>Points: </b><label>100</label>
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <b>Submission Date: </b><label>29/12/1223</label>
                    </h4>

                    <p style="padding-top: 3%; border-radius: 10px; padding-bottom: 4%;"><b>Task :</b><br><label>Given
                            Questions Will show here...</label></p>

                    <br>
                     
                    <form action="to_do_list.php" method="POST">
                    <p><b>Upload Your Answer :</b></p>
                    <div style="padding-bottom: 0%;">
                        <!-- <center><input type="file" style="font-size: 16px;"></center> -->
                        <textarea name="answer" id="upld" cols="40" rows="10" placeholder="upload your anser here"></textarea>
                    </div>

                    <br>

                    <!--submit -->
                    <button type="submit"
                        style="color:rgb(255, 255, 255); background-color:  #34AF6D ;cursor: pointer; font-size: 15px; float: left; width: 150px; margin-left: 250px; "
                        class="btn" onclick="window.location.href='studentToDoList.php';"><i
                            class="fa fa-upload">&emsp;Submit</i>
                    </button>
                    </form>
                    <!-- close -->
                    <button
                        style="color:rgb(255, 255, 255); background-color: rgb(250, 6, 6) ;cursor: pointer; font-size: 15px; float: right; width: 150px; margin-right: 250px;"
                        class="btn" onclick="window.location.href='studentToDoList.php';"><i
                            class="fa fa-close">&emsp;Close</i>
                    </button>

                </div>
            </div>
        </section>
    </div>

</body>

</html>