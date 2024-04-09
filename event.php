<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Beyond</title>

  <!--Boostrap Links-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="css/ev.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <link rel="icon" href="images/logo.png" type="image/x-icon">
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="images/logo.png" alt="">
        <h1>Beyond</h1>
        <span>.</span>
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="courses.php">Learn</a></li>
          <li><a href="event.php">Event</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <!--<li class="dropdown has-dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown has-dropdown"><a href="#"><span>Deep Dropdown</span> <i
                    class="bi bi-chevron-down"></i></a>
                <ul class="dd-box-shadow">
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>-->
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->
      <?php 
      if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
      ?>
        <a class="btn-getstarted" href="logout.php"><i class="fas fa-sign-out"></i> Logout</a>
        
      <?php 
        } else {
      ?>
        <a class="btn-getstarted" href="login.php"><i class="bi bi-person "></i> Sign In</a>
      <?php 
        } 
      ?>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- Hero Section - Home Page -->
    <section id="hero" class="hero">

      <img src="images/background.png" alt="" data-aos="fade-in">

      <div class="container">
        
      </div>

    </section><!-- End Hero Section -->

    
    <!-- Services Section - Home Page -->
    <section id="services" class="services">

      <div class="container">
        <div class="navmenu">
          <ul>
          <li class="dropdown has-dropdown"><a href="#"><span>Event Type</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="#">Hackthon</a></li>
              <li><a href="#">Quizzes</a></li>
              <li><a href="#">Worshop</a></li>
              <li><a href="#">Seminar</a></li>
              <li><a href="#">Competition</a></li>
              <li><a href="#">Codind Contest</a></li>
              <li><a href="#">Cultural event</a></li>
              <li><a href="#">Seminar</a></li>
            </ul>
          </li>
          <li class="dropdown has-dropdown"><a href="#"><span>Sort by</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="#">Prizez high to low</a></li>
              <li><a href="#">Days left low to high</a></li>
            </ul>
          </li>
          <li class="dropdown has-dropdown"><a href="#"><span>Status</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="#">Live</a></li>
              <li><a href="#">Closed</a></li>
            </ul>
          </li>
          <li class="dropdown has-dropdown"><a href="#"><span>Team size</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">2+</a></li>
            </ul>
          </li>
          <li class="dropdown has-dropdown"><a href="#"><span>Payment</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="#">Paid</a></li>
              <li><a href="#">Free</a></li>
            </ul>
          </li>
          <li class="dropdown has-dropdown"><a href="#"><span>Eligibility</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="#">Professional</a></li>
              <li><a href="#">Collage student</a></li>
            </ul>
          </li>
          <li>
            <a class="btn-getstarted" href="host.php"><i class="fa-solid fa-bullhorn"></i> Host</a>
          </li>
          </ul>
        </div>

        <!-- Card Section begin here -->

        <div class="row">
          <div class="card" style="width:20rem;margin:20px">
            <img class="card-img-top" src="images/logo.png" alt="image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Event name</h4>
              <h6 class="card-subtitle mb-2 text-muted">College name</h6>
              <i class="bi bi-people-fill">36 participated</i>
              <i class="fa-regular fa-clock"></i> 4 days left
              <p> </p>
              <a href="javascript:void(0)" class="btn btn-primary">Apply</a>
            </div>
          </div>
          
          <div class="card" style="width:20rem;margin:20px">
            <img class="card-img-top" src="images/logo.png" alt="image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Event name</h4>
              <h6 class="card-subtitle mb-2 text-muted">College name</h6>
              <i class="bi bi-people-fill">36 participated</i>
              <i class="fa-regular fa-clock"></i> 4 days left
              <p> </p>
              <a href="javascript:void(0)" class="btn btn-primary">Apply</a>
            </div>
          </div>

          <div class="card" style="width:20rem;margin:20px">
            <img class="card-img-top" src="images/logo.png" alt="image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Event name</h4>
              <h6 class="card-subtitle mb-2 text-muted">College name</h6>
              <i class="bi bi-people-fill">36 participated</i>
              <i class="fa-regular fa-clock"></i> 4 days left
              <p> </p>
              <a href="javascript:void(0)" class="btn btn-primary">Apply</a>
            </div>
          </div>

          <div class="card" style="width:20rem;margin:20px">
            <img class="card-img-top" src="images/logo.png" alt="image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Event name</h4>
              <h6 class="card-subtitle mb-2 text-muted">College name</h6>
              <i class="bi bi-people-fill">36 participated</i>
              <i class="fa-regular fa-clock"></i> 4 days left
              <p> </p>
              <a href="javascript:void(0)" class="btn btn-primary">Apply</a>
            </div>
          </div>

          <div class="card" style="width:20rem;margin:20px">
            <img class="card-img-top" src="images/logo.png" alt="image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Event name</h4>
              <h6 class="card-subtitle mb-2 text-muted">College name</h6>
              <i class="bi bi-people-fill">36 participated</i>
              <i class="fa-regular fa-clock"></i> 4 days left
              <p> </p>
              <a href="javascript:void(0)" class="btn btn-primary">Apply</a>
            </div>
          </div>

        </div>

        

        <!-- Card section end here -->

      </div>

    </section><!-- End Services Section -->
    
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.php" class="logo d-flex align-items-center">
            <span>Append</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta
            donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p>United States</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>&copy; <span>Copyright</span> <strong class="px-1">Append</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  
  <script src="js/main.js"></script>

</body>

</html>