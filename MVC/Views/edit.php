
   <?php
  include "../Models/db.php";

  $con=conn();
  $Id="";
  $fName="";
  $lName="";
  $username="";
  $email="";
  $role="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:employe.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from user where id=$id";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location:employe.php");
      exit;
    }
    $fName=$row["fName"];
    $lName=$row["lName"];
    $username=$row["username"];
    $email=$row["email"];
    $role=$row["role"];

  }

  else{
    $Id = $_POST["id"];
    $fName=$_POST["fName"];
    $lName=$_POST["lName"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $role=$_POST["role"];

    $sql = "update user set fName='$fName', lName='$lName', username='$username',email='$email',role'=$role' where Id='$Id'";
    $result = $con->query($sql);
    echo '
                    <script>
                    alert("Update your Entering account.");
                    window.location.href = "employe.php";
                </script>';
    
  }
  
?>
<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="../CSS/styl.css">
  
</head>
<body>
<div class="container" id="signup">
<div id="form">
            <h1 class="text-white text-center">  Update Member </h1><br>

             <form name="form" method="post">

               <div class="input-group">

                    <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>
                </div>
    

 
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text"  id="fName" name="fName"value="<?php echo $fName; ?>" class="form-control"> 
                    <label for="fName">First Name</label>
                </div>

                <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text"  id="lName" name="lName"value="<?php echo $lName; ?>"> 
                <label for="lName">Last Name</label>
                 </div>
            <div class="input-group">
                 <i class="fas fa-user"></i>
                 <input type="text"  id="username" name="username" value="<?php echo $username; ?>" placeholder="User Name" >
                 <label for="username">Username</label>
             </div>
             <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>"placeholder=" Email"> <label for="email">Email</label>
            </div>
            <div class="input-group">
                <label for="role">Give Role</label>
                <select name="role" >
                    <option value="">Select</option>
                    <option value="Admin">Admin</option>
                    <option value="Manager">Manager</option>
                    <option value="Employe">Employe</option>
                </select>
                <br>
                <br><br>

             <button class="btn" type="submit" name="submit"> Submit </button><br><br><br>
             </div>
        
         </form>
             <div class="input-group">
              <a class="btna" type="submit" name="cancel" href="employe.php"><button> Cancel</button> </a><br>

 </div>
 
 
</body>
</html>

