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
  
	  <footer>
  <p>WELCOME TO OUR WEB PAGE<br></p>
  
</footer>
<div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>

<form method="post" action="../Contollers/logcc.php">



          <div class="input-group">
                 <i class="fas fa-user"></i>
                 <input type="text"  id="username" name="username" placeholder="User Name" required>
                 <label for="username">Username</label>
          </div>

          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>

              <label for="password">Password</label>
          </div>
          <p class="recover">
            <a href="#">Recover Password</a>
          </p>
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>


        
        

</body>
</html>
