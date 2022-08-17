<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login ULP</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url('login') ?>/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('login') ?>/vendor/bootstrap/css/bootstrap.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('login') ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('login') ?>/vendor/animate/animate.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('login') ?>/vendor/css-hamburgers/hamburgers.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('login') ?>/vendor/select2/select2.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('login') ?>/css/util.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('login') ?>/css/main.css" />
    <!--===============================================================================================-->
  </head>
  <body>
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
          <div class="login100-pic js-tilt" data-tilt>
            <img src="<?= base_url('login') ?>/images/logo_pagarlam.png" alt="IMG" />
          </div>

          <?php echo form_open('auth/login') ?>
          
            <span class="login100-form-title"> Arsip ULP Kota Pagaralam </span>
          
            <div class="wrap-input100 validate-input" data-validate="Masukkan NIP">
              <input class="input100" type="text" name="nip" placeholder="Masukkan NIP" class="form-control" />
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-user" aria-hidden="true"></i>
              </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Masukkan Password">
              <input class="input100" type="password" name="password" placeholder="Masukkan Password" />
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
            </div>
            
            <div class="container-login100-form-btn">
              <input class="login100-form-btn" type="submit" name="login" value="Login"></input>
            </div>
            
            <div class="text-center p-t-12"> 
              <a class="txt2" href="<?= site_url() ?>"> Kembali ke Website </a>
            </div>
            <?php echo form_close() ?>

            <!-- <div class="text-center p-t-136"> -->
              <!-- <a class="txt2" href="#">
                Create your Account -->
                <!-- <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i> -->
              </a>
            </div>
            </form>
        </div>
      </div>
    </div>

    <!--===============================================================================================-->
    <script src="<?= base_url('login') ?>/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('login') ?>/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url('login') ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('login') ?>/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('login') ?>/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
      $(".js-tilt").tilt({
        scale: 1.1,
      });
    </script>
    <!--===============================================================================================-->
    <script src="<?= base_url('login') ?>/js/main.js"></script>
  </body>
</html>
