<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../public/stylesheets/blog.css">
    <title>ByteTabs | Blog</title>
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






    <!-- Start Scroll Section -->
    <div class="section-2">
        <div class="scroll">
            <!-- Previous Arrow -->
            <div class="prev-arrow" onclick="scrollNavbar('left')">&#10094;</div>

            <!-- Start Navbar Menu -->
            <div class="navbar" id="navbar">
                <a href="#"><img src="../public/images/news.png" alt="">Tech News</a>
                <a href="#"><img src="../public/images/feedback.png" alt="">Product Reviews</a>
                <a href="#"><img src="../public/images/insight.png" alt="">Industry Insights</a>
                <a href="#"> <img src="../public/images/web.png" alt="">Guest Posts</a>
                <a href="#"><img src="../public/images/shopper.png" alt="">Lifestyle</a>
                <a href="#"><img src="../public/images/wellness.png" alt="">Food and Wellness</a>
                <a href="#"> <img src="../public/images/case-study.png" alt="">Case Studies</a>
                <a href="#"> <img src="../public/images/public-opinion.png" alt="">Opinion Pieces</a>
                <a href="#"><img src="../public/images/humor.png" alt="">Tech Humor</a>
            </div>
            <!-- End Navbar Menu -->
            <!-- Next Arrow -->
            <div class="next-arrow" onclick="scrollNavbar('right')">&#10095;</div>
        </div>
    </div>
    <!-- End Scroll Section -->

    <!-- Start Slider Section -->
    <div class="slideshow-container">
        <!-- Start Slider 1-->
        <div class="mySlides fade">
            <div class="img_slid">
                <div class="left_part">
                    <button>Technology</button>
                    <h1> AI in new Galaxy S24 is cool but will not remain exclusive to them in a few months</h1>
                    <p>One of the key features of the Samsung Galaxy S24 series is the use of AI inside the phones.
                        These AI features are indeed cool. And because they are cool, chances are they will soon also be
                        coming to other smartphones in the market, most likely with third-party apps.</p>
                </div>
                <div class="right_part">
                    <img src="../public/images/technoology.jpg">
                </div>
            </div>
        </div>
        <!-- End Slider 1-->

        <!-- Start Slider 2-->
        <div class="mySlides fade">
            <div class="img_slid">
                <div class="left_part">
                    <button>Events</button>
                    <h1> Faculty of Management Studies hosts conference on Social Entrepreneurship</h1>
                    <p>NEW DELHI: Social on Social in collaboration with Goonj and Faculty of Management Studies,
                        University of Delhi, a premier B-school in the country inaugurated the conference on Empowering
                        Change.</p>
                </div>
                <div class="right_part">
                    <img src="../public/images/event.jpg">
                </div>
            </div>
        </div>
        <!-- End Slider 2-->

        <!-- Start Slider 3-->
        <div class="mySlides fade">
            <div class="img_slid">
                <div class="left_part">
                    <button>Opinion</button>
                    <h1> AI Is Much Better at Evolution Than Revolution</h1>
                    <p>Microsoft's experiment with Bing and ChatGPT shows artificial intelligence can't magically
                        transform an ailing product, but it can enhance the ones that people already use.</p>
                </div>
                <div class="right_part">
                    <img src="../public/images/opinion.jpg">
                </div>
            </div>
        </div>
        <!-- End Slider 3-->

        <!-- Start 3 Dots Part-->
        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <!-- End 3 Dots Part-->
    </div>
    <br>
    <!-- End Slider Section -->


    <!-- Start Section-4 -->
    <div class="section-4">
        <!-- Start Heading Section-->
        <div class="section-heading">
            <h1> Fashion and Lifestyle</h1>
            <button>View More</button>
        </div>
        <!-- End Heading Section-->
        <!-- Start Section Content-->
        <div class="section-content">
            <!-- Start Cards Section-->
            <div class="cards">
                <!-- Start Card 1-->
                <div class="card1 card">
                    <!-- Card Image -->
                    <img src="../public/images/fashion1.jpg" alt="">
                    <!-- Start Card Content-->

                    <div class="card-content">
                        <h4>An easy Guide to buying Denim & My favourite styles
                        </h4>
                        <!-- Start Post-By Section-->
                        <div class="author">
                            <img src="../public/images/2.jpg" alt="">
                            <span>
                                <p>Harsh Bansal</p>
                                <p>jan 14, 2024.</p>
                            </span>
                        </div>
                        <!-- End Post-By Section-->
                    </div>
                    <!-- End Card Content-->
                </div>
                <!-- End Card 1-->
                <!-- Start Card 2-->

                <div class="card2 card">
                    <!-- Card Image -->
                    <img src="../public/images/fashion2.jpg" alt="">
                    <!-- Start Card Content-->
                    <div class="card-content">
                        <h4>The Satin Skirt & How to Wear it all year round fashion
                        </h4>
                        <!-- Start Post-By Section-->
                        <div class="author">
                            <img src="../public/images/7.jpg" alt="">

                            <span>
                                <p>Sakshi Roy</p>
                                <p>Jan 5, 2024.</p>
                            </span>
                        </div>
                        <!-- End Post-By Section-->
                    </div>
                    <!-- End Card Content-->
                </div>
                <!-- Start Card 2-->
                <!-- End Card 3-->
                <div class="card3 card">
                    <!-- Card Image -->
                    <img src="../public/images/fashion3.jpg" alt="">
                    <!-- Start Card Content-->
                    <div class="card-content">
                        <h4>What I'll be Wearing this Party Season &amp; the Festive edit
                        </h4>
                        <!-- Start Post-By Section-->
                        <div class="author">
                            <img src="../public/images/11.jpg" alt="">
                            <span>
                                <p>Sonam Kapoor</p>
                                <p>Dec 24, 2023.</p>
                            </span>

                        </div>
                        <!-- End Post-By Section-->
                    </div>
                    <!-- End Card Content-->
                </div>
                <!-- End Card 2-->
            </div>
            <!-- End Cards Section-->
        </div>
        <!-- ENd Section Content-->
    </div>
    <!-- End Section-4 -->

    <!-- Start Section-5 -->
    <div class="section-5">
        <!-- Start Heading Section-->
        <div class="section-heading">
            <h1> Beauty</h1>
            <button>View More</button>
        </div>
        <!-- End Heading Section-->

        <!-- Start Section Content-->
        <div class="section-content">
            <!-- Start Boxes Section-->
            <div class="boxes">
                <!-- Start Box 1-->
                <div class="box">
                    <!-- Box Image -->
                    <img src="../public/images/beauty1.jpg" alt="">
                    <!-- Start Box Content-->
                    <div class="box-content">
                        <h4>Natural Spa - Where you feel unique and special

                        </h4>
                        <!-- Start Post-By Section-->
                        <div class="author">
                            <img src="../public/images/8.jpg" alt="">
                            <span>
                                <p>Purnima Sahu</p>
                                <p>Jan 18, 2024.</p>
                            </span>

                        </div>
                        <!-- End Post-By Section-->
                    </div>
                    <!-- End Box Content-->
                </div>
                <!-- End Box 1-->
                <!-- Start Box 2-->
                <div class="box">
                    <!-- Box Image -->
                    <img src="../public/images/beauty2.jpg" alt="">
                    <!-- Start Box Content-->
                    <div class="box-content">
                        <h4>How to get Beautiful coloring Highlights this weak

                        </h4>
                        <!-- Start Post-By Section-->
                        <div class="author">
                            <img src="../public/images/10.jpg" alt="">
                            <span>
                                <p>Khushi Sarohi</p>
                                <p>Jan 5, 2024.</p>
                            </span>

                        </div>

                        <!-- End Post-By Section-->
                    </div>
                    <!-- End Box Content-->
                </div>
                <!-- End Box 2-->
                <!-- Start Box 3-->
                <div class="box">
                    <!-- Box Image -->
                    <img src="../public/images/beauty3.jpg" alt="">
                    <!-- Start Box Content-->
                    <div class="box-content">
                        <h4>New Hair Styles can look fabulous and shiny

                        </h4>
                        <!-- Start Post-By Section-->
                        <div class="author">
                            <img src="../public/images/9.jpg" alt="">
                            <span>
                                <p>Anshika</p>
                                <p>Dec 28, 2023.</p>
                            </span>

                        </div>
                        <!-- End Post-By Section-->
                    </div>
                    <!-- End Box Content-->
                </div>

                <!-- End Box 3-->
                <!-- Start Box 4-->
                <div class="box">
                    <!-- Box Image -->
                    <img src="../public/images/beauty4.jpg" alt="">
                    <!-- Start Box Content-->
                    <div class="box-content">
                        <h4>How our dreams should shine and spray beauty to us.
                        </h4>
                        <!-- Start Post-By Section-->
                        <div class="author">
                            <img src="../public/images/6.jpg" alt="">
                            <span>
                                <p>Sarthak Rathore</p>
                                <p>Dec 15, 2023.</p>
                            </span>

                        </div>
                        <!-- End Post-By Section-->
                    </div>
                    <!-- End Box Content-->
                </div>
                <!-- End Box 4-->
            </div>
            <!-- End Boxes Section-->
        </div>
        <!-- End Section Content-->
    </div>
    <!-- End Section-5 -->


    <!-- Start Section-6 -->
    <div class="section-6">
        <!-- Start Heading Section-->
        <div class="section-heading">
            <h1> Trending Now</h1>
            <button>View More</button>
        </div>
        <!-- End Heading Section-->

        <!-- Start Section Content-->
        <div class="section-content">
            <!-- Start Section Part-->
            <div class="section-part">
                <!-- Start Left Section-->
                <div class="left-section section-part-content ">
                    <!-- Section Image -->
                    <img src="../public/images/trending1.jpg " alt="">
                    <!--Start Box Content-->
                    <div class="box-content">
                        <button>Sports</button>
                        <h4>Playing footbal with your feet is one thing.

                        </h4>
                        <!-- Start Post-By Section-->
                        <div class="author">
                            <img src="../public/images/1.jpg" alt="">
                            <span>
                                <p>Siddharth Sai</p>
                                <p>Jan 22, 2024.</p>
                            </span>
                        </div>
                        <!-- End Post-By Section-->
                    </div>
                    <!-- End Box Content-->
                </div>
                <!-- End Left Section-->
                <!-- Start Right Section-->
                <div class="right-section section-part-content">
                    <!-- Section Image -->
                    <img src="../public/images/trending2.jpg" alt="">
                    <!-- Start Box Content-->
                    <div class="box-content">
                        <button>Fitness</button>
                        <h4>Experience the state of the art fitness! Fitness on Track
                        </h4>
                        <!-- Start Post-By Section-->
                        <div class="author">
                            <img src="../public/images/4.jpg" alt="">
                            <span>
                                <p>Ansh Agrawal</p>
                                <p>jan 4, 2024.</p>
                            </span>
                        </div>
                        <!-- End Post-By Section-->
                    </div>
                    <!-- End Box Content-->
                </div>
                <!-- End Right Section-->
            </div>
            <!-- End Section Part-->
        </div>
        <!-- End Section Content-->
    </div>
    <!-- End Section-6 -->


    <?php include '../views/footer.php'; ?>



    <!-- JavaScript FIle Link -->
    <script src="../public/javascripts/blog.js"></script>

</body>

</html>