<!-- header section end-->
  <!-- login section start-->
  <div class="services_section">
    <div class="container">
      <h1 class="services_text">SERVICES</h1>
    </div>
  </div>
  <div class="login_section">
     <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Log In</h5>
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger"><?php echo session()->getFlashdata('error'); ?></div>
        <?php endif; ?>
            <form action="<?php echo site_url('login/authenticate'); ?>" method="post" class="form-signin">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Log In</button>
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Log In with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Log In with Facebook</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
  <!-- login section end-->