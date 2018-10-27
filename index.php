<?PHP
require('backend/dbConnect.php');
?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Trainer's Club : Home</title>
  <link rel="shortcut icon" type="image/icon" href="assets/images/logonew.png"/>
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css" />
  <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css" />
  <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/bootstrap-tagsinput.css">
  <link rel="stylesheet" href="assets/css/font-awesome.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/customTrainer.css">
  <!-- Open Sans for body font -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>

<body>

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

<?php
  include_once('header.php');
  include_once('menu.php');
?>

  <!-- BEGIN MENU -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

  <!-- Start login modal window -->
  <?php 
    include_once("login.php");
  ?>
  <!-- End login modal window -->

  <!-- Start slider -->
			
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 120px;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="assets/images/slider1.png" alt="Los Angeles">
        </div>
        <div class="item">
          <img src="assets/images/slider2.png" alt="Los Angeles">
        </div>
        <div class="item">
          <img src="assets/images/slider3.png" alt="Los Angeles">
        </div>
        <div class="item">
          <img src="assets/images/slider4.png" alt="Los Angeles">
        </div>
        <div class="item">
          <img src="assets/images/slider5.png" alt="Los Angeles">
        </div>
        <div class="item">
          <img src="assets/images/slider6.png" alt="Los Angeles">
        </div>
      </div>
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>
  <!-- End slider -->

  <!-- Start Feature -->
  <section id="feature">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Feature Video</h2>
            <span class="line"></span>
<br></br>
<div class="vid"><iframe width="420" height="315" src="https://www.youtube.com/embed/'+ $(this).attr('id') +'?autoplay=1" frameborder="0" allowfullscreen></iframe></div>
<!--');
   return false;

     e.preventDefault();
    });-->

 


           <!--

<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="feature-content">
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <i class="fa fa-leaf feature-icon"></i>
                  <h4 class="feat-title">Creative Design</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <i class="fa fa-mobile feature-icon"></i>
                  <h4 class="feat-title">Responsive Layouts</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <i class="fa fa-thumbs-o-up feature-icon"></i>
                  <h4 class="feat-title">Great Features</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <i class="fa fa-gears feature-icon"></i>
                  <h4 class="feat-title">Multiple Options</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <i class="fa fa-code feature-icon"></i>
                  <h4 class="feat-title">Quality Code</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <i class="fa fa-smile-o feature-icon"></i>
                  <h4 class="feat-title">Awesome Support</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                </div>
              </div>
            </div>

