<?php
  require 'header.php';
?>

  <main>
    <div class="container">
      <form class="register">
        <div class="row">
          <div class="form-group col-md-6">
            <label for="formGroupExampleInput">Username</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username...">
          </div>
          <div class="form-group col-md-6">
            <label for="formGroupExampleInput2">Email</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="E-mail...">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            <label for="formGroupExampleInput2">Password</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password...">
          </div>
          <div class="form-group col-md-6">
            <label for="formGroupExampleInput2">Confirm Password</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Confirm Password...">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="formGroupExampleInput2">Mobile</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Mobile/Telephone...">
          </div>
        </div>
        <button type="submit" class="btn btn-light" name="login-submit">Submit</button>
      </form>
    </div>
  </main>

<?php
  require 'footer.php';
?>
