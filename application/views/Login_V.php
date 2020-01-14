<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/images/logodoang_soerja.png">
    <!-- Favicon icon end -->
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style_4.css">
</head>
<body>

    <div class="main">

<!-- Sign in  Form -->
<section class="sign-in">
            <div class="container-fluid">
                <div class="signin-content">
                    <div class="signin-image" style="width: 800px">
                        <!-- Asset Login -->
                        <figure><img src="<?php echo base_url(); ?>/assets/images/login.png" alt="sing up image"></figure>
                        <!-- Asset Login End -->
                    </div>

                    <div class="signin-form">
                        <br/>
                        <br/>
                        <img src="<?php echo base_url(); ?>/assets/images/Logo_Soerja.png" width="230" height="40" alt="logo image"> 
                        <br/>
                        <br/>
                        <h1 style="font-size: 28px; font-weight: 500">MASUK KE DASHBOARD</h1>
                        <strong><?php echo validation_errors(); ?></strong>
                        <h4 align="center" style="color: red"><?php echo $err_message;?></h4>
                        <form method="POST" class="register-form" id="login-form">
                            <!-- Form email Start -->
                            <div class="form-group">

                                <h3 style="color: grey; font-weight: 400">Alamat Email</h3><label for="emai"></label>
                                <input type="email" name="email" id="email" placeholder="Supratman@gmail.com" required="" />
                            </div>
                            <!-- Form email end -->
                            <!-- Form Password Start -->
                            <div class="form-group">
                                <h3 style="color: grey; font-weight: 400">Kata Sandi</h3>
                                <label for="pass"></label>
                                <input type="password" name="pass" id="pass" placeholder="*******" required="" />
                            </div>
                            <!-- Form Password End -->
                            <!-- <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div> -->
                            <!-- Lupa Kata Sandi Start -->
                            <div align="right">
                                <h4 style="color: grey; font-weight: 100">Lupa Kata Sandi    <img src="<?php echo base_url(); ?>/assets/images/padlock.png" width="10" height="5" alt="padlock image"></h4>
                            </div>
                            <!-- Lupa Kata Sandi End -->
                            <!-- Button Masuk Start -->
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Masuk" style="background-color: #2b64d5 "/>
                            </div>
                            <div>
                                <!-- Belum Punya Akun Start -->
                                <a href="./register" class="signup-image-link">Belum punya akun? Hubungi Kontak Kami</a>
                                <!-- Belum punya akun end -->
                            </div>
                            <!-- Button Masuk End -->
                        </form>
                        <!-- <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>