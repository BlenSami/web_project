<?php
    include("../Models/delete.php");

  $con=conn();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `user` where id=$id";
        $con->query($sql);
    }
    if (mysqli_query($con, $sql)) {
     echo "Error deleting record: ".
  header('location:employe.php');
} 
else {
  echo "Error deleting record: " . mysqli_error($con);
}
    
    exit;



?>
