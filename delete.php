<?php
require ("includes/connect.php");
$id=$_POST['id'];
$query = "DELETE FROM info WHERE id='$id'";

$result = mysqli_query($conn,$query);
  if(mysqli_affected_rows($conn)>0) {
      
      header('location:adminspage.php');
  } else {
     echo "Not deleted";
  }
?>