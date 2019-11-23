
<!DOCTYPE html>
<html>
   <head>
    <title>Register</title>
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
                        Register
                    </span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
                        <?php
                            if ($this->session->flashdata('failed')) {
                                echo "<div class='alert alert-danger'>";
                                echo $this->session->flashdata('failed');
                                echo "</div>";
                            }
                            ?>
                    </div>

                    <?php echo form_open('user/register') ?>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
                        <input class="input100" type="text" name="name" placeholder="Your name">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>
                    
                    <div class="container-login100-form-btn m-t-17 action" >
                        <button class="login100-form-btn" type="submit" name="submit">
                            Register
                        </button>
                        <div class="container signin" style="text-align: center;">
                        <p>Already have an account? <a href="login">Login</a>.</p>
                      </div>

                    </div>
                    <?php echo form_close()?>

                 </div>
                </div>
            </div>
        </div>
    </div>

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