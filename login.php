<?php
  require 'header.php';
?>

  <main>
    <div class="status">
      <?php
        if (isset($_SESSION['userid'])) {
          echo '<p><b>Welcome Back</b></p>'. $_SESSION['Username'];
        }
        else {
          echo '<p><b>You are Logged out!</b></p>';
        }
       ?>
    </div>
  </main>

<?php
  require 'footer.php';
?>
