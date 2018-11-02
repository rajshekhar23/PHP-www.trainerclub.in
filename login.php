<div aria-hidden="false" role="dialog" tabindex="-1" id="signup-form" class="modal leread-modal fade in">
    <div class="modal-dialog">
      <!-- Start login section -->
      <div id="login-content" class="modal-content">
        <div class="modal-header">
          <button data-target="#myModal"  onclick="closeModal()" class="close" data-toggle="modal" data-backdrop="static" data-keyboard="false" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-unlock-alt"></i>Sign Up</h4>
        </div>
        <div class="modal-body">
        <form action="backend/signupOperation.php" method="post">
            <div class="form-group">
              <input placeholder="Name" class="form-control" name="name" required>
            </div>
            <div class="form-group">
              <input placeholder="Username" class="form-control" name="user_name" required>
            </div>
            <div class="form-group">
              <input placeholder="Email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <label for="Corporate Trainer" class="col-form-label">Signup As</label>
                <label class="radio-inline" style="line-height: 40px;padding: 1px 30px;"><input type="radio" value="Client" checked name="user_role">Client</label>
                <label class="radio-inline" style="line-height: 40px;padding: 1px 30px;"><input type="radio" value="Trainer" name="user_role">Trainer</label>
            </div>
<!--             <div class="signupbox">
              <span>Already got account? <a id="login-btn" href="#">Sign In.</a></span>
            </div>
 -->
             <div class="loginbox">
              <button class="btn signin-btn" type="submit">SIGN UP</button>
            </div>
          </form>
        </div>
<!--         <div class="modal-footer footer-box">
          <a href="#">Forgot password ?</a>
          <span>No account ? <a id="signup-btn" data-toggle="modal" href="#" data-target="#login-form">Sign In.</a></span>            
        </div> -->
      </div>
      <!-- Start signup section -->
      <div id="signup-content" class="modal-content">
        <div class="modal-header">
          <button data-target="#myModal"  onclick="closeModal()" class="close" data-toggle="modal" data-backdrop="static" data-keyboard="false" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-lock"></i>Sign Up</h4>
        </div>
        <div class="modal-body">
          <form action="backend/signupOperation.php" method="post">
            <div class="form-group">
              <input placeholder="Name" class="form-control" name="name" required>
            </div>
            <div class="form-group">
              <input placeholder="Username" class="form-control" name="user_name" required>
            </div>
            <div class="form-group">
              <input placeholder="Email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <label for="Corporate Trainer" class="col-form-label">Signup As</label>
                <label class="radio-inline" style="line-height: 40px;padding: 1px 30px;"><input type="radio" value="Client" checked name="user_role">Client</label>
                <label class="radio-inline" style="line-height: 40px;padding: 1px 30px;"><input type="radio" value="Trainer" name="user_role">Trainer</label>
            </div>
            <div class="signupbox">
              <span>Already got account? <a id="login-btn" href="#">Sign In.</a></span>
            </div>
            <div class="loginbox">
              <button class="btn signin-btn" type="submit">SIGN UP</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<div aria-hidden="false" role="dialog" tabindex="-1" id="login-form" class="modal leread-modal fade in">
    <div class="modal-dialog">
      <!-- Start login section -->
      <div id="login-content" class="modal-content">
        <div class="modal-header">
          <button data-target="#myModal" data-toggle="modal" data-backdrop="static" data-keyboard="false" class="close" onclick="closeModal()" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-unlock-alt"></i>Login</h4>
        </div>
        <div class="modal-body">
          <form name="login" method="POST">
            <div class="form-group">
              <input type="text" placeholder="User name" class="form-control" name="user_name" required>
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="user_password" required>
            </div>
            <div class="form-group">
                <label for="Corporate Trainer" class="col-form-label">Login As</label>
                <label class="radio-inline" style="line-height: 40px;padding: 1px 30px;"><input type="radio" value="Client"  checked name="user_role">Client</label>
                <label class="radio-inline" style="line-height: 40px;padding: 1px 30px;"><input type="radio" value="Trainer" name="user_role">Trainer</label>
            </div>
             <div class="loginbox">              
              <button class="btn signin-btn" type="submit" id="btnLogin">SIGN IN</button>
            </div>                    
          </form>
        </div>
      </div>
      <!-- Start signup section -->
      <div id="signup-content" class="modal-content">
        <div class="modal-header">
          <button data-target="#myModal" data-toggle="modal" data-backdrop="static" data-keyboard="false" onclick="closeModal()" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-lock"></i>Sign Up</h4>
        </div>
        <div class="modal-body">
          <form action="backend/signupOperation.php" method="post">
            <div class="form-group">
              <input placeholder="Name" class="form-control" name="name" required>
            </div>
            <div class="form-group">
              <input placeholder="Username" class="form-control" name="user_name" required>
            </div>
            <div class="form-group">
              <input placeholder="Email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <label for="Corporate Trainer" class="col-form-label">Signup As</label>
                <label class="radio-inline" style="line-height: 40px;padding: 1px 30px;"><input type="radio" value="Client" checked name="user_role">Client</label>
                <label class="radio-inline" style="line-height: 40px;padding: 1px 30px;"><input type="radio" value="Trainer" name="user_role">Trainer</label>
            </div>
            <div class="signupbox">
              <span>Already got account? <a id="login-btn" href="#">Sign In.</a></span>
            </div>
            <div class="loginbox">
              <button class="btn signin-btn" type="submit">SIGN UP</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
      function closeModal() {
        window.location.reload();
      }
  </script>