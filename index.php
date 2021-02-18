<?php include ('include/db_con.php'); 
   $inTwoMonths = 60 * 60 * 24 * 60 + time(); 
   setcookie('lastVisit', date("G:i - d/m/y"), $inTwoMonths); 
   $first_part = "index";
   ?>

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Arbese Musliu</h1>
      <p>I'm <span class="typed" data-typed-items="Software Developer"></span></p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <?php 
          $select = 'SELECT aboutMe, title, birthday, website, phone, city, age, degree, email, description FROM `about`';
	        $result = mysqli_query($conn,$select) or die ('invalid query:'. mysqli_error());

          if($result){
            foreach($result as $row){

	?>
	<!-- while($row = mysqli_fetch_row($result))
	{ -->
          <p><?php echo $row['aboutMe']; ?></p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/myphoto.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3><?php echo $row['title']; ?></h3><br>
            
            <!-- <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo $row['birthday']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?php echo $row['website']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo $row['phone']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?php echo $row['city']; ?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php echo $row['age']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?php echo $row['degree']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Personal Email:</strong> <span><?php echo $row['email']; ?></span></li>
                  </ul>
              </div>
            </div><br><br><br>
            <p>
            <?php echo $row['description']; ?></p>
          </div>
          <?php
        }
          }else echo "No data found";
          ?>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Some of my facts that rate my work during my studies, trainings, selfworks</p>
        </div>

        <div class="row" style="margin-left: 160px;">

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="365" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Work</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">
    
        <div class="section-title">
          <h2>Skills</h2>
          <p>I have a big passion in IT field, so those are my knowledges about programming languages.</p>
        </div>

        <div class="row skills-content">
        <div class="col-lg-6">
       
          <?php
      
	$select = 'SELECT * FROM `skills`';
	$result = mysqli_query($conn,$select) or die ('invalid query:'. mysqli_error());
  ?>
 
      <?php 
        if($result)
     {
	      foreach($result as $row)
	     {
		?>



            <div class="progress" style="flex-direction: row;">
              <span class="skill" style="flex-direction: row;"><?php echo $row['teknologjia']; ?><i class="val">	
               <?php echo $row['perqindja'];?></i></span>
              <div class="progress-bar-wrap" style="flex-direction: row;">
                <div class="progress-bar" style="flex-direction: row;" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div> 

            <!-- <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div> 
            

            <div class="progress">
              <span class="skill">CSS <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
           
          </div>
          

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">React Js, Redux, React Hooks<i class="val">73%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Node JS <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Java <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div> -->
    <?php
          }
      }
       else 
       
         echo "No Data found"
       
   ?>

          </div>

        </div>

      </div>
     <br><br>
      <div class="resume-item pb-0">
        <h4>Soft Skills</h4>
        <ul>
          <li>Excellent Communication skills</li>
          <li>Strong communication skills and costumer relation abilities</li>
          <li>Work Ethic</li>
          <li>Flexibility/Adaptability</li>
          <li>Problem solving</li>
          <li>Team work</li>
          <li>Leadership abilities</li>
          <li>Ability to work under pressure</li>
          <li>Fast learner</li>
        </ul>
      </div>
      <h4>Hobbies:</h4> <p> Sports, Movies, Learning new things, Travel, Nature</p>
      
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
          <p><strong>Application for Software Developer
            on Starlabs</strong><br><br>
            Dear madam/ sir,
            I am very excited about the possibility of joining starlabs in the position of Software Developer. Your company and practical job correspond to my Education and Experience as Web Developer and Software Developer. </p>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Arbese Musliu</h4>
              <p><em>With nearly three years on a Bachelor’s studies in Computer Science – Software Engineering, and hands-on experience using Java programming language to create and implement desktop software applications, Web Developing technologies (HTML, CSS, JavaScript, Bootstrap, OOP PHP, MySQLi, PDO) to design and develop Web applications, and hands-on experience too with React Js, firebase, MERN Architecture, I am confident I will be a valuable asset to your organization..</em></p>
              <ul>
                <li>Viti, str.Jahajt, Kosovo</li>
                <li>049 480 212</li>
                <li>musliuarbese@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Bachelor of Computer Science &amp; Engineering</h4>
              <h5>2018 - Present</h5>
              <p><em>UBT - Private Provider of High Education, <br>
                Str. Lgj.Kalabria,<br>
                Prishtine</em></p>
              <p>Level in national or International classification: Level 6 – NQF/EQF
                <li> Object oriented programming (in Java)</li>
                <li>Database</li>
                <li> Web Engineering</li>
                <li>Project Management</li>
                <li> Software Testing</li>
                <li> Computer Network</li>
                <li> Software Engineering</li>
                <li> Lab Course(Developing Desktop App. Using Java)</li>
                <li> Software Design</li>
                <li> Operating Systems</li>
                <li> Math</li>
                <li> IT Basics</li></p>
            </div>
          </div>
       
          <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Software Developer Intern</h4>
              <h5>2021 - Present</h5>
              <p><em>Prishtine, 1000, Upliane, Kosove </em></p>
              <ul>
                <li>Fulfill tasks set out by supervisors from several departments.
                  </li>
                <li>Attend meetings and take minutes. </li>
                <li> Perform research at a supervisor's request.</li>
              </ul>
            </div>
            <div class="resume-item pb-0">
              <h4>Gymnasium „Kuvendi Lezhes“, Viti</h4>
              <p><em>09/2015 – 06/2018</em></p>
              <ul>
                <li>Natural Sciences</li>
                <li>Math</li>
                <li>IT</li>
              </ul>
            </div>
            <div class="resume-item pb-0">
              <h4>Languages</h4>
              <ul>
                <li>Albanina- Mother Language</li>
                <li>Engish - Fluent in Spoken and Written English</li>
                <li>IT</li>
              </ul>
            </div>
            
          </div>
          
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>
Feel free to look at the projects I have worked on.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter=".filter-card">Projects Photo</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/BusinessIdeas.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/BusinessIdeas.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/onshop.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/onshop.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/km.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/BusinessIdeas.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/burger.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/burger.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/quiz.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/BusinessIdeas.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          
        </div>

      </div>
      <div class="anexes">
      <h5>For more details. Please visit my anexes:</h5>
      <p>Github Link: <a href = "https://github.com/musliuarbese" target="_blank">Click Here</a>,</p>
      <p> LinkedIn:   <a href = "https://www.linkedin.com/in/arbesemusliu/" target="_blank">Click Here</a></p>
    </div>
      </section>
    
    
    
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>musliuarbese@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+383 49 480 212</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="include/addContact.php" method="post" onSubmit="" role="form" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
             
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div><br>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit" class="butonijem">Send Message</button></div>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
	include('include/footer.php');
?>
<!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

 </body>

</html>