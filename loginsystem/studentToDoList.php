<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="css/style1.css" />

    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />


    <style>
        /*  import google fonts */

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

        /* bell */
        .main-top i {
            position: absolute;
            right: 0;
            margin: 10px 30px;
            color: rgb(110, 109, 109);
            cursor: pointer;
            top: 0px;
        }

        .table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 15px;
            min-width: 100%;
            overflow: hidden;
            border-radius: 5px 5px 0 0;
        }

        table thead tr {
            color: rgb(0, 0, 0);
            background: transparent;
            text-align: left;
            font-weight: bold;
        }



        .table th,
        .table td {
            padding: 15px 40px;
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
                <h1>To Do List</h1>

                <!-- notification make it button -->
                <button1 style="position: absolute; right:0.5%;top: 5%; color:transparent;" class="btn"
                    onclick="window.location.href='studentMessage.php';"><i class="fa fa-bell"></i></button1>
            </div>




            <!-- start of table -->
            <div class="container1">
                <section1 class="table">
                    <table class="table">
                        <thead
                            style="background:radial-gradient(circle, rgb(99, 180, 231) 0%, rgb(195, 149, 224)100%); ">
                            <th>Task</th>
                            <th>Project</th>
                            
                            <th>Assigned Date</th>
                            <th>Submission Date</th>
                            <th>Action</th>
                        </thead>


                        <tbody id="all-tasks">


                            <tr>
                                <td><label>for loop using c++ </label></td>
                                <td><label>c++</label></td>
                               
                                <td><label>12/12/2022</label></td>
                                <td><label>20/12/2022</label></td>
                                <!-- <td><input type="file"></td> -->
                                <td><button class="btn" style=" background-color:rgb(7, 205, 255); color: rgb(0, 0, 0); height: 50px; width: 120px; font-size: 15px;
                                    cursor: pointer;" onclick="window.location.href='studentViewToDoList.php';"><i
                                            class="fa fa-eye">&emsp;View</i></button></td>
                            </tr>


                        </tbody>
                    </table>
                </section1>
            </div>
        </section>
    </div>
</body>

</html>