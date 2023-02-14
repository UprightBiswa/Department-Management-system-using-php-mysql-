<?php
include_once 'dbconnect.php';

$grade=trim($_POST['grade']);
$rn=trim($_POST['rn']);

 $update = "UPDATE student set exam='$grade' where rollno = '$rn'";
 $runn = mysqli_query($conn,$update); 

  if($runn){
         echo ("<script>alert('UPDATED')</script>");
         echo("<script>window.location='adminPublishResult.php'</script>");
  }
?>