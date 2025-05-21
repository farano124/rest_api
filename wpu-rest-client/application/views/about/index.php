  <!-- About -->
<div class="container">
  <div class="row mb-4">
    <div class="col text-center">
      <h2>About My Project</h2>
    </div>
  </div>

  <!-- Portfolio -->
      <section class="portfolio" id="portfolio">
          <div class="row">
            <div class="col-md mb-4">
              <div class="card">
                <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/1.png" alt="Card image cap">
                <div class="card-body">
                  <h5>JSON</h5>
                  <p class="card-text">Latihan API menggunakan file JSON.</p>
                  <a href="<?= base_url(); ?>../json/latihan1.php" class="card-link see-detail"data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="`+ data.imdbID +`" >See Project</a>
                </div>
              </div>
            </div>

            <div class="col-md mb-4">
              <div class="card">
                <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/2.png" alt="Card image cap">
                <div class="card-body">
                  <h5>WPU-HUT</h5>
                  <p class="card-text">Latihan API menggunakan file JSON berbasis website.</p>
                  <a href="<?= base_url(); ?>../wpu-hut/latihan2.html" class="card-link see-detail"data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="`+ data.imdbID +`" >See Project</a>
                </div>
              </div>
            </div>

            <div class="col-md mb-4">
              <div class="card">
                <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/3.png" alt="Card image cap">
                <div class="card-body">
                  <h5>WPU-MOVIE</h5>
                  <p class="card-text">Latihan API menggunakan Public API OMDb API berbasis website.</p>
                  <a href="<?= base_url(); ?>../wpu-movie/index.html" class="card-link see-detail"data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="`+ data.imdbID +`" >See Project</a>
                </div>
              </div>
            </div>   
          </div>

          <div class="row">
            <div class="col-md mb-4">
              <div class="card">
                <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/4.png" alt="Card image cap">
                <div class="card-body">
                  <h5>WPU-PORTFOLIO</h5>
                  <p class="card-text">Latihan API menggunakan Public API Youtube dan Instagram menggunakan cURL berbasis website.</p>
                  <a href="<?= base_url(); ?>../wpu-portfolio/index.php" class="card-link see-detail"data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="`+ data.imdbID +`" >See Project</a>
                </div>
              </div>
            </div> 
            <div class="col-md mb-4">
              <div class="card">
                <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/5.png" alt="Card image cap">
                <div class="card-body">
                  <h5>WPU-REST-SERVER</h5>
                  <p class="card-text">Membuat Rest Server menggunakan framework CodeIgniter3.
                  </p>
                  <a href="<?= base_url(); ?>../wpu-rest-server/" class="card-link see-detail"data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="`+ data.imdbID +`" >See Project</a>
                </div>
              </div>
            </div>

            <div class="col-md mb-4">
              <div class="card">
                <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/6.png" alt="Card image cap">
                <div class="card-body">
                  <h5>WPU-REST-CLIENT</h5>
                  <p class="card-text">Membuat Rest Client menggunakan framework CodeIgniter3</p>
                  <a href="<?= base_url(); ?>home" class="card-link see-detail"data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="`+ data.imdbID +`" >See Project</a>
                </div>
              </div>
            </div>
          </div>