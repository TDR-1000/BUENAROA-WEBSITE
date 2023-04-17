<?php
//PHP code to sent contact form to both client and owner.
if (isset($_POST['submit'])){ //Check if user enter data
    $mailto = "carylsntg@gmail.com"; //Company email
    //Client Sending Message
    
    $from = $_POST['email']; //Senders Email Address
    $name = $_POST['name']; //Senders Name
    $subject = $_POST['subject'];// Senders Subject
    $headers = "From: " . $from; //Senders Entered Email Address
    $message = "Client Name: " . $name . " Wrote the Following Message". "\n\n". $_POST['message']; //Senders Message

    //Company Sending Response Email to the Client
    $subjecttwo = "You Message is Submitted Successfully";
    $messagetwo = "Good Day, " . $name. "\n\n" . "Thank you for contacting us! We will get back to you shortly"; 
    $headerstwo = "From: " . $mailto; 

    $result = mail($mailto, $subject, $message, $headers);
    $resulttwo = mail($from, $subjecttwo, $messagetwo, $headerstwo);

    if($result){ //if email is submittd succesfully
        echo '<script type="text/javascript">alert("Message was sent successfully, 
        We will contact you shortly")</script>';
    }else{
        echo '<script type="text/javascript">alert("Submission Failed!")</script>';
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Buenaroa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- {{-- VITE --}}
  @vite(['public/assets']) -->

  <!-- Favicons -->
  <link href="assets/img/logobuena.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vlava
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/vlava-free-bootstrap-one-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><img src="assets/img/logobuena.png"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
               <!-- <li class="dropdown"><a href="#"><span>Event Styling</span> <i class="bi bi-chevron-right"></i></a>  -->
              <li class="dropdown"><a href="#"><span>Event Planning and Styling</span></a>
                <!-- <ul>
                  <li><a href="#">Balloon Arrangement</a></li>
                  <li><a href="#">Flower Arrangement</a></li>
                  <li><a href="#">Back Drop</a></li>
                  <li><a href="#">Machines</a></li>
                </ul> -->
              </li>
              <li class="dropdown"><a href="#"><span>Catering Services</span></a>
               <!-- <ul>
                  <li><a href="#">Appetizers</a></li>
                  <li><a href="#">Lunch</a></li>
                  <li><a href="#">Snacks</a></li>
                  <li><a href="#">Drinks</a></li>
                  <li><a href="#">Dessert</a></li>
                </ul>  -->
              </li>
              
              <li><a href="#">Sound System and Lights Rental</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" id="inclusion-nav" href="#portfolio"><b>Inclusions</b></a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
      
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>BUENAROA'S EVENT AND CATERING SERVICES</h1>
      <h2>Turning DREAMS into REALITY</h2>
      <a href="#about" class="btn-get-started scrollto">Know More</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>About Us</h2>
            <h3>We mainly focuses in providing Event and Catering Services.</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              We specialize in reating a truly captivating and unforgettable experiences. They offer services for various occasions, such as 
              wedding and parties, and work closely with clients to bring their dream event to life. With a keen
              sense of beauty and elegance, we strive to make each event milestone for its clients.
              Our ultimate goal is to create breathaking moments that leave a lasting impression on both clients and their guests.
            </p>
            
            <p class="fst-italic">
              We are driven by passion and dedicated to crafting truly unique and memorable experiences.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->

    <!-- End Services Section -->

    <!-- ======= Featured Section ======= -->

   <!-- End Featured Section -->

    <!-- ======= Testimonials Section ======= -->

 
    <!-- ======= Portfolio Section ======= -->
   
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
   
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->

   <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <!-- {{-- <p>Magnam dolores commodi suscipituia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div>
      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div> --}} -->
      <div class="container">
        <div class="row mt-5 justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>RE Chico St.<br>Sto.Cristo, Baliwag, Bulacan</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>carylsntg@gmail.com<br>yvette_marquez0722@yahoo.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>0968 880 3690<br>0933 181 8881</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center">
          <div class="col-lg-10">
            <form action="contact.php" method="post" role="form" class="php-email-form">
              <!-- @csrf -->
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>

    <!-- End Contact Section -->

  </main><!-- End #main -->



  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- {{-- <script src="assets/vendor/php-email-form/validate.js"></script> --}} -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>