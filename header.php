<!DOCTYPE html>
<?php
  session_start();
  require 'includes/dbconnect.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <title></title>
    <script>
      $('.dropdown-toggle').dropdown()
    </script>
  </head>
  <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">BookingTech</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Booking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <div class="header-login">
                <form action="includes/login.inc.php" method="post">
                  <input class="input" type="text" name="email" placeholder="Username/E-mail...">
                  <input class="input" type="password" name="pwd" placeholder="Password...">
                  <button type="submit" class="btn btn-light" name="login-submit">Login</button>
                </form>
              </div>
                <?php
                  if (isset($_SESSION['userid'])) {
                    echo
                    '
                    <form action="includes/logout.inc.php" method="post">
                      <button type="submit" class="btn btn-light" name="logout-submit">Logout</button>
                    </form>
                    ';
                  }
                  else {
                    echo
                    '
                    <div class="register">
                      <a class="btn btn-light" href="signup.php">Register</a>
                    </div>
                    ';
                  }
                 ?>
            </ul>
          </div>
        </nav>
      </header>
</html>
