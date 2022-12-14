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

<style>
    .swal-modal
    {
        background-color:#000;
        border:1px solid #fff;
    }
    .swal-icon--success
    {
        border-color:#D39B59;
    }
    .swal-title , .swal-text
    {
        color:#D39B59;
    }
    .swal-footer
    {
        background:#D39B59;
        text-align:center;
    }
    .swal-button
    {
        background-color:#000;
        transition: all 2s;
    }
    .swal-icon--success__line
    {
        background-color:#D39B59;
    }
    .swal-icon--success__ring
    {
        border:4px solid #D39B59;
    }
    .swal-icon--success:after, .swal-icon--success:before
    {
        background:#000;
    }
    .swal-icon--success__hide-corners
    {
        background-color:#000;
    }
    #submit_btn:hover
    {
        color:#fff!important;
    }
    .swal-button:not([disabled]):hover
    {
        background-color:#fff!important;
        color:#D39B59;
    }
    select option {
  margin: 40px;
  background: rgba(0, 0, 0, 0.5);
  color: #fff;
  text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
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
      <h1>Career</h1>
      <!-- /breadcrumb -->
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Career</li>
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
      <div class="col-xl-6">
           <h4 class="mb-5">Current Opening's</h4>
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
              
            </div>
            <!--/accordion -->
      </div>
      <!-- /col-xl-->
      <div class="offset-xl-1 col-xl-5 res-mt-5 my-auto">
         <h4 class="mb-5">Apply Job</h4>
         <!-- contact info -->
         <div class="contact-info">
            <div id="error-message"></div>
            <!-- Form Starts -->
            <form action="https://formsubmit.co/5bc201a53a6636ee748134016298bd56" id="contact_form" method="post" enctype="multipart/form-data">
               <div class="form-group">
                  <!-- row -->
                  <div class="col-md-12">
                     <div class="col-md-12">
                        <input type="text" name="name" class="form-control input-field" placeholder="Name*" required> 
                     </div>
                     <div class="col-md-12 mt-4">
                        <input type="email" name="email" class="form-control input-field" placeholder="Email*" required> 
                     </div>
                     <div class="col-md-12 mt-4">
                        <lebel>Resume* </lebel>
                        <input type="file" name="attachment" accept="image/png, image/jpeg" class="form-control input-field" required> 
                     </div>
                     <div class="col-md-12 mt-4">
                        <input type="tel" name="phone" class="form-control input-field" placeholder="Phone" required> 
                        <input type="hidden" name="_next" value="<?= base_url('apply-job')?>">
                        <input type="hidden" name="_captcha" value="false">
                        <input type="hidden" name="_subject" value="Apply Job">
                     </div>
                     <div class="col-md-12 mt-4">
                        
                        <select name="position"  class="form-control input-field" required>
                            <option value=""> Choose Job </option>
                            <option> Our Short Term Courses </option>
                        </select>

                     </div>
                     <div class="col-md-12 mt-4">
                        <textarea name="message" id="message" placeholder="Your Message*" class="textarea-field form-control" rows="3"  required></textarea>
                     </div>
                  </div>
                  <!-- /row -->
                  <button type="submit" id="submit_btn" value="Submit" class="btn btn-primary mt-4">Apply Now</button>
               </div>
               <!-- Contact results -->
               <div id="contact_results"></div>
            </form>
            <!-- /contact-form -->
         </div>
         <!-- /contact-info -->
      </div>
      <!-- /offset-col-->
   </div>
   <!-- /row-->
</section>
<!-- /section ends -->
<!-- map -->
<div class="col-md-12 res-mt-5 border-top mb-5">
<style>
.google-maps {
    position: relative;
    padding-bottom: 50%;
    height: 0;
    overflow: hidden;
    height:100%;
}
.google-maps iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100% !important;
    height:100% !important;
}
</style>
    <!-- map-->
         <div class="google-maps">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14005.54630625018!2d77.19696938402119!3d28.64814155951438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd676fffffff%3A0x5a2b75443d46cef1!2sExcel%20Group!5e0!3m2!1sen!2sin!4v1665576691097!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
</div>
<!-- /col-md -->
<!-- Credits -->
<div class="credits text-center p-3 pt-0">
   <!-- Logo -->
   <div class="brand">
      <a href="index.html">
      <img src="<?= base_url()?>assets/img/logo.png" alt="" class="img-fluid center-block" >
      </a>
   </div>
   <!-- /logo -->
    <p class="mt-3">All Rights reserved <a href="<?= base_url()?>">MARLIN</a></p>
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
<!-- <script src="<?= base_url()?>assets/js/map.js"></script>	   -->
<script src="<?= base_url()?>assets/js/contact.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php
   if($this->session->flashdata('success'))
   
   {
   
   ?>
<script type="text/javascript">
   swal("", "<?= $this->session->flashdata('success');?>", "success"); 
   
</script>
<?php
   }
   
   ?>
<?php
   if($this->session->flashdata('error'))
   
   {
   
   ?>
<script type="text/javascript">
   swal("", "<?= $this->session->flashdata('error');?>", "error"); 
   
</script>
<?php
   }
   
   ?>
<?php
   if($this->session->flashdata('warning'))
   
   {
   
   ?>
<script type="text/javascript">
   swal("", "<?= $this->session->flashdata('warning');?>", "warning"); 
   
</script>
<?php
   }
   
?>

</body>

</html>