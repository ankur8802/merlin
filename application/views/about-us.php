<!DOCTYPE html>
<html lang="en">
   
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- page title -->
      <title> Beauty </title>
      <!--[if lt IE 9]>
      <script src="js/respond.js"></script>
      <![endif]-->
      <!-- Font files -->

      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,700,700i%7CMuli:400,700&amp;display=swap" rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
      <!-- Fav icons -->
      <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.html">
      <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
      <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
      <!-- Bootstrap core CSS -->
      <link href="<?= base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
      <!-- style CSS -->
      <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">
      <!-- plugins CSS -->
      <link href="<?= base_url()?>assets/css/plugins.css" rel="stylesheet">
      <!-- Colors CSS -->
      <link href="<?= base_url()?>assets/css/maincolors.css" rel="stylesheet">
      <!-- Prefix free -->
      <script src="<?= base_url()?>assets/js/prefixfree.min.js"></script>
	   <!-- Switcher Only -->
      <link rel="stylesheet" id="switcher-css" type="text/css" href="<?= base_url()?>assets/css/switcher.css" media="all" />
      <!-- END Switcher Styles -->
   </head>
   <!-- ==== body starts ==== -->
   <body id="top">
      <!-- Preloader -->
      <div id="preloader">
	     <img src="<?= base_url()?>assets/img/logo.png" alt="" class="preloader-logo img-fluid center-block" >
         <div class="spinner">		
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
         </div>
      </div>
      <!-- ===== Page Content ===== -->
      <div class="container-fluid">
         <!-- ===== Sidebar starts ===== -->
          <?php
              include('common/sidebar.php')
           ?>
               <!--/sidebar-nav -->
               <div class="navbar-info d-none d-xl-block">
                  <p class="small-text"><i class="fas fa-phone margin-icon"></i>13 456 890</p>
                  <p class="small-text"><i class="fas fa-map-marker-alt margin-icon"></i>Street name 123 <br/> New York</p>
                  <!--Social icons -->
                  <div class="social-media ">
                     <a href="#" title=""><i class="fab fa-facebook"></i></a>
                     <a href="#" title=""><i class="fab fa-instagram"></i></a>
					 <a href="#" title=""><i class="fab fa-yelp"></i></a>
                     <a href="mailto:email@email.com" title=""><i class="fas fa-envelope"></i></a>
                  </div>
               </div>
               <!-- /navbar-info -->
            </div>
            <!-- /affix-sidebar  -->
         </div>
         <!-- ===== / sidebar ends ===== -->
        <!-- ===== / sidebar ends ===== -->
<div id="content" class="col-lg-10 split">
<!-- =====  page starts  ===== -->
<div class="content-wrapper">
<!-- page header -->
<div class="page-header bg-overlay1 container-fluid border-bottom" >
   <div class="col-xl-6 offset-xl-3">
      <h1>About Us</h1>
      <!-- /breadcrumb -->
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">about Us</li>
         </ol>
      </nav>
      <!-- /breadcrumb -->
   </div>
   <!-- /col-xl -->
