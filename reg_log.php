<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.css">
    <link rel="stylesheet" href="css\style.css" />
    <title>Log In</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >
  </head>
  <body>
           <!-- Sign In Form Start-->
           <div style="padding-top: 200px;">
          <form method="POST" action="signin.php" class="sign-up-form">
            <h2 class="title">Log in</h2>
            <div class="form-control">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Username" name="usernamelog" required/>
              </div>
            <div class="form-control">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="passwordlog" required/>
            </div>
            <input type="submit" class="btn" value="Sign in" name="signin-submit"/>
          </form>
          </div>
          <!-- Sign In Form End-->
    

    <script src="js\script.js"></script>
  </body>
</html>
