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
        <div id="content" class="col-lg-10 split">
<!-- ====== page starts  ===== -->
<div class="content-wrapper">
   <!-- page header -->
   <div class="page-header bg-overlay1 container-fluid border-bottom" >
      <div class="col-xl-6 offset-xl-3">
         <h1>Price List</h1>
         <!-- /breadcrumb -->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">price list</li>
            </ol>
         </nav>
         <!-- /breadcrumb -->
      </div>
      <!-- /col-xl -->
   </div>
   <!-- /page-header ends -->
   <div class="content-box container">
      <!-- section-->
      <section class="inside-wrapper container">
         <!-- row -->
         <div class="row">
            <div class="col-xl-12">
               <!--nav tabs -->
<style>
  .nav-item
  {
        zoom:0.7;
  }
</style>
               <ul class="nav nav-tabs  border-top border-bottom justify-content-center" id="pills-tab2" role="tablist">
                  <li class="nav-item" role="presentation">
                     <button class="nav-link active" id="1-tab" data-bs-toggle="pill" data-bs-target="#tab1" type="button" role="tab"  aria-selected="true">Cosmetology</button>
                  </li>
                  <!--/nav-item -->
                  <li class="nav-item" role="presentation">
                     <button class="nav-link" id="2-tab" data-bs-toggle="pill" data-bs-target="#tab2" type="button" role="tab"  aria-selected="false">Beauty Therapy</button>
                  </li>
                  <!--/nav-item -->
                  <li class="nav-item" role="presentation">
                     <button class="nav-link" id="3-tab" data-bs-toggle="pill" data-bs-target="#tab3" type="button" role="tab" aria-selected="false">Nail Art</button>
                  </li>
                  <!--/nav-item -->
                  <li class="nav-item" role="presentation">
                     <button class="nav-link" id="4-tab" data-bs-toggle="pill" data-bs-target="#tab4" type="button" role="tab" aria-selected="false">Skin</button>
                  </li>
                  <!--/nav-item -->
                  <li class="nav-item" role="presentation">
                     <button class="nav-link" id="5-tab" data-bs-toggle="pill" data-bs-target="#tab5" type="button" role="tab" aria-selected="false">Hair</button>
                  </li>
                  <!--/nav-item -->
                  <li class="nav-item" role="presentation">
                     <button class="nav-link" id="6-tab" data-bs-toggle="pill" data-bs-target="#tab6" type="button" role="tab" aria-selected="false">Corporate Makeup </button>
                  </li>
                  <!--/nav-item -->
                  <!--/nav-item -->
                  <li class="nav-item" role="presentation">
                     <button class="nav-link" id="7-tab" data-bs-toggle="pill" data-bs-target="#tab7" type="button" role="tab" aria-selected="false">Personal Grooming </button>
                  </li>
                  <!--/nav-item -->
               </ul>
               <!--/nav-tabs -->
               <div class="tab-content bg-light res-mt-5" id="pills-tabContent2">
                  <!-- tab 1 -->
                  <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="1-tab">
                     <div class="row">
                        <div class="col-lg-4">
                           <!-- image -->
                           <img class="img-fluid color-outline" src="<?= base_url()?>assets/img/rates1.jpg" alt="" >
                        </div>
                        <!--/ col-lg-->
                        <div class="col-lg-7 offset-lg-1 res-mt-5 my-auto">
                           <h3>
                              Cosmetology
                           </h3>
                           <p>CERTIFICATE COURSE IN COSMETOLOGY </p>
                           <p>Duration: 12 Month</p>
                           <p>We course provides students with the knowledge/skills and attitudes needed to work as a beautician in the beauty industry. It equip the students with the knowledge and understanding of the SKIN nail & makeup services and treatments.</p>

                        </div>
                        <!--/ col-lg-->
                     </div>
                     <!-- /row -->
                     <div class="row mt-5 gx-5">
                        <!-- First Row -->
                        <div class="col-xl-6">
                           <!-- menu body -->
                           <div class="menu-body">
                              <div class="menu-section">
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Grooming, Hygiene & Safety</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       <p></p>
                                    </div>
                                 </div>
                                 <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Understanding skin type & Analysis</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       <p></p>
                                    </div>
                                 </div>
                                 <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Cleansing & Toning practice</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       <p></p>
                                    </div>
                                 </div>
                                 <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Exfoliation & Extraction</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       <p></p>
                                    </div>
                                 </div>
                                 <!-- Item ends -->   
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Massage Manipulation</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       <p></p>
                                    </div>
                                 </div>
                                 <!-- Item ends -->                                                
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Anti pigmentation treatment</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       <p></p>
                                    </div>
                                 </div>
                                 <!-- Item ends -->                                                
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Hands & Feet massage</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       <p></p>
                                    </div>
                                 </div>
                                 <!-- Item ends -->                                                
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Manicure & Pedicure</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       <p></p>
                                    </div>
                                 </div>
                                 <!-- Item ends -->                                                
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Hair Spa & Hair Treatments</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       <p></p>
                                    </div>
                                 </div>
                                 <!-- Item ends -->                                                
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Straightening</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       <p></p>
                                    </div>
                                 </div>
                                 <!-- Item ends -->                                                
                              </div>
                              <!--/ menu section -->
                           </div>
                           <!-- / menu body -->
                        </div>
                        <!--/ col-xl--> 
                        <!-- Second Row -->
                        <div class="col-xl-6">
                           <div class="menu-body">
                              <div class="menu-section">
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Perm </p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       <p></p>
                                    </div>
                                 </div>
                                 <!-- Item ends -->                           
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Keratin </p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       <p></p>
                                    </div>
                                 </div>
                                 <!-- Item ends -->                           
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Hair Art & Bridal Hair Styling </p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       <p></p>
                                    </div>
                                 </div>
                                 <!-- Item ends -->                           
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Basic Hair cuts </p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       <p></p>
                                    </div>
                                 </div>
                                 <!-- Item ends -->                           
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Grey Coverage and Root Touch ups </p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       <p></p>
                                    </div>
                                 </div>
                                 <!-- Item ends -->                           
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Blow drying and Heat styling </p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       <p></p>
                                    </div>
                                 </div>
                                 <!-- Item ends -->                           
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Treatments for Hair fall and Dandruff </p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       <p></p>
                                    </div>
                                 </div>
                                 <!-- Item ends -->                           
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Hair spas/ Hair Oil Massage </p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       <p></p>
                                    </div>
                                 </div>
                                 <!-- Item ends -->                           
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Creative Haircuts and Colouring </p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       <p></p>
                                    </div>
                                 </div>
                                 <!-- Item ends -->                           
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Men’s Hair Cuts </p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       <p></p>
                                    </div>
                                 </div>
                                 <!-- Item ends -->                           
                              </div>
                              <!--/ menu section -->
                           </div>
                           <!-- / menu body -->
                        </div>
                        <!--/ col-xl-->  									
                     </div>
                     <!--/row -->
                  </div>
                  <!-- /tab 1 -->
                  <!-- tab 2 -->
                  <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="2-tab">
                     <div class="row">
                        <div class="col-lg-4">
                           <!-- image -->
                           <img class="img-fluid color-outline" src="<?= base_url()?>assets/img/rates2.jpg" alt="" >
                        </div>
                        <!--/ col-lg-->
                        <div class="col-lg-7 offset-lg-1 res-mt-5 my-auto">
                           <h3>
                              Beauty Therapy
                           </h3>
                           <p>Duration: 3 Months </p>
                           <p>The curriculum of the course is designed based on the latest Techniques and products popular across the world. Such a course us at training the student to build a strong foundation and gain Skills with a deeper understanding of beauty techniques necessary to succeed as a Beauty Therapist.                               
                           </p> 
                        </div>
                        <!--/ col-lg-->
                     </div>
                     <!-- /row -->
                     <div class="row mt-5 gx-5">
                        <!-- First Row -->
                        <div class="col-xl-6">
                           <!-- menu body -->
                           <div class="menu-body">
                              <div class="menu-section">
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Masks</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">

                                    </div>
                                 </div>
                                 <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Bleaching</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Advanced Facials</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Waxing</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->                                                                                              
                              </div>
                              <!--/ menu section -->
                           </div>
                           <!-- / menu body -->
                        </div>
                        <!--/ col-xl--> 
                        <!-- Second Row -->
                        <div class="col-xl-6">
                           <div class="menu-body">
                              <div class="menu-section">
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Threading</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->  
                                  <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Skin Treatments</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->  
                                  <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Clean-ups Basic facials </p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->  
                              </div>
                              <!--/ menu section -->
                           </div>
                           <!-- / menu body -->
                        </div>
                        <!--/ col-xl-->  									
                     </div>
                     <!--/row -->
                  </div>
                  <!-- /tab 2 -->
                  <!-- tab 3 -->
                  <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="3-tab">
                     <div class="row">
                        <div class="col-lg-4">
                           <!-- image -->
                           <img class="img-fluid color-outline" src="<?= base_url()?>assets/img/rates3.jpg" alt="" >
                        </div>
                        <!--/ col-lg-->
                        <div class="col-lg-7 offset-lg-1 res-mt-5 my-auto">
                           <h3>
                              Nail Art
                           </h3>
                          
                        </div>
                        <!--/ col-lg-->
                     </div>
                     <!-- /row -->
                     <div class="row mt-5 gx-5">
                        <!-- First Row -->
                        <div class="col-xl-6">
                           <!-- menu body -->
                           <div class="menu-body">
                              <div class="menu-section">
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Nail Science</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Nail Art</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Acrylic Nail Extension with Nail Art</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Client Consultation</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">

                                    </div>
                                 </div>
                                 <!-- Item ends -->                                                
                              </div>
                              <!--/ menu section -->
                           </div>
                           <!-- / menu body -->
                        </div>
                        <!--/ col-xl--> 
                        <!-- Second Row -->
                        <div class="col-xl-6">
                           <div class="menu-body">
                              <div class="menu-section">
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Get Polish</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Cut, File and Polish</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->  
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Gel Extension with Nail Art</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->
                              </div>
                              <!--/ menu section -->
                           </div>
                           <!-- / menu body -->
                        </div>
                        <!--/ col-xl-->  									
                     </div>
                     <!--/row -->          
                  </div>
                  <!--/ tab 3 -->
                  <!-- tab 4 -->
                  <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="4-tab">
                     <div class="row">
                        <div class="col-lg-4">
                           <!-- image -->
                           <img class="img-fluid color-outline" src="<?= base_url()?>assets/img/rates4.jpg" alt="" >
                        </div>
                        <!--/ col-lg-->
                        <div class="col-lg-7 offset-lg-1 res-mt-5 my-auto">
                           <h3>
                              Skin
                           </h3>
                        </div>
                        <!--/ col-lg-->
                     </div>
                     <!-- /row -->
                     <div class="row mt-5 gx-5">
                        <!-- First Row -->
                        <div class="col-xl-6">
                           <!-- menu body -->
                           <div class="menu-body">
                              <div class="menu-section">
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Introduction to advanced skin aesthetics: acne, pigmentation, masques & anti-aging treatment</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Details of skin & nail structure</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Hygiene & sterilisation practices</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Anatomy & physiology of face, head & body systems</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->                                                
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Skin consultation</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->                                                
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Essential services in skin</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->                                                
                              </div>
                              <!--/ menu section -->
                           </div>
                           <!-- / menu body -->
                        </div>
                        <!--/ col-xl--> 
                        <!-- Second Row -->
                        <div class="col-xl-6">
                           <div class="menu-body">
                              <div class="menu-section">
                                <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Clean-ups & facials</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->       
                                <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Manicure & pedicure</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->       
                                <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Use of galvanic steamer, vacuum suction & ultrasonic</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->       
                                <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Body massage</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->       
                                <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Make-up basics as per skin types</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->       
                                <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Client management</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->       
                              </div>
                              <!--/ menu section -->
                           </div>
                           <!-- / menu body -->
                        </div>
                        <!--/ col-xl-->  									
                     </div>
                     <!--/row -->          
                  </div>
                  <!--/ tab 4 -->
                  <!-- tab 5 -->
                  <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="5-tab">
                     <div class="row">
                        <div class="col-lg-4">
                           <!-- image -->
                           <img class="img-fluid color-outline" src="<?= base_url()?>assets/img/rates1.jpg" alt="" >
                        </div>
                        <!--/ col-lg-->
                        <div class="col-lg-7 offset-lg-1 res-mt-5 my-auto">
                           <h3>
                              hair
                           </h3>
                        </div>
                        <!--/ col-lg-->
                     </div>
                     <!-- /row -->
                     <div class="row mt-5 gx-5">
                        <!-- First Row -->
                        <div class="col-xl-6">
                           <!-- menu body -->
                           <div class="menu-body">
                              <div class="menu-section">
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Shampooing and Conditioning</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Oil Massages</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Hair Spas</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Blow Dry</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->                                                                                             
                              </div>
                              <!--/ menu section -->
                           </div>
                           <!-- / menu body -->
                        </div>
                        <!--/ col-xl--> 
                        <!-- Second Row -->
                        <div class="col-xl-6">
                           <div class="menu-body">
                              <div class="menu-section">
                                <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Ironing</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->       
                                <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Tonging</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->       
                                <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Basic Hair Cuts</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->       
                                <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Root Touch-Ups</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->            
                              </div>
                              <!--/ menu section -->
                           </div>
                           <!-- / menu body -->
                        </div>
                        <!--/ col-xl-->  									
                     </div>
                     <!--/row -->          
                  </div>
                  <!--/ tab 5 -->
                  <!-- tab 6 -->
                  <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="6-tab">
                     <div class="row">
                        <div class="col-lg-4">
                           <!-- image -->
                           <img class="img-fluid color-outline" src="<?= base_url()?>assets/img/rates4.jpg" alt="" >
                        </div>
                        <!--/ col-lg-->
                        <div class="col-lg-7 offset-lg-1 res-mt-5 my-auto">
                           <h3>
                              Corporate Makeup Course
                           </h3>
                           <p class="mt-3">Duration : 6 Days</p>
                        </div>
                        <!--/ col-lg-->
                     </div>
                     <!-- /row -->
                     <div class="row mt-5 gx-5">
                        <!-- First Row -->
                        <div class="col-xl-6">
                           <!-- menu body -->
                           <div class="menu-body">
                              <div class="menu-section">
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Color Wheel</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->
                              </div>
                              <!--/ menu section -->
                           </div>
                           <!-- / menu body -->
                        </div>
                        <!--/ col-xl--> 
                        <!-- Second Row -->
                        <div class="col-xl-6">
                           <div class="menu-body">
                              <div class="menu-section">
                                <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Foundation with concealing, Highlighting and Contouring.</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->                
                              </div>
                              <!--/ menu section -->
                           </div>
                           <!-- / menu body -->
                        </div>
                        <!--/ col-xl-->  									
                     </div>
                     <!--/row -->          
                  </div>
                  <!--/ tab 6 -->
                  <!-- tab 7 -->
                  <div class="tab-pane fade" id="tab7" role="tabpanel" aria-labelledby="7-tab">
                     <div class="row">
                        <div class="col-lg-4">
                           <!-- image -->
                           <img class="img-fluid color-outline" src="<?= base_url()?>assets/img/rates4.jpg" alt="" >
                        </div>
                        <!--/ col-lg-->
                        <div class="col-lg-7 offset-lg-1 res-mt-5 my-auto">
                           <h3>
                              Personal Grooming
                           </h3>
                           <p class="mt-3">Duration : 12 Days</p>
                        </div>
                        <!--/ col-lg-->
                     </div>
                     <!-- /row -->
                     <div class="row mt-5 gx-5">
                        <!-- First Row -->
                        <div class="col-xl-6">
                           <!-- menu body -->
                           <div class="menu-body">
                              <div class="menu-section">
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Skills gained</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Basics of skincare</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Basics of Hair Care</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Basics of Makeup application</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->
                              </div>
                              <!--/ menu section -->
                           </div>
                           <!-- / menu body -->
                        </div>
                        <!--/ col-xl--> 
                        <!-- Second Row -->
                        <div class="col-xl-6">
                           <div class="menu-body">
                              <div class="menu-section">
                                <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Party makeup application</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->                
                                <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Hair up styling</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->                
                                <!-- Item starts -->
                                 <div class="menu-item">
                                    <div class="menu-item-name">
                                       <p>Saree draping</p>
                                    </div>
                                    <div class="menu-item-price">
                                       <p>&#8377;</p>
                                    </div>
                                    <div class="menu-item-description">
                                       
                                    </div>
                                 </div>
                                 <!-- Item ends -->                
                              </div>
                              <!--/ menu section -->
                           </div>
                           <!-- / menu body -->
                        </div>
                        <!--/ col-xl-->  									
                     </div>
                     <!--/row -->          
                  </div>
                  <!--/ tab 7 -->
               </div>
               <!--/tab-content -->
            </div>
            <!--/col-lg -->
         </div>
         <!-- /row -->	
      </section>
      <!-- section-->

<!-- Credits -->
<div class="credits text-center p-3 pt-0">
   <!-- Logo -->
   <div class="brand">
      <a href="index.html">
      <img src="<?= base_url()?>assets/img/logo.png" alt="" class="img-fluid center-block" >
      </a>
   </div>
   <!-- /logo -->
   <p class="mt-3">All Rights reserved <a href="#">MGU</a></p>
               </div>
               <!-- /credits -->
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