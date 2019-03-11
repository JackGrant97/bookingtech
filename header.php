<!DOCTYPE html>
<?php
  session_start();
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <title></title>
  </head>
  <body>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <header>
        <nav>
          <div class="nav-wrapper">
            <a href="#" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="sass.html">Home</a></li>
              <li><a href="badges.html">Booking</a></li>
              <li><a href="collapsible.html">About</a></li>
            </ul>
            <form action="includes/login.inc.php" method="post">
              <input type="text" name="email" placeholder="Username/E-mail...">
              <input type="password" name="pwd" placeholder="Username/E-mail...">
              <button type="sumbit" name="login-submit">Login</button>
            </form>
            <a href="signup.php">Signup</a>
          </div>
        </nav>
      </header>
</html>
