<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Tallinn University of Technology – Web Technologies Project - HTML & CSS">
  <meta name="keywords" content="web_project, Throw It, book a collection">
  <meta name="author" content="Dark Side">
  <meta name="viewport" content="initial-scale=1">
  <link rel="icon" href="img/icon.png" type="image/x-icon">

  <title>Our team</title>
  <link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/footer.css">
  <link rel="stylesheet" href="styles/main.css">
  <link rel="stylesheet" href="styles/ourTeam.css">

</head>

<body>
  <!-- Header section of the document -->
  <?php require_once('header.php'); ?>

  <!-- Content section of the document -->
  <div id="main" class="content">
    <h1 class="ourteam-header">Our team</h1>
    <div class="cofounders-with-header">
      <h2 class="cofounders-header">Co-founders</h2>
      <div class="cofounders">
        <div class="cofounders-images">
            <div class="ksenija">
              <img src="img/ourteam_img1.png" alt="co-founders1" width="150px" height="150px">
              <p>Ksenija Okuneva</p>
            </div>
            <div class="vira">
              <img src="img/ourteam_img2.png" alt="co-founders2" width="150px" height="150px">
              <p>Vira Lavrova</p>
            </div>
            <!-- <div class="ilja">
              <img src="img/ourteam_img3.png" alt="co-founders3" width="150px" height="150px">
              <p>Ilja Grigorjev</p>
            </div> -->
        </div>
        <p class="cofounders-description">Meet the co-founders of our on-demand garbage collection service: Vira
          and Ksenija. Together, they bring a wealth of experience and expertise to the table, and are committed to
          providing our customers with the highest level of service.</p>
      </div>
    </div>
    <div class="manager-with-header">
      <h2 class="manager-header">Operations manager</h2>
      <div class="manager">
        <div class="victoria">
          <img src="img/ourteam_img4.png" alt="Victoria" width="150px" height="150px">
          <p>Victoria Chen</p>
        </div>
        <p class="manager-description">Victoria is in charge of coordinating our daily operations and ensuring that our
          team is providing the best possible service to our customers. With her attention to detail and organizational
          skills, she keeps the company running smoothly.</p>
      </div>
    </div>
    <div class="driver-with-header">
      <h2 class="driver-header">Lead driver</h2>
      <div class="driver">
        <div class="adrian">
          <img src="img/ourteam_img5.png" alt="Adrian" width="150px" height="150px">
          <p>Adrian Lopez</p>
        </div>
        <p class="manager-description">As our lead driver, Adrian oversees our garbage collection and disposal efforts.
          He has years of experience in the industry and knows how to handle a variety of waste materials safely and
          efficiently.</p>
      </div>
    </div>
    <div class="custservice-with-header">
      <h2 class="custservice-header">Customer Service Representative</h2>
      <div class="custservice">
        <div class="emily">
          <img src="img/ourteam_img6.png" alt="Emily" width="150px" height="150px">
          <p>Emily Williams</p>
        </div>
        <p class="manager-description">Emily is the friendly voice on the other end of the phone when you call us. She's
          always happy to answer any questions you may have and ensure that your experience with us is a positive one.
        </p>
      </div>
    </div>
    <div class="recycling-with-header">
      <h2 class="recycling-header">Recycling Coordinator</h2>
      <div class="recycling">
        <div class="alex">
          <img src="img/ourteam_img7.png" alt="Alex" width="150px" height="150px">
          <p>Alex Scott</p>
        </div>
        <p class="recycling-description">As our recycling coordinator, Alex is responsible for ensuring that all
          recyclable materials are properly sorted and processed. He's passionate about reducing waste and preserving
          the environment.</p>
      </div>
    </div>
  </div>

  <!-- Footer section of the document -->
  <?php require_once('footer.php'); ?>
</body>

</html>