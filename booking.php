<?php
  require 'header.php';
?>

  <main>
    <div class="container">
      <form class="booking" method="post">
        <div class="row">
          <div class="form-group col-md-12">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Select Days</label>
            <select class="custom-select my-1 mr-sm-2" id="date" name="date">
              <option selected>Choose...</option>
              <option value="27th">27th July 2019</option>
              <option value="28th">28th July 2019</option>
              <option value="both">both</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Select Table Size</label>
            <select class="custom-select my-1 mr-sm-2" id="table" name="table">
              <option selected>Choose...</option>
              <option idvalue="6ft">6Ft (£175 Per Day)</option>
              <option value="12ft">12ft (£250 Per Day)</option>
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
    </div>
  </main>

<?php
  require 'footer.php';
?>
