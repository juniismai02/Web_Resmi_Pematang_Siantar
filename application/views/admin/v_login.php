<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PORTAL PEMERINTAH KOTA Pematangsiantar - Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link
      rel="icon"
      type="image/png"
      href="<?php echo base_url().'theme/login/images/logo_siantar.png'?>"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo base_url().'theme/login/vendor/bootstrap/css/bootstrap.min.css'?>"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo base_url().'theme/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css'?>"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo base_url().'theme/login/vendor/animate/animate.css'?>"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo base_url().'theme/login/vendor/css-hamburgers/hamburgers.min.css'?>"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo base_url().'theme/login/vendor/select2/select2.min.css'?>"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'theme/login/css/util.css'?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'theme/login/css/main.css'?>" />
    <!--===============================================================================================-->
    <!-- Sweetalert -->
    <script src="<?php echo base_url().'theme/node_modules/sweetalert/dist/sweetalert.min.js'?>"></script>
  </head>

  <body>
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
          <div class="login100-pic js-tilt" data-tilt>
            <a href="<?php echo site_url('');?>">
              <img src="<?php echo base_url().'theme/login/images/logo_siantar.png'?>" alt="IMG" />
            </a>
          </div>

          <form
            class="login100-form validate-form"
            action="<?php echo site_url().'admin/login/auth'?>"
            method="POST"
          >
            <span class="login100-form-title">
           Pematangsiantar
           <br>
              <center>
                <p>Login ke Portal Utama Pematangsiantar</p>
              </center>
            </span>

            <p><?php echo $this->session->flashdata('msg');?></p>
            <div
              class="wrap-input100 validate-input"
              data-validate="Valid email is required: ex@abc.xyz"
            >
              <input
                class="input100"
                type="text"
                name="username"
                placeholder="Username"
              />
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </span>
            </div>

            <div
              class="wrap-input100 validate-input"
              data-validate="Password is required"
            >
              <input
                class="input100"
                type="password"
                name="password"
                placeholder="Password"
              />
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
            </div>

            <div class="container-login100-form-btn">
              <button type="submit" class="login100-form-btn">Login</button>
            </div>

            <!-- <div class="text-center p-t-136">
              <a class="txt2" href="#">
                Buat akun
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
              </a>
            </div> -->
          </form>
        </div>
      </div>
    </div>

    <!--===============================================================================================-->
    <script src="<?php echo base_url().'theme/login/vendor/jquery/jquery-3.2.1.min.js'?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url().'theme/login/vendor/bootstrap/js/popper.js'?>"></script>
    <script src="<?php echo base_url().'theme/login/vendor/bootstrap/js/bootstrap.min.js'?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url().'theme/login/vendor/select2/select2.min.js'?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url().'theme/login/vendor/tilt/tilt.jquery.min.js'?>"></script>
    <script>
      $(".js-tilt").tilt({
        scale: 1.1,
      });
    </script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url().'theme/login/js/main.js'?>"></script>
  </body>
</html>
