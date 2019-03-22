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
                BookingTech’s employment conference is a new event available to the public and is aimed at students hoping to get a job within the technology industry. <br>
                The event will also allow business to teach students how to make themselves more desirable to businesses within the industry. <br>
                Mock interviews will be carried out between businesses and students so that they can get feedback on how to improve and potentially even land a placement with them. <br>
                Lastly business will be able to inform students of what they offer and how to get a job within their company.<br>
                <br>
                <br> A full floor plan is available down bellow
                <br>
                <br>
                <a href="assets/images/Floorplan.png" class="btn btn-light" download="Floorplan.png">Floor Plan</a>
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
                A variety of high profile speakers and businesses from various sectors of the technology industry will attending and making publish speech’s
                <br>
                <br>Speakers Include:
                <br>
                <br>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Role</th>
                      <th scope="col">Day</th>
                      <th scope="col">Time</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Bill </td>
                      <td>Gates</td>
                      <td>Founder, technology advisor, and board memeber at Microsoft</td>
                      <td>27th July 2019</td>
                      <td>10:00AM</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Gabe</td>
                      <td>Newell</td>
                      <td>President of Valve Corporation</td>
                      <td>27th July 2019</td>
                      <td>11:00AM</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Sundar</td>
                      <td>Pichai</td>
                      <td>CEO of Google</td>
                      <td>28th July 2019</td>
                      <td>10:00AM</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Tim</td>
                      <td>Sweeney</td>
                      <td>CEO of Epic Games</td>
                      <td>28th July 2019</td>
                      <td>11:00AM</td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <br>
                <br>Business Include:
                <br>
                <br>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Microsoft</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Valve Corporation</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Google</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Epic Games</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>AMD</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>IBM</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Nvidia</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Intel</td>
                    </tr>
                  </tbody>
                </table>
                <br> A full time table is available down bellow
                <br>
                <br>
                <a href="assets/images/SpeakerPoster.jpg" class="btn btn-light" download="SpeakerPoster.jpg">TimeTable</a>
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
                <br>
                <br>Starting 8:00AM to 5:00PM
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
