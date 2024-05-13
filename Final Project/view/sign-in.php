    <?php
    
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign In</title>
        <script src="../controller/js/authScript.js"></script>

        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
        <div class="h-vh">
            <div class="login-form">
                <div class="tempNavBar">
                    <h1>Online Electronic Shop</h1>
                </div>


                <form class="login-content" action="../controller/sign-in-controller.php" method="post" onsubmit="return validateSignInForm()">

                    
                    Username <br>
                    <input type="text" name="username" placeholder=""><br><br>
                    Password <br>
                    <input type="text" name="password"><br><br>
                    <button class="sign-in-button btn" id="sign-in-button">Sign In</button>
                    <p style="margin-top: 20px;">Don't have an account yet? <a href="sign-up.php" style="color: #000;">Register Now!</a></p>
                </form>


            </div>
        </div>


    </body>

    </html>