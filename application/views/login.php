<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V10</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/icons/favicon.ico'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animate/animate.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animsition/css/animsition.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90">
                <form raction="<?php echo base_url('auth/login'); ?>" method="post" role="login" class="login100-form validate-form flex-sb flex-w">
                    <span class="login100-form-title p-b-51">
                        Login
                    </span>


                    <div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
                        <input class="input100" type="text" name="username" placeholder="Masukkan Username">
                        <span class="focus-input100"></span>
                    </div>


                    <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Masukkan Password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button name="submit" type="submit" value="login" class="login100-form-btn">
                            Login
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>