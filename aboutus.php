<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trainer's Club : About Us</title>
    <link rel="shortcut icon" type="image/icon" href=""/>
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">    
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/> 
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css"/> 
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/customTrainer.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  </head>
  <style>
  .our-team {
    padding: 30px 0 40px;
    background-color: white;
    text-align: center;
    overflow: hidden;
    margin:0 50px;
    position: relative;
    border:1px dotted #ccc;
}
h1{
    margin-bottom:15px;
}
.our-team .pic{
    display:inline-block;
    width: 170px;
    height: 170px;
    margin-bottom: 50px;
    /* background-color: #eb1768; */
    position: relative;
    z-index: 1;
}
.our-team .pic::before{
    content: "";
    width: 100%;
    height: 0;
    border-radius: 50%;
    background-color: #2bcdc1;
    position: absolute;
    bottom: 135%;
    right: 0;
    left: 0; 
    transform: scale(3);
    transition: all 0.3s linear 0s;
}

.our-team:hover .pic::before{
    height: 100%;
}
.our-team .pic::after{
    content: "";
    width: 100%;
    height: 99%;
    border-radius: 50%;
    background: #2bcdc1;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
}
.our-team .pic img {
    width: 100%;
    height: 170px;
    border-radius: 50%;
    transform: scale(1);
    transition: all 0.9s ease 0s;
}

.our-team:hover .pic img {
    box-shadow: 0 0 0 14px #e05121;
    transform: scale(0.7);
}

.our-team .team-content{
    margin-bottom: 30px;
}
.our-team .title{
    font-size: 22px;
    font-weight: 700;
    color: #4e5052;
    letter-spacing: 1px;
    text-transform: capitalize;
    margin-bottom: 5px;
}
.our-team .post{
    display: block;
    font-size: 15px;
    color: #4e5052;
    text-transform: capitalize; 
}
.our-team .social{
    width: 100%;
    padding: 0;
    margin:0;
    background: #2bcdc1;
    position: absolute;
    bottom: -100px;
    left: 0;
    transition: all 0.5s ease 0s;

}

.our-team:hover .social{
    bottom: 0;
}
.our-team .social li{
 display: inline-block;
}
.our-team .social li a{
    display: block;
    padding: 10px;
    font-size: 17px;
    color: white;transition: all 0.5s ease 0s;

   }
   .our-team .social li a:hover{
       color: #e05121;
       background: #f7f5ec;
       text-decoration: none;

   }
  </style>
    <body>
  <!-- Start header -->
<?php
include_once('header.php');
include_once('menu.php');
include_once('login.php');
?>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<section id="single-page-header">
  <div class="overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="single-page-header-left">
            <h2>About Us</h2>
            <p></p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="single-page-header-right">
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">About us</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Start about us -->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">About us</h2>
            <span class="line"></span>
            <p>Trainer’s club is promoting success for the community of trainers.  We firmly believe in the concept of togetherness, as rightly been said “United we stand, divided we fall”.</p>
<br></br>
          </div>
        </div>
      <div class="row"> 
	      <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">Ideology</div>
              <div class="panel-body" style="text-align:justify;height:220px;">Trainer’s Club is an evolved concept working in support of the global trainer fraternity of every emerging channel, where our experts are working entirely on identifying the best prospects for
                  ‘Trainer’s knowledge updates’
                    ‘Ensuring earning prospects’
                      ‘Revolutionized self-branding’
                        ‘Growth & Success through Signature Program’.
              </div>
            </div>
        </div>
        <div class="col-md-4">
              <div class="panel panel-default">
                <div class="panel-heading">Core Values</div>
                <div class="panel-body" style="text-align:justify;height:220px;"><li>
                            Performance – Achieving & Promoting Excellence is our core value</li>
                          <li>Passion – We are passionate to discover expertise & present it innovatively to the world</li>
                          <li>Integrity – Ethics and Equality is our integrated culture</li>
                          <li>Diversity – Concepts, fortes, interests and domain are our commercial moves to succeed and we inspire genuine propositions.</li>
              </div>
            </div>
   		  </div>
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">USP</div>
              <div class="panel-body" style="text-align:justify;height:220px;">
                Trainer’s Club exceptionally working for minimizing challenges in professional growth of trainer’s,
                expert & mentor’s by providing them global platform to innovate and acquire and promoting Success together.
              </div>
    		  	</div>
    		  </div>
        </div>
      <div class="row">
        </div>
      <div class="row"> 
        <div class="col-md-offset-2 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Our Vision</div>
                <div class="panel-body" style="text-align:justify;height:100px;">
                    To be a partner in Success Journey of each club member and extend 
                    our proclaimed support to 1000 members by the end of Year 2021
                </div>
            </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">Our Mission</div>
              <div class="panel-body" style="text-align:justify;height:100px;">
                Making members ready for market acquisition. Seizing domain market for 
                TC members consistent engagement. Brand the Passion.
              </div>
    		  	</div>
    		  </div>
        </div>
      </div>
