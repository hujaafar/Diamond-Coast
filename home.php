<?php
session_start(); // Start the session

if (!isset($_SESSION['username'])) {
  header("Location: sign-in.php");
  exit();
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php include 'links.php'; ?>




  <title>Diamond Coast Hotel</title>
</head>

<body>



  <div id="untree_co--overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <nav class="untree_co--site-mobile-menu">
    <div class="close-wrap d-flex">
      <a href="#" class="d-flex ml-auto js-menu-toggle">
        <span class="close-label">Close</span>
        <div class="close-times">
          <span class="bar1"></span>
          <span class="bar2"></span>
        </div>
      </a>
    </div>
    <div class="site-mobile-inner"></div>
  </nav>


  <div class="untree_co--site-wrap">

    <nav class="untree_co--site-nav js-sticky-nav">
      <div class="container d-flex align-items-center">
        <div class="logo-wrap">
          <a href="home.php" class="untree_co--site-logo">Diamond Coast Hotel</a>
        </div>
        <div class="site-nav-ul-wrap text-center d-none d-lg-block">
          <ul class="site-nav-ul js-clone-nav">
            <li class="has-children">
              <a href="rooms.php" class="active">Rooms</a>
              <ul class="dropdown">
                <li>
                  <a href="#">King Bedroom</a>
                </li>
                <li>
                  <a href="#">Queen &amp; Double Bedroom</a>
                </li>
                <li>
                  <a href="#">Le Voila Suite</a>
                </li>
              </ul>
            </li>
            <li><a href="myBooking.php" >My Booking</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="weather.php">Weather</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
        <div class="icons-wrap text-md-right">

        <ul class="icons-top d-none d-lg-block">
        <li class="mr-4">
        <a href="#" class="js-search-toggle"><span class="fa fa-search"></span></a>
        </li>
        <li>
            <a href="#" id="darkModeToggle"><i class="fa-solid fa-moon" id="icon"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa-solid fa-user"></i></a>
        </li>
        <li>
            <a href="log-out.php"><i class="fa-solid fa-right-from-bracket"></i></a>
        </li>
    </ul>


          <!-- Mobile Toggle -->
          <a href="#" class="d-block d-lg-none burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>
        </div>
      </div>
    </nav>

    <div class="untree_co--site-main">


      <div class="owl-carousel owl-hero">

        <div class="untree_co--site-hero overlay" style="background-image: url('images/slider_2.jpg')">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-8">
                <div class="site-hero-contents text-center" data-aos="fade-up">
                  <h1 class="hero-heading">Diamond Coast Hotel</h1>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="untree_co--site-hero overlay" style="background-image: url('images/slider_1.jpg')">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-7">
                <div class="site-hero-contents text-center" data-aos="fade-up">
                  <h1 class="hero-heading">Enjoy Your Stay</h1>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="untree_co--site-hero overlay" style="background-image: url('images/room_1_a.jpg')">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-10">
                <div class="site-hero-contents text-center" data-aos="fade-up">
                  <h1 class="hero-heading">Away from the Hustle and Bustle of City Life</h1>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="untree_co--site-section float-left pb-0 featured-rooms">

        <div class="container pt-0 pb-5">
          <div class="row justify-content-center text-center">
            <div class="col-lg-6 section-heading" data-aos="fade-up">
              <h3 class="text-center">Featured Rooms</h3>
            </div>
          </div>
        </div>

        <div class="container-fluid pt-5">
          <div class="suite-wrap overlap-image-1">

            <div class="suite">
              <div class="image-stack">
                <div class="image-stack-item image-stack-item-top" data-jarallax-element="-50">
                  <div class="overlay"></div>
                  <img src="images/room_1_a.jpg" alt="Image" class="img-fluid pic1">
                </div>
                <div class="image-stack-item image-stack-item-bottom">
                  <div class="overlay"></div>
                  <img src="images/room_1_b.jpg" alt="Image" class="img-fluid pic2">
                </div>
              </div>
            </div> <!-- .suite -->

            <div class="suite-contents" data-jarallax-element="50">
              <h2 class="suite-title whiteTxt">King Bedroom</h2>
              <div class="suite-excerpt">
                <p>A hotel is an establishment that provides paid lodging on a short-term basis. Facilities provided may range from a modest-quality mattress in a small room to large suites with bigger.</p>
                <p><a href="rooms.php#KingRoom" class="readmore whiteTxt">Room Details</a></p>
              </div>
            </div>
          </div>

          <div class="suite-wrap overlap-image-2">

            <div class="suite">
              <div class="image-stack">
                <div class="image-stack-item image-stack-item-top">
                  <div class="overlay"></div>
                  <img src="images/room_2_a.jpg" alt="Image" class="img-fluid pic1">
                </div>
                <div class="image-stack-item image-stack-item-bottom" data-jarallax-element="-50">
                  <div class="overlay"></div>
                  <img src="images/room_2_b.jpg" alt="Image" class="img-fluid pic2">
                </div>
              </div>
            </div>

            <div class="suite-contents" data-jarallax-element="50">
              <h2 class="suite-title whiteTxt">Queen &amp; Double Bedroom</h2>
              <div class="suite-excerpt pr-5">
                <p>A hotel is an establishment that provides paid lodging on a short-term basis. Facilities provided may range from a modest-quality mattress in a small room to large suites with bigger</p>
                <p><a href="rooms.php#QueenRoom" class="readmore whiteTxt">Room Details</a></p>
              </div>
            </div>

          </div>

        </div>
      </div>

      <div class="untree_co--site-section">
        <div class="container">
          <div class="container pt-0 pb-5">
            <div class="row justify-content-center text-center">
              <div class="col-lg-6 section-heading" data-aos="fade-up">
                <h3 class="text-center">Hotel Amenities</h3>
              </div>
            </div>
          </div>
          <div class="row custom-row-02192 align-items-stretch">
            <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
              <div class="media-29191 text-center h-100">
                <div class="media-29191-icon">
                  <img src="images/svg/parking.svg" alt="Image" class="img-fluid">
                </div>
                <h3>Free Self-Parking</h3>
                <p>A hotel is an establishment that provides paid lodging on a short-term basis. Facilities provided may range from a modest-quality.</p>
                <p>
                <p><a href="#" class="readmore reverse whiteTxt whiteTxt">Read More</a></p>
                </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
              <div class="media-29191 text-center h-100">
                <div class="media-29191-icon">
                  <img src="images/svg/internet.svg" alt="Image" class="img-fluid">
                </div>
                <h3>High speed Internet access</h3>
                <p>A hotel is an establishment that provides paid lodging on a short-term basis. Facilities provided may range from a modest-quality.</p>
                <p>
                <p><a href="#" class="readmore reverse whiteTxt">Read More</a></p>
                </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
              <div class="media-29191 text-center h-100">
                <div class="media-29191-icon">
                  <img src="images/svg/wifi.svg" alt="Image" class="img-fluid">
                </div>
                <h3>Complimentary WiFi in public areas</h3>
                <p>A hotel is an establishment that provides paid lodging on a short-term basis. Facilities provided may range from a modest-quality.</p>
                <p>
                <p><a href="#" class="readmore reverse whiteTxt">Read More</a></p>
                </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
              <div class="media-29191 text-center h-100">
                <div class="media-29191-icon">
                  <img src="images/svg/elevator.svg" alt="Image" class="img-fluid">
                </div>
                <h3>Elevators</h3>
                <p>A hotel is an establishment that provides paid lodging on a short-term basis. Facilities provided may range from a modest-quality.</p>
                <p>
                <p><a href="#" class="readmore reverse whiteTxt">Read More</a></p>
                </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
              <div class="media-29191 text-center h-100">
                <div class="media-29191-icon">
                  <img src="images/svg/partners.svg" alt="Image" class="img-fluid">
                </div>

                <h3>Meeting rooms</h3>
                <p>A hotel is an establishment that provides paid lodging on a short-term basis. Facilities provided may range from a modest-quality.</p>
                <p>
                <p><a href="#" class="readmore reverse whiteTxt">Read More</a></p>
                </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
              <div class="media-29191 text-center h-100">
                <div class="media-29191-icon">
                  <img src="images/svg/washing-machine.svg" alt="Image" class="img-fluid">
                </div>
                <h3>Laundry and Valet service</h3>
                <p>A hotel is an establishment that provides paid lodging on a short-term basis. Facilities provided may range from a modest-quality.</p>
                <p>
                <p><a href="#" class="readmore reverse whiteTxt">Read More</a></p>
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>

      <?php include 'specialRequest.php'; ?>


    </div>
    <?php include 'footer.php'; ?>
  </div>

  <!-- Search -->
  <?php include 'searchWrapper.php'; ?>

</body>

</html>