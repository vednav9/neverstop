<?php 
session_start();
?>
<?php include "php/ev.php"; ?>
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

      <img src="eventbg.jpg" alt="" data-aos="fade-in">

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
              <li><a href="#" class="category-filter" data-category="Hackathon">Hackathon</a></li>
              <li><a href="#" class="category-filter" data-category="Quizzes">Quizzes</a></li>
              <li><a href="#" class="category-filter" data-category="Worshop">Worshop</a></li>
              <li><a href="#" class="category-filter" data-category="Seminar">Seminar</a></li>
              <li><a href="#" class="category-filter" data-category="Competition">Competition</a></li>
              <li><a href="#" class="category-filter" data-category="Coding Contest">Coding Contest</a></li>
              <li><a href="#" class="category-filter" data-category="Cultural event">Cultural event</a></li>
            </ul>
          </li>
          <li class="dropdown has-dropdown"><a href="#"><span>Sort by</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
                <li><a href="#" class="sort-filter" data-sort="prize_high_low">Prize high to low</a></li>
                <li><a href="#" class="sort-filter" data-sort="days_left_low_high">Days left low to high</a></li>
            </ul>
          </li>
          <li class="dropdown has-dropdown"><a href="#"><span>Status</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
                <li><a href="#" class="status-filter" data-status="live">Live</a></li>
                <li><a href="#" class="status-filter" data-status="closed">Closed</a></li>
            </ul>
          </li>
          <li class="dropdown has-dropdown"><a href="#"><span>Team size</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
                <li><a href="#" class="team-filter" data-team="1">1</a></li>
                <li><a href="#" class="team-filter" data-team="2">2</a></li>
                <li><a href="#" class="team-filter" data-team="4">4</a></li>
            </ul>
          </li>
          <li class="dropdown has-dropdown"><a href="#"><span>Payment</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
                <li><a href="#" class="payment-filter" data-payment="paid">Paid</a></li>
                <li><a href="#" class="payment-filter" data-payment="free">Free</a></li>
            </ul>
          </li>
          <li>
            <a class="btn-getstarted" href="host.php"><i class="fa-solid fa-bullhorn"></i> Host</a>
          </li>
          </ul>
        </div>

        <!-- Card Section begin here -->

        <div class="row" id="event-cards">
            <?php if (mysqli_num_rows($result)) { ?>
                <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
                    <div class="card <?php echo $rows['opp_type']; ?>" data-status="<?php echo $rows['dd_r_date'] > date('Y-m-d H:i:s') ? 'live' : 'closed'; ?>" data-team="<?php echo $rows['team']; ?>" data-payment="<?php echo $rows['fees'] == 0 ? 'free' : 'paid'; ?>" style="width:20rem;margin:20px">
                        <img class="card-img-top" src="upload/<?php echo $rows['org_banner']; ?>" alt="image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"><a href="event_display.php?id=<?php echo $rows['id'] ?>"><?php echo $rows['ev_name']; ?></a></h4>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $rows['org_name']; ?></h6>
                            <?php
                            $now = time();
                            $event_date = strtotime($rows['dd_r_date']);
                            $days_left = ($event_date - $now) / (60 * 60 * 24);
                            ?>
                            <?php if ($days_left > 0) { ?>
                                <p class="card-days-left"><i class="fa-regular fa-clock"></i> <?php echo floor($days_left); ?> days left</p>
                            <?php } else { ?>
                                <p class="card-days-left"><i class="fa-regular fa-clock"></i> Closed</p>
                            <?php } ?>
                            <?php if ($rows['fees'] == 0) { ?>
                                <p class="card-payment">Fee: Free</p>
                            <?php } else { ?>
                                <p class="card-payment">Fee: <?php echo $rows['fees']; ?></p>
                            <?php } ?>
                            <!-- Add class for team size -->
                            <p class="card-team-size">Team size: <?php echo $rows['team']; ?></p>
                            <!-- Add class for status -->
                            <p class="card-status">Status: <?php echo $rows['dd_r_date'] > date('Y-m-d H:i:s') ? 'Live' : 'Closed'; ?></p>
                            <!-- Add class for prize -->
                            <p class="card-prize">Prize: <?php echo $rows['prize_am']; ?></p>
                            <a href="apply.php?ev_name=<?php echo urlencode($rows['ev_name']); ?>" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
          </div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const categoryLinks = document.querySelectorAll('.category-filter');
        const sortLinks = document.querySelectorAll('.sort-filter');
        const statusLinks = document.querySelectorAll('.status-filter');
        const teamLinks = document.querySelectorAll('.team-filter');
        const paymentLinks = document.querySelectorAll('.payment-filter');
        const eventCards = document.getElementById('event-cards');

        categoryLinks.forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const category = this.getAttribute('data-category');
                filterCards(category);
            });
        });

        sortLinks.forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const sortType = this.getAttribute('data-sort');
                sortCards(sortType);
            });
        });

        statusLinks.forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const status = this.getAttribute('data-status');
                filterCardsByStatus(status);
            });
        });

        teamLinks.forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const teamSize = this.getAttribute('data-team');
                filterCardsByTeam(teamSize);
            });
        });

        paymentLinks.forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const paymentStatus = this.getAttribute('data-payment');
                filterCardsByPayment(paymentStatus);
            });
        });

        function filterCards(category) {
            const cards = eventCards.querySelectorAll('.card');
            cards.forEach(function (card) {
                if (category === 'all' || card.classList.contains(category)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function sortCards(sortType) {
            const cards = Array.from(eventCards.querySelectorAll('.card'));
            switch (sortType) {
                case 'prize_high_low':
                    cards.sort((a, b) => {
                        const feeA = parseFloat(a.querySelector('.card-payment').textContent.split(': ')[1]);
                        const feeB = parseFloat(b.querySelector('.card-payment').textContent.split(': ')[1]);
                        return feeB - feeA;
                    });
                    break;
                case 'days_left_low_high':
                    cards.sort((a, b) => {
                        const daysA = parseInt(a.querySelector('.card-days-left').textContent.split(' ')[0]);
                        const daysB = parseInt(b.querySelector('.card-days-left').textContent.split(' ')[0]);
                        return daysA - daysB;
                    });
                    break;
            }
            eventCards.innerHTML = '';
            cards.forEach(card => eventCards.appendChild(card));
        }

        function filterCardsByStatus(status) {
            const cards = eventCards.querySelectorAll('.card');
            cards.forEach(function (card) {
                const cardStatus = card.getAttribute('data-status');
                if (status === 'all' || cardStatus === status) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function filterCardsByTeam(teamSize) {
            const cards = eventCards.querySelectorAll('.card');
            cards.forEach(function (card) {
                const cardTeamSize = card.getAttribute('data-team');
                if (teamSize === 'all' || cardTeamSize === teamSize) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function filterCardsByPayment(paymentStatus) {
            const cards = eventCards.querySelectorAll('.card');
            cards.forEach(function (card) {
                const cardPaymentStatus = card.getAttribute('data-payment');
                if (paymentStatus === 'all' || cardPaymentStatus === paymentStatus) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // Show all cards initially
        filterCards('all');
    });
</script>



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
            <span>Beyond</span>
          </a>
          <p>Explore, innovate, and connect with our vibrant community of tech enthusiasts.
                         Join us in empowering the next generation of creators and problem solvers through 
                         immersive hackathons and technical events. Stay updated with the latest happenings,
                          industry insights, and upcoming events. Let's build, learn, and grow together.</p>
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

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>New Horizon Institute</p>
          <p>Anand Nagar Thane</p>
          <p>India</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>

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

  
  <script src="js/ev.js"></script>

</body>

</html>