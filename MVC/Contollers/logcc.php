

<?php


require_once('../Models/alldb.php');
$con=conn();
if (isset($_POST['signIn'])) {
$username=mysqli_real_escape_string($con,$_POST['username']);
$password=mysqli_real_escape_string($con,$_POST['password']);

$sql = "select * from user where username = '$username'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        

if($row)
{
	 if(password_verify($password, $row["password"])){
  
	header("location:../Views/side-bar.php");
}
 else{
                echo '<script>
                    alert("Login failed. Invalid username or password.!");
                    window.location.href = "../Views/login.php";
                </script>';
            }
   

	  
	
}
}

?>