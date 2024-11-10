<?php
session_start();

// Display the success message if it exists
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    echo "<script>alert('$message');</script>";
    
    // Unset the message to avoid repeated alerts
    unset($_SESSION['message']);
}
?>











<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../public/stylesheets/hire.css">
  <title>ByteTabs | Hiring</title>
  <link rel="icon" type="png" href="../public/images/logo1.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link href="https://fontsw.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Start First Section -->
  <div class="first-section">
  

  <?php include '../views/header.php'; ?>





    

  <!-- JavaScript FIle Link -->


    <!-- Start Head Part -->
    <div class="head-part">
      <!-- Start Left Part -->
      <div class="content-1">
        <h5>WE ARE HIRING !!!</h5>
        <h1>JOIN OUR TEAM</h1>
        <p>Join our dynamic team and shape the future with us! We're seeking passionate individuals who thrive
          in a collaborative environment, committed to innovation and excellence. Explore exciting career
          opportunities and be part of a company that values your talent and growth.</p>
      </div>
      <!-- End Left Part-->
      <!-- Start Right Part-->
      <div class="content-2">
        <!-- Start Image Slider -->
        <div class="ads">
          <div class="images">
            <img src="../public/images/h3.jpg">
            <img src="../public/images/1h1.jpg">
            <img src="../public/images/2h2.jpg">
            <img src="../public/images/ihi.jpg">
            <img src="../public/images/hi.jpg">
            <img src="../public/images/hiring'.jpg">
            <img src="../public/images/sd1.jpg">
          </div>
        </div>
        <!-- End Image Slider-->
      </div>
      <!-- End Right Part-->
    </div>
    <!-- End Head Part -->
  </div>
  <!-- End First Section -->
























  <!-- Start Hiring Section -->
  <div class="hire-position-section">
    <!-- Start Section Heading-->
    <div class="section-heading">
      <h3>We're Hiring !!!</h3>
      <div class="underline">
        <h1>OPEN POSITIONS</h1>
      </div>
    </div>
    <!-- End Section Heading-->

    <!-- Start Hiring Content-->
    <div class="hiring-content">
      <!-- Start Card 1 -->
      <div class="hire-box1 hire-box">
        <div class="box-heading">
          <h2> Graphic Designer</h2>
        </div>
        <div class="box-txt">
          <p>We are looking for a creative and passionate junior graphic designer who will be working on projects ranging from branding to identity & packaging design. </p>
        </div>
        <div class="requirement">
          <p>Requirements:</p>
          <ul>
          <li>Minimum 1 year of experience as a graphic designer</li>
          <li>Good understanding of visual elements (layouts, typefaces, hierarchy, contrast, colour theory, etc)</li>
          <li>Knowledge of design techniques, such as prototyping
          </li>
          <li>Ability to work well within a team </li>
        </ul>
        </div>
        <div class="salary">
          <p>Salary : <span>30K - 50K</span><span>/month</span></p>
        </div>

        <div class="more-btn">
          <button onclick="showSubscription('Graphic Designer')"> APPLY NOW</button>
        </div>
      </div>
      <!-- End Card 1 -->
      
      <!-- Start Card 2 -->
      <div class="hire-box2 hire-box">
        <div class="box-heading">
          <h2>Content Creator</h2>
        </div>
        <div class="box-txt">
          <p>We're looking for skilled and motivated content creator who is able to execute strategies or develop and execute strategies for our many clients </p>
        </div>
        <div class="requirement">
          <p>Requirements:</p>
          <ul>
          <li>Excellent writing and editing skills</li>
          <li>Ability to research and write on a variety of topics</li>
          <li>Familiarity with SEO best practices</li>
          <li>Strong attention to detail and ability to meet deadlines</li>
          <li>Experience with content management systems (e.g., WordPress)</li>
        </ul>
        </div>
        <div class="salary">
          <p>Salary : <span>25K - 45K</span><span>/month</span></p>
        </div>

        <div class="more-btn">
          <button onclick="showSubscription('Content Creator')"> APPLY NOW</button>
        </div>
      </div>
      <!-- End Card 2 -->

      <!-- Start Card 3 -->
      <div class="hire-box3 hire-box">
        <div class="box-heading">
          <h2>Social Media Manager</h2>
        </div>
        <div class="box-txt">
          <p>We're looking for a social media manager to oversee our clients' social media accounts and develop strategies to grow their online presence. </p>
        </div>
        <div class="requirement">
          <p>Requirements:</p>
          <ul>
          <li>Proficiency in social media platforms (Facebook, Twitter, Instagram, LinkedIn)</li>
          <li>Excellent communication and interpersonal skills</li>
          <li>Ability to think creatively and generate new ideas</li>
          <li>Knowledge of social media analytics and reporting</li>
        </ul>
        </div>
        <div class="salary">
          <p>Salary : <span>25K - 60K</span><span>/month</span></p>
        </div>

        <div class="more-btn">
          <button onclick="showSubscription('Social Media Manager')"> APPLY NOW</button>
        </div>
      </div>
      <!-- End Card 3 -->

      <!-- Start Card 4 -->
      <div class="hire-box4 hire-box">
        <div class="box-heading">
          <h2>Video Editor</h2>
        </div>
        <div class="box-txt">
          <p>We're looking for a talented video editor to join our team who have experience in video editing and a strong creative vision. </p>
        </div>
        <div class="requirement">
          <p>Requirements:</p>
          <ul>
          <li>Proficiency in video editing software (e.g., Adobe Premiere Pro, Final Cut Pro)</li>
          <li>Strong understanding of video editing techniques, including pacing, transitions, and effects.</li>
          <li>Strong attention to detail and ability to work under tight deadlines
          </li>
          <li>Familiarity with motion graphics and animation is a plus.</li>
          
        </ul>
        </div>
        <div class="salary">
          <p>Salary : <span>30K - 50K</span><span>/month</span></p>
        </div>

        <div class="more-btn">
          <button onclick="showSubscription('Video Editor')">APPLY NOW</button>
        </div>
      </div>
      <!-- End Card 4 -->

      <!-- Start Card 5 -->
      <div class="hire-box5 hire-box">
        <div class="box-heading">
          <h2>UX/UI Designer</h2>
        </div>
        <div class="box-txt">
          <p>We're looking for a UX/UI designer to create intuitive & visually appealing user interfaces for our clients' websites & applications. </p>
        </div>
        <div class="requirement">
          <p>Requirements:</p>
          <ul>
          <li>Proficiency in design tools such as Sketch, Adobe XD, or Figma</li>
          <li>Excellent in UX/UI design principles</li>
          <li>Ability to create wireframes, prototypes, and mockups
          </li>
          <li>Experience with user research and usability testing
          </li>
        
          <li>Minimum 1 year of experience as a UI/UX designer</li>
        </ul>
        </div>
        <div class="salary">
          <p>Salary : <span>30K - 45K</span><span>/month</span></p>
        </div>

        <div class="more-btn">
          <button onclick="showSubscription('UI/UX Designer')">  APPLY NOW</button>
        </div>
      </div>
      <!-- End Card 5 -->

      <!-- Start Card 6 -->
      <div class="hire-box6 hire-box">
        <div class="box-heading">
          <h2>Web Designer</h2>
        </div>
        <div class="box-txt">
          <p>We are looking for a creative nerd that can present result-oriented ideas and creativity to peers and management. </p>
        </div>
        <div class="requirement">
          <p>Requirements:</p>
          <ul>
          <li>Hands-on experience and proficiency in Wireframing, design, prototyping tools like Figma, Photoshop, Adobe XD etc.</li>
          <li>Familiarity with version control systems (e.g., Git)</li>
          <li>Experience with responsive design and CSS frameworks (e.g., Bootstrap)</li>
          <li>Excellent communication and teamwork abilities</li>
        </ul>
        </div>
        <div class="salary">
          <p>Salary : <span>35K - 60K</span><span>/month</span></p>
        </div>

        <div class="more-btn">
          <button  onclick="showSubscription('Web Designer')"> APPLY NOW</button>
        </div>
      </div>
      <!-- End Card 6 -->

      
     
    </div>
    <!-- End Hiring Content-->
  </div>
  <!-- End Hiring Section -->



























  <?php include '../views/footer.php'; ?>



  <!-- JavaScript FIle Link -->
  <script src="../public/javascripts/hire.js"></script>

</body>

</html>