</div>
<!-- /page-header ends -->
<div class="content-box container">
<!-- section -->
<section class="inside-wrapper container">
   <div class="row h-10">
      <div class="col-lg-3 my-auto">
         <span class="sub-header">The Academic</span>
         <h2>
            Merlin
         </h2>
         <p class="mt-4 lead">Marlin Beauty and Wellness Academy is a leading beauty training academy in India.</p>
      </div>
      <!--/ col-lg-->
      <div class="col-lg-8 res-mt-5 offset-lg-1">
         <div id="lightbox-wrap" class="slider-1 lightbox p-0">
            <!-- image-->	
            <div class="lightbox">
               <a href="<?= base_url()?>assets/img/gallery/gallery1.jpg"  title="You can add caption to pictures.">
               <img class="img-fluid" src="<?= base_url()?>assets/img/gallery/gallery1.jpg" alt="">
               </a>
            </div>
            <!-- image-->	
            <div class="lightbox">
               <a href="<?= base_url()?>assets/img/gallery/gallery2.jpg"  title="You can add caption to pictures.">
               <img class="img-fluid" src="<?= base_url()?>assets/img/gallery/gallery2.jpg" alt="">
               </a>
            </div>
            <!-- image-->	
            <div class="lightbox">
               <a href="<?= base_url()?>assets/img/gallery/gallery3.jpg"  title="You can add caption to pictures.">
               <img class="img-fluid" src="<?= base_url()?>assets/img/gallery/gallery3.jpg" alt="">
               </a>
            </div>
            <!-- image-->	
            <div class="lightbox">
               <a href="<?= base_url()?>assets/img/gallery/gallery4.jpg"  title="You can add caption to pictures.">
               <img class="img-fluid" src="<?= base_url()?>assets/img/gallery/gallery4.jpg" alt="">
               </a>
            </div>
         </div>
         <!--/ slider-->
      </div>
      <!--/ col-lg-->
   </div>
   <!-- /row -->
</section>
<!-- /section ends-->
<!-- section -->
<section class="bg-light">
   <div class="inside-wrapper container">
      <div class="row">
         <div class="col-lg-6">
            <!--accordion -->		
            <div class="accordion" id="accordionExample">
               <!--accordion item -->
               <div class="accordion-item">
                  <h5 class="accordion-header" id="headingOne">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     Our Commitment to Safety
                     </button>
                  </h5>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>Aenean ut ex leo. Nulla faucibus turpis sit amet turpis mattis vestibulum et vel enim. <strong>Suspendisse magna magna, consectetur at erat non</strong> mattis aliquet elit. </p>
                        <p>Fusce at nibh lacinia orci dictum euismod. Praesent vel nisl in quam commodo tristique.
                        </p>
                     </div>
                  </div>
               </div>
               <!--accordion item -->
               <div class="accordion-item">
                  <h5 class="accordion-header" id="headingTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                     Our Facilities
                     </button>
                  </h5>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>Vivamus finibus lorem diam, sit amet facilisis tellus placerat Aliquam porttitor ut lectus eget imperdiet. Aenean ut ex leo. Nulla faucibus turpis sit amet turpis mattis vestibulum et vel enim. Suspendisse magna magna, consectetur at erat non, mattis aliquet elit. </p>
                        <p>Fusce at nibh lacinia orci dictum euismod. Praesent vel nisl in quam commodo tristique.
                        </p>
                     </div>
                  </div>
               </div>
               <!--accordion item -->
               <div class="accordion-item">
                  <h5 class="accordion-header" id="headingThree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                     Award Winning Services
                     </button>
                  </h5>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>Vivamus finibus lorem diam, sit amet facilisis tellus placerat Aliquam porttitor ut lectus eget imperdiet. Aenean ut ex leo. Nulla faucibus turpis sit amet turpis mattis vestibulum et vel enim. Suspendisse magna magna, consectetur at erat non, mattis aliquet elit. </p>
                        <p>Fusce at nibh lacinia orci dictum euismod. Praesent vel nisl in quam commodo tristique.
                        </p>
                     </div>
                  </div>
               </div>
               <!--/accordion item -->
               <!--accordion item -->
               <div class="accordion-item">
                  <h5 class="accordion-header" id="headingFour">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                     Trained Professionals
                     </button>
                  </h5>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>Vivamus finibus lorem diam, sit amet facilisis tellus placerat Aliquam porttitor ut lectus eget imperdiet. Aenean ut ex leo. Nulla faucibus turpis sit amet turpis mattis vestibulum et vel enim. Suspendisse magna magna, consectetur at erat non, mattis aliquet elit. </p>
                     </div>
                  </div>
               </div>
               <!--accordion item -->
            </div>
            <!--/accordion -->
         </div>
         <!--/ col-lg-->
         <div class="col-lg-5 offset-lg-1 res-mt-5 my-auto">
            <h3>
               About Us
            </h3>
            <p>
