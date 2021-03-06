<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trainer's Club</title>
  <link rel="shortcut icon" type="image/icon" href="assets/images/logonew.png" />
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
  <link rel="stylesheet" href="assets/css/customTrainerList.css">
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

  <!-- Start header -->
  <?php
  include_once('header.php');
  include_once('menu.php');
  include_once('login.php');
?>
<!-- End header -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- Start contact section  -->
  <section id="contact" style="margin-bottom:35px;">
    <div class="container">
      <div class="row clientWrapper">
        <h2 class="text-center formTitle"> Our Client's </h2>
        <div class="row" id="trainerListWrapper">
          <?php
            foreach (glob("./backend/uploads/client/*") as $filename) {
              echo '<div class="col-sm-6 col-md-2 item">
                    <div class="thumbnail">
                      <img src="' .$filename. '">
                    </div>
              </div>';
              //echo $filename."<br />";
            }
          ?>
      </div>
    </div>
  </section>
  <div style="bottom: 0px;width:100%;
    position: absolute;">
  <?php
    include_once('footer.php');
  ?>
  </div>
  <!-- End contact section  -->
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
  <script src="./assets/js/bootstrap-tagsinput.js"></script>
  <script src="./assets/js/customTrainerList.js"></script>
  <script src="./assets/js/customTrainer.js"></script>
  <script>
      $(document).ready(function() {
          //readAllClientsList();
      });
      function readAllClientsList(){
        $.post("./backend/allProducts.php",{
            flag:"readAllClientsList"
        },function(data) {
            console.log(data);                  
            var item;
            data.forEach(function(object,index) {
              console.log(object);
             if(object != '.' || object != '..') {
                item +='<div class="col-sm-6 col-md-4 item">'+
                        '<div class = "thumbnail">'+
                            '<img src="./backend/uploads/client/'+ object +'"  alt = "Client\'s identity">'+
                        '</div>'+
                      '</div>';
                }  
                $("#trainerListWrapper").append(item);
            });
        });          
      }
  </script>
</body>
</html>