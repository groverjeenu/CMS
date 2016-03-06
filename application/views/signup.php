<!DOCTYPE html>
<html lang="en">
  <!--================================================================================
    Item Name: Materialize - Material Design Admin Template
    Version: 2.3
    Author: GeeksLabs
    Author URL: http://www.themeforest.net/user/geekslabs
  ================================================================================ -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Incourse Signup</title>
    <!-- Favicons-->
    <link rel="icon" href="<?php echo base_url(); ?>public/img/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>public/img/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    
    <link href="<?php echo base_url(); ?>public/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url(); ?>public/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="<?php echo base_url(); ?>public/css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS style Horizontal Nav (Layout 03)-->
    <link href="<?php echo base_url(); ?>public/css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url(); ?>public/css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="<?php echo base_url(); ?>public/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url(); ?>public/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    
  </head>
  <body class="cyan">
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <div id="login-page" class="row">
      <div class="col s12 z-depth-4 card-panel">
        <?php $attributes = array('class' => 'signup-form');
            echo form_open('signup',$attributes);
        ?>
        <!-- <form class="signup-form" method = "post" action = "<?php echo base_url(); ?>auth/create_user"> -->
          <div class="row">
            <div class="input-field col s12 center">
              <img src="<?php echo base_url(); ?>public/img/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
              <p class="center login-form-text">Incourse Signup</p>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="mdi-social-person-outline prefix"></i>
              <input id="first name" type="text" name = "first_name">
              <label for="username" class="center-align">First Name</label>
              <div class="red-text"><?php echo form_error('first_name');?></div>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="mdi-social-person-outline prefix"></i>
              <input id="last name" type="text" name = "last_name">
              <label for="username" class="center-align">LastName</label>
              <div class="red-text"><?php echo form_error('last_one');?></div>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="mdi-communication-email prefix"></i>
              <input id="email" type="text" name = "email">
              <label for="username" class="center-align">Email</label>
              <div class="red-text"><?php echo form_error('email');?></div>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="mdi-communication-email prefix"></i>
              <input id="username" type="text" name = "username">
              <label for="username" class="center-align">Username</label>
              <div class="red-text"><?php echo form_error('username');?></div>
            </div>
          </div>
          

          <div class="row margin">
            <div class="input-field col s12">
              <i class="mdi-action-lock-outline prefix"></i>
              <input id="password" type="password" name = "password">
              <label for="password">Password</label>
              <div class="red-text"><?php echo form_error('password');?></div>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="mdi-action-lock-outline prefix"></i>
              <input id="reenter_pass" type="password" name = "password_confirm">
              <label for="password">Retype Password</label>
              <div class="red-text"><?php echo form_error('password_confirm');?></div>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="faculty" name = "faculty">
              <label for="faculty">I am a faculty</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <button type="submit" class="btn waves-effect waves-light col s12">Sign Up</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery-1.11.2.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        Materialize.toast("<?php echo trim(preg_replace( array('/\v/','/\s\s+/'), ' ' , $message));?>",5000);
    });
  </script>
  </body>
</html>