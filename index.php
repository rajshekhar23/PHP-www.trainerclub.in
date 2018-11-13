<?PHP
require('backend/dbConnect.php');
?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"    >
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

<section id="slider">
    <div class="container">
      <div id="myCarousel" class="carousel"  data-interval="3000">
      <div class="carousel-inner">
          <div class="item" style="">
              <img src="./assets/images/slides/Slide1.jpg" alt="" class="">
              <div class="carousel-caption">
                <h4 class="">Bridging The Gap</h4>
                <p class="">
                   TC Trainer's are skillng people globally professionals, Freshers And Students
                </p>
              </div>
          </div>
          <div class="item active">
              <img src="./assets/images/slides/Slide2.jpg" alt="" class="">
              <div class="carousel-caption">
                <h4 class="">Quick And Easy "Training Solutions"</h4>
                <p class="">
                   The Current And Future State of the Corporate Learning Modalities
                </p>
              </div>
          </div>
          <div class="item" style="">
              <img src="./assets/images/slides/Slide3.jpg" alt="" class="">
              <div class="carousel-caption">
              <h4 class="">We Believe In Facililating</h4>
                <p class="">"Corporate Trainer is the main source of information"
                "Learning Facililator is the hub via which information is shared"</p>
              </div>
          </div>
          <div class="item" style="">
              <img src="./assets/images/slides/Slide4.jpg" alt="" class="">
              <div class="carousel-caption">
                <h4 class="">Enhance Your Skills</h4>
                <p class="">
                   Advanced Certification Courses
                </p>
              </div>
          </div>
          <div class="item" style="">
              <img src="./assets/images/slides/Slide5.jpg" alt="" class="">
              <div class="carousel-caption">
              <h4 class="">Design And Deliever Your Accredited</h4>
                <p class="">
                   Signature Program
                </p>
              </div>
          </div>
          <div class="item" style="">
              <img src="./assets/images/slides/Slide6.jpg" alt="" class="">
              <div class="carousel-caption">
                <h4 class="">Our Expert Services</h4>
                <p class="">Training Videos And Corporate Film Making</p>
              </div>
          </div>
      </div>    
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
  </div>
 </div>
</section>  
<!-- Start Feature -->
  <section id="feature">
    <div class="container">
      <marquee behavior="" direction="" class="liveText">
        <p>
          <a href="#trainingevents" id="back2">Click Here For Training Events</a>
          <a href="#joblist" id="back1">Click Here For Available Jobs</a> 
        </p>
      </marquee>
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Feature Video</h2>
            <span class="line"></span>
