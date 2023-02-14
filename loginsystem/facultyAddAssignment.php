
<?php   

include_once 'dbconnect.php';

if(isset($_POST['submit_btn'])){

  $points = $_POST['points'];

  $task = $_POST['task'];

  $dte = date('Y-m-d',strtotime($_POST['date']));


  $sql = "INSERT into assignment(`points`,`task`,`date`)values('$points','$task','$dte')";

  $q = mysqli_query($conn,$sql);

  if($q){
       
    echo("<script>alert('ADDED!')</script>");
    header("<script>window.location='facultyAddAssignment.php'</script>");

  }
  else{
    echo("<script>alert('FAILED!')</script>");
    header("<script>window.location='facultyAddAssignment.php'</script>");
  }


}


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <title>Faculty Dashboard</title>
  <link rel="stylesheet" href="style.css" />

  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

  <!-- to make responsive -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
<!-- include bootstrap css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" />
 
<!-- include jquery and bootstrap js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
 
<!-- include sweetalert for displaying dialog messages -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<style>
    

.table{
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 15px;
  min-width: 100%;
  overflow: hidden;
  border-radius: 5px 5px 0 0;
}
table thead tr{
  color: rgb(0, 0, 0);
  background: transparent;
  text-align: left;
  font-weight: bold;
}



.table th,
.table td{
  padding: 12px 15px;
}

</style>


</head>





<body style="background:radial-gradient(circle, rgb(135, 209, 255) 0%, rgb(255, 255, 255) 100%);">


  <!-- header all task         -->
    <div class="container" style="margin-top: 10px; margin-bottom: 10px;">
     
        <!-- button to add task -->
        <div class="row" style="margin-bottom: 10px;">
            <div class="col-md-12">
                <center><caption class="text-center"><h3><b>All Assigned Tasks</b></h3></caption></center>
                <button type="button" class="btn btn-primary" style="width: 20%; float: right;" data-toggle="modal" data-target="#addTaskModal">Add Task</button>                                         
                
           
            </div>
        </div>
    </div>


    
    
    <!-- add assignment -->
    <div class="modal fade" id="addTaskModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><b>Add Task</b></h5>
                    
                </div>
     
                <div class="modal-body">
                    <form action="" method="POST">
                         
                        <!-- select project from already created -->
                        <div class="form-group">
                            <label>Points</label>
                            <!-- <select name="points" id="add-points" class="form-control" ></select> -->
                            <input type="number" name="points">
                        </div>
     
                        <!-- create new project -->
                        <!-- <div class="form-group">
                            <div style="padding-bottom: 4%;">New Project</div>
                           <input type="file" name="new_project" id="add-project" placeholder="Project Name" required> -->
     
                            <!-- <button type="button" class="btn btn-primary" style="margin-top: 10px;">Add Project</button> -->
                        <!-- </div> -->
                                            
                        <!-- enter task -->
                        <div class="form-group">
                            <label>Task</label>
                            <input type="text" name="task" class="form-control" placeholder="What are you going to do ?" required />
                        </div>

                        <div class="form-group">
                            <label>Submission Date</label>
                            <input type="datetime-local" name="date" class="form-control" placeholder="Submit Before" required />
                    </div>
                    <input type="submit" name="submit_btn" value="ADD">
                    <!-- <button type="submit" form="form-task-hour-calculator" class="btn btn-primary " name="submit_btn">Add Task</button> -->
                   
                   
</from>
                  
                </div>
     
                <!-- form submit button -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!-- <button type="submit" form="form-task-hour-calculator" class="btn btn-primary " name="submit_btn">Add Task</button> -->

                  
                </div>
            </div>
        </div>
    </div>





<!-- start of table -->
<div class="container">
<section class="table">
    <table class="table">
            <thead>
                <th>ID</th>
                <th>Task</th>
                <th>Submission Date</th>
                <th>Points</th>
                <th>Actions</th>
                <th>Actions</th>
            </thead>
            
            
        <tbody id="all-tasks">
           




        <?php
        $query = "select * from assignment order by id desc";
        $query_run = mysqli_query($conn,$query);
        if($query_run){
            foreach($query_run as $row){ ?>

                <tr>
                <td>
                        <?php  print $row['id'];   ?>
                    </td>
                    <td>
                        <?php  print $row['task'];   ?>
                    </td>
                    <td>
                        <?php  print $row['date'];   ?>
                    </td>
                    <td>
                        <?php  print $row['points'];   ?>
                    </td>
                    <td><button class="btn btn-primary"><a href="test3.html" class="text-light">Update</a></button></td>
                    <td><button class="btn btn-danger"><a href="" class="text-light">Delete</a></button></td>
                </tr>

            <?php 
            }
        }
        ?>





            <!-- <tr>
                <td>Task</td>
                <td>Project</td>
                <td>Status</td>
                <td>Submission Date</td>
                <td><button class="btn btn-primary"><a href="test3.html" class="text-light">Update</a></button></td>
                    <td><button class="btn btn-danger"><a href="" class="text-light">Delete</a></button></td>
            </tr> -->
        </tbody>
    </table>
</section>

</div>

    

    
    

</body>
</html>
