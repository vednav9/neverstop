<?php 
session_start();
?>

<?php include "php/ev.php"; 

// Check if the id parameter is set in the URL
if(isset($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $_GET['id']); // Assuming $connection is your database connection

    // Fetch event details from the database based on the id
    $query = "SELECT * FROM host WHERE id = $id"; // Modify your_table_name with your actual table name
    $result = mysqli_query($conn, $query);

    if($result && mysqli_num_rows($result) > 0) {
        // Event found, display its details   $event['org_name'];
        $event = mysqli_fetch_assoc($result);
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
  <link href="css/ev_display.css" rel="stylesheet">

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

  <main id="main" style="background-color: #dddddd;">

    <!-- Hero Section - Home Page -->
    <section id="hero" class="hero">

      <img src="upload/<?php echo $event['ev_banner']; ?>" alt="" data-aos="fade-in">

      <div class="container">
        
      </div>

    </section><!-- End Hero Section -->

    
    <!-- Services Section - Home Page-->
    <section id="services" class="services" style="background-color:f9f9f9;">

    <div class="container">
      <div class="row">
        <!-- Left side -->
        <div class="col-lg-9" >
          <!-- Left side with image -->
          <div class="">
            <div class="row" style="background-color:white; border-radius: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); padding:20px">
              <div class="col-lg-3">
                <img src="upload/<?php echo $event['org_banner']; ?>" class="img-fluid rounded" style="max-width: 150px;" alt="Logo">
              </div>
              <div class="col-lg-9">
                <h3 style="font-weight: bold;"><?php echo $event['ev_name']; ?></h3>
                <h6><?php echo $event['org_name']; ?></h6>
                <h6><?php echo $event['loc']; ?></h6>
              </div>
              <h6>Hastags <b>Todo</b></h6>
            </div>
            <br>
          </div>
            <div class="row" style="background-color:white; border-radius: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); padding:20px">
              <nav class="nav">
                <a class="nav-link" href="#rt">Round & Timeline</a>
                <a class="nav-link" href="#detail">Details</a>
                <a class="nav-link" href="#date">Dates & Deadlines</a>
                <a class="nav-link" href="#prize">Prizes</a>
                <a class="nav-link" href="#co-ordinator">Co-ordinator</a>
              </nav>
            </div>
            <br>
          <!-- Stages and Timelines -->
          <div class="row" id="rt" style="background-color:white; border-radius: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); padding:20px">
            <h3>S.P.I.T Hackathon: Stages and Timelines</h3>
            <div class="">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lorem nec lorem bibendum finibus eu et lorem. Nulla ut pharetra mi, in vehicula arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis faucibus fermentum lacus, et egestas velit luctus non.</p>
            </div>
            <br>
            <div class="col-lg-2">
              <h5>Start Date</h5>
              <p><?php echo $event['s_date']; ?></p>
            </div>
            <div class="col-lg-2">
              <h5>End Date</h5>
              <p><?php echo $event['e_date']; ?></p>
            </div>
            <br>
            <div class="">
              <h4>S.P.I.T Hackathon</h4><!-- Todo: Offline-->
            </div>
          </div>
          <br>
          <div class="row" id="detail" style="background-color:white; border-radius: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); padding:20px">
            <h3>All that you need to know about S.P.I.T Hackathon</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ipsum cumque assumenda explicabo a inventore ea sint impedit, odio doloremque eius ab ullam suscipit quas neque hic consequuntur, incidunt voluptatem!lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus magni dicta rem non? Voluptatum ad modi totam. Facere voluptate excepturi eos eaque alias sequi dolorem. Ipsum eaque provident exercitationem tempora!</p>
          </div>
          <br>
          <div class="row" id="date" style="background-color:white; border-radius: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); padding:20px">
            <h3>What are the important dates & deadlines?</h3>
            <div class="col-lg-3 m-3">
              <h5>Start Date</h5>
              <p>Hello World</p>
            </div>
            <div class="col-lg-3 m-3">
              <h5>Start Date</h5>
              <p>Hello World</p>
            </div>
            <div class="col-lg-3 m-3">
              <h5>Start Date</h5>
              <p>Hello World</p>
            </div>
            <div class="col-lg-3 m-3">
              <h5>Start Date</h5>
              <p>Hello World</p>
            </div>
          </div>
          <br>
          <div class="row" id="prize" style="background-color:white; border-radius: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); padding:20px">
            <h3>Rewards and Prizes</h3>
            <p>All participants will be provided a certificate of participation. Top 3 teams will be awarded with prize money, exciting goodies from OnePlus and a certificate of excellence.</p>
          </div>
          <br>
          <div class="row" id="co-ordinator" style="background-color:white; border-radius: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); padding:20px">
            <h3>Co-odinators</h3>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <h5><b><?php echo $event['co_name']; ?></b></h5>
                    <?php echo $event['co_email']; ?><br>
                    <?php echo $event['co_no']; ?>
                </div>
                <div class="col-lg-4">
                    <h5><b><?php echo $event['co_name']; ?></b></h5>
                    <?php echo $event['co_email']; ?><br>
                    <?php echo $event['co_no']; ?>
                </div>
                <div class="col-lg-4">
                    <h5><b><?php echo $event['co_name']; ?></b></h5>
                    <?php echo $event['co_email']; ?><br>
                    <?php echo $event['co_no']; ?>
                </div>
            </div>

          </div>

          
        </div>
        <!-- Right side -->
        <div class="col-lg-3">
          <div class="" style="position: sticky; top:100px; background-color:white; border-radius: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); padding:20px">
          <div class="row">
            <div class="col-md-6">
              <h4>$400</h4>
            </div>
            <div class="col-md-6">
              <button type="button" class="btn btn-primary float-right">Register</button>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-3">
              Hello
            </div>
            <div class="col-md-9">
              <h6>Registered</h6>
              <h6>1241</h6>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-3">
              Hello
            </div>
            <div class="col-md-9">
              <h6>Team Size</h6>
              <h6>2-4 member</h6>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-3">
              Hello
            </div>
            <div class="col-md-9">
              <h6>Participants</h6>
              <h6>2-4 member</h6>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-3">
              Hello
            </div>
            <div class="col-md-9">
              <h6>Registeration Deadline</h6>
              <h6><?php echo $event['dd_r_date']; ?></h6>
            </div>
          </div>
          </div>

        </div>

      </div>
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
<?php
    } else {
        // Event not found
        echo "Event not found.";
    }
} else {
    // id parameter not set
    echo "Invalid request.";
}

?>