Marlin Beauty and Wellness Academy is a leading beauty training academy in India. Headquartered in Delhi, Marlin offers industry-oriented training and certified beauty courses in cosmetology, hair care, beauty therapy, skin care, and makeup.</p>
            <a href="<?= base_url('programmes')?>" class="btn btn-primary">Programmes</a>
         </div>
         <!--/ col-lg-->
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
</section>
<!-- /section ends-->
<!-- section -->
<section class="inside-wrapper container">
   <div class="row bg-light">
      <div class="col-lg-6 p-5 my-auto ">
         <h4>
            Our Vision statement
         </h4>
         <p class="mt-4 lead">Our vision is to empower the youth of India  by providing quality education in the field of Beauty and Wellness.</p>
      </div>
      <!--/ col-lg-->
      <div id="bg-about1" class="col-lg-6 border-start no-border-xs">
         <!-- image on css, about1.jpg -->
      </div>
      <!--/ col-lg-->
   </div>
   <!-- /row -->
   <div class="row mt-5 bg-light">
      <div id="bg-about2" class="col-lg-6 border-end no-border-xs">
         <!-- image on css, about2.jpg -->
      </div>
      <div class="col-lg-6 p-5 my-auto res-mt-5">
         <h4>
            Our Philosophy
         </h4>
         <ul class="custom no-margin">
            <li>Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac
               sodales felis tiam non 
            </li>
            <li>Erat volut pat phas ellu</li>
            <li>Aliquam erat volut pat phas ellu Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac
               sodales felis tiam non 
            </li>
            <li>Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac
               sodales felis tiam non 
            </li>
         </ul>
      </div>
      <!--/ col-lg-->
      <!--/ col-lg-->
   </div>
   <!-- /row -->
