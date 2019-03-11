<!DOCTYPE html>
<?php
  session_start();
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
