

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../public/stylesheets/work.css">
  <title>ByteTabs | Blog</title>
  <link rel="icon" type="png" href="../../public/images/logo1.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

  <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
  

</head>

<body>
  <!-- Start First Section -->
  <div class="first-section">
    <!-- Start Nav Bar -->
    <nav>
      <ul>
        <!-- Start Logo Part-->
        <li class="logo">
          <img src="../../public/images/logo1.jpg" alt="">
          <span>Byte</span>Tabs
        </li>
        <!-- End Logo Part -->

        <!-- Start Navbar Content -->
        <div class="items">
      
          <li><a href="/Alpha/views/home.php">Home</a></li>
          <li><a href="/Alpha/views/hire.php">Hiring</a></li>
          <li><a href="/Alpha/views/contact.php">Contact Us</a></li>
          <!-- Start Navbar Content SideNavbar Open with Hamburger -->
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="/Alpha/views/home.php">Home</a>
            <a href="/Alpha/views/about.php">About Us</a>
            <a href="/Alpha/views/service.php">Services</a>
            <a href="/Alpha/views/blog.php">Blog</a>
            <a href="/Alpha/views/hire.php">Hiring</a>
            <a href="/Alpha/views/contact.php">Contact Us</a>
          </div>
          <!-- End Navbar Content SideNavbar Open with Hamburger -->

          <!-- Hamburger For Small Screen-->
          <li class="btn hamburger"><span class="fas fa-bars"></span></li>
        </div>
        <!-- ENd Navbar Content -->
      </ul>
    </nav>
    <!-- End Nav Bar -->
  </div>
  <!-- End First Section -->













<div class="img-container"></div>

<div class="main-container">
    <div class="product-container">
        <div class="underline">
            <h1><?php echo htmlspecialchars($data['title']); ?></h1>
        </div>
        <p><?php echo htmlspecialchars($data['description']); ?></p>
    </div>

    <div class="right-container">
        <div class="service">
            <h4>SERVICES</h4>
            <div class="service-box">
                <div class="left-service">
                    <p><?php echo htmlspecialchars($data['service1']); ?></p>
                </div>
                <div class="right-service">
                    <p><?php echo htmlspecialchars($data['service2']); ?></p>
                </div>
            </div>
        </div>

        <div class="team">
            <h4>TEAM</h4>
            <div class="team-box">
                <div class="left-team">
                    <?php foreach ($data['team1'] as $member): ?>
                        <p><?php echo htmlspecialchars($member); ?></p>
                    <?php endforeach; ?>
                </div>
                <div class="right-team">
                    <?php foreach ($data['team2'] as $member): ?>
                        <p><?php echo htmlspecialchars($member); ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>






<div class="banner">
    <img src="../../public/images/three4.jpg" alt="">
</div>

<div class="description">
    <div class="description-box">
        <div class="description-heading">THE PROBLEM</div>
        <div class="description-details">
            <p><?php echo htmlspecialchars($data['details1']); ?></p>
        </div>
    </div>
    <div class="description-box">
        <div class="description-heading">GOAL</div>
        <div class="description-details">
            <p><?php echo htmlspecialchars($data['details2']); ?></p>
        </div>
    </div>
    <div class="description-box">
        <div class="description-heading">THE SOLUTION</div>
        <div class="description-details">
            <p><?php echo htmlspecialchars($data['details3']); ?></p>
        </div>
    </div>
