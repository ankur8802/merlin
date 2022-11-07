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
      <!-- Font files -->`

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
      <style>
        .verticals-img
        {
            width: 9rem;
            height: 5rem;
            background: #fff;
            margin: 0.5rem;
            padding: 0.5rem;
            border-radius: 5px;
            border: 2px solid #3e2d19;
        }
        #bg-home {
            background-size: auto;
            background-position: cover;
            background-repeat:no-repeat;
            background-image: url(http://localhost/merlin/assets/css/../img/team/teambg.jpg);
        }
      </style>
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
<div id="bg-home" class="bg-overlay2 content-wrapper">

<!--1st row grid -->
<div id="home-grid" class="row h-100 g-0">
   <!-- MGU BOX1 -->
   <div class="col-lg-6 h-100 border-end border-bottom border-grid">
      <div class="h-50 img-grid">
          <a href="http://www.mgu.edu.in/">
            <div class="p-5 box-effect col-lg-12 d-flex ">
               <div class="text-center my-auto w-100">
                  <img src="<?= base_url()?>assets/img/verticals_img/mgu.png" class="verticals-img" alt="" srcset="" />
                  <h6 class="my-3 text-grid">Mahatma Gandhi University</h6>
                  <p class="py-2">MGU is an institution which promises to become one of India's leading universities with an acknowledged reputation for excellence in research and teaching...</p>
               </div>
            </div>
            <!--/ box-bg 1-->
         </a>
       </div>
      <!-- EXCEL GROUP BOX2-->
      <div class="border-top h-50 img-grid border-grid">
         <a href="#">
            <div class="p-5 box-effect col-lg-12 d-flex" >
               <div class="text-center my-auto w-100">
                  <img src="<?= base_url()?>assets/img/verticals_img/excelgroups.png" class="verticals-img" alt="" srcset="" />
                  <h6 class="my-3 text-grid">Excel Group Pvt Ltd</h6>
                  <p class="py-2">The company is dealing with universities, colleges, buildings, malls, villas, high rated bungalows, Govt .</p>
               </div>
               <!--/ box-bg 4-->
            </div>
            <!--/ col-lg-->
         </a>
      </div>
   </div>
   <!--/ border-->
   <div class="col-lg-6 h-100">
      <!--SOUTH BLOCK DIGITAL BOX3 -->
      <div class="border-bottom h-100 img-grid border-grid">
         <a href="http://www.southblockdigital.com/">
            <div class="p-5 box-effect col-lg-12 d-flex h-100" >
               <div class="text-center my-auto w-100">
                  <img src="<?= base_url()?>assets/img/verticals_img/sbd.png" class="verticals-img" alt="" srcset="" />
                  <h6 class="my-3 text-grid">South Block Digital</h6>
                  <p class="py-2">South Block Digital is a media platform for the people, by the people. While upholding the values of the Indian constitution, we believe in practicing fearless and unbiased journalism.</p>
               </div>
               <!--/ box-bg 2-->
            </div>
            <!--/ col-lg-->
         </a>
      </div>
      <!--/ border-->   
   </div>  
</div>

<!-- 2nd row-->
<div id="home-grid" class="row h-100 g-0">
   <!-- CARE BOX4 -->
   <div class="col-lg-6 h-100 border-bottom border-end border-grid">
      <div class="h-100 img-grid">
          <a href="http://www.cews.in/">
            <div class="box-effect p-5  col-lg-12 d-flex h-100">
               <div class="text-center my-auto w-100">
               <img src="<?= base_url()?>assets/img/verticals_img/care.png" class="verticals-img" alt="" srcset="" />
                  <h6 class="my-3 text-grid">CARE partner with NSDC </h6>
                  <p class="">CARE partner with NSDC promoting Skill India is a nonprofit organization for imparting skill development program/training and placement services to the candidates under the special projects under SGSY/NRLM in the field of computer applications,... </p>
               </div>
            </div>
            <!--/ box-bg 1-->
         </a>
       </div>
     </div>
   <!--/ border-->
   <div class="col-lg-6 h-100">
     <!-- VCAMPUS BOX5 -->
     <div class="border-bottom h-50 img-grid border-grid">
         <a href="http://www.vcampusglobal.com/">
            <div class="box-effect p-5 col-lg-12 d-flex h-100" >
               <div class="text-center my-auto w-100">
                  <img src="<?= base_url()?>assets/img/verticals_img/vcampus.png" class="verticals-img" alt="" srcset="" />
                  <h6 class="my-3 text-grid">VCampus</h6>
                  <p class="py-2">VCampus is a leading US based Education Company incorporated in the state of Delaware.An eminent education and service provider...</p>
               </div>
               <!--/ box-bg 4-->
            </div>
            <!--/ col-lg-->
         </a>
      </div>
      <!--MGUI BOX6 -->
      <div class="border-bottom h-50 img-grid border-grid">
         <a href="#">
            <div class="box-effect p-5 col-lg-12 d-flex h-100 " >
               <div class="text-center my-auto w-100">
                  <img src="<?= base_url()?>assets/img/verticals_img/mgui.png" class="verticals-img" alt="" srcset="" />
                  <h6 class="my-3 text-grid">Mahatma Gandhi Universe Institute (MGUI)</h6>
                  <p class="py-2">Mahatma Gandhi Universe Institute (MGUI) duly approved by (AICTE), Ministry of Human Recourse Development (HRD)... </p>
               </div>
               <!--/ box-bg 2-->
            </div>
            <!--/ col-lg-->
         </a>
      </div>
      <!--/ border-->   
   </div>  
</div>

<!-- 3rd row-->
<div id="home-grid" class="row h-100 g-0">
   <!-- VLearn BOX7 -->
   <div class="col-lg-6 h-70 border-end border-grid">
      <div class="border-bottom h-100 img-grid">
          <a href="http://vlearninspired.com/login/index.php">
            <div class="p-5 box-effect col-lg-12 d-flex h-100">
               <div class="text-center my-auto w-100">
                 <img src="<?= base_url()?>assets/img/verticals_img/vlearn.png" class="verticals-img" alt="" srcset="" />
                  <h6 class="my-3 text-grid">VLearn's</h6>
                  <p class="py-2">VLearn's platform has been built from experience and collective feedback to identify and remove restraints on students' education, so that aspirants may enhance their capabilities and interests and enrich their full potential. As a platform, VLearn provides the next generation learning environment leveraging latest technology solutions to deliver quality education helping students with an inspired learning experience.</p>
               </div>
            </div>
            <!--/ box-bg 1-->
         </a>
      </div> 
    </div>
   <!--/ border-->
   <div class="col-lg-6 h-70 border-end border-grid">
     <!--Mahatma Gandhi World School BOX9 -->
     <div class="border-bottom h-100 img-grid">
         <a href="http://www.mahatmagandhiworldschool.com/">
            <div class="p-5 box-effect col-lg-12 d-flex h-100" >
               <div class="text-center my-auto w-100">
               <img src="<?= base_url()?>assets/img/verticals_img/worldschool.png" class="verticals-img" alt="" srcset="" />
                  <h6 class="my-3 text-grid">Mahatma Gandhi World School</h6>
                  <p class="py-2">The Primary and Secondary Schools are an integral part of our education system, neither of them can be counted less important. Schools are also taking an important roleplay in the overall development of students. Parents also need to have a discussion with their kids for all the activities in the school along with the teachers, knowing about the performance of their kids, both in academics as well as curriculum activities... </p>
                 
               </div>
               <!--/ box-bg 4-->
            </div>
            <!--/ col-lg-->
         </a>
     </div>
      <!--/ border-->   
   </div>  
</div>

<!-- 4th row-->
<div id="home-grid" class="row h-100 g-0">
   <!-- Vidya BOX10 -->
   <div class="col-lg-6 h-100 border-end border-grid">
      <div class="border-bottom h-100 img-grid">
          <a href="#">
            <div class="p-5 box-effect col-lg-12 d-flex h-100">
               <div class="text-center my-auto w-100">
               <img src="<?= base_url()?>assets/img/verticals_img/vinayak.jpg" class="verticals-img" alt="" srcset="" />
                  <h6 class="my-3 text-grid"> Vidya IT Solutions</h6>
                    <p class="py-2">Vidya IT Solutions is one of the fastest growing organizations that provide E-Governance, Web designing, Search Engine Optimization services in India. Over a short span of its operations in this domain, Vidya has developed a track record of developing software applications..</p>
               </div>
            </div>
            <!--/ box-bg 1-->
         </a>
      </div>
       <!-- Vidya BOX10 -->     
   </div>

   <!--/ border-->
   <div class="col-lg-6 h-100 border-end border-grid">
      <!-- VMS BOX11 -->
      <div class="border-bottom h-50 img-grid">
         <a href="#">
            <div class="p-5 box-effect col-lg-12 d-flex h-100" >
               <div class="text-center my-auto w-100">
                  <img src="<?= base_url()?>assets/img/verticals_img/vms.png" class="verticals-img" alt="" srcset="" />
                  <h6 class="my-3 text-grid">Vivekanand Management Services Private Ltd (VMS),</h6>
                  <p class="my-2">Vivekanand Management Services Private Ltd (VMS)...</p>
               </div>
               <!--/ box-bg 4-->
            </div>
            <!--/ col-lg-->
         </a>
      </div>
      <!--Vidya Express BOX12 -->
      <div class="border-bottom p-3 h-50 img-grid border-grid-down">
         <a href="#">
            <div class="box-effect col-lg-12 d-flex h-100 " >
               <div class="text-center my-auto w-100">
                  <img src="<?= base_url()?>assets/img/verticals_img/vidyaexpress.png" class="verticals-img" alt="" srcset="" />
                  <h6 class="my-3 text-grid">Vidya Express</h6>
                  <p class="py-2">Vidya Express is one of the leading portals on Education in India ,Amongst the top portals on higher education and entrance exams,...</p>
               </div>
               <!--/ box-bg 2-->
            </div>
            <!--/ col-lg-->
         </a>
      </div>
      <!--/ border-->   
   </div>  
</div>

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