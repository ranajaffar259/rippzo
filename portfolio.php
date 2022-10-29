<?php include 'config.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Rippzo offers both free and premium templates. We provide free unique and creative additional kind of component designs, as well as the ability to create web apps and products utilising our production ready free or paid templates and unique components for your website." />
  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png" />
  <link rel="manifest" href="favicon/site.webmanifest" />
  <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="msapplication-TileColor" content="#da532c" />
  <meta name="theme-color" content="#ffffff" />
  <!-- bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <!-- custom css -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Page Title -->
  <title>Rippzo | Portfolio</title>
</head>

<body>
  <div id="navbar" class="bg-rippzo-dark sticky-top">
    <div class="container-lg">
      <div class="row align-items-center justify-content-between">
        <div class="col-2">
          <!-- logo -->
          <div id="logo">
            <a href="/rippzo"><img src="img/rippzo_logo.png" alt="rippzo" class="w-100"></a>
          </div>
        </div>
        <div class="col-10 d-flex justify-content-end">
          <!-- navigation links -->
          <nav id="menu" class="d-none d-lg-block">
            <ul class="list-unstyled d-block d-lg-flex mb-0">
              <li class="me-4 nav-rippzo-item">
                <a href="/rippzo" class="nav-rippzo-link">Home</a>
              </li>
              <li class="me-4 nav-rippzo-item">
                <a href="about.php" class="nav-rippzo-link">About</a>
              </li>
              <li class="me-4 nav-rippzo-item">
                <a href="portfolio.php" class="nav-rippzo-link active">Portfolio</a>
              </li>
              <li class="me-4 nav-rippzo-item">
                <a href="services.php" class="nav-rippzo-link">Services</a>
              </li>
              <li class="nav-rippzo-item">
                <a href="contact.php" class="nav-rippzo-link">Contact us</a>
              </li>
            </ul>
          </nav>
          <!-- hamburger menu -->
          <div onclick="toggleMenu()" id="hamburger" class="d-block d-lg-none">
            <i class="fs-1 text-light bi bi-list"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <main>
    <section>
      <div id="portfolio">
        <div class="container">
          <div class="row">
            <h2 class="fw-semibold text-center mb-3">Portfolio</h2>
            <div class="col-sm-12 col-md-6 col-lg-4 p-3">
              <div class="card border rounded-3">
                <div class="overlay">
                  <img src="img/hero-bs-template-image.jpg" class="img-fluid w-100" alt="template image">
                  <a href="#" class="rippzo-btn preview-btn">Preview</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 p-3">
              <div class="card border rounded-3">
                <div class="overlay">
                  <img src="img/hero-bs-template-image.jpg" class="img-fluid w-100" alt="template image">
                  <a href="#" class="rippzo-btn preview-btn">Preview</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 p-3">
              <div class="card border rounded-3">
                <div class="overlay">
                  <img src="img/hero-bs-template-image.jpg" class="img-fluid w-100" alt="template image">
                  <a href="#" class="rippzo-btn preview-btn">Preview</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 p-3">
              <div class="card border rounded-3">
                <div class="overlay">
                  <img src="img/hero-bs-template-image.jpg" class="img-fluid w-100" alt="template image">
                  <a href="#" class="rippzo-btn preview-btn">Preview</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 p-3">
              <div class="card border rounded-3">
                <div class="overlay">
                  <img src="img/hero-bs-template-image.jpg" class="img-fluid w-100" alt="template image">
                  <a href="#" class="rippzo-btn preview-btn">Preview</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 p-3">
              <div class="card border rounded-3">
                <div class="overlay">
                  <img src="img/hero-bs-template-image.jpg" class="img-fluid w-100" alt="template image">
                  <a href="#" class="rippzo-btn preview-btn">Preview</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 p-3">
              <div class="card border rounded-3">
                <div class="overlay">
                  <img src="img/hero-bs-template-image.jpg" class="img-fluid w-100" alt="template image">
                  <a href="#" class="rippzo-btn preview-btn">Preview</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 p-3">
              <div class="card border rounded-3">
                <div class="overlay">
                  <img src="img/hero-bs-template-image.jpg" class="img-fluid w-100" alt="template image">
                  <a href="#" class="rippzo-btn preview-btn">Preview</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="bg-rippzo-dark text-rippzo-light py-3">
    <p class="mb-0 text-center">Copyright @ 2022 - 2025 <a href="https://www.rippzo.com"
        class="text-rippzo-blue text-decoration-none">rippzo.com</a> All Rights Reserved.</p>
  </footer>
  <!-- bootstrap -->
  <script src="js/bootstrap.bundle.js"></script>
  <!-- custom js -->
  <script src="js/script.js"></script>
</body>

</html>