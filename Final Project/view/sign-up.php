<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="../controller/js/authScript.js"></script>
    <link rel="stylesheet" href="./css/style.css">

<body>
    <div class="tempNavBar">
        <h1 align="center">Create An Account</h1>
    </div>
    <div>
        <div class="reg-form">
            <form action="../controller/sign-up-controller.php" method="post" onsubmit="return validateSignUpForm()">
               

                <div class="form-control">
                    <label for="full_name">Fullname</label>
                    <input type="text" name="full_name">
                </div>
                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="text" name="email">
                </div>
                <div class="form-control">
                    <label for="mobile_number">Mobile Number</label>
                    <input type="text" name="mobile_number">
                </div>
                <div class="form-control">
                    <label for="address">Address</label>
                    <textarea type="text" name="Address"> </textarea>
                </div>
                <div class="form-control">
                    <label for="username">Username</label>
                    <input type="text" name="username">
                </div>
                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="text" name="password">
                </div>
                <button class="sign-up-button btn" id="sign-up-button">Sign Up</button>


            </form>

            <p>Already have an account? <a href="sign-in.php" class="" style="color: #000;">Sign In</a></p>
        </div>
    </div>
</body>

</html>