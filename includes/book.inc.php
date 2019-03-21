<?php
if (isset($_POST['book-submit'])) {

  require 'dbconnect.php';

  $date = $_POST['date'];
  $tables = $_POST['table'];
  $id = $_SESSION['userid'];

  if (empty($date) || empty($tables)) {
    header("Location: ../booking.php?error=emptyfields&date=".$date."&table=".$tables);
    exit();
  }
      else {
        //inputs data entered from the register page into the database
        $sql = "INSERT INTO booking (bookingdate, tablesize, UserID) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../booking.php?error=sqlerror02");
          exit();
        }
        else {
          mysqli_stmt_bind_param($stmt, "sss", $date, $tables, $id);
          mysqli_stmt_execute($stmt);
          header("Location: ../booking.php?booking=success");
          exit();
        }
      }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($con);
}
else {
  header("Location: ../booking.php");
  exit();
}
