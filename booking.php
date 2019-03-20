<?php
  require 'header.php';
?>

  <main>
    <div class="container">
      <form class="form-inline" method="post">
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Select Table Size</label>
        <div class="row">
          <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
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
