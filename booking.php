<?php
  require 'header.php';
?>

  <main>
    <div class="container">
      <form class="form-group" method="post">
        <div class="row">
          <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Select Table Size</label>
        </div>
        <div class="row">
          <select class="custom-selec t my-1 mr-sm-2" id="inlineFormCustomSelectPref">
            <option selected>Choose...</option>
            <option value="6ft">6ft</option>
            <option value="12ft">12ft</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary my-1">Submit</button>
      </form>
    </div>
  </main>

<?php
  require 'footer.php';
?>