<br></br>
<div class="vid"><iframe id="tcvideo" width="420" height="315" src="./assets/images/home/TC Website Video.mp4?mute=0" frameborder="0" allowfullscreen muted></iframe></div>
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
  <section id="jobslisting" style="margin-bottom:60px;">
    <div class="container">
      <div class="title-area" id="joblist">
        <h2 class="title">Job Listing</h2>
      </div>
      <div class="row">
        <div id="jobs">
        </div>
      </div>
    </div>
  </section>
  
  <section id="upcomingevents" style="margin-bottom:60px;">
    <div class="row">
      <div class="col-md-12">
        <div class="title-area" id="trainingevents">
          <h2 class="title">Training Events</h2>
            <span class="line"></span>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="container">
        <div class="col-md-4 col-sm-6">
          <div class="category-box" data-aos="fade-up">
            <div class="eventTop1">
                <div class="brows-job-location">
                  <h4>NLP - Neuro Logistics Programming</h4>
                </div>
            </div>
            <div class="category-desc thumbnail1">
              <div class="category-detail category-desc-text">
                <button class="btn" style="background-color:#2bcdc1;"  onclick="showEventLightBox('NLP 21st Sept-2018 to 1st Oct 2018.jpg')">VIEW</button>
              </div>
            </div>
            <div class="eventBottom1">
              <span class="brows-job-sallery"><i class="fa fa-calendar">21st Sept to 1st Oct,2018</i></span>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="category-box" data-aos="fade-up">
            <div class="eventTop1">
                <div class="brows-job-location">
                  <h4>TTT NLP - 7 Days Workshop Program</h4>
                </div>
            </div>
            <div class="category-desc thumbnail1">
              <div class="category-detail category-desc-text">
                <button class="btn" style="background-color:#2bcdc1;"  onclick="showEventLightBox('NLP 24th Aug.jpg')">VIEW</button>
              </div>
            </div>
            <div class="eventBottom1">
              <span class="brows-job-sallery"><i class="fa fa-calendar">24th Aug,2018</i></span>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="category-box" data-aos="fade-up">
            <div class="eventTop1">
                <div class="brows-job-location">
                  <h4>NLP - Certification Program</h4>
                </div>
            </div>
            <div class="category-desc thumbnail1">
              <div class="category-detail category-desc-text">
                <button class="btn" style="background-color:#2bcdc1;"  onclick="showEventLightBox('NLP 13th to 18th Nov-2018.png')">VIEW</button>
              </div>
            </div>
            <div class="eventBottom1">
              <span class="brows-job-sallery"><i class="fa fa-calendar">13th to 24th Aug,2018</i></span>
            </div>
          </div>
        </div>        
        <div class="col-md-4 col-sm-6">
          <div class="category-box" data-aos="fade-up">
            <div class="eventTop1">
                <div class="brows-job-location">
                  <h4>GraphoAnalysis</h4>
                </div>
            </div>
            <div class="category-desc thumbnail3">
              <div class="category-detail category-desc-text">
                <button class="btn" style="background-color:#2bcdc1;"  onclick="showEventLightBox('Graphoanalysis 29th July.png')">VIEW</button>
              </div>
            </div>
            <div class="eventBottom1">
              <span class="brows-job-sallery"><i class="fa fa-calendar">29th July,2018</i></span>
            </div>
          </div>
        </div>        
        <div class="col-md-4 col-sm-6">
          <div class="category-box" data-aos="fade-up">
            <div class="eventTop1">
                <div class="brows-job-location">
                  <h4>NLP - Neuro Logistics Programming</h4>
                </div>
            </div>
            <div class="category-desc thumbnail1">
              <div class="category-detail category-desc-text">
                <button class="btn" style="background-color:#2bcdc1;"  onclick="showEventLightBox('NLP 19th July.jpg')">VIEW</button>
              </div>
            </div>
            <div class="eventBottom1">
              <span class="brows-job-sallery"><i class="fa fa-calendar">19th July,2018</i></span>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="category-box" data-aos="fade-up">
            <div class="eventTop1">
                <div class="brows-job-location">
                  <h4>Automobile Industry</h4>
                </div>
            </div>
            <div class="category-desc thumbnail2">
              <div class="category-detail category-desc-text">
                <button class="btn" style="background-color:#2bcdc1;"  onclick="showEventLightBox('Automobile 8th July.jpg')">VIEW</button>
              </div>
            </div>
            <div class="eventBottom1">
              <span class="brows-job-sallery"><i class="fa fa-calendar">8th July,2018</i></span>
            </div>
          </div>
        </div>
      </div>
   </div>
  </section>


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
            var content ='';
