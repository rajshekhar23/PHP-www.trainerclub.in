<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Trainer's Club : Contact</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/icon" href="" />
  <!-- Font Awesome -->
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <!-- Slick slider -->
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css" />
  <!-- Fancybox slider -->
  <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
  <!-- Animate css -->
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css" />
  <!-- Bootstrap progressbar  -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css" />
  <!-- Theme color -->
  <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

  <!-- Main Style -->
  <link href="style.css" rel="stylesheet">

  <!-- Fonts -->

  <!-- Open Sans for body font -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <!-- Lato for Title -->
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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

  <!-- Start header -->
  <!-- End header -->

  <!-- Start login modal window -->

  <!-- End login modal window -->

  <!-- BEGIN MENU -->
  <?php
    include_once('header.php');
    include_once('login.php');
    include_once('menu.php');
  ?>
  <!-- END MENU -->

  <!-- End login modal window -->

  <!-- Start single page header -->
  <section id="single-page-header">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2>Contact</h2>
              <p></p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Contact</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End single page header -->
  <br></br>
  <br></br>
  <br></br>


  <!-- Start contact section  -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Have any Questions?</h2>
            <span class="line"></span>
            <p></p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="cotact-area">
            <div class="row">
              <div class="col-md-4">
                <div class="contact-area-left">
                  <h4>Contact Info</h4>
                  <p></p>
                  <address class="single-address">
                    <p>Quikstart,4th Floor, Pride Icon,Thite Nagar, Kharadi, Pune- 411014</p>
                    <p>info@trainersclub.in</p>
                    <p>+91-8830775969</p>
                  </address>
                  <div class="footer-right contact-social">
                    <a href="index.php"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                 <div class="contact-area-right">
                   <form method="post" name="contactUsForm" class="comments-form contact-form">
                    <div class="form-group">                        
                      <input type="text" class="form-control" placeholder="Your Name" id="name" name="name" required>
                    </div>
                    <div class="form-group">                        
                      <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
                    </div>
                     <div class="form-group">                        
                      <input type="text" class="form-control" placeholder="Subject" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">                        
                      <textarea placeholder="Comment" rows="3" class="form-control" name="comments" id="comments" required>
                      </textarea>
                    </div>
                    <button class="comment-btn" type="submit">Submit Comment</button>
                  </form>
                 </div>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End contact section  -->
  <br></br>
  <!-- Start google map -->
  <section id="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.3714257064535!2d-86.7550931378034!3d34.66757706940219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8862656f8475892d%3A0xf3b1aee5313c9d4d!2sHuntsville%2C+AL+35813%2C+USA!5e0!3m2!1sen!2sbd!4v1445253385137"
      width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>
  <!-- End google map -->
  <!-- Start subscribe us -->
  <section id="subscribe">
    <div class="subscribe-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subscribe-area">
              <h2>Subscribe Newsletter</h2>
              <form action="" class="subscrib-form">
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
  <script>
      $(document).ready(function() {
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
          $("#logout,#signout").click(function(){
            event.preventDefault();
          $.post("./backend/logoutOperation.php",{},function(data) {
            window.location.href = "index.php";
          });
        });
      });
      $("form[name='contactUsForm']").on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
          type: 'post',
          url: 'backend/clientApprovalOperation.php',
          processData: false,
          contentType: false,
          data: formData,
          success: function (data) {
            console.log('data',data);
            if(data > 0) {
              alert('Contact Us form submitted successfully');
              window.location.href="index.php";
            }
          }
        });
      });
  </script>
</body>

</html>