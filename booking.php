<?php
  require 'header.php';
?>

  <main>
    <div class="container">
      <form class="booking" method="post">
        <div class="form-group col-md-12">
          <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Preference</label>
          <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
            <option selected>Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </form>
    </div>
  </main>

<?php
  require 'footer.php';
?>
