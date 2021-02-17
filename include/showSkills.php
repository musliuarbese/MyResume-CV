<?php 
include('db_con.php'); ?>
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
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">/
  <!-- =======================================================
  * Template Name: MyResume - v4.0.1
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
<?php
	include('header.php');
?>




  <!-- ======= Header ======= -->
  
<?php

$select = 'SELECT * FROM `skills`';
	$result = mysqli_query($conn,$select) or die ('invalid query:'. mysqli_error());
  
 
        if($result)
     {
	      foreach($result as $row)
	     {
        $teknologjia =$row['teknologjia'];
        $perqindja =$row['perqindja'];
        
        ?>
 <div class="col-lg-8 mt-5 mt-lg-0">
<form action="include/editSkills.php" method="post" onSubmit="" role="form"  style="margin-top: 200px; margin-left: 480px; margin-bottom: 100px">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="teknologjia" class="form-control" id="teknologjia" placeholder="Your Technology" value=<?php echo $teknologjia; ?> required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="perqindja" id="perqindja" placeholder="Your Percentagge" value=<?php echo $perqindja ?> required>
                </div>
              </div>
              <br>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit" class="butonijem">Update Skill</button></div>
</div>
</form>
              <?php 
              }
     
    }
    ?>

    </body>
    </html>