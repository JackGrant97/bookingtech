<?php
  require 'header.php';
?>

  <main>
    <div class="container">
      <form class="register">
        <div class="row">
          <div class="form-group col-md-6">
            <label for="formGroupExampleInput">Username</label>
            <input type="text" class="form-control" id="formGroupExampleInput" pattern="[A-Za-z0-9 ]+" placeholder="Username..." class="validate">
          </div>
          <div class="form-group col-md-6">
            <label for="formGroupExampleInput2">Email</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="E-mail..." class="validate">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            <label for="formGroupExampleInput2">Password</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" pattern="[A-Za-z0-9 ]+" placeholder="Password..." class="validate">
            <small id="passwordHelpBlock" class="form-text text-muted">
              Your password must only use upper/lowercase letters and/or numbers.
            </small>
          </div>
          <div class="form-group col-md-6">
            <label for="formGroupExampleInput2">Confirm Password</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" pattern="[A-Za-z0-9 ]+" placeholder="Confirm Password..." class="validate">
            <small id="passwordHelpBlock" class="form-text text-muted">
              Ensure password matches.
            </small>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="formGroupExampleInput2">Mobile</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" pattern="[0-9]+" placeholder="Mobile/Telephone..." maxlength="11" class="validate">
          </div>
        </div>
        <button type="submit" class="btn btn-light" name="signup-submit">Submit</button>
      </form>
    </div>
  </main>

<?php
  require 'footer.php';
?>
