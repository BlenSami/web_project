<?php 
require_once('../Models/db.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../CSS/employe.css">
	<title>e</title> 
  
  
  
  <style >
    

  </style>
</head>
<body >
	

   <?php  require_once('side-bar.php'); ?>

   </div class="footer">
<footer>

  
  <div class="container">
    <div class="sa">
    <h1>Employe Data Tabel</h1>
     </div>
    <div class="sa">
    <li><a href="signup.php"><button class="b">Add User </button></a></li><br>
    </div>

 


    <table >
    <thead>

  	<th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Operation</th>
  </thead>
  <tbody>
      <?php
         $con=conn();
        $sql = "select * from user";
        $result = $con->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <tr>
        <th>$row[Id]</th>
        <td>$row[fName]</td>
        <td>$row[lName]</td>
        <td>$row[email]</td>
        

        
        <td>
                  <a href='edit.php?id=$row[Id]'><button> Edit </button></a>
                  <a href='delete.php?id=$row[Id]'><button>Delete</button></a>
                </td>
      </tr>
      ";
        }
      ?>
  </tbody>
</table>
</div>

</div>

</body>
</html>
