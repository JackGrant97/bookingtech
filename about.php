<?php
  require 'header.php';
?>

  <main>
    <div class="container">
      <div class="slide">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="assets/images/billgates.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Bill Gates</h5>
                <p>Founder, technology advisor, and board memeber at Microsoft</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/gabe.jpg" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Gabe Newell</h5>
                <p>President of Valve Corporation</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/sundar.jpg" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Sundar Pichai</h5>
                <p>CEO of Google</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/tim.jpg" alt="fourth slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Time Sweeney</h5>
                <p>CEO of Epic Games</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="content">
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  What is the BookingTech employment conference?
                </button>
              </h5>
            </div>
            <div id="collapseOne" class="collapse collapsed" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Who will be attending?
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                A variety of high profile speakers from various sectors of the technology industry will attending and making publish speech’s
                <br>
                <br>Speakers Include
                <br>
                <br>•Bill Gates
                <br>•Gabe Newell
                <br>•Sundar Pichai
                <br>•Time Sweeney
                <br>
                <br>The following poster will show all public events for both Days
                <br>
                <img class="speaker" src="assets/images/SpeakerPoster.jpg">
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  When will the conference take place?
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                BookingTech's employment conference will take place on the 27th & 28th of July 2019
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php
  require 'footer.php';
?>
