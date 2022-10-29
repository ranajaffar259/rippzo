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
  <title>Rippzo | about</title>
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
                <a href="about.php" class="nav-rippzo-link active">About</a>
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
  <main>
    <section>
      <div id="about">
        <div class="container">
          <h2 class="fw-semibold text-center mb-5">About us</h2>
          <div class="row">
            <div class="col-lg-4">
              <img src="img/men1.jfif" alt="jaffar" class="img-fluid shadow rounded-3">
            </div>
            <div class="col-lg-8 my-5 my-lg-0">
              <h3>About me</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga repellat laudantium voluptates
                voluptatem itaque? Eius quo molestiae necessitatibus ipsam at ullam repellendus aperiam id illo qui.
                Iure ab nostrum non. Expedita ea assumenda itaque eum alias reprehenderit commodi sunt iure.</p>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga repellat laudantium voluptates
                voluptatem itaque? Eius quo molestiae necessitatibus ipsam at ullam repellendus aperiam id illo qui.
                Iure ab nostrum non. Expedita ea assumenda itaque eum alias reprehenderit commodi sunt iure.</p>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga repellat laudantium voluptates
                voluptatem itaque? Eius quo molestiae necessitatibus ipsam at ullam repellendus aperiam id illo qui.
                Iure ab nostrum non. Expedita ea assumenda itaque eum alias reprehenderit commodi sunt iure.</p>

              <h5 class="fw-semibold">Why Choose us</h5>
              <ul>
                <li>24/7 Support</li>
                <li>Freelance</li>
                <li>100% Quality Product</li>
                <li>Responsive Design</li>
                <li>Unlimited Revisions</li>
              </ul>
              <h5 class="fw-semibold">Social Links</h5>
              <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Github</a></li>
              </ul>
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