/*             var content = '<table class="table table-bordered table-striped table-condensed">'+
            '<tr class="text-center">'+
            '<th class="text-center"> Job Title </th>'+
            '<th class="text-center">Job Location</th>'+
            '<th class="text-center">APPLY</th>'+
            '</tr>';
            data.forEach(job => {
              content += '<tr class="text-center">' +
              '<td>'+ job.jobTitle +'</td>'+
              '<td>'+ job.jobDescription +'</td>'+
              '<td><button class="btn btn-info btn-md" onclick="applyJob()">APPLY</button></td>'+
            '</tr>';
            });
            content +="</table>";
 */
            data.forEach(job => {
            content += '<div class="col-md-4 col-sm-6">'+
              '<div class="grid-view brows-job-list">'+
                '<div class="brows-job-position">'+
                  '<h3><a href="job-detail.html">'+ job.jobTitle +'</a></h3>'+
                  '<p><span>'+ job.industryType +'</span></p>'+
                '</div>'+
                '<div class="job-position">'+
                  '<span class="job-num"><button class="btn btn-sm" style="background-color:#2bcdc1;color:#fff;font-weight:600;" onclick=showJobLightBox('+ job.id +')>Apply</button></span>'+
                '</div>'+
                '<div class="brows-job-type">'+
                  '<span class="freelanc">'+ job.positionType +'</span>'+
                '</div>'+
                '<ul class="grid-view-caption">'+
                  '<li style="background-color: #e4e4e4;margin-right:1px;">'+
                    '<div class="brows-job-location">'+
                      '<p style="margin: 0 0 0px;margin-top: 0px;padding-top: 6px;"><i class="fa fa-map-marker" style="margin-right:3px;"></i>'+ job.city +'</p>'+
                    '</div>'+
                  '</li>'+
                  '<li style="background-color: #e4e4e4;margin-left:1px;">'+
                    '<p style="margin: 0 0 0px;margin-top: 0px;padding-top: 6px;"><span class="brows-job-sallery"><i class="fa fa-money" style="margin-right:3px;"></i>$'+ job.salaryMinRange +'-' + job.salaryMaxRange +'</span></p>'+
                  '</li>'+
                '</ul>'+
                '<span class="tg-themetag tg-featuretag">'+ job.jobTitle +'</span>'+
              '</div>'+
            '</div>';
            });
            content +='<div class="col-md-4 col-sm-6 viewmore"><a class="btn btn-info" href="jobslist.php" style="background-color:#2bcdc1;">VIEW MORE</a></div>';
            $('#jobs').html(content);            
          } else {
            $('#jobs').html('No Jobs Available');
          }
        });
      }


    $('#myCarousel').carousel();
    var winWidth = $(window).innerWidth();
    $(window).resize(function () {

        if ($(window).innerWidth() < winWidth) {
            $('.carousel-inner>.item>img').css({
                'min-width': winWidth, 'width': winWidth
            });
        }
        else {
            winWidth = $(window).innerWidth();
            $('.carousel-inner>.item>img').css({
                'min-width': '', 'width': ''
            });
        }
    });


      function applyJob(job) {
          console.log(job);
          $.post("./backend/allProducts.php",{
            flag:"applyJob",
            jobId:job
          },function(data) {
            console.log(data);
            if(data == true) {
              toast('Applied successfully');
              setTimeout(() => {
                closeLightBox();
              }, 1500);              
            } else {
              toast(data);
              setTimeout(() => {
                $("#login-form").css('display','block');
              }, 2000);
            }
          });
      }
      
      function showJobLightBox( job) {
        $.post("./backend/allProducts.php",{
            flag:"getJobDesc",
            jobId:job
          },function(data) {
            console.log(data);
            content = '<div id="myModal" class="modal1">'+
                  '<span class="cancelJob cursor" onclick="closeLightBox()">&times;</span>'+
                  '<div class="modal-content">'+
                    '<div class="mySlides" style="padding:20px;">'+
                      '<h3 class="text-center">Job Description</h3>'+
                      '<p style="text-align:justify;margin-top:20px;padding:40px;">'+ data[0].jobDescription +'</p>'+
                      '<div class="text-center"><button class="btn btn-warning" onclick="applyJob('+ job +')">APPLY</button></div>' +
                    '</div>'+
                  '</div>'+
                '</div>';
            $('.lightBox').html(content);                
            $('#myModal').css("display","block");
          });
      }

      function showEventLightBox( url) {
        url = './assets/images/events/'+url;
        content = '<div id="myModal" class="modal">'+
                  '<span class="cancel cursor" onclick="closeLightBox()">&times;</span>'+
                  '<div class="modal-content">'+
                    '<div class="mySlides">'+
                      '<img src="'+ url +'" style="width:100%">'+
                    '</div>'+
                  '</div>'+
                '</div>';
        $('.lightBox').html(content);                
        $('#myModal').css("display","block");
      }
      function closeLightBox() {
        $('.lightBox').html('');
        $('#myModal').css("display","none");
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
  <div class="lightBox">

  </div>
  </body>
</html>