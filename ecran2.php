<?php 
    if(isset($_POST['ordonance'])){
        $med1=$_POST['med1'];
        $q1=$_POST['q1'];
        $med2=$_POST['med2'];
        $q2=$_POST['q2'];
        $med3=$_POST['med3'];
        $q3=$_POST['q3'];
        $lieu=$_POST['lieu'];

        $data=array(
            array(
                'pharmacie' => 'pharmacie1', 'lieu' => 'centre-ville', 
                'med1' => 'Paracetamol', 'med2' => 'Fervex',
                'med3' => 'Quartem'
            ),
            array(
                'pharmacie' => 'pharmacie2', 'lieu' => 'centre-ville',
                'med1' => 'Fervex', 'med2' => 'Paracetamol','med3' => 'vide'
            ),
            array(
                'pharmacie' => 'pharmacie3', 'lieu' => 'centre-ville',
                'med1' => 'Paracetamol', 
                'med2' => 'Quartem', 'med3' => 'Doliprane'
            ),
            array(
                'pharmacie' => 'pharmacie4', 'lieu' => 'centre-ville',
                'med1' => 'Fervex', 'med2' => 'vide',
                'med3' => 'Quartem'
            ),
            array(
                'pharmacie' => 'pharmacie5', 'lieu' => 'centre-ville',
                'med1' => 'Doliprane', 'med2' => 'vide', 'med3' => 'vide'
            )
        );
    }
?>

