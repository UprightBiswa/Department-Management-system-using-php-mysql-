<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Edit Student Profile</title>
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

        <!-- left nav -->
        <?php
    include_once("studentNav.php");
    ?>


        <section class="main">
            <div class="main-top">
                <h1>Edit Student Profile</h1>

                <!-- notification make it button -->
                <!-- <i class="fas fa-bell" style="color: rgb(100, 98, 99);"></i> -->

                <img style=" width: 60px; height: 60px; border-radius: 20%; position: absolute; right: 4%;"
                    src="photo/logo1.jpg">
                <!-- <button1 style="position: absolute; right:0.5%;top: 5%; color:transparent;" class="btn"><i
                        class="fa fa-edit"></i></button1> -->


                <input type="file" style="position: absolute; right:0%; top: 6%; " name="file" />


            </div>
            <div>
                <form method="post">
                    <div class="form-group">
                        <br><br>
                        <label><b>Name</label></b><label
                            style="color: red;">*</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
                        <input type="text" class="form-control" style="height: 400%; width:33%; padding:1%"
                            placeholder="Enter your Name" name="name" autocomplete="off" required>

                        &emsp;&emsp;&emsp;&emsp;&ensp;

                        <label><b>Email ID</b></label><label style="color: red;">*</label>&emsp;&emsp;&emsp;
                        <input type="email" class="form-control" style="height: 400%; width:30%; padding:1%"
                            placeholder="Enter your Email" name="email" autocomplete="off" required>



                    </div>
                    <div class="form-group">

                        <label><b>Department</b></label><label
                            style="color: red;">*</label>&emsp;&emsp;&emsp;&emsp;&ensp;
                        <input type="text" class="form-control" style="height: 400%; width:33%; padding:1%"
                            placeholder="Department" name="department" autocomplete="off" required>

                        &emsp;&emsp;&emsp;&emsp;&ensp;

                        <label><b>Course</b></label><label style="color: red;">*</label>&emsp;&emsp;&emsp;
                        <input type="text" class="form-control" style="height: 400%; width:30%; padding:1%"
                            placeholder="Course" name="course" autocomplete="off" required>


                    </div>
            </div>

            <div class="form-group">
                <label><b>Enrollment Number</b></label><label style="color: red;">*</label>&ensp;
                <input type="text" class="form-control" style="height: 400%; width:17.5%; padding:1%"
                    placeholder="Enter Enrollment Number" name="enumber" autocomplete="off" required>


                &emsp;&emsp;

                <b>Gender : </b>&nbsp;&nbsp;
                <input type="radio" name="Gender" value="male">Male
                &nbsp;&nbsp;&nbsp;
                <input type="radio" name="Gender" value="female">Female
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="Gender" value="other">Other

                &emsp;&emsp;

                <label><b>Semester</b></label><label style="color: red;">*</label>&emsp;&emsp;
                <input type="text" class="form-control" style="height: 400%; width:17%; padding:1%"
                    placeholder="Enter your Semester" name="enumber" autocomplete="off" required>
            </div>

            <div class="form-group">

                <label><b>Contact Number</b></label>&emsp;&emsp;&ensp;
                <input type="number" class="form-control" style="height: 400%; width:19%; padding:1%"
                    placeholder="Enter your Mobile Number" name="pnumber" autocomplete="off">

                &emsp;&emsp;

                <label><b>Password</b></label><label style="color: red;">*</label>&ensp;
                <input type="text" class="form-control" style="height: 400%; width:22%; padding:1%"
                    placeholder="Enter your Password" name="password" autocomplete="off" required>



                &emsp;&emsp;

                <label><b>Date Of Birth</b></label>&ensp;
                <input type="date" class="form-control" style="height: 500%; width: 14%; padding:1%;"
                    placeholder="Enter your DOB" name="fdob" autocomplete="off">
            </div>



            <br><br>

            <!-- Bio -->

            <div class="form-group">
                <br><br>
                <label><b>Father's Name</label></b><label style="color: red;">*</label>&emsp;
                <input type="text" class="form-control" style="height: 400%; width:33%; padding:1%"
                    placeholder="Enter your Father's Name" name="sfname" autocomplete="off" required>

                &emsp;&emsp;&emsp;&ensp;

                <label><b>Mother's Name</label></b><label style="color: red;">*</label>&emsp;
                <input type="text" class="form-control" style="height: 400%; width:33%; padding:1%"
                    placeholder="Enter your Mother's Name" name="smname" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label><b>Address </b></label>
                <input type="text" class="form-control" placeholder="Enter your Address" name="address"
                    autocomplete="off">
            </div>

            <div class="form-group">
                <label><b>State</b></label>&emsp;&emsp;&emsp;
                <input type="text" class="form-control" style="height: 400%; width:22%; padding:1%" placeholder="State"
                    name="sstate" autocomplete="off">

                &emsp;&emsp;&emsp;

                <label><b>District</b></label>&emsp;
                <input type="text" class="form-control" style="height: 400%; width:20.6%; padding:1%"
                    placeholder="District" name="sdistrict" autocomplete="off">

                &emsp;&emsp;&emsp;

                <label><b>Pin Code</b></label>&emsp;
                <input type="number" class="form-control" style="height: 500%; width:20.6%; padding:1%;"
                    placeholder="Enter Pin Code" name="fdob" autocomplete="off">
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