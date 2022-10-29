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
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.default.css">
  <!-- bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <!-- custom css -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Page Title -->
  <title>Rippzo | Home</title>
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
                <a href="/rippzo" class="nav-rippzo-link active">Home</a>
              </li>
              <li class="me-4 nav-rippzo-item">
                <a href="about.php" class="nav-rippzo-link">About</a>
              </li>
              <li class="me-4 nav-rippzo-item">
                <a href="portfolio.php" class="nav-rippzo-link">Portfolio</a>
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
  <header class="bg-rippzo-dark">
    <div class="container-md">
      <div id="hero" class="py-5 d-flex flex-column flex-lg-row justify-content-between align-items-center">
        <div class="col">
          <h2 class="mt-lg-0 text-center text-lg-start fw-semibold">Create web apps and products using our
            production ready
            <span class="text-rippzo-blue">templates</span> and <span class="text-rippzo-blue">components designs</span>
          </h2>
          <div class="d-flex mt-3 flex-wrap justify-content-lg-start align-items-center justify-content-center">
            <a href="contact.php" class="ms-1 rippzo-btn">Hire me</a>
            <a href="portfolio.php" class="ms-1 rippzo-outline-btn">Portfolio</a>
          </div>
        </div>
        <div class="col px-4 d-none d-lg-block">
          <img src="img/hero-image.svg" alt="" class="img-fluid mt-5 mt-lg-0">
        </div>
      </div>
    </div>
    <div id="emailForm" class="bg-rippzo-blue py-3">
      <div class="container-md">
        <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row">
          <h2 class="mb-2 mb-xl-0 fw-semibold">Sign Up For Our Newsletter</h2>
          <form action="" class="d-flex">
            <input type="email" placeholder="Enter Email" class="rippzo-input" name="" style="width: 100%;" required>
            <button type="submit" name="" class="rippzo-btn rounded-1 ms-1">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </header>
  <main>
    <section>
      <div id="portfolio">
        <div class="container">
          <div class="row">
            <h2 class="fw-semibold text-center mb-2">Portfolio</h2>
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
            <div class="d-flex justify-content-center my-2">
              <a href="portfolio.php" class="rippzo-btn">Show All</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div id="components" class="bg-rippzo-dark rippzo-light-text py-5">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-lg-6">
              <div class="d-flex justify-content-center justify-content-lg-start flex-column text-center text-lg-start">
                <h2 class="fw-semibold text-rippzo-light">Try our production ready unique, creative, & customizable<span
                    class="text-rippzo-blue">
                    components designs</span> to your website
                </h2>
                <div class="mb-2 mb-lg-0">
                  <a href="#" class="rippzo-btn my-3">Try Rippzo Components</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
              <img src="img/components.svg" alt="" class="img-fluid w-100">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div id="services">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <h2 class="fw-semibold text-center mb-3">Our Services</h2>
            <div class="col-sm-12 col-md-6 col-lg-4 p-3">
              <a href="" class="service-item text-decoration-none text-rippzo">
                <div class="card d-flex justify-content-center text-center">
                  <div class="card-body d-flex justify-content-center flex-column align-items-center">
                    <div class="service-img" style="width: 150px;">
                      <img src="img/web-coding.svg" alt="" class="img-fluid w-100">
                    </div>
                    <h4 class="card-title mt-3 fw-semibold">
                      Web Development
                    </h4>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 p-3">
              <a href="" class="service-item text-decoration-none text-rippzo">
                <div class="card d-flex justify-content-center text-center">
                  <div class="card-body d-flex justify-content-center flex-column align-items-center">
                    <div class="service-img" style="width: 150px;">
                      <img src="img/web-layout.svg" alt="" class="img-fluid w-100">
                    </div>
                    <h4 class="card-title mt-3 fw-semibold">
                      Web Designing
                    </h4>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 p-3">
              <a href="" class="service-item text-decoration-none text-rippzo">
                <div class="card d-flex justify-content-center text-center">
                  <div class="card-body d-flex justify-content-center flex-column align-items-center">
                    <div class="service-img" style="width: 150px;">
                      <img src="img/wordpress.svg" alt="" class="img-fluid w-100">
                    </div>
                    <h4 class="card-title mt-3 fw-semibold">
                      WordPress Development
                    </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="d-flex justify-content-center my-4">
            <a href="services.php" class="rippzo-btn">Show All Services</a>
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
  <!-- jquery -->
  <script src="js/jquery.js"></script>
  <!-- owl carousel -->
  <script src="js/owl.carousel.js"></script>
  <script src="js/owl.navigation.js"></script>
  <script>
  $(document).ready(function() {
    $('.owl-carousel').owlCarousel({
      loop: false,
      nav: true,
      margin: 5,
      autoplay: true,
      dots: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: false,
      stagePadding: 60,
      responsive: {
        0: {
          items: 1
        },
        500: {
          items: 1
        },
        1000: {
          items: 2
        }
      }
    })
  });
  </script>
</body>

</html>