<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themes.potenzaglobalsolutions.com/html/medileaf/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Oct 2020 10:00:35 GMT -->
  <head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Medileaf - Health and Medical HTML Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sante Plus</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700&amp;display=swap" rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css" />


    <!-- Template Style -->
    <link rel="stylesheet" href="css/style.css" />

  </head>

  <body>

    <!--=================================
    <!--=================================
    header -->
    <header class="header header-sticky">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="topbar">
              <div class="d-block d-md-flex align-items-center text-center">
                <div class="mr-0 mr-sm-3 mb-3 mb-md-0 d-block d-sm-inline-block">
                  <a href="#"><i class="far fa-envelope mr-2"></i>contact@santeplus.com</a>
                </div>
                <div class="mr-auto mb-3 mb-md-0 d-block d-sm-inline-block">
                  <a href="tel:1-800-555-1234"><i class="fa fa-phone mr-2 fa fa-flip-horizontal"></i>+(241) 077123456</a>
                </div>
                <div class="login mr-0 mr-sm-3 mr-sm-5 mb-3 mb-sm-0 d-block d-sm-inline-block">
                  <a data-toggle="modal" data-target="#loginModal" href="login.html">Login</a>
                  <span class="mx-2 text-white">|</span>
                  <a data-toggle="modal" data-target="#registerModal" href="register.html">Inscription</a>
                </div>
                <div class="social d-block d-sm-inline-block">
                  <ul class="list-unstyled">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main-header">
        <div class="container">
          <nav class="navbar navbar-light bg-white navbar-static-top navbar-expand-lg">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
            <a class="navbar-brand" href="#">
            <img class="img-fluid" src="images/logo.png" alt="logo" style="width:100px;height:100px">
            </a>
          </nav>
        </div>
      </div>
    </header>
    <!--=================================
    header -->

    <!--=================================
    banner -->
    <section class="inner-banner bg-light">
      <div class="container">
        <div class="row align-items-center intro-title">
          <div class="col-12">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="index.php"> <i class="fas fa-home"></i> </a></li>
              <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Liste des Pharmacies </span></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    banner -->

    <!--=================================
    Team -->
    <section class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 col-md-10 text-center">
            <div class="section-title center-divider mb-5">
              <span class="text-primary">Liste des Pharmacies</span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- team-01 START -->
          <?php 
            if($lieu == 'centre-ville')
            {
                foreach($data as $dd)
                {
                    if(
                        $dd['med1'] == $med1 || $dd['med2'] == $med1 || $dd['med3'] == $med1 ||
                        $dd['med1'] == $med2 || $dd['med2'] == $med2 || $dd['med3'] == $med2 ||
                        $dd['med1'] == $med3 || $dd['med2'] == $med3 || $dd['med3'] == $med3
                    )
                    {
          ?>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                  <div class="team">
                    <div class="team-image">
                      <img class="img-fluid b-radius-bottom-none" src="images/pharm/01.jpg" alt="">
                      <div class="team-social">
                        <ul>
                          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="team-detail b-radius-top-none">
                      <span class="team-label">Pharmacie</span>
                      <h4 class="team-title"><a href="team-single.html"><?php echo $dd['pharmacie'];?></a></h4>
                      <span class="team-phone">+(704) 279-1249</span>
                      <span class="team-email">info@pharmacie.com</span>
                    </div>
                    <?php 
                    echo '
                    <a class="icon-btn" href="ecran3.php?pharmacie='.$dd['pharmacie'].'&med1='.$med1.'&med2='.$med2.'&med3='.$med3.'&q1='.$q1.'&q2='.$q2.'&q3='.$q3.'"><i class="fas fa-eye"></i></a> <br>
                    ';
                    ?>
                  </div>
                </div>
          <?php
                    }
                  }
              }
              else{
                  echo '<span style="color:red">Aucune pharmacie à '.$lieu.'</span>';
              }
          ?>
          <!-- team-01 END -->
        </div>
      </div>
    </section>
    <!--=================================
    Team -->


    <!--=================================
    footer-->
    <footer class="space-pt bg-light footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
          <a href="index-2.html" class="footer-logo"><img class="img-fluid" src="images/logo.png" alt="" style="width:100px;height:100px"></a>
            <p>There’s nothing in this story to make us think he was dreaming about riches.</p>
            <div class="social-icon mt-3 mt-md-5">
              <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-github"></i></a></li>
                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <h6 class="text-primary">Useful Links</h6>
            <div class="footer-useful-List">
              <ul class="list-unstyled mb-0">
                <li><a href="about-us.html">About</a></li>
                <li><a href="team.html">Team</a></li>
                <li><a href="before-after.html">Before After</a></li>
                <li><a href="cost-calculator.html">Cost Calculator</a></li>
                <li><a href="working-hours.html">Working Hours</a></li>
              </ul>
              <ul class="list-unstyled mb-0">
                <li><a href="appointment.html">Appointment</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="timetable.html">Timetable</a></li>
                <li><a href="departments.html">Departments</a></li>
                <li><a href="contact-us.html">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <h6 class="text-primary">Our Newsletter</h6>
            <div class="footer-contact-info">
              <ul class="list-unstyled mb-0">
                <li><i class="fas fa-fw fa-map-marker-alt text-primary"></i><span>594 E. Whitemarsh Street Mchenry, IL 60050</span></li>
                <li><i class="fas fa-fw fa-phone-alt text-primary"></i><span>0123-456-789</span></li>
              </ul>
            </div>
            <div class="footer-subscribe">
              <p>Sign up to our newsletter to get the latest news and offers.</p>
              <form>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Enter your email">
                </div>
                <button type="submit" class="btn btn-primary"><i class="far fa-paper-plane"></i></button>
              </form>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <h6 class="text-primary">Opening Hours</h6>
            <div class="opening-time">
              <ul class="list-unstyled">
                <li><i class="far fa-clock pr-1 text-primary"></i> Mon - Tue<span class="float-right">08:30 - 18:30</span></li>
                <li><i class="far fa-clock pr-1 text-primary"></i> Wed- Thu<span class="float-right">08:30 - 18:30</span></li>
                <li><i class="far fa-clock pr-1 text-primary"></i> Friday<span class="float-right">08:30 - 18:30</span></li>
                <li><i class="far fa-clock pr-1 text-primary"></i> Saturday<span class="float-right">08:30 - 18:30</span></li>
                <li><i class="far fa-clock pr-1 text-primary"></i> Sunday<span class="float-right">09:30 - 15:30</span></li>
                <li class="text-primary">Emergency<span class="float-right">24 hours</span></li>
             </ul>
           </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 text-center copyright text-md-left mb-3 mb-md-0">
              <p class="mb-0"> &copy; Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="index-2.html"> medileaf </a> All Rights Reserved</p>
            </div>
            <div class="col-md-6 text-center text-md-right">
              <div class="">
                <ul class="list-unstyled list-inline mb-0">
                  <li class="list-inline-item mb-0"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                  <li class="list-inline-item mb-0"><a href="#">FAQ</a></li>
                  <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--=================================
    footer-->

    <!--=================================
    Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="js/owl-carousel/owl.carousel.min.js"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>

  </body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/medileaf/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Oct 2020 10:00:37 GMT -->
</html>