-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Feature -->
  <section id="JobsListing">
    <div class="container">
      <div class="title-area">
        <h2 class="title">Job Listing</h2>
      </div>
      <div class="row">
        <div id="jobs">
        </div>
      </div>
    </div>
  </section>
  <section id="upcomingevents">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Training Events</h2>
            <span class="line"></span>
            <p></p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="pricing-table-content">
            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12 events">
                <div class="single-table-price wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                  <div class="price-header">
                    <!-- <span class="price-title">EVENT TYPE</span> -->
                    <div class="price">
                      <sup class="price-up">NLP - Neuro Logistics Programming</sup>
                      
                      <span class="price-down"></span>
                    </div>
                  </div>
                  <div class="price-article">
                    <img src="./assets/images/events/NLP 19th July.jpg" alt="">
                  </div>
                  <div class="price-footer">
                    <a class="purchase-btn" href="#">EXPLORE</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12 events">
                <div class="single-table-price wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.75s">
                  <div class="price-header">
                    <!-- <span class="price-title">EVENT TYPE</span> -->
                    <div class="price">
                      <sup class="price-up">Automobile</sup>
                      
                      <span class="price-down"></span>
                    </div>
                  </div>
                  <div class="price-article price-article2">
                  </div>
                  <div class="price-footer">
                    <a class="purchase-btn" href="#">EXPLORE</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12 events">
                <div class="single-table-price featured-price wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                  <div class="price-header">
                    <!-- <span class="price-title">EVENT TYPE</span> -->
                    <div class="price">
                      <sup class="price-up">GraphoAnalysis</sup>
                      
                      <span class="price-down"></span>
                    </div>
                  </div>
                  <div class="price-article price-article3">
                  </div>
                  <div class="price-footer">
                    <a class="purchase-btn" href="#">EXPLORE</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12 events">
                <div class="single-table-price wow fadeInUp" data-wow-duration="1.15s" data-wow-delay="1.15s">
                  <div class="price-header">
                    <!-- <span class="price-title">EVENT TYPE</span> -->
                    <div class="price">
                      <sup class="price-up">NLP - Certification Program</sup>                      
                      <span class="price-down"></span>
                    </div>
                  </div>
                  <div class="price-article price-article4">
                  </div>
                  <div class="price-footer">
                    <a class="purchase-btn" href="#">EXPLORE</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Pricing table -->  

  <!-- end about -->


  <!-- Start Clients brand -->
  <!-- <section id="clients-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="clients-brand-area">
            <ul class="clients-brand-slide">
              <li class="col-md-3">
                <div class="single-brand">
                  <img src="assets/images/amazon.png" alt="img">
                </div>
              </li>
              <li class="col-md-3">
                <div class="single-brand">
                  <img src="assets/images/discovery.png" alt="img">
                </div>
              </li>
              <li class="col-md-3">
                <div class="single-brand">
                  <img src="assets/images/envato.png" alt="img">
                </div>
              </li>
              <li class="col-md-3">
                <div class="single-brand">
                  <img src="assets/images/tuenti.png" alt="img">
                </div>
              </li>
               <li class="col-md-3">
                <div class="single-brand">
                  <img src="assets/images/amazon.png" alt="img">
                </div>
              </li>
              <li class="col-md-3">
                <div class="single-brand">
                  <img src="assets/images/discovery.png" alt="img">
                </div>
              </li>
              <li class="col-md-3">
                <div class="single-brand">
                  <img src="assets/images/envato.png" alt="img">
                </div>
              </li>
              <li class="col-md-3">
                <div class="single-brand">
                  <img src="assets/images/tuenti.png" alt="img">
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- End Clients brand -->

  

  <!-- Start subscribe us -->
  <section id="subscribe">
    <div class="subscribe-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subscribe-area">
              <h2 class="wow fadeInUp">Subscribe</h2>
              <form action="" class="subscrib-form wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <input type="text" placeholder="Enter Your E-mail..">
                <button class="subscribe-btn" type="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End subscribe us -->

  <!-- Start footer -->
  <?php
    include_once('footer.php');
  ?>
  <!-- End footer -->

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>    
  <!-- mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
 <!-- counter -->
  <script src="assets/js/waypoints.js"></script>
  <script src="assets/js/jquery.counterup.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 
  <!-- progress bar   -->
  <script type="text/javascript" src="assets/js/bootstrap-progressbar.js"></script>  
  
 
  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
  <script type="text/javascript" src="assets/js/customTrainer.js"></script>
  <script>
      function getAllPostedjobs() {
        $.post("./backend/allProducts.php",{
          flag:"getAllPostedjobs"
        },function(data) {
          console.table(data);
          if(data.length > 0) {
            var content = '<table class="table table-bordered table-striped table-condensed">'+
            '<tr class="text-center">'+
            '<th class="text-center"> Job Title </th>'+
            '<th class="text-center">Job Location</th>'+
            '</tr>';
            data.forEach(job => {
              content += '<tr class="text-center">' +
              '<td>'+ job.jobTitle +'</td>'+
              '<td>'+ job.jobDescription +'</td>'+
            '</tr>';
            });
            content +="</table>";
            $('#jobs').html(content);            
          } else {
            $('#jobs').html('No Jobs Available');
          }
        });
      }
      $(document).ready(function() {
          getAllPostedjobs();
          $("form[name='login']").submit(function() {
              var user_name = $("form :input[name='user_name']").val();
              var user_password = $("form :input[name='user_password']").val();
              var user_password = $("form :input[name='user_role']").val();
              var flag = "checkAuth";
              $.post("./backend/loginOperation.php",{
                  flag:flag,
                  user_name:user_name,
                  user_password:user_password,
                  user_role:user_role
              },function(data) {
                  alert(data);
              });
          });
          $("form[name='login']").on('submit', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
              type: 'post',
              url: 'backend/loginOperation.php',
              processData: false,
              contentType: false,
              data: formData,
              success: function (data) {
                console.log('data',data);
                alert(data);
                if(data > 0) {
                  alert('Trainer enrolled successfully');
                  window.location.href="trainerProfile.php?trainerId="+data;
                }
              }
            });
          });
          $("#logout,#signout").click(function(){
            event.preventDefault();
          $.post("./backend/logoutOperation.php",{},function(data) {
            window.location.href = "index.php";
          });
        });
      });
  </script>
  </body>
</html>