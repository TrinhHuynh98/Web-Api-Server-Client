
<!DOCTYPE html>
<html>
    <head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>login/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>login/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>login/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>login/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>login/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>login/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>login/css/main.css">
</head>
    <body class="login-bg">
        <div class="header">
            <div class="container container-login100">
                 <div class="wrap-login100 p-t-50 p-b-90">
                <div class="row">
                    <div class="col-md-12">
                    <span class="login100-form-title p-b-51">
                        Login
                    </span>

         <?php echo form_open('user/login') ?>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>
                    
                    <div class="flex-sb-m w-full p-t-3 p-b-24">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>

                        <div>
                            <a href="register" class="txt1">
                                create new account
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn m-t-17 " >
                        <button name="submit" class="login100-form-btn" >
                            Login
                        </button>
                    </div>

                    <?php echo form_close()?>

                    </div>
                </div>
            </div>
        </div>
    </div>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
       <script src="<?php echo base_url() ?>login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url() ?>login/vendor/animsition/js/animsition.min.js"></script>
    <script src="<?php echo base_url() ?>login/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url() ?>login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>login/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url() ?>login/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?php echo base_url() ?>login/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url() ?>login/vendor/countdowntime/countdowntime.js"></script>
    <script src="<?php echo base_url() ?>login/js/main.js"></script>
    </body>
</html>