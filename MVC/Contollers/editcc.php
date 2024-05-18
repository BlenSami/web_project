 <?php
  include "../Models/db.php";

  $con=conn();
  $Id="";
  $fName="";
  $lName="";
  $username="";
  $email="";

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

  }

  else{
    $Id = $_POST["id"];
    $fName=$_POST["fName"];
    $lName=$_POST["lName"];
    $username=$_POST["username"];
    $email=$_POST["email"];

    $sql = "update user set fName='$fName', lName='$lName', username='$username',email='$email'  where Id='$Id'";
    $result = $con->query($sql);
    echo '
                    <script>
                    alert("Create your account. Now Log In Your Username or Email.");
                    window.location.href = "employe.php";
                </script>';
    
  }
  
?>