<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Resume</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icona.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts --> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">/
  <!-- =======================================================
  * Template Name: MyResume - v4.0.1
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php
	include('include/header.php');
?>

<div class="col-lg-8 mt-5 mt-lg-0" style="margin-top: 300px">

            <form action="include/addAboutMe.php" method="post" onSubmit="" role="form" style="margin-top: 200px; margin-left: 480px">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="title" class="form-control" id="title" placeholder="Your Title" required>
                </div>
                <!-- <div></div><br> -->
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="birthday" id="birthday" placeholder="Your Birthday" required>
                </div>
                <div></div><br>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="website" id="website" placeholder="Your Website" required>
                </div>
                <!-- <div></div><br> -->
              <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
                </div>
                <div></div><br>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="city" id="city" placeholder="Your City" required>
                </div>
                <!-- <div></div><br> -->
              <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="age" id="age" placeholder="Your Age" required>
                </div>
                <div></div><br>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="degree" id="degree" placeholder="Your Degree" required>
                </div>
                <!-- <div></div><br> -->
              <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <br>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit" class="butonijem">Send Data</button></div>
            </form>

          </div>

        </div>


</body>

</html>