<?php


  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="../CSS/side-bar.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
</head>
<body>
     <?php require_once('nav-bar.php') ;  ?>

   
    <div class="sidenav">
        <div class="board">
       <i class="fa-brands fa-slack"></i>
       <h1 >Dashboard</h1>
   </div>
        <ul>
            
            <li><a href="#">Analytics</a><br></li>
            <li><a href="employe.php">Employe Details</a><br></li>
            <li><a href="product_manage.php">Product</a><br></li><br>
            <li><a href="#">Monitoring</a><br></li>
            <li><a href="#">Task Panel</a><i class="fa-solid fa-caret-down"></i></li>
               <ul class="dropdown">
                <li><a href="managertask.php"> Manager</a></li>
                <li><a href="employetask.php"> Employe</a></li>
            </ul>
        </ul> 
        <hr>

        <div class="email">

            <a href="#"></i>Email Authentication</a><br>
            
        </div>
        <div class="mainr">
    <div class="item">
        
</div>



        
    </div>
   

</body>
</html>