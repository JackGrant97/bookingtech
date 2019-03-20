<?php
  require 'header.php';
?>

  <main>
    <div class="container">
      <form class="booking" method="post">
        <div class="row">
          <div class="form-group col-md-12">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Select Table Size</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
              <option selected>Choose...</option>
              <option value="6ft">6Ft</option>
              <option value="12ft">12ft</option>
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-light" name="book-submit">Book Ticket!</button>
      </form>
    </div>
  </main>

<?php
  require 'footer.php';
?>
