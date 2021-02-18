

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Resume</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/icona.png" rel="icon">

  <!-- Google Fonts --> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: MyResume - v4.0.1
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<?php
require ('aboutContainer.php');

$about = new aboutContainer; 




  ?>
 <header id="header" class="d-flex flex-column justify-content-center">
    <nav>
        <a href="#" class="logo"><img src="../assets/img/icona.png"/>Arbesa's Resume</a>
        <ul class="menu">
            <li><a href="#hero" class="nav-link scrollto active">Home</a></li>
            <li><a href="#about" class="nav-link scrollto">About</a></li>
            <li><a href="#resume" class="nav-link scrollto">Resume</a></li>
            <li><a href="#contact" class="nav-link scrollto" >Contact</a></li>
        </ul>
        <a href="#" class="lang">En</a>
    </nav>
    </header>
<h2 style="color: blue; margin-top:100px; text-align:center">About Arbese</h2>
<?php 
  if(isset($_POST))
  {
    $about->all();
  }
?>


   