</div>

<section id="ourTeam" style="margin:60px 0;">
  <div class="container">
      <div class="col-md-12">
        <div class="title-area" style="margin-bottom:50px;">
          <h2 class="title">TC Quick Response team</h2>
      </div>
      <div class="row" style="margin-bottom:20px;">
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="./assets/images/Dr. Swati Verma.png">
                </div>
                <div class="team-content">
                    <h3>Dr. Swati Verma </h3>
                    <span class="post"> CEO, Project Head </span>
                </div>
                <ul class="social">
                    <li><a href="" class="fa fa-facebook"></a></li>
                    <li><a href="" class="fa fa-twitter"></a></li>
                    <li><a href="" class="fa fa-google-plus"></a></li>
                    <li><a href="" class="fa fa-linkedin"></a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                  <img src="./assets/images/Atul Sood.png">
                </div>
                <div class="team-content">
                    <h3>Mr. Atul Sood</h3>
                    <span class="post"> Director Business Head </span>
                </div>
                <ul class="social">
                    <li><a href="https://www.facebook.com/profile.php?id=100012512077239" class="fa fa-facebook"></a></li>
                    <li><a href="" class="fa fa-twitter"></a></li>
                    <li><a href="" class="fa fa-google-plus"></a></li>
                    <li><a href="www.linkedin.com/in/raj-kumar-web-designer
" class="fa fa-linkedin"></a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="./assets/images/Deepak Pandey.png" >

                </div>
                <div class="team-content">
                    <h3>Mr. Gurjinder Saini</h3>
                    <span class="post"> Business Facility Consultant </span>
                </div>
                <ul class="social">
                    <li><a href="https://www.facebook.com/profile.php?id=100012512077239" class="fa fa-facebook"></a></li>
                    <li><a href="" class="fa fa-twitter"></a></li>
                    <li><a href="" class="fa fa-google-plus"></a></li>
                    <li><a href="www.linkedin.com/in/raj-kumar-web-designer
" class="fa fa-linkedin"></a></li>
                </ul>
            </div>
        </div>
      </div>
    <div class="row">
      <div class="col-md-4 col-sm-6">
          <div class="our-team">
              <div class="pic">
                  <img src="./assets/images/Ankit Goyel1.jpg">
              </div>
              <div class="team-content">
                  <h3>Mr. Ankit Goyel</h3>
                  <span class="post"> IT & Marketing Consultant </span>
              </div>
              <ul class="social">
                  <li><a href="https://www.facebook.com/profile.php?id=100012512077239" class="fa fa-facebook"></a></li>
                  <li><a href="" class="fa fa-twitter"></a></li>
                  <li><a href="" class="fa fa-google-plus"></a></li>
                  <li><a href="www.linkedin.com/in/raj-kumar-web-designer
" class="fa fa-linkedin"></a></li>
              </ul>
          </div>
      </div>
      <div class="col-md-4 col-sm-6">
          <div class="our-team">
              <div class="pic">
                  <img src="./assets/images/Divya Narang.png">
              </div>
              <div class="team-content">
                  <h3>Ms. Divya Narang</h3>
                  <span class="post"> Backend Manager </span>
              </div>
              <ul class="social">
                  <li><a href="https://www.facebook.com/profile.php?id=100012512077239" class="fa fa-facebook"></a></li>
                  <li><a href="" class="fa fa-twitter"></a></li>
                  <li><a href="" class="fa fa-google-plus"></a></li>
                  <li><a href="www.linkedin.com/in/raj-kumar-web-designer
" class="fa fa-linkedin"></a></li>
              </ul>
          </div>
      </div>
      <div class="col-md-4 col-sm-6">
          <div class="our-team">
              <div class="pic">
                  <img src="./assets/images/Deepa Lalwani.png">
              </div>
              <div class="team-content">
                  <h3>Ms. Deepa Lalwani</h3>
                  <span class="post"> Frontend Manager </span>
              </div>
              <ul class="social">
                  <li><a href="https://www.facebook.com/profile.php?id=100012512077239" class="fa fa-facebook"></a></li>
                  <li><a href="" class="fa fa-twitter"></a></li>
                  <li><a href="" class="fa fa-google-plus"></a></li>
                  <li><a href="www.linkedin.com/in/raj-kumar-web-designer
" class="fa fa-linkedin"></a></li>
              </ul>
          </div>
      </div>
    </div>
  </div>
</section>

 <?php
include_once('footer.php');
?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
    <script src="./assets/js/bootstrap-tagsinput.js"></script>
    <script src="./assets/js/customTrainer.js"></script>
  </body>
</html>