</section>
<!-- /section ends-->
<!-- section -->
<section id="team" class="bg-overlay2 border-bottom border-top">
   <div class="inside-wrapper container">
      <div class="row h-10">
         <div class="col-lg-6 offset-lg-3 my-auto text-center">
            <span class="sub-header">our staff</span>
            <h2>
               Meet our Team
            </h2>
            <p class="mt-4">Proin a mattis ligula quisque. Etiam ac neque sed risus sodales hendrerit vel ac diam.Ibu lum orci eget, viverra elit les hendrerit vel lorem ipsuet.</p>
         </div>
         <!--/ col-lg-->
         <div class="mt-5">
            <!-- team carousel -->  
            <div id="team-carousel" class="slider-3">
               <!-- Team member 1 -->
               <div class="col-lg-12 ">
                  <div class="team-style1 bg-light">
                     <!-- image and social icons -->
                     <div class="img-box">
                        <div class="text-center">
                           <img src="<?= base_url()?>assets/img/team/team1.jpg" class="img-fluid" alt="">
                           <ul class="social-icons text-center">
                              <li> <a href="#"><i class="fab fa-facebook"></i></a></li>
                              <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li> <a href="#"><i class="fab fa-linkedin"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <!-- Team header --> 
                     <div class="p-4">
                        <h5 class="team-header">Laura Smith</h5>
                        <span>Master Stylist</span>
                        <hr class="small-divider left"/>
                        <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>
                     </div>
                  </div>
               </div>
               <!--/ Team member 1 -->
               <!-- Team member 2 -->
               <div class="col-lg-12 ">
                  <div class="team-style1 bg-light">
                     <!-- image and social icons -->
                     <div class="img-box">
                        <div class="text-center">
                           <img src="<?= base_url()?>assets/img/team/team2.jpg" class="img-fluid" alt="">
                        </div>
                        <ul class="social-icons text-center">
                           <li> <a href="#"><i class="fab fa-facebook"></i></a></li>
                           <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                           <li> <a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                     </div>
                     <!-- Team header -->
                     <div class="p-4">
                        <h5 class="team-header">John Doe</h5>
                        <span>Stylist</span>
                        <hr class="small-divider left"/>
                        <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>
                     </div>
                  </div>
               </div>
               <!--/ Team member 2-->
               <!-- Team member 3 -->
               <div class="col-lg-12 ">
                  <div class="team-style1 bg-light">
                     <!-- image and social icons -->
                     <div class="img-box">
                        <div class="text-center">
                           <img src="<?= base_url()?>assets/img/team/team3.jpg" class="img-fluid" alt="">
                        </div>
                        <ul class="social-icons text-center">
                           <li> <a href="#"><i class="fab fa-facebook"></i></a></li>
                           <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                           <li> <a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                     </div>
                     <!-- Team header -->
                     <div class="p-4">
                        <h5 class="team-header">Meghan Smith</h5>
                        <span>Esthetician</span>
                        <hr class="small-divider left"/>
                        <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>
                     </div>
                  </div>
               </div>
               <!--/ Team member 3 -->
               <!-- Team member 4 -->
               <div class="col-lg-12 ">
                  <div class="team-style1 bg-light">
                     <!-- image and social icons -->
                     <div class="img-box">
                        <div class="text-center">
                           <img src="<?= base_url()?>assets/img/team/team4.jpg" class="img-fluid" alt="">
                        </div>
                        <ul class="social-icons text-center">
                           <li> <a href="#"><i class="fab fa-facebook"></i></a></li>
                           <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                           <li> <a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                     </div>
                     <!-- Team header -->
                     <div class="p-4">
                        <h5 class="team-header">Mika Doe</h5>
                        <span>Nail Designer</span>
                        <hr class="small-divider left"/>
                        <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>
                     </div>
                  </div>
               </div>
               <!--/ Team member 4 -->
               <!-- Team member 5 -->
               <div class="col-lg-12 ">
                  <div class="team-style1 bg-light">
                     <!-- image and social icons -->
                     <div class="img-box">
                        <div class="text-center">
                           <img src="<?= base_url()?>assets/img/team/team5.jpg" class="img-fluid" alt="">
                        </div>
                        <ul class="social-icons text-center">
                           <li> <a href="#"><i class="fab fa-facebook"></i></a></li>
                           <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                           <li> <a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                     </div>
                     <!-- Team header -->
                     <div class="p-4">
                        <h5 class="team-header">Jillian Smith</h5>
                        <span>Lash Specialist</span>
                        <hr class="small-divider left"/>
                        <p>Id fermentum augue, ut pellen tesque leo nas. Maecenas at arcu risus Donec com modo.</p>
                     </div>
                     <!--/ Team member 5 -->
                  </div>
               </div>
               <!-- /col-lg-->
            </div>
            <!--/ slider-->
         </div>
         <!-- /mt-5-->
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
</section>
<!-- /section ends-->
<!-- section -->
<?php
     include('common/footer.php')
?>
            </div>
            <!-- /content-box -->
			</div>
            <!-- /content-wrapper -->
         </div>
         <!-- / content -->
      </div>
      <!-- /container-fluid -->
<!-- Go To Top Link -->
<div class="d-none d-lg-block d-xl-block">
   <a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
</div>
<!-- Bootstrap core & Jquery -->
<script src="<?= base_url()?>assets/js/jquery.min.js"></script>
<script src="<?= base_url()?>assets/js/bootstrap.bundle.min.js"></script>
<!-- Custom Js -->
<script src="<?= base_url()?>assets/js/custom.js"></script>	  
<script src="<?= base_url()?>assets/js/plugins.js"></script>
<script src="<?= base_url()?>assets/js/animations.js"></script>	  

<!-- Bootstrap Select Tool (For Module #4) -->
<script src="<?= base_url()?>assets/js/bootstrap-select.js"></script>
<!-- All Scripts & Plugins -->
<script src="<?= base_url()?>assets/js/dmss.js"></script>

</body>
</html>