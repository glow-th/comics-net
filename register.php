<?php require_once 'uhakiki/register.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REGISTER TO COMICS.NET</title>
    <script
      src="https://kit.fontawesome.com/f38c51b82f.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="assets/css/login.css" />
  </head>
  <body>
    <div class="head">
      <h1>welcome to COMICS NET</h1>
    </div>
    <div class="login-form">
      <div class="text">Register</div>
      <form method="post" action="login.php">
        <div class="field">
          <div class="fa-solid fa-user"></div>
          <input type="text" placeholder="Username" />
        </div>
        <div class="field">
          <div class="fa-solid fa-envelope"></div>
          <input type="email" placeholder="Email" />
        </div>
        <div class="field">
          <div class="fas fa-lock"></div>
          <input type="password" placeholder="Password" />
        </div>
        <button>Login</button>
        <div class="link">
          Not a member?
          <a href="login.php">login now</a>
        </div>
      </form>
    </div>
  </body>
</html>
