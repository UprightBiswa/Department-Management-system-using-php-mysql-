<?php   
session_start();

include_once 'dbconnect.php';
// $aid=$_SESSION['admin_id'];
// $em = $_SESSION['email'];
// echo $em;
// echo $aid;

$sq = "SELECT * FROM admin WHERE username='" . $_SESSION['username'] . "'";
$run = mysqli_query($conn,$sq);
$c = mysqli_fetch_assoc($run);

$aid=$c['id'];

if(isset($_POST['submit_btn'])){
    
   


  $points = $_POST['points'];

  $task = $_POST['task'];

  $dte = date('Y-m-d',strtotime($_POST['date']));


  $sql = "INSERT into assignment(`points`,`task`,`date`,`teacher_id`)values('$points','$task','$dte','$aid')";

  $q = mysqli_query($conn,$sql);

  if($q){
       
    echo("<script>alert('ADDED!')</script>");
    header("<script>window.location='facultyAddAssignment.php'</script>");
     echo $aid;
    
  }
  else{
    echo("<script>alert('FAILED!')</script>");
    header("<script>window.location='facultyAddAssignment.php'</script>");
  }


}
?>