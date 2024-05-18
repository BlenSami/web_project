<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../CSS/styl.css">
     
</head>
<body>
    <div id="form">
   <!--<footer>
  <p>WELCOME TO OUR WEB PAGE<br></p>
  <p class="or">
        ----------or--------
      </p>
      <div class="links">
        <p>Already Have Account ?
            <a href="Login.php"><button>Login</button></a>
      */
</footer>-->
<div class="container" id="signup">
<div id="form">
            <h1  class="form-title">SignUp Form</h1><br>
            <form name="form" action="../Contollers/signupcc.php" method="POST">

            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <label for="fname">First Name</label>
            </div>
                
            <div class="input-group">

                <i class="fas fa-user"></i>
                <input type="text"  id="lName" name="lName" placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>
            
            <div class="input-group">
                 <i class="fas fa-user"></i>
                 <input type="text"  id="username" name="username" placeholder="User Name" required>
                 <label for="username">Username</label>
             </div>

             <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" name="email" placeholder="Enter Email" required><label for="email">Email</label>
            </div>
            <div class="input-group">
                
                <i class="fas fa-lock"></i>
                <input type="password"  id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>

           
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="cpass" name="cpass" placeholder="Retype Password" required>
                <label for="password">Retype Password</label>
            </div>
            <br>
             <div class="input-group">
                <label for="role">Give Role</label>
                <select name="role"  required>
                    <option value="">Select</option>
                    <option value="Admin">Admin</option>
                    <option value="Manager">Manager</option>
                    <option value="Employe">Employe</option>
                </select>
                <br>
                <br><br>

                
            </div>
            
        
               <input type="submit" id="btn" class="btn" value="Sign In" name="signIn">
                </div>
            <br>

        </form>
        
        <div class="links">
       <a href="employe.php"><button>Cancel</button></a>
   </div>
                 
                 

</body>
</html>

