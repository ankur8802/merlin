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

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

   <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v15.0" nonce="qg8vNxEW"></script>

      <!-- end demo_changer -->
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
         <!-- ===== / sidebar ends ===== -->
        <div id="content" class="col-lg-10 split">
<!-- ===== home page starts  ===== -->
<div id="home" class="content-wrapper">
<!-- home grid -->
<div id="home-grid" class="row h-100 g-0">
   <!-- box1 -->
   <div class="col-lg-6 h-100 border-end border-grid">
      <div class="border-bottom h-100 img-grid">
         <a href="<?= base_url('about-us')?>">
            <div class="box-effect col-lg-12 boxbg1 d-flex h-100 bg-overlay1">
               <div class="text-center my-auto w-100">
                  <h2 class="m-0 text-grid">About Us</h2>
               </div>
            </div>
            <!--/ box-bg 1-->
         </a>
      </div>
      <!--/ col-lg-->
   </div>
   <!--/ border-->
   <div class="col-lg-6 h-100">
      <!-- box2 -->
      <div class="border-bottom h-50 img-grid border-grid-down">
         <a href="<?= base_url('programs')?>">
            <div class="box-effect col-lg-12 d-flex h-100 boxbg2 bg-overlay1" >
               <div class="text-center my-auto w-100">
                  <h2 class="m-0 text-grid">Programs</h2>
               </div>
               <!--/ box-bg 2-->
            </div>
            <!--/ col-lg-->
         </a>
      </div>
      <!--/ border-->
      <!-- box3 -->
      <div class="border-bottom  h-50 img-grid border-grid-down">
         <a href="<?= base_url('contact')?>">
            <div class="box-effect col-lg-12 d-flex h-100 boxbg3 bg-overlay1">
               <div class="text-center my-auto w-100">
                  <h2 class="m-0 text-grid">Contact Us</h2>
               </div>
               <!--/ box-bg 3-->
            </div>
            <!--/ col-lg-->
         </a>
      </div>
      <!--/ border-->
   </div>
   <!--/ col-lg-->
</div>
<!--/ home-grid-->
<!-- section --> 
<section class="border-bottom">
   <div class="inside-wrapper container">
      <div class="row">
         <div class="col-lg-7 text-center my-auto">
            <!-- reveal effect-->	
            <img src="<?= base_url()?>assets/img/welcome.jpg" class="image-polygon img-fluid"  alt="" >
         </div>
         <!--/ col-lg-->
         <div class="col-lg-5 p-5  my-auto">
            <span class="sub-header">hello there</span>
            <h2>
               Welcome to Marlin
            </h2>
            <p>Marlin is one of the top beauty brands in India.  Marlin Academy that specialises in training individuals to become successful across sectors. Here you will be greeted by our team of experts who are here to provide you with a luxurious experience.</p>
            <!-- button -->
            <a href="<?= base_url('about-us')?>" class="btn btn-primary">About us</a>
         </div>
         <!--/ col-lg-->
      </div>
      <!-- /row -->
   </div>
   <!-- /inside-wrapper -->
