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
   .btn:hover
   {
       color:#fff!important;
   }
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
    .datepicker 
    {
        background-color:#000!important;
    }
    .flatpickr-time input:hover, .flatpickr-time .flatpickr-am-pm:hover, .flatpickr-time input:focus, .flatpickr-time .flatpickr-am-pm:focus
    {
        background:#D39B59!important;
    }
    .flatpickr-am-pm
    {
        color:#000!important;
    }

 .ulplus {
    list-style: none;
}

.ulplus li:before {
    content: '\2713';
    margin-right: 4px;
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

<!-- page header -->
<div class="page-header bg-overlay1 container-fluid border-bottom" >
   <div class="col-xl-6 offset-xl-3">
      <h3>Partner With Us</h3>
      <!-- /breadcrumb -->
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Partner With Us</li>
         </ol>
      </nav>
      <!-- /breadcrumb -->
   </div>
   <!-- /col-xl -->
</div>
<!-- /page-header ends -->

<div id="bg-home" class="bg-overlay2 content-wrapper">


<div class="text-center mt-5 p-5 pb-0"><span class="sub-header">Reflect Your Beauty</span>
   <h2>Partner With Us</h2>
   <p>The Beauty Marlin's mission is to transform lives by making euphoria and artistry accessible to both women and men. The Beauty Marlin brand has become synonymous with health and beauty in Indian habitation.</p>
</div>


<section class="p-0 m-4">
       <div class="row">


           <div class="col-md-6 mt-4">
                <div class="border p-2 m-2 rounded h-100">
                   <h4 class="text-center mt-2 text-secondary"> Affiliate Benefits- </h4>
                   <ul class="ulplus">
                      <li> Connections with long-established groups </li>
                      <li> A bouquet of over 100 courses </li>
                      <li> Complete operational know-how, Recruitment and training assistance </li>
                      <li> Quality assurance </li>
                      <li> Marketing support </li>
                      <li> Student internships and placement assistance </li>
                      <li> Profitable and suitable investment </li>
                      <li> Opportunity to participate in sponsored skill development projects </li>
                   </ul>
                </div>
           </div>
           
           <div class="col-md-6 mt-4">
                <div class="border p-2 m-2 rounded h-100">
                   <h4 class="text-center mt-2 text-secondary">Pre-launch support</h4>
                   <ul class="ulplus">
                      <li>Site Selection </li>
                      <li>Infrastructure setup guidelines</li>
                      <li>Assistance in Staff selection and training</li>
                      <li>Institute launch plan</li>
                      <li>Standardized marketing and sales kits</li>
                   </ul>
                </div>
           </div>

           <div class="col-md-6 mt-4">
                <div class="border p-2 m-2 rounded h-100">
                   <h4 class="text-center mt-2 text-secondary"> Operational support-establish automation </h4>
                   <ul class="ulplus">
                      <li> Business plans and reviews </li>
                      <li>Seminars and workshops</li>
                      <li>New courses and related training</li>
                      <li>Sales training</li>
                      <li>Research institute visit</li>
                      <li>Student kit and courseware</li>
                      <li>Student internship</li>
                      <li>Certification</li>
                   </ul>
                </div>
           </div>

           <div class="col-md-6 mt-4">
                <div class="border p-2 m-2 rounded h-100">
                   <h4 class="text-center mt-2 text-secondary"> Requirements-  </h4>
                   <ul class="ulplus">
                      <li>Minimum requirement 2000 sqm commercial space (lease/own)</li>
                      <li>Ability to invest at least Rs 40 lakh</li>
                      <li>Willingness to pursue business as a full-time occupation</li>
                   </ul>
                </div>
           </div>

           


       </div>
</section>


<!-- 4th row-->
<div id="home-grid" class="m-5">

  <div class="row">

      <div class="col-md-12">
           <h2 class="text-center">Partnership Form</h2>
      </div>

      <div class="col-md-4">
         <img src="<?= base_url()?>assets/img/features.jpg" class="w-100 h-100 rounded" alt="">
      </div>
  
      <div class="col-md-8">
      <form action="https://formsubmit.co/5bc201a53a6636ee748134016298bd56" id="contact_form" method="post">
               <div class="form-group">
                  <!-- row -->
                  <div class="col-md-12">

                     <div class="col-md-12">
                        <input type="text" name="name" class="form-control input-field" placeholder="Name*" required> 
                     </div>

                     <div class="col-md-12 mt-4">
                        <input type="tel" name="phone" class="form-control input-field" placeholder="Phone*" required> 
                     </div>

                     <div class="col-md-12 mt-4">
                        <input type="email" name="email" class="form-control input-field" placeholder="Email"> 
                        <input type="hidden" name="_next" value="<?= base_url('franchise-success')?>">
                        <input type="hidden" name="_captcha" value="false">
                        <input type="hidden" name="_subject" value="Franchise">
                     </div>

                     <div class="col-md-12 mt-4">
                        <input type="input" name="Available_Floor_Space" class="form-control input-field" placeholder="Minimum Space required (1500 sq ft)" required> 
                     </div>

                     <div class="col-md-12 mt-4">
                        <input type="number" min="3000000" name="investment_amount" class="form-control input-field" placeholder="The minimum investment amount required is 30L+" required> 
                     </div>

                     <div class="col-md-12 mt-4">
                        <textarea name="message" id="message" placeholder="Comments" class="textarea-field form-control" rows="3"></textarea>
                     </div>

                  </div>
                  <!-- /row -->
                  <button type="submit" id="submit_btn" value="Submit" class="btn btn-primary mt-4">Apply For Partnership <i class="fa-solid fa-handshake-simple"></i></button>
               </div>
               <!-- Contact results -->
               <div id="contact_results"></div>
            </form>
      </div>
       
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