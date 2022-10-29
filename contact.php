<?php include 'config.php' ?>

<?php

$alertSuccess = false;
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $description = $_POST['description'];

  $sql = "INSERT INTO `_rp_contact_form`(`name`, `email`, `subject`, `description`, `date_time`) VALUES ('$name','$email','$subject','$description', current_timestamp())";

  $result = mysqli_query($connection, $sql);

  if ($result == true) {
    $alertSuccess = true;
  }
}
?>


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
  <title>Rippzo | Contact</title>
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
                <a href="portfolio.php" class="nav-rippzo-link">Portfolio</a>
              </li>
              <li class="me-4 nav-rippzo-item">
                <a href="services.php" class="nav-rippzo-link">Services</a>
              </li>
              <li class="nav-rippzo-item">
                <a href="contact.php" class="nav-rippzo-link active">Contact us</a>
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
  <?php
  if ($alertSuccess) {
    echo '<div class="alert alert-success" role="alert">
      Your Form has been submitted successfully. Thank you.
      </div>';
  }
  ?>
  <main>
    <section>
      <div id="contact">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <h2 class="fw-semibold text-center">Contact us</h2>
            <p class="text-center">Feel free to contact us We'll get back to you shortly</p>
            <ul class="list-unstyled text-center">
              <li><span class="me-2"><img src="img/telephone-fill.svg" alt="+92 3204028692"></span>+92 3204028692</li>
              <li><span class="me-2"><img src="img/envelope-fill.svg"
                    alt="muhammadjaffar0075@gmail.com"></span>muhammadjaffar0075@gmail.com</li>
            </ul>
            <div class="col-md-6 my-3 align-items-center justify-content-between d-flex">
              <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="d-md-flex">
                  <div class="mb-3">
                    <label for="name">Name <span class="text-danger">*</span></label>
                    <input type="text" id="name" name="name" class="rippzo-input w-100" required>
                  </div>
                  <div class="mb-3 ms-0 ms-md-2">
                    <label for="email">Email <span class="text-danger">*</span></label>
                    <input type="text" id="email" name="email" class="rippzo-input w-100" required>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="subject">Subject <span class="text-danger">*</span></label>
                  <input type="text" id="subject" name="subject" class="rippzo-input w-100" required>
                </div>
                <div class="mb-3">
                  <label for="description">Message (Optional)</label>
                  <textarea name="description" id="description" cols="30" rows="10"
                    class="rippzo-input w-100"></textarea>
                </div>
                <button type="submit" class="rippzo-btn" name="submit">Submit</button>
              </form>
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
  <!-- prism js -->
</body>

</html>