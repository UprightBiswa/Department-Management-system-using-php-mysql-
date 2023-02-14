<?php
include_once 'dbconnect.php';

$att=trim($_POST['att']);
$rn=trim($_POST['rn']);

 $update = "UPDATE student set attendance='$att' where rollno = '$rn'";
 $runn = mysqli_query($conn,$update); 

  if($runn){
         echo ("<script>alert('UPDATED')</script>");
         echo("<script>window.location='adminPublishAttendance.php'</script>");
  }
?>