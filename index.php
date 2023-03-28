 <?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Tallinn University of Technology – Web Technologies Project - HTML & CSS">
  <meta name="keywords" content="web_project, Throw It, book a collection">
  <meta name="author" content="Dark Side">
  <meta name="viewport" content="initial-scale=1">
  <link rel="icon" href="img/icon.png" type="image/x-icon">

  <title>Home page</title>
  <link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/footer.css">
  <link rel="stylesheet" href="styles/navigation.css">
  <link rel="stylesheet" href="styles/main.css">
  <link rel="stylesheet" href="styles/pricing.css">
  <link rel="stylesheet" href="styles/pages.css">
  <link rel="stylesheet" href="styles/how.css">
  <link rel="stylesheet" href="styles/testimonials.css">

</head>

<body>
  <!-- Header section of the document -->
  <?php require_once('header.php'); ?>
  <!-- Page navigation -->
  <aside>
    <nav id="side-panel" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#book_a_collection">Book a collection</a>
      <a href="#how_it_works">How it works?</a>
      <a href="#pricing">Pricing</a>
      <a href="#testimonials">Testimonials</a>
    </nav>
  </aside>

  <!-- Content section of the document -->
  <div id="main" class="content">
    <!-- Open button -->
    <div id="openbutton">
      <button class="openbtn" type="button" onclick="openNav();">
        <img src="img/menu.png" alt="toggle menu" >
      </button>
    </div>

    <!-- Book a collection subpage -->
    <div id="book_a_collection" class="book-a-collection">
      <p class="first-subpage-heading">Say goodbye to overflowing trash cans with our on-demand
        garbage collection service!</p>
      <p class="first-subheading">Get your garbage picked up on your schedule, without any hassle</p>

      <a href="login.php" class="book-btn">Book a collection</a>
    </div>

    <!-- How it works subpage -->
    <div id="how_it_works" class="how_it_works">
      <h1 class="headings">How it works?</h1>
      <p class="subheadings">Effortless and Convenient:
        <br> how we are going to get
        rid of your garbage
      </p>

      <!-- Working process description -->
      <div class="working-process">
        <div class="row process-line">
          <!-- First column block of description -->
          <div class="block">
            <div class="blocks-header">
              <h3>
                Sign up
              </h3>
            </div>
            <div class="left-icon sign-up-icon">
              <img src="img/signup.png" alt="Sign up" class="icon">
            </div>
            <div class="blocks-content">
              <p>
                During the sign-up process on our website,
                you'll need to provide some basic information
                such as your name, address, and payment details.
              </p>
            </div>
          </div>

          <!-- Second column block of description -->
          <div class="block">
            <div class="blocks-header">
              <h3>
                Shedule
              </h3>
            </div>
            <div class="icon schedule-icon">
              <img src="img/schedule.png" alt="Schedule" class="icon">
            </div>
            <div class="blocks-content">
              <p>
                Just select a date and time that works for you,
                and we'll send a collection team to your address
                at the scheduled time.
              </p>
            </div>

          </div>

          <!-- Third column block of description -->
          <div class="block">
            <div class="blocks-header">
              <h3>
                Collect
              </h3>
            </div>
            <div class="icon collect-icon">
              <img src="img/collect.png" alt="Collect" class="icon">
            </div>
            <div class="blocks-content">
              <p>
                On the day of your scheduled pickup,
                our collection team will arrive at your address
                and collect your garbage in an eco friendly way.
              </p>
            </div>

          </div>

          <!-- Fourth column block of description -->
          <div class="block">
            <div class="blocks-header">
              <h3>
                Pay
              </h3>
            </div>
            <div class="icon pay-icon">
              <img src="img/pay.png" alt="Pay" class="icon">
            </div>
            <div class="blocks-content">
              <p>
                After your garbage has been collected,
                we'll charge your payment method on file for the service.
                You'll receive a receipt via email.
              </p>
            </div>
          </div>

          <!-- Fifth column block of description -->
          <div class="block">
            <div class="blocks-header">
              <h3>
                Repeat
              </h3>
            </div>
            <div class="right-icon repeat-icon">
              <img src="img/repeat.png" alt="Repeat" class="icon">
            </div>
            <div class="blocks-content">
              <p>
                You can use our service as frequently or infrequently
                as you need. Just schedule a pickup whenever you
                have garbage that needs to be collected.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pricing subpage -->
    <div id="pricing" class="pricing-tabs">
      <h2 class="headings">Our pricing</h2>
      <div class="row justify-content-center">
        <div id="regular-pickup-card" class="card-col single-pricing">
          <div id="regular-pickup-card-header" class="pricing-header">
            <h4>Regular Pickup</h4>
            <p>10 EUR/time</p>
          </div>
          <div>
            <div class="pricing-content">
              <ul>
                <li>
                  <i class="checkmark"></i>
                  Classic one
                </li>
                <li>
                  <i class="checkmark"></i>
                  Simple and fast
                </li>
                <li>
                  <i class="checkmark"></i>
                  At preplanned time
                </li>
              </ul>
            </div>
            <div class="pricing-btn">
              <a href="regular_pickup.php">Learn more</a>
            </div>
          </div>
        </div>

        <div id="bulk-waste-card" class="card-col single-pricing">
          <div id="bulk-waste-card-header" class="pricing-header">
            <h4>Bulk Waste Removal</h4>
            <p>15-150 EUR/item</p>
          </div>
          <div>
            <div class="pricing-content">
              <ul>
                <li>
                  <i class="checkmark"></i>
                  As much as you order
                </li>
                <li>
                  <i class="checkmark"></i>
                  Anywhere in Tallinn
                </li>
                <li>
                  <i class="checkmark"></i>
                  Faster than you thought
                </li>
              </ul>
            </div>
            <div class="pricing-btn">
              <a href="bulk_waste.php">Learn more</a>
            </div>
          </div>
        </div>

        <div id="recycling-card" class="card-col single-pricing">
          <div id="recycling-card-header" class="pricing-header">
            <h4>Recycling</h4>
            <p>10 EUR/time</p>
          </div>
          <div>
            <div class="pricing-content">
              <ul>
                <li>
                  <i class="checkmark"></i>
                  Eco-friendly
                </li>
                <li>
                  <i class="checkmark"></i>
                  Convinient and effective
                </li>
                <li>
                  <i class="checkmark"></i>
                  At preplanned time
                </li>
              </ul>
            </div>
            <div class="pricing-btn">
              <a href="recycling.php">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Testimonials subpage -->
    <div id="testimonials">
      <h2 class="last-headings">Testimonials</h2>
      <p class="last-subheading">Let the others speak about us</p>

      <!-- Slider container -->
      <div class="slider-container">

        <!-- Avatars and caption text -->
        <div class="slider fade">
          <img src="img/first_person.jpg" alt="Avatar 1" class="avatars">
          <div class="slider-text">
            <h2>
              "I had a lot of junk to get rid of, and these guys
              made it so easy. I highly recommend them."
            </h2>
            <div class="reference">
              Sarah Johnson
            </div>
          </div>
        </div>

        <div class="slider fade">
          <img src="img/second_person.jpg" alt="Avatar 1" class="avatars">
          <div class="slider-text">
            <h2>
              "Using an on-demand garbage collection service
              has been a game-changer for me. It's so convenient
              and saves me so much time. I highly recommend it!"
            </h2>
            <div class="reference">
              John Smith
            </div>
          </div>
        </div>

        <div class="slider fade">
          <img src="img/third_person.jpg" alt="Avatar 1" class="avatars">
          <div class="slider-text">
            <h2>
              "I was skeptical at first, but after using the
              their service, I'm a believer. The customer
              service was great, and my garbage was picked up
              quickly and efficiently."
            </h2>
            <div class="reference">
              Michael Brown
            </div>
          </div>
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>

      <!-- The dots/circles -->
      <div class="dots">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    </div>
  </div>

  <!-- Footer section of the document -->
  <?php require_once('footer.php'); ?>

  <script src="js/index-navigation.js"></script>
  <script src="js/testimonials-slider.js"></script>
</body>

</html>