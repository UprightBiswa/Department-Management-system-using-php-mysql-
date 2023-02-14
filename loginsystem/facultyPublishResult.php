<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Faculty Publish Grade</title>
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
            padding: 15px 35px;
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
                <h1>Grade</h1>

                <!-- notification make it button -->
                <button1 style="position: absolute; right:0.5%; top: 3%; color:transparent;" class="btn"
                    onclick="window.location.href='studentMessage.html';"><i class="fa fa-bell"></i></button1>

                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

                <div style="position: absolute; right:48%; top: 3%;">
                    <spam><b>Filter By Courses &emsp;</b></spam>
                    <select name="filterCourse" id="filterCourse" class="form-control" style="width: 200px; "></select>
                </div>

                <div style="position: absolute; right:13%; top: 3%;">
                    <spam><b>Filter By Semester &emsp;</b></spam>
                    <select name="filterSemester" id="filterSemester" class="form-control"
                        style="width: 200px; "></select>
                </div>

            </div>




            <!-- start of table -->
            <div class="container1">
                <section1 class="table">
                    <table class="table">
                        <thead
                            style="background:radial-gradient(circle, rgb(99, 180, 231) 0%, rgb(195, 149, 224)100%); ">
                            <th>Enrollment Number</th>
                            <th>Name</th>
                            <th>Semester</th>
                            <th>Course</th>
                            <th>Grade</th>
                        </thead>


                        <tbody id="all-tasks">
                            <tr>
                                <td><label>Enrollment Number</label></td>
                                <td><label>Name</label></td>
                                <td><label>Semester</label></td>
                                <td><label>Course</label></td>
                                <td><input type="text" style=" height: 27px; width: 104px; font-size: 15px; align-text: center;"placeholder="Grade"></td>
                            </tr>


                        </tbody>
                        
                    </table>
                </section1>
                
                <center><button
                        style="color:rgb(255, 255, 255); background-color: rgb(250, 6, 6) ;cursor: pointer; width: 180px; border-radius: 5px;"
                        class="btn" onclick="window.location.href='';"><i
                            class="fa fa-upload">&emsp;Upload Grade</i>
                    </button><center>

            </div>


        </section>
    </div>
</body>

</html>