</section>
<!-- /section ends-->
<!-- section -->
<section class="inside-wrapper container">
   <div class="row">
      <div class="col-xl-7 offset-xl-3 text-center my-auto">
         <span class="sub-header">GET GROMED BY BEAUTY EXPERTS</span>
         <h2>
            Our Services
         </h2>
        <strong> “Become a trendsetter and climb up the success ladder!“ </strong><br>
        <p class="mt-3"> Marlin Academy that specialises in training individuals to become successful across sectors. Hair Care, Makeup and Skin Care professionals.  </p>
      </div>
      <!-- /col-xl -->
   </div>
   <!-- /row -->
   <!-- row -->
   <div class="row g-5 mt-5">
      <!-- card --> 
      <div class="col-lg-6 card-service-collumn">
         <div class="card-service bg-1 border-bottom">
            <a href="<?= base_url('prices')?>">
               <div class="txt">
                  <h4>Cosmetology</h4>
               </div>
               <!-- link --> 
               <p class="more-link">more</p>
            </a>
         </div>
      </div>
      <!-- /card ends --> 
      <!-- card --> 
      <div class="col-lg-6 card-service-collumn">
         <div class="card-service bg-2 border-bottom">
            <a href="<?= base_url('prices')?>">
               <div class="txt">
                  <h4>hair</h4>
               </div>
               <!-- link --> 
               <p class="more-link">more</p>
            </a>
         </div>
      </div>
      <!-- /card ends --> 
   </div>
   <!-- /row -->
   <div class="row g-5 mt-5 no-mt-xs">
      <!-- card --> 
      <div class="col-lg-6 card-service-collumn">
         <div class="card-service bg-3 border-bottom">
            <a href="<?= base_url('prices')?>">
               <div class="txt">
                  <h4>Beauty Therapy</h4>
               </div>
               <!-- link --> 
               <p class="more-link">more</p>
            </a>
         </div>
      </div>
      <!-- /card ends --> 
      <!-- card --> 
      <div class="col-lg-6 card-service-collumn">
         <div class="card-service bg-4 border-bottom">
            <a href="<?= base_url('prices')?>">
               <div class="txt">
                  <h5>Skin</h5>
               </div>
               <!-- link --> 
               <p class="more-link">more</p>
            </a>
         </div>
      </div>
      <!-- /card ends --> 
   </div>
   <!-- /row -->
   <div class="row text-center mt-5">
      <div class="col-xl-12">
         <!-- button -->
         <a href="<?= base_url('programs')?>" class="btn btn-primary  btn-lg"> See All Programs </a>
      </div>
      <!-- /col-xl -->
   </div>
   <!-- /row -->
</section>
<!-- /section ends-->
<!-- section-->
<section class="inside-wrapper p-0">
   <div class="container">
      <div class="row">
         <div id="about-home" class="col-lg-6 color-outline">
            <!-- image on css/ about-home.jpg -->
         </div>
         <!--/ about-home-->
         <div class="col-xl-6 bg-primary p-6 ">
            <h3 class="text-dark">GLAM UP YOUR CAREER </h3>
            <p class="lead text-dark">"Learn From The Stars Behind The Show!"<br> We have been in business for over 30 years. This longevity is a testament to the quality we provide. </p>
            <p class="text-dark">
            Marlin Academy trains aspiring students and helps them gain essential skills in order to make a successful career in the exciting field of glamour. Professionals in the field hone their skills so as to make them the best stylists in the industry    
           </p>
            <!-- button -->
            <a href="<?= base_url('about-us')?>" class="btn btn-secondary">More Info</a>
         </div>
         <!-- /col-xl -->
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
</section>
<!-- /section ends -->
<!-- section  -->
<section class="inside-wrapper container">
   <!-- row -->
   <div class="row h-10">
      <div class="col-lg-6 my-auto">
         <span class="sub-header">LET YOUR CAREER MAKE A STYLISH STATEMENT</span>
         <h2>Why Choose Marlin for Career?</h2>
         <p class="mt-3 lead">We have top-of-the-line hair and makeup products, skilled stylists, and even a relaxing spa.</p>
         <p> At the Marlin Academy there are different courses to specialise in hairstyling and makeup. The curriculum is designed in a way that it would open up a number of job prospects in the fashion, beauty, film and entertainment field.</p>
         
         <p class="mt-3 lead"> At the Marlin Academy there are different courses to specialise in hairstyling and makeup. The curriculum is designed in a way that it would open up a number of job prospects in the fashion, beauty, film and entertainment field.</p>
        
      </div>
      <!--/ col-lg-->
      <div class="col-lg-5 offset-lg-1 res-mt-5 my-auto">
         <img src="<?= base_url()?>assets/img/features.jpg" class="img-fluid"  alt="" >
      </div>
      <!--/ col-lg-->
   </div>
   <!--/ row-->
   <div class="row mt-5">
      <div class="col-lg-3">
         <div class="feature" >
            <div class="feature-img">
               <!-- SVG icon -->
               <img class="img-fluid" src="img/svg/beauty1.svg" alt="">
            </div>
            <!--/ feature-img-->
            <h5 class="mt-3 text-dark">Quality Products</h5>
         </div>
         <!--/ feature-->
      </div>
      <!--/ col-lg-->
      <div class="col-lg-3 res-mt-5">
         <div class="feature">
            <div class="feature-img">
               <!-- SVG icon -->
               <img class="img-fluid" src="img/svg/beauty2.svg" alt="">
            </div>
            <!--/ feature-img-->
            <h5 class="mt-3 text-dark">Happy Customers</h5>
         </div>
         <!--/ feature-->
      </div>
      <!--/ col-lg-->
      <div class="col-lg-3 res-mt-5">
         <div class="feature">
            <div class="feature-img" >
               <!-- SVG icon -->
               <img class="img-fluid" src="img/svg/beauty3.svg" alt="">
            </div>
            <!--/ feature-img-->
            <h5 class="mt-3 text-dark">Hygienic Treatments</h5>
         </div>
         <!--/ feature-->
      </div>
      <!--/ col-lg-->
      <div class="col-lg-3 res-mt-5">
         <div class="feature">
            <div class="feature-img" >
               <!-- SVG icon -->
               <img class="img-fluid" src="img/svg/beauty4.svg" alt="">
            </div>
            <!--/ feature-img-->
            <h5 class="mt-3 text-dark">Qualified Staff</h5>
         </div>
         <!--/ feature-->
      </div>
      <!--/ col-lg-->
   </div>
   <!--/ row-->
