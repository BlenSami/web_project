<?php
    include("../Models/db.php");
    $con=conn();
    
    if(isset($_POST['signIn'])){
        $fName = mysqli_real_escape_string($con, $_POST['fName']);
        $lName = mysqli_real_escape_string($con, $_POST['lName']);
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpass']);
        $role = mysqli_real_escape_string($con, $_POST['role']);
        
        $sql="select * from user where username='$username'";
        $result = mysqli_query($con, $sql);
        $count_user = mysqli_num_rows($result);

        $sql="select * from user where email='$email'";
        $result = mysqli_query($con, $sql);
        $count_email = mysqli_num_rows($result);

        if($count_user == 0 & $count_email==0){
            if($password==$cpassword){
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO user(fName,lName,username, email, password,role) VALUES('$fName','$lName','$username', '$email', '$hash','$role')";
                $result = mysqli_query($con, $sql);
                if($result){
                    echo '
                    <script>
                    alert("Create your account. Now Log In Your Username or Email.");
                    window.location.href = "../Views/employe.php";
                </script>';
                    
                }
            }
            else{
                echo '<script>
                    alert("Passwords do not match");
                    window.location.href = "../Views/signup.php";
                </script>';
            }
        }
        else{
            if($count_user>0){
                echo '<script>
                    window.location.href="../Views/signup.php";
                    alert("Username already exists!!");
                </script>';
            }
            if($count_email>0){
                echo '<script>
                    window.location.href="../Views/signup.php";
                    alert("Email already exists!!");
                </script>';
            }
        }
        
    }
?>


