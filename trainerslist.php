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
  ?>
  <!-- End header -->


  <!-- BEGIN MENU -->
  <?php
    include_once('menu.php'); 
  ?>
  <!-- END MENU -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

  <!-- Start login modal window -->
  <?php 
    include_once("login.php");
  ?>
  <!-- End login modal window -->

  <!-- Start contact section  -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <h2 class="text-center formTitle"> Our Trainer's List </h2>
        <div class="row">
            <div class="col-md-10 searchFilterWrapper">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Practice Area" class="col-form-label">Location</label>
                        <input type="text" name="location" id="location" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Practice Area" class="col-form-label">Industry</label>
                        <input type="text" name="industry" id="industry" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Practice Area" class="col-form-label">Skills</label>
                        <input type="text" name="skills" id="skills" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="CExperience" class="col-form-label">Experience</label>
                        <input type="text" id="experience" name="experience" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Country" class="col-form-label minHeight"></label>
                        <button class='btn btn-primary btn-md' id="btnSearch" style="background-color:#2bcdc1;" type="submit">Filter</button>
                        <button class='btn btn-primary btn-md' id="btnReset" style="background-color:#2bcdc1;" type="reset">Reset</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <p id="selectedCount"></p>
            <div id="trainerListWrapper">
            </div>
        </div>
        <div class="row text-center">
            <button class="btn btn-info" id="btnBook" style="background-color:#2bcdc1;width:10%;margin:20px auto;font-weight:bold;">BOOK</button>
        </div>
        <div class="row" id="allSelectedTrainers">
        </div>
      </div>
    </div>
  </section>
  <?php
    include_once('footer.php');
  ?>
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
            $("#btnBook").attr('disabled',true);
            $("#btnBook").click(function() {
                var favorite = [];
                $.each($("input[name='chkSelected']:checked"), function(){ 
                    favorite.push($(this).val());
                });
                if(favorite.length > 0) {
                    var selectedTrainers = favorite.join(", ");
                    $.post("./backend/allProducts.php",{
                        flag:"bookSelectedTrainers",
                        selectedTrainers:selectedTrainers
                    },function(data) {
                        if(data == 'SESSION INACTIVE') {
                            toast('Please Do Login As Client');
                            setTimeout(() => {
                                $("#login-form").css('display','block');
                                $("#login-form").addClass('fade in');
                            }, 2000);
                        } else {
                            if(data.length > 0) {
                            toast('Selected Trainers booked !!!');
                            $('input:checkbox').removeAttr('checked');
                            $("#btnBook").attr('disabled',true);
                            $("#selectedCount").html('');
                            var contentBody= "<table border='1' cellspacing='5' cellpadding='10' class='table table-condensed table-striped table-bordered'><tr>";
                            contentBody += "<th>Name</th><th>City</th><th>Skill Set</th><th>Certification</th><th>Academic</th>";
                            contentBody += "</tr>";
                            data.forEach(element => {
                                contentBody += "<tr><td>"+ element.firstName +" " + element.middleName + " " + element.lastName +"</td>";
                                contentBody += "<td>"+ element.city +"</td>";
                                contentBody += "<td>"+ element.selectSoftSkills +"</td>";
                                contentBody += "<td>"+ element.diplomaCertification +"</td>";
                                contentBody += "<td>"+ element.academic +"</td></tr>";
                            });
                            contentBody += "</table>";
                            //$("#allSelectedTrainers").html(contentBody);
                            $.post("./backend/allProducts.php",{
                                flag:"sendMailWithSelectedTrainers",
                                data:contentBody
                            },function(data) {
                            });                                
                            }
                        }
                    });
                }
          });

          $("#btnReset").click(function() {
              clearAll();
          });
          var obj = {
                flag:"readAllTrainersList"
            };
          readAllTrainersList(obj);
          $("#btnSearch").click(function() {
            var obj = {
                flag:"readAllTrainersList",
                location:$("#location").val(),
                industry:$("#industry").val(),
                skills:$("#skills").val(),
                experience:$("#experience").val()
            };
            readAllTrainersList(obj);
          });

          $("#logout,#signout").click(function() {
            event.preventDefault();
          $.post("./backend/logoutOperation.php",{},function(data) {
            window.location.href = "index.php";
          });

        });
      });
      function clearAll() {
          $("#location").val('');
          $("#industry").val('');
          $("#skills").val('');
          $("#experience").val('');
            var obj = {
                flag:"readAllTrainersList"
            };
        readAllTrainersList(obj);
      }
      function checkCount(event) {
        var countCheckedCheckboxes = $('input:checkbox:checked').length;
        $("#selectedCount").html('Selected Trainers count : ' + countCheckedCheckboxes);
        if(countCheckedCheckboxes > 0) {
            $("#btnBook").attr('disabled',false);
            if(countCheckedCheckboxes > 4) {
                $('input:checkbox:not(":checked")').attr('disabled',true);
            } else {
                $('input:checkbox:not(":checked")').attr('disabled',false);
            }
        } else {
            $("#btnBook").attr('disabled',true);
        }
      }

      function readAllTrainersList(objectParam) {
        $("#trainerListWrapper").html('');
        $.post("./backend/allProducts.php",objectParam,function(data) {
            console.log(data);
            data.forEach(function(object,index) {
                var url = "./backend/uploads/trainer/"+object.trainer_id+"/identity/AadharIdentity-"+object.trainer_id+".jpg";
                var item = '<div class = "col-sm-6 col-md-3 item">' +
                    '<div class = "thumbnail">' +
                        '<img style="height:230px;width:100%;" src ="'+url+'"  alt = "Trainer\'s identity">' +
                    '</div>' +
                    '<div class = "caption">'+
                        '<p>Name: <span>' + 
                            object.firstName + ' ' + object.middleName +' ' + object.lastName +'</span></p>' +
                        '<p>City: '+ object.city +'</p>'+
                        '<p>Skill Set: '+ object.selectSoftSkills +'</p>' +
                        '<p>Certification: '+ object.diplomaCertification +'</p>' +
                        '<p>Academic: '+ object.academic +'</p>' +        
                    '</div>'+
                    '<div class="bg-info1" style="border-radius:2px;padding: 0 6px;"><label class="col-form-label" style="padding:1px 2px;"><input style="zoom:2.2;padding:1px 2px;margin-right:3px;" type="checkbox" onchange="checkCount(event)" value="'+ object.trainer_id +'" name="chkSelected" />'+
                    '<span style="display:block;margin-top:12px;float:right;width: 57%;">SELECT</span></label></div>' +
                '</div>';                
                $("#trainerListWrapper").append(item);
            });
        });          
      }
  </script>
</body>

</html>