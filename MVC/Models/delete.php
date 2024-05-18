<?php
require_once('db.php');

  $con=conn();
  $sql="select * from user";
  $res=mysqli_query($con,$sql);
  $row=mysqli_num_rows($res);

  if($row==1)
  {
  	return true;
  }
  else
  {
  	return false;
  }


?>