<?php
  if(isset($_GET["trainerId"])) {
    require('backend/dbConnect.php');
    $query = "select * from trainers where trainer_id=" .$_GET["trainerId"];
    $result = mysqli_query($conn,$query);
    $rows = mysqli_num_rows($result);
    if( $rows > 0) {
      $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
      print_r($row);
      $orgList = json_decode($row["selectOrgWorkedWith"]);
    }   
  }
?>
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
  <link rel="stylesheet" href="assets/css/customTrainer.css">
  <!-- Open Sans for body font -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <style>
  .clientWrapper {
    margin:0 auto;
  }
  .form-group { 
    margin-bottom: 10px;
  }
  .form-group label {
      margin:0 5px;
  }
  .form-group label:first-child {
      width:250px;
  }

  .thumbnail {
    width: 170px;
    display:inline-block;
  }

  .thumbnail img {
    height: 208px;
  }
  </style>
</head>

<body>

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- Start header -->
  <?php
    include_once('header.php');
    include_once('menu.php');
    include_once('login.php');
  ?>
  <!-- End header -->


  <!-- BEGIN MENU -->
  
  <!-- END MENU -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

  <!-- Start contact section  -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <h2 class="text-center formTitle"> Profile </h2>
        <form name="trainerForm" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                  <div class="col-md-3">
                    Aadhar Indentity <br><br>
                    <div class = "thumbnail">
                        <img src =<?php echo "./backend/uploads/trainer/" .$row['trainer_id']."/identity/AadharIdentity-" .$row['trainer_id'].".jpg" ?> alt = "Trainer\'s identity">
                    </div>
                    <br>
                    Pan Indentity <br><br>
                    <div class = "thumbnail">
                      <img src =<?php echo "./backend/uploads/trainer/" .$row['trainer_id']."/identity/CancelledCheckIdentity-" .$row['trainer_id'].".jpg" ?> alt = "Trainer\'s identity">
                    </div>
                    <br>
                    Cancelled Check Indentity <br><br>
                    <div class = "thumbnail">
                    <img src =<?php echo "./backend/uploads/trainer/" .$row['trainer_id']."/identity/PanIdentity-" .$row['trainer_id'].".jpg" ?> alt = "Trainer\'s identity">
                    </div>
                  </div>
                  <div class="col-md-8" style="border-left:1px solid #ddd;"> <br><br>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Main Trainer Category :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['trainerParentCategory']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Sub Trainer Category :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['subCategory']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Soft Skills :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['selectSoftSkills']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Technical Skills :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['technicalSkills']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Willing To Travel :</label>
                      <label for="Select Trainer" class="col-form-label"><?php $willingToTravel = $row['willingToTravel']; echo explode("|",$willingToTravel)[0] . " And ". explode("|",$willingToTravel)[1];?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Academic :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['academic']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Professional :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['professional']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Diploma/Certification :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['diplomaCertification']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Awards/Rewards :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['awardsRewards']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >professional Journey :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['profJourney']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Total Experience :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['totalExperience']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Relevant Experience :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['relevantExperience']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label">Organization Worked With :</label>
                      <table class="table table-bordered table-striped table-condensed">
                          <tr class="info">
                            <th>Org Name</th>
                            <th>Training Name</th>
                            <th>Topics Covered</th>
                            <th>Duration</th>
                            <th>Month/Year</th>
                          </tr>
                          <?php
                            for ($i=0; $i <5; $i++) {
                          ?>
                          <tr>
                            <td><?php echo $orgList[$i]->orgName;?></td>
                            <td><?php echo $orgList[$i]->trainingName;?></td>
                            <td><?php echo $orgList[$i]->topicsCovered;?></td>
                            <td><?php echo $orgList[$i]->orgName;?></td>
                            <td><?php echo $orgList[$i]->duration;?></td>
                          </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >TC Member Name :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['tcmember']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Enrollment Id :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['enrollmentId']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Full Name:</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['firstName']." ".$row['middleName']." ".$row['lastName'];?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Contact Number :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['contact']?></label>
                    </div>                  
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Email Id :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['emailId']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Full Postal Address :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['fullPostalAddress']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Street :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['street']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >City :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['city']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Pin code :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['pincode']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >State :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['state']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Uploaded Gallery :</label> <br>
                      <?php
                        $dir='backend/uploads/trainer/'.$row['trainer_id'].'/*';
                        $fileList = glob($dir);
                        foreach($fileList as $filename){
                        if(is_file($filename)) {
                            echo '<div class = "thumbnail">
                              <img src = "'.$filename.'" alt = "Trainer\'s identity">
                            </div>';
                        }
                       }
                      ?>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </form>
      </div><br>
    </div>
  </section>
  <!-- End contact section  -->

  <!-- Start footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="footer-left">
            <p>Designed by <a href="http://www.cerbosys.com/">cerbosys</a></p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="footer-right">
            <a href="index.php"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
  <script src="./assets/js/bootstrap-tagsinput.js"></script>
  <script src="./assets/js/customTrainer.js"></script>

</body>

</html>