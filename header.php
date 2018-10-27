<?php
  session_start();
?>
<!-- Start header -->
  <header id="header">
    <!-- header top search -->
    <div class="header-top">
      <div class="container">
        <form action="">
          <div id="search">
            <input type="text" placeholder="Type your search keyword here and hit Enter..." name="s" id="m_search"
              style="display: inline-block;">
            <button type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
    <!-- header bottom -->
    <div class="header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="header-contact">
              <ul>
                <li>
                  <div class="phone">
                    <i class="fa fa-phone"></i>
                    +91-8830775969
                  </div>
                </li>
                <li>
                  <div class="mail">
                    <i class="fa fa-envelope"></i>
                    info@trainersclub.in
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="header-login">
                <?php
                if (isset($_SESSION["user_role"])) {
                  echo '<a class="login modal-form" id="logout">Logout</a>';
                } else {              
                  echo '<a class="login modal-form" data-target="#login-form" data-toggle="modal" href="#">Login</a>';
                  echo '<a class="login modal-form" data-target="#login-form" data-toggle="modal" href="#">Sign Up</a>';
                }
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header -->