</section>
<!-- /section ends -->
<!-- section-->
<section class="border-top">
   <div class="inside-wrapper container">
      <div class="row">
         <div class="col-xl-5 my-auto">
            <span class="sub-header">questions</span>
            <h2>OUR FAQ</h2>
            <p class="lead">Marlin has a prime objective of bridging the Marlin Salon Experts train students and give gap between traditional methodologies of them in-depth knowledge about various teaching and training students to gain in de courses and make them capable enough to shine with opportunities. </p>
            <p class="lead">We have top-of-the-line hair and makeup products, skilled stylists, and even a relaxing spa.</p>
           
         </div>
         <!-- /col-xl -->
         <div class="col-xl-6 offset-xl-1">
            <!--accordion -->		
            <div class="accordion mt-5" id="accordionExample">
               <!--accordion item -->
               <div class="accordion-item">
                  <h5 class="accordion-header" id="headingOne">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     What are your safety protocols?
                     </button>
                  </h5>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>Aenean ut ex leo. Nulla faucibus turpis sit amet turpis mattis vestibulum et vel enim. Suspendisse magna magna, consectetur at erat non, mattis aliquet elit praesent vel nisl in qua. </p>
                        <p>Fusce at nibh lacinia orci dictum euismod. Praesent vel nisl in quam commodo tristique.
                        </p>
                     </div>
                  </div>
               </div>
               <!--accordion item -->
               <div class="accordion-item">
                  <h5 class="accordion-header" id="headingTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                     How do I cancel an Appointment?
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
                     How can I book a service?
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
                     What are the Methods of payment?
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
         <!-- /col-xl -->
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
</section>
<!-- /section ends -->
<!-- section -->
<section class="call-to-action1 container-fluid parallax">
   <div class="inside-wrapper container">
      <div class="row">
         <div class="card col-xl-7 text-center p-5 color-outline">
            <div class="card-body">
               <h3>Make an Appointment</h3>
               <p class="card-text mt-4">Fusce at nibh lacinia orci dictum euismod. Praesent vel nisl in quam commodo tristique.</p>
               <a href="<?= base_url('contact')?>" class="btn btn-primary">Contact Us</a>
            </div>
            <!--/card-body-->
         </div>
         <!-- /card -->
      </div>
      <!-- /row -->
   </div>
   <!-- /inside-wrapper -->
</section>
<!-- /section ends -->

<section class="inside-wrapper p-0">
   <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
         <div class="col-md-6 mt-3">
          <div class="fb-page" data-href="https://www.facebook.com/MarlinBeautyAndWellnessAcademy" data-tabs="timeline" data-width="1200" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/MarlinBeautyAndWellnessAcademy" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/MarlinBeautyAndWellnessAcademy">VCampus Global Education</a></blockquote></div>
         </div>

         <div class="col-md-3"></div>

      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
</section>

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
<script src="<?= base_url()?>assets/js/dmss.js"></script><!-- Open Street maps -->
<script src="<?= base_url()?>assets/js/map.js"></script>
</body>
</html>