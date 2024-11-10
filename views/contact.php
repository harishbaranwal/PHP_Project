
<?php
include_once '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phno = $_POST['phno'];
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    $message = "";

    try {
        $sql = "INSERT INTO contact_form (name, email, address, phno, subject, description) 
        VALUES (:name, :email, :address, :phno, :subject, :description)";
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':phno', $phno);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':description', $description);
        
        $stmt->execute();
        $message = "Form submitted successfully!";
    } catch (PDOException $e) {
        $message = "Error: " . $e->getMessage();
    }
}
?>
















<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../public/stylesheets/contact.css">
  <title>ByteTabs | Contact Us</title>
  <link rel="icon" type="png" href="../public/images/logo1.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Start First Section -->
  <div class="first-section">
 
  <?php include '../views/header.php'; ?>

  </div>
  <!-- End First Section -->









  <!-- Start Contact Section -->
  <div class="section-4">

    <!-- Start Contact-Modal -->
    <div class="contact-div1">
      <h1 class="">Let's Get In Touch</h1>
      <h1>Contact Us</h1>
      <div class="line-container">
        <div class="line"></div>
        <div class="circle"></div>
        <div class="line"></div>
      </div>
    </div>
    <!-- End Contact-Modal -->


    <!-- Start Contact Method -->
    <div class="contact-div2">
      <!-- Start Box 1 -->
      <div class="logo1">
        <div class="logo-design">
          <div class="logo-shadow">
            <div class="logo">
              <i class="fa-solid fa-envelope"></i>
            </div>
          </div>
        </div>
        <div class="logo-txt">
          <p class="mb-2">info@bytetabs.com</p>
          <p class="mb-0">supports@bytetabs.com</p>
        </div>
      </div>
      <!-- End Box 1 -->

      <!-- Start Box 2 -->
      <div class="logo2">
        <div class="logo-design">
          <div class="logo-shadow">
            <div class="logo">
              <i class="fa-solid fa-phone"></i>
            </div>
          </div>
        </div>
        <div class="logo-txt">
          <p class="mb-2">+91 62990 90075</p>
          <p class="mb-0">+91 70145 35091</p>
        </div>
      </div>
      <!-- End Box 2 -->

      <!-- Start Box 3 -->
      <div class="logo3">
        <div class="logo-design">
          <div class="logo-shadow">
            <div class="logo">
              <i class="fa-solid fa-location-dot"></i>
            </div>
          </div>
        </div>
        <div class="logo-txt">
          <p class="mb-2">Part 1, A78, Abul Fazal Enclave, Jamia Nagar</p>
          <p class="mb-0">Okhla, New Delhi, Delhi 110025</p>
        </div>
      </div>
      <!-- End Box 3 -->

    </div>
    <!-- End Contact Method -->


    <div class="contact-div3">
      <!-- Start Query Form -->



      <div class="container">
    <h1 class="">Need a functional contact form?</h1>
    <p class="">
        Please write us at <u> help@byteTabs.com</u> with any questions,
        concerns, or technical problems. We cannot always write back to
        everyone, but we promise to read all of our messages.
    </p>

    
    <form method="POST" action="/Alpha/public/contact" name="RegForm" onsubmit="return FormValidation(event)">
    <div class="first-line">
            <p>
                <input type="text" id="name" name="name" placeholder=" Name" />
                <span class="error-message" id="nameError"></span>
            </p>
            <p>
                <input type="text" id="EMail" name="email" placeholder="xyz@example.com" />
                <span class="error-message" id="emailError"></span>
            </p>
        </div>
        <div class="second-line">
            <p>
                <input type="text" id="Address" name="address" placeholder="Address " />
                <span class="error-message" id="addressError"></span>
            </p>
            <p>
                <input type="tel" id="phone" name="phno" placeholder="Phone : +91 " />
                <span class="error-message" id="phoneError"></span>
            </p>
        </div>
        <div class="third-line">
            <p>
                <input type="text" id="Subject" name="subject" placeholder="Subject" />
                <span class="error-message" id="subjectError"></span>
            </p>
        </div>
        <div class="fourth-line">
            <p>
                <textarea id="description" name="description" cols="30" rows="10" placeholder="Leave your msg here"></textarea>
                <span class="error-message" id="descriptionError"></span>
            </p>
        </div>
        <p>
            <input type="submit" value="Send" id="submit" />
            <input type="reset" value="Reset" name="Reset" onclick="resetForm()" />
        </p>
       

        <div class="sub_msg">
        <?php if (isset($message) && $message !== "") { ?>
            <script>
                alert('<?php echo $message; ?>');
            </script>
        <?php } ?>
    </div>
     
    </form>
</div>

      <!-- End Query Form -->

      <!--Start Location at Google Map -->
      <div class="location">
        <iframe class="w-100 rounded"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.458973290374!2d77.29204741111872!3d28.55597737560534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce50210ea5327%3A0x90a08018707ae2cf!2sMarkaz%20Hostel%20Building!5e0!3m2!1sen!2sin!4v1705692349533!5m2!1sen!2sin"
          frameborder="0" style="height: 100%; min-height: 300px; border: 0" allowfullscreen="" aria-hidden="false"
          tabindex="0" alt="Our location"></iframe>
      </div>
      <!--End Location at Google Map -->
    </div>
  </div>
  <!-- Start Contact Section -->















  <?php include '../views/footer.php'; ?>




  <!-- JavaScript FIle Link -->
  <script src="../public/javascripts/contact.js"></script>

</body>

</html>