</div>










  <div class="section-heading">
    <h3>Projects Spotlight</h3>
    <div class="underline">
       <h1>OUR WORK IN FOCUS</h1>
    </div>
 </div>
  <div class="board">
    
    <div class="cards-row">
      <div class="card">
        <img src="../../public/images/three1.jpg" alt="">
      </div>
      <div class="card">
        <img src="../../public/images/three2.jpg" alt="">
      </div>
      <div class="card">
        <img src="../../public/images/three3.jpg" alt="">
      </div>
      <div class="card">
        <img src="../../public/images/three4.jpg" alt="">
      </div>
      <div class="card">
        <img src="../../public/images/three5.jpg" alt="">
      </div>
    </div>
  </div>
  <!--End of Board Section  -->



















  <!-- Start Footer Section -->
  <footer>
    <div class="content">
      <!-- Start Footer Top Part -->
      <div class="bottom">
        <!-- Start Logo Details -->
        <div class="logo-details">
          <img src="../../public/images/logo1.jpg" alt="">
          <span class="logo_name">ByteTabs</span>
        </div>
        <!-- End Logo Details -->
        <!-- Start Social Media Icon Section -->
        <div class="media-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-telegram"></i></a>
        </div>
        <!-- End Social Media Icon Section -->
      </div>
      <!-- End Footer Top Part -->

      <hr>

      <!-- Start Footer Body -->
      <div class="link-boxes">
        <!-- Start Menu Section-->
        <ul class="box box1">
          <li class="link_name">Menu</li>
          <li><a href="/Alpha/views/home.php">Home</a></li>
          <li><a href="/Alpha/views/about.php">About us</a></li>
          <li><a href="/Alpha/views/service.php">Services</a></li>
          <li><a href="/Alpha/views/hire.php">Hiring</a></li>
          <li><a href="/Alpha/views/blog.php">Blog</a></li>
          <li><a href="/Alpha/views/contact.php">Contact Us</a></li>
        </ul>
        <!-- End Menu Section-->

        <!-- Start Service Section-->
        <ul class="box box2">
          <li class="link_name">Services</li>
          <li><a href="/index#website-design" class="service-link" data-target="website-design">Website Design</a></li>
          <li><a href="/index#graphic-design" class="service-link" data-target="graphic-design">Graphic Design</a></li>
          <li><a href="/index#product-modeling" class="service-link" data-target="product-modeling">Product Modeling</a></li>
          <li><a href="/index#ui_ux-design" class="service-link" data-target="ui_ux-design">UI/UX Design</a></li>
          <li><a href="/index#video-editing" class="service-link" data-target="video-editing">Video Editing</a></li>
          <li><a href="/index#social-media-handling" class="service-link" data-target="social-media-handling">Social Media Handling</a></li>
      
        </ul>
        <!-- End Service Section-->

        <!-- Start Address Section-->
        <ul class="box box3">
          <li class="link_name">Address</li>
          <li><a href="#">Part 1, A71, Abul Fazal Enclave,</a></li>
          <li><a href="#">Jamia Nagar, Okhla, New Delhi</a></li>
          <li><a href="#">Delhi,110025</a></li>
        </ul>
        <!-- End Address Section-->

        <!-- Start Image Section-->
        <ul class="box input-box">
          <!-- Start Image Slider -->
          <div class="ads">
            <div class="images">
              <img src="../../public/images/a1.jpg">
              <img src="../../public/images/a2.jpg">
              <img src="../../public/images/a3.jpg">
              <img src="../../public/images/a4.jpg">
              <img src="../../public/images/a5.jpg">
              <img src="../../public/images/a6.jpg">
              <img src="../../public/images/a7.jpg">
              <img src="../../public/images/a8.jpg">
              <img src="../../public/images/a9.jpg">
              <img src="../../public/images/a10.jpg">
            </div>
          </div>
          <!-- Start Image Slider -->
        </ul>
        <!-- End Image Section-->
      </div>
      <!-- End Footer Body -->
    </div>


    <!-- Start Footer bottom Part -->
    <div class="footer-txt">
      <div class="footer-txt-content">
        <!-- Start Footer bottom  Left Part -->
        <div class="policy_terms">
          <h4>Privacy Policy</h4>
          <h4>Terms & Conditions</h4>
        </div>
        <!-- End Footer bottom  Left Part -->
        <!-- Start Footer bottom  Right Part -->
        <div class="copyright_text">
          <h4>Copyright ©2024 ByteTabs. </h4>
          <h4>All rights reserved.</span></h4>
        </div>
        <!-- End Footer bottom  Right Part -->
      </div>
    </div>
    <!-- End Footer bottom Part -->
  </footer>
  <!-- End Footer Sectiion -->



  <!-- JavaScript FIle Link -->
  <script src="../../public/javascripts/work.js"></script>

</body>

</html>