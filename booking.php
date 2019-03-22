<?php
  require 'header.php';
?>

  <main>
    <div class="container">
      <?php
      if (isset($_SESSION ['userid']) >= 1):
      ?>
      <form class="booking" method="post">
        <div class="row">
          <div class="form-group col-md-12">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Select Days</label>
            <select class="custom-select my-1 mr-sm-2" id="date" name="date">
              <option selected>Choose...</option>
              <option id="date" name="date" value="27th">27th July 2019</option>
              <option id="date" name="date" value="28th">28th July 2019</option>
              <option id="date" name="date" value="both">both</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Select Table Size</label>
            <select class="custom-select my-1 mr-sm-2" id="table" name="table">
              <option selected>Choose...</option>
              <option id="table" name="table" value="6ft">6Ft (£175 Per Day)</option>
              <option id="table" name="table" value="12ft">12ft (£250 Per Day)</option>
            </select>
          </div>
        </div>
        <div class="row">
          <small class="disclaimer">
            If you're not booking on behalf of a business please do not book here! tickets will be available at the gates starting 9AM on the days of the event. £25 one day, £40 both
          </small>
        </div>
        <button type="submit" class="btn btn-light" name="book-submit">Book Ticket!</button>
      </form>
        <?php endif;?>
        <?php
        if (isset($_SESSION ['userid']) < 1):
        ?>
      <div class="warning">
        <div class="alert alert-danger" role="alert">
          <h4 class="alert-heading">Sorry for the inconvenience!</h4>
          <p>This page is only for businesses who own accounts.</p>
          <hr>
          <p class="mb-0">To use the booking page please register an account on behalf of your business.</p>
        </div>
      </div>
      <?php endif;?>
    </div>
    <?php
      $date = $_POST['date'];
      $tables = $_POST['table'];
      $id = $_SESSION['userid'];

    if (isset($_POST['book-submit']))
    {
      $sql = "INSERT INTO booking (bookingdate, tablesize, UserID) VALUES (?, ?, ?)";
      $stmt = mysqli_stmt_init($con);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../booking.php?error=sqlerror01");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "sss", $date, $tables, $id);
        mysqli_stmt_execute($stmt);
        header("Location: ../booking.php?booking=success");
        echo
        "
        <div class="alert alert-success" role="alert">
          Congratulations! Your table has been booked!
        </div>
        ";
        exit();
      }
    }
    ?>
  </main>

<?php
  require 'footer.php';
?>
