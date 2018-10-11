<section id="menu-area">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
            aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
          <!-- TEXT BASED LOGO -->
          <!-- <a class="navbar-brand" href="index.php">TRAINER'S CLUB</a> -->
          <!-- IMG BASED LOGO  -->
          <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="logo" style="width:80px;height:50px;"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li><a href="service.php">SERVICES</a></li>
            <?php 
                if (isset($_SESSION["user_role"])) {
                    $role = $_SESSION["user_role"];
                    if ($role == 'Trainer') {
                    echo '<li><a href="trainersform.php">TRAINERS</a></li>';
                    } else {
                    echo '<li><a href="clientsform.php">Clients</a></li>';
                    }
              } else {
                echo "<li><a href='trainerslist.php'>OUR TRAINERS</a></li>";
                echo "<li><a href='clientslist.php'>OUR CLIENTS</a></li>";    
              } 
             ?>
            <li><a href="contact.php">CONTACT</a></li>
            <?php
              if (isset($_SESSION["user_role"])) {
                  echo '<li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">MY ACCOUNT
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a>Logged User: ' . $_SESSION["user_name"] .'</a></li>
                    <li><a id="signout">Sign Out</a></li>
                  </ul>
                </li>';
              }
            ?>
          </ul>
        </div>
        <!--/.nav-collapse -->
        <a href="#" id="search-icon">
          <i class="fa fa-search">
          </i>
        </a>
      </div>
    </nav>
  </section>
  <!-- END MENU -->
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
            alert('logout');
          $.post("./backend/logoutOperation.php",{},function(data) {
            window.location.href = "index.php";
          });
        });
      });
  </script>