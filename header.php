!<!DOCTYPE html>
<?php
  session_start();
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <body>

      <header>
        <nav>
          <div class="nav-wrapper">
            <a href="#" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="sass.html">home</a></li>
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
