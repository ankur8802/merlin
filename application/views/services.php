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
      <!-- end demo_changer -->
      <!-- Preloader -->
      <div id="preloader">
	     <img src="<?= base_url()?>img/logo.png" alt="" class="preloader-logo img-fluid center-block" >
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
<!-- ===== page starts  ===== -->
<div class="content-wrapper">
<!-- page header -->
<div class="page-header bg-overlay1 container-fluid border-bottom" >
   <div class="col-xl-6 offset-xl-3">
      <h1>Our Services</h1>
      <!-- /breadcrumb -->
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Our Services</li>
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
   <!-- row -->
   <div class="row h-10">
      <div class="col-lg-5 my-auto">
         <span class="sub-header">what we offer</span>
         <h2>
            Excellence & Quality
         </h2>
         <p class="mt-4">Make your glamorous dream a reality through excellent training and brilliant hands-on experience right here as Lakme! </p>
         
      </div>
      <!--/ col-lg-->
      <div class="col-lg-6 offset-lg-1 res-mt-5 my-auto">
         <!-- image -->
         <img class="img-fluid color-outline" src="<?= base_url()?>img/about/about.jpg" alt="" >
      </div>
      <!--/ col-lg-->
   </div>
   <!-- /row -->
   <div class="row g-5 mt-5">
      <!-- card --> 
      <div class="col-lg-4 card-service-collumn">
         <div class="card-service bg-1 border-bottom">
            <a href="<?= base_url('prices')?>">
               <div class="txt">
                  <h5>Cosmetology</h5>
               </div>
               <!-- link --> 
               <p class="more-link">more</p>
            </a>
         </div>
      </div>
      <!-- /card ends --> 
      <!-- card --> 
      <div class="col-lg-4 card-service-collumn">
         <div class="card-service bg-2 border-bottom">
            <a href="<?= base_url('prices')?>">
               <div class="txt">
                  <h5>Beauty Therapy</h5>
               </div>
               <!-- link --> 
               <p class="more-link">more</p>
            </a>
         </div>
      </div>
      <!-- /card ends --> 
      <!-- card --> 
      <div class="col-lg-4 card-service-collumn">
         <div class="card-service bg-3 border-bottom">
            <a href="<?= base_url('prices')?>">
               <div class="txt">
                  <h5>Hair</h5>
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
      <div class="col-lg-4 card-service-collumn">
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
      <!-- card --> 
      <div class="col-lg-4 card-service-collumn">
         <div class="card-service bg-5 border-bottom">
            <a href="<?= base_url('prices')?>">
               <div class="txt">
                  <h5>Nail Art</h5>
               </div>
               <!-- link --> 
               <p class="more-link">more</p>
            </a>
         </div>
      </div>
      <!-- /card ends --> 
      <!-- card --> 
      <div class="col-lg-4 card-service-collumn">
         <div class="card-service bg-6 border-bottom">
            <a href="<?= base_url('prices')?>">
               <div class="txt">
                  <h5>Corporate Makeup</h5>
               </div>
               <!-- link --> 
               <p class="more-link">more</p>
            </a>
         </div>
      </div>
      <!-- /card ends --> 
   </div>
   <!-- /row -->
</section>
<!-- /section ends-->
<!-- section -->
<section class="call-to-action bg-light bg-1 no-bg-sm">
   <div class="inside-wrapper container">
      <!-- row -->
      <div class="row">
         <div class="col-xl-4 d-none d-xl-block">
            <img class="img-absolute1 img-fluid align-text-bottom" src="<?= base_url()?>assets/img/calltoaction2.png" alt="">
         </div>
         <!-- /col-xl -->
         <div class="col-xl-6 offset-xl-1 text-center text-dark">
            <h3>
               Visit us Today
            </h3>
            <p class="mt-3">GLAM UP YOU AND YOUR CAREER !! </p>
            <a href="<?= base_url('contact')?>" class="btn btn-secondary">Contact us</a>
         </div>
         <!-- /col-xl -->
      </div>
      <!-- /row -->
   </div>
   <!-- / inside-wrapper -->
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
<script src="<?= base_url()?>assets/js/map.js"></script>

</body>
</html>