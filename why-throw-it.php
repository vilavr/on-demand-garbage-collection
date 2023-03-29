<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Tallinn University of Technology – Web Technologies Project - HTML & CSS">
  <meta name="keywords" content="web_project, Throw It, book a collection">
  <meta name="author" content="Dark Side">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/icon.png" type="image/x-icon">

  <title>Why Throw It?</title>
  <link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/footer.css">
  <link rel="stylesheet" href="styles/main.css">
  <link rel="stylesheet" href="styles/why-throw-it.css">

</head>

<body>
  <!-- Header section of the document -->
  <?php require_once('header.php'); ?>

  <!-- Content section of the document -->
  <div id="main" class="content">
    <h1 class="whyus-header">Why Throw It?</h1>
    <div class="section1">
      <img src="img/whyus_img1.jpg" alt="why_us_image1" width="240px" height="235px">
      <div class="text1" id="text1">
        <h2>Convenience</h2>
        <p>Our on-demand service allows you to schedule a pickup whenever you need it, at your convenience. You don't
          have to worry about adhering to a strict garbage collection schedule, as we're available when you need us.</p>
        <a class="btn1" href="index.php#how_it_works">Check how we work</a>
      </div>
    </div>
    <div class="section2">
      <div class="text2" id="text2">
        <h2>Pricing</h2>
        <p>Our on-demand service allows you to schedule a pickup whenever you need it, at your convenience. You don't
          have to worry about adhering to a strict garbage collection schedule, as we're available when you need us.</p>
        <a class="btn2" href="index.php#pricing">Check our prices</a>
      </div>
      <img src="img/whyus_img2.jpg" alt="why_us_image2" width="300px" height="235px">
    </div>
    <div class="section3">
      <img src="img/whyus_img3.jpg" alt="why_us_image3" width="300px" height="235px">
      <div class="text3" id="text3">
        <h2>Ecology</h2>
        <p>We're committed to reducing waste and protecting the environment. We dispose of your garbage in an
          eco-friendly way, and we also offer recycling services.</p>
        <a class="btn3" href="index.php#pricing">Check our services</a>
      </div>
    </div>
    <div class="section4">
      <div class="text4" id="text4">
        <h2>Professionalism</h2>
        <p>We take pride in our work and always strive to provide the best possible service to our customers. Our team
          is professional, friendly, and respectful of your property.</p>
        <a class="btn4" href="our-team.php">Check our team</a>
      </div>
      <img src="img/whyus_img4.jpg" alt="why_us_image4" width="300px" height="235px">
    </div>
  </div>

  <!-- Footer section of the document -->
  <?php require_once('footer.php'); ?>
</body>

</html>