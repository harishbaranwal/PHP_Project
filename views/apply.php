<?php
// Start the session to store the message
session_start();

// Include the database connection
include_once '../config/database.php';

$message = "";
$flag = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assign form data to variables
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $job_role = $_POST['job_role'];
    $portfolio_link = $_POST['portfolio_link'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pin_code = $_POST['pin_code'];
    $date = $_POST['date'];
    
    if ($_FILES['fileUpload']) {
        $path = $_FILES['fileUpload']['name'];
        $upload_path = "./uploads/" . $path;
    
        if (!move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $upload_path)) {
            die("Failed to upload");
        }
    } else {
        die("No file found");
    }
    
    try {
        $sql = "INSERT INTO freelancer_form (first_name, last_name, email, phone, job_role, portfolio_link, address, city, pin_code, date, cv_path)
                VALUES (:first_name, :last_name, :email, :phone, :job_role, :portfolio_link, :address, :city, :pin_code, :date, :cv_path)";
        $stmt = $pdo->prepare($sql);
    
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':job_role', $job_role);
        $stmt->bindParam(':portfolio_link', $portfolio_link);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':pin_code', $pin_code);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':cv_path', $upload_path);  // Bind the upload path
    
        if ($stmt->execute()) {
            $_SESSION['message'] = "Application submitted successfully!";
        } else {
            $_SESSION['message'] = "Error: " . print_r($stmt->errorInfo(), true);
        }
    } catch (PDOException $e) {
        $_SESSION['message'] = "Error: " . $e->getMessage();
    }
    
    // Redirect to the hire.php page with the session message
    header("Location: /Alpha/views/hire.php");
    exit;
      


}


?>






<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../public/stylesheets/apply.css">
    <title>ByteTabs | Apply Now</title>

    <link rel="icon" type="png" href="../public/images/logo1.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
</head>


<body>
    <div class="container">

        <div class="apply_box">
            <div class="logo-details">
                <img src="../public/images/logo1.jpg" alt="">
                <span class="logo_name">ByteBaba</span>
            </div>


            <!-- Start Order Details -->
            <div class="order-details" d="subscriptionDetails">
                <h2></h2>
                <div class="order-total">
                    <span></span>
                    <span></span>
                </div>
                <button id="showOrderDetails">Show Requirements</button>
                <ul>
                    <li>Unlimited access to com</li>
                    <li>Year-round Vogue Runway coverage</li>
                    <li>A limited-edition Vogue tote and calendar</li>
                    <li>The latest fashion news, celebrity style, and more</li>
                </ul>

                <button id="hideOrderDetails" style="display: none;">Hide Requirements</button>
            </div>
            <!-- End Order Details -->

            <!-- <form method="POST" action="" name="RegForm" class="form" enctype="multipart/form-data" onsubmit="return FormValidation(event)"> -->
            <!-- <form method="POST" action="/Alpha/public/apply" name="RegForm" class="form" enctype="multipart/form-data"  onsubmit="return FormValidation(event)" > -->
            <form method="POST" action="/Alpha/public/apply" name="RegForm" class="form" enctype="multipart/form-data" >
    
            <div class="form_container">
                    <div class="form_control">
                        <label for="first_name">First name</label>
                        <input type="text" id="first_name" name="first_name" placeholder="Enter your first name"  />
                        <span class="error-message" id="first_name_error"></span>
                    </div>
                    <div class="form_control">
                        <label for="last_name">Last name</label>
                        <input type="text" id="last_name" name="last_name" placeholder="Enter your Last name"  />
                        <span class="error-message" id="last_name_error"></span>
                    </div>
                    <div class="form_control">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your Email.."  />
                        <span class="error-message" id="email_error"></span>
                    </div>
                    <div class="form_control">
                        <label for="phone">Your Phone No.</label>
                        <input type="number" id="phone" name="phone" placeholder="Enter your Mobile No."  />
                        <span class="error-message" id="phone_error"></span>
                    </div>
                    <div class="form_control">
                        <label for="job_role">Your Job Role</label>
                        <select name="job_role" id="job_role">
                            <option value="" disabled selected hidden>Choose your job role</option>
                            <option value="frontend">Front-end developer</option>
                            <option value="backend">Back-end developer</option>
                            <option value="full_stack">Full Stack developer</option>
                            <option value="ui_ux">UI - UX developer</option>
                        </select>
                        <span class="error-message" id="job_error"></span>
                    </div>
                    <div class="form_control">
                        <label for="portfolio_link">Your Portfolio link</label>
                        <input type="url" id="portfolio_link" name="portfolio_link" placeholder="Enter your Portfolio link.."  />
                        <span class="error-message" id="link_error"></span>
                    </div>
                    <div class="textarea_control">
                        <label for="address">Your Address</label>
                        <textarea type="text" id="address" name="address" placeholder="Enter your Address.." rows="4"
                            cols="50"></textarea>
                            <span class="error-message" id="address_error"></span>
                    </div>
                    <div class="form_control">
                        <label for="city">Your City</label>
                        <input type="text" id="city" name="city" placeholder="Enter your City (Town).."  />
                        <span class="error-message" id="city_error"></span>
                    </div>
                    <div class="form_control">
                        <label for="pin_code">Pin Code</label>
                        <input type="number" id="pin" name="pin_code" placeholder="Enter your Pin Code.." 
                             />
                            <span class="error-message" id="pin_error"></span>
                    </div>
                    <div class="form_control">
                        <label for="date">Date</label>
                        <input type="date" id="date" name="date"   />
                        <span class="error-message" id="date_error"></span>
                    </div>
                    <div class="form_control">
                        <label for="fileUpload">Upload your C.V.</label>
                  
                            <input id="files" type="file" name="fileUpload" />
                        <!-- <output id="result" /> -->
                        <span class="error-message" id="file_error"></span>
                    </div>
                </div>
                <div class="button_container">
                    <button type="submit">Apply Now</button>
                </div>
               
           
        <div class="sub_msg">
    <?php if ($flag): ?>
        <script>
            alert('<?php echo $message; ?>');
        </script>
    <?php endif; ?>
</div>


            </form>







            
        </div>
        
    </div>

    <script src="../public/javascripts/apply.js"></script>
</body>

</html>