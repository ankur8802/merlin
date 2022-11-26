<!DOCTYPE html>
<html lang="en">
   
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- page title -->
      <title> Marlin </title>
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
      <style>
        .text-justify
        {
            text-align:justify;
        }
      </style>
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
         <span class="sub-header">Reflect Your Beauty</span>
         <h2>
            The Beauty Marlin 
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
<section class="bg-light" style="display:none;">
   <div class="inside-wrapper container">
      <div class="row">
         <div class="col-lg-6">
            <!--accordion -->		
            <div class="accordion" id="accordionExample">
               <!--accordion item -->
               <div class="accordion-item">
                  <h5 class="accordion-header" id="headingOne">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     Our Short Term Courses
                     </button>
                  </h5>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>Short-term courses train students in classic and creative hair styling, cuts, colour and makeup. This is a quick yet thorough way to get a good grasp O skills required to develop into an expert stylist.
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
                        <p>Marlin Academy Glamour’s from Inside & Outside one of the world's leading training and education institutes that offers a multitude of courses across varied sectors.
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
                        <p>They are groomed so hands-on experience on every subject so as to make them job-ready professionals who would succeed in the industry well that they can showcase their skills professionally in the beauty industry and be counted amongst some of the best stylists in the country. </p>
                       
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
                        <p>Marlin has a prime objective of bridging the Marlin Salon Experts train students and give gap between traditional methodologies of them in-depth knowledge about various teaching and training students to gain in de courses and make them capable enough to shine with opportunities. </p>
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
            <p>Today, Marlin Academy is defined by its commitment to be the Best Salon Chain for happy customers is proof of that Marlin Professionals are skilled in various aspects that have honed the finesse through the valuable experience they gain for a number of styles on the runway and makes the latest fashion available to Indian women through the chain of salons.</p>
            <a href="<?= base_url('Programs')?>" class="btn btn-primary">Programs</a>
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
         <h4 class="m-0 text-secondary text-justify">
            Our Vision
         </h4>
         <p class="lead text-justify">Our vision is to empower the youth of India  by providing quality education in the field of Beauty and Wellness.</p>
         <h4 class="m-0 text-secondary text-justify">
           Our Mission
         </h4>
         <p class="lead text-justify">The Beauty Marlin's mission is to transform lives by making euphoria and artistry accessible to both women and men. The Beauty Marlin brand has become synonymous with health and beauty in Indian habitation.</p>
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
         <h4 class="text-secondary">
            Our Philosophy
         </h4>
         <ul class="custom no-margin">
            <li>The beauty industry is a vast one filled with opportunities across verticals. </li>
            <li>Not only do people in today's day and age realise the value of grooming and getting styled, but also perceive the beauty industry as a glamorous one and one that has a number of exciting career options.
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
<section id="team" class="bg-overlay2 border-bottom border-top" style="display:none;">
   <div class="inside-wrapper container">
      <div class="row h-10">
         <div class="col-lg-6 offset-lg-3 my-auto text-center">
            <span class="sub-header">our staff</span>
            <h2>
               Meet our Team
            </h2>
            <p class="mt-4"></p>
         </div>       
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