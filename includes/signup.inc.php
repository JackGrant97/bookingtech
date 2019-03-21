<?php
if (isset($_POST['signup-submit'])) {

  require 'dbconnect.php';

  $username = $_POST['uname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $passwordRepeat = $_POST['password-repeat'];
  $Telephone = $_POST['telephone'];

  if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat) || empty($Telephone)) {
    header("Location: ../register.php?error=emptyfields&uname=".$username."&email=".$email."&telephone=".$Telephone);
    exit();
  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/",$username)) {
      header("Location: ../register.php?error=invalidmailuname");
      exit();
  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../register.php?error=invalidmail&uname=".$username);
    exit();
  }
  else if ($password !== $passwordRepeat) {
    header("Location: ../register.php?error=passwordcheck&uname=".$username);
    exit();
  }
  else {

    $sql = "SELECT email FROM users WHERE email=?";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../register.php?error=sqlerror01");
      exit();
    }
    else {
      //checks if email entered on register page is already in use
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        header("Location: ../register.php?error=emailtaken".$email);
        exit();
      }
      else {
        //inputs data entered from the register page into the database
        $sql = "INSERT INTO users (Username, email, password, telephone) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../register.php?error=sqlerror02");
          exit();
        }
        else {
          //Uses BCrypt to hash users password
          $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $email, $hashedpassword, $Telephone);
          mysqli_stmt_execute($stmt);
          header("Location: ../register.php?signup=success");
          exit();
        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($con);
}
else {
  header("Location: ../register.php");
  exit();
}
