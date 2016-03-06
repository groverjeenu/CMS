<!DOCTYPE html>
<html class="st-layout ls-top-navbar-large ls-bottom-footer show-sidebar sidebar-l1" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
        <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
        <title>Dashboard</title>
        <!-- Favicons-->
        <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
        <!-- Favicons-->
        <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
        <!-- For iPhone -->
        <meta name="msapplication-TileColor" content="#00bcd4">
        <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
        <!-- For Windows Phone -->
        <link href="<?php echo base_url(); ?>public/css/vendor/all.css" rel="stylesheet">
        
        <!-- CORE CSS-->
        <link href="<?php echo base_url(); ?>public/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="<?php echo base_url(); ?>public/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
        <!-- CSS for full screen (Layout-2)-->
        <link href="<?php echo base_url(); ?>public/css/style-fullscreen.css" type="text/css" rel="stylesheet" media="screen,projection">
        <!-- Custome CSS-->
        <link href="<?php echo base_url(); ?>public/css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
        <!-- CSS for full screen (Layout-2)-->
        <link href="<?php echo base_url(); ?>public/css/style-fullscreen.css" type="text/css" rel="stylesheet" media="screen,projection">
        <!--link href="<?php echo base_url(); ?>public/css/app/app.css" type="text/css" rel="stylesheet" media="screen,projection"-->
        <!--INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link href="<?php echo base_url(); ?>public/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="<?php echo base_url(); ?>public/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="<?php echo base_url(); ?>public/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
        <!-- Vendor CSS BUNDLE
        Includes styling for all of the 3rd party libraries used with this module, such as Bootstrap, Font Awesome and others.
        TIP: Using bundles will improve performance by reducing the number of network requests the client needs to make when loading the page. -->
        <style>
        .disable-select {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        highlight:none;
        }
        </style>
        <!-- Vendor CSS Standalone Libraries
        NOTE: Some of these may have been customized (for example, Bootstrap).
        See: src/less/themes/{theme_name}/vendor/ directory -->
        <!-- <link href="css/vendor/bootstrap.css" rel="stylesheet"> -->
        <!-- <link href="css/vendor/font-awesome.css" rel="stylesheet"> -->
        <!-- <link href="css/vendor/picto.css" rel="stylesheet"> -->
        <!-- <link href="css/vendor/material-design-iconic-font.css" rel="stylesheet"> -->
        <!-- <link href="css/vendor/datepicker3.css" rel="stylesheet"> -->
        <!-- <link href="css/vendor/jquery.minicolors.css" rel="stylesheet"> -->
        <!-- <link href="css/vendor/railscasts.css" rel="stylesheet"> -->
        <!-- <link href="css/vendor/owl.carousel.css" rel="stylesheet"> -->
        <!-- <link href="css/vendor/slick.css" rel="stylesheet"> -->
        <!-- <link href="css/vendor/daterangepicker-bs3.css" rel="stylesheet"> -->
        <!-- <link href="css/vendor/jquery.bootstrap-touchspin.css" rel="stylesheet"> -->
        <!-- <link href="css/vendor/select2.css" rel="stylesheet"> -->
        <!-- <link href="css/vendor/jquery.countdown.css" rel="stylesheet"> -->
        <!-- APP CSS BUNDLE [css/app/app.css]
        INCLUDES:
        - The APP CSS CORE styling required by the "html" module, also available with main.css - see below;
        - The APP CSS STANDALONE modules required by the "html" module;
        NOTE:
        - This bundle may NOT include ALL of the available APP CSS STANDALONE modules;
        It was optimised to load only what is actually used by the "html" module;
        Other APP CSS STANDALONE modules may be available in addition to what's included with this bundle.
        See src/less/themes/html/app.less
        TIP:
        - Using bundles will improve performance by greatly reducing the number of network requests the client needs to make when loading the page. -->
        <link href="<?php echo base_url(); ?>public/css/app/app.css" rel="stylesheet">
        <!-- App CSS CORE
        This variant is to be used when loading the separate styling modules -->
        <!-- <link href="css/app/main.css" rel="stylesheet"> -->
        <!-- App CSS Standalone Modules
        As a convenience, we provide the entire UI framework broke down in separate modules
        Some of the standalone modules may have not been used with the current theme/module
        but ALL modules are 100% compatible -->
        <!-- <link href="css/app/essentials.css" rel="stylesheet" /> -->
        <!-- <link href="css/app/material.css" rel="stylesheet" /> -->
        <!-- <link href="css/app/layout.css" rel="stylesheet" /> -->
        <!-- <link href="css/app/sidebar.css" rel="stylesheet" /> -->
        <!-- <link href="css/app/sidebar-skins.css" rel="stylesheet" /> -->
        <!-- <link href="css/app/navbar.css" rel="stylesheet" /> -->
        <!-- <link href="css/app/messages.css" rel="stylesheet" /> -->
        <!-- <link href="css/app/media.css" rel="stylesheet" /> -->
        <!-- <link href="css/app/charts.css" rel="stylesheet" /> -->
        <!-- <link href="css/app/maps.css" rel="stylesheet" /> -->
        <!-- <link href="css/app/colors-alerts.css" rel="stylesheet" /> -->
        <!-- <link href="css/app/colors-background.css" rel="stylesheet" /> -->
        <!-- <link href="css/app/colors-buttons.css" rel="stylesheet" /> -->
        <!-- <link href="css/app/colors-text.css" rel="stylesheet" /> -->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
        WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!-- If you don't need support for Internet Explorer <= 8 you can safely remove these -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php $this->view('addons/header.php'); ?>
        <!-- START MAIN -->
        <div id="main">
            <!-- START WRAPPER -->
            <div class="wrapper">
                <?php $this->view('addons/sidebar.php'); ?>
                <div class="container">
                    <div class="card-panel">
                        <div class = "row">
                            <div class = "col s8">
                                <div class="page-section">
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-block s60 bg-lightred"><i class="fa fa-github"></i></span>
                                        </div>
                                        <div class="media-body">
                                            <h1 class="text-display-1 margin-none"><?php echo $query['course_name']; ?></h1>
                                            <p class="small margin-none">
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-section">
                                    <div class="width-350 width-300-md width-100pc-xs paragraph-inline">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="//www.youtube-nocookie.com/embed/Ycv5fNd4AeM?rel=0"></iframe>
                                        </div>
                                    </div>
                                    <p>
                                        <?php echo $query['description'] ;?>
                                    </p>
                                    <p></p>
                                    <p></p>
                                    <br/>
                                </div>
                                <br/><br/><br/>
                                <br/><br/>
                                <div class="page-section">
                                    <h2 class="text-headline margin-none">What you'll learn</h2>
                                    <p class="text-subhead text-light">A brief description.</p>
                                    <ul class="list-group relative paper-shadow margin-none" data-hover-z="0.5" data-animated>
                                        <li class="list-group-item">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <div class="icon-block s30 bg-red-300 text-white img-circle">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body text-body-2">
                                                    <?php echo $query['syllabus']; ?>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <?php if($val != 0) { ?>
                                <div class="page-section">
                                    <h2 class="text-headline margin-none">Lectures</h2>
                                    <p class="text-subhead text-light">Timeline for Course lectures</p>
                                    <ul class="list-group relative paper-shadow margith-sn-none" data-hover-z="0.5" data-animated>
                                        <?php foreach($lectures as $ll) {?>
                                        <li class="list-group-item">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <div class="icon-block s30 bg-green-300 text-white img-circle">
                                                        <i class="fa fa-book"></i>
                                                    </div>
                                                </div>
                                                
                                                <div class="media-body text-body-2 disable-select" style="highlight:none">
                                                    <?php echo "<a  href = ".base_url()."display_view/lectures/".$ll['id'].">".$ll['title']."</a>"; ?>
                                                </div>
                                                
                                            </div>
                                        </li>
                                        <?php }?>
                                    </ul>
                                </div>
                                <?php }?>
                                <?php if($val != 0) { ?>
                                <div class="page-section">
                                    <h2 class="text-headline margin-none">Assignments</h2>
                                    <p class="text-subhead text-light">Course assignments</p>
                                    <ul class="list-group relative paper-shadow margith-sn-none" data-hover-z="0.5" data-animated>
                                        <?php foreach($assignments as $ll) {?>
                                        <li class="list-group-item">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <div class="icon-block s30 bg-blue-300 text-white img-circle">
                                                        <i class="fa fa-file-text"></i>
                                                    </div>
                                                </div>
                                                
                                                <div class="media-body text-body-2 disable-select">
                                                    <?php echo "<a href = ".base_url()."display_view/assignments/".$ll['assignment_id'].">".$ll['title']."</a>"; ?>
                                                </div>
                                                
                                            </div>
                                        </li>
                                        <?php }?>
                                    </ul>
                                </div>
                                <?php }?>
                            </div>
                            <div class="pull-right">
                                <div class="page-section width-270 width-auto-xs">
                                    <!-- .panel -->
                                    <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                        <div class="panel-heading">
                                            <h4 class="text-headline">Course</h4>
                                        </div>
                                        <div class="panel-body">
                                            <p class="text-caption margin-none">
                                                <!--
                                                <i class="fa fa-clock-o fa-fw"></i> 4 hrs &nbsp;
                                                <i class="fa fa-calendar fa-fw"></i> 21/10/14
                                                <br/>
                                                -->
                                                <i class="fa fa-user fa-fw"></i> Instructors: <?php echo $query['names'] ;?>
                                                <br/>
                                                <!--
                                                <i class="fa fa-mortar-board fa-fw"></i> Max. students: 50
                                                <br/>
                                                -->
                                                <i class="fa fa-check fa-fw"></i> Attending: <?php echo $query['attending'];?>
                                            </p>
                                        </div>
                                        <hr class="margin-none" />
                                    </div>
                                    <?php if($val != 0) { ?>
                                    <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                        <div class="panel-heading">
                                            <h4 class="text-headline">Grades</h4>
                                        </div>
                                        <div class="panel-body">
                                            <p class="text-caption margin-none">
                                                <!--
                                                <i class="fa fa-clock-o fa-fw"></i> 4 hrs &nbsp;
                                                <i class="fa fa-calendar fa-fw"></i> 21/10/14
                                                <br/>
                                                -->
                                                <i class="fa fa-bar-chart fa-fw"></i> Assignment  : Marks : Weightage
                                                <br/>
                                                <?php foreach($grades_course as $gg) {?>
                                                <i class="fa fa-bar-chart fa-fw"></i> <?php echo $gg['title'];?> : <?php echo $gg['grade'] ;?>/100 : <?php if($wt != 0)echo $gg['weightage']/$wt*100 ;?>%
                                                <br/>
                                                <?php }?>
                                                <?php $sum = 0;
                                                foreach($grades_course as $gg)
                                                {
                                                $sum = $sum + $gg['grade']*$gg['weightage']/100 ;
                                                }
                                                ?>
                                                <i class="fa fa-plus fa-fw"></i> Total : <?php echo $sum ;?>/<?php echo $wt ;?> : <?php if($wt != 0)echo $sum/$wt*100 ;else echo "0";?>%
                                                <br/>
                                                
                                                <!--
                                                <i class="fa fa-mortar-board fa-fw"></i> Max. students: 50
                                                <br/>
                                                -->
                                                
                                            </p>
                                        </div>
                                        <hr class="margin-none" />
                                    </div>
                                    <?php }?>
                                    <?php if($val == 0){?>
                                    <script type = "text/javascript" language = "javascript">
                                    $('document').ready(function()
                                    {
                                    $('#enroll_btn').onclick(function(event)
                                    {
                                    $('document').load("<?php echo base_url();?>display_view/enroll/<?php echo $query['cid'];?>");
                                    });
                                    });
                                    </script>
                                    <div  class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                        <div class="panel-body">
                                            <div class="media v-middle">
                                                
                                                <div class="media-body media-right">
                                                    <a href = "<?php echo base_url();?>display_view/enroll/<?php echo $query['cid'];?>">
                                                        <label  id = "enroll_btn" class="btn btn-primary btn-sm paper-shadow relative ripple ripple-dark-fade" data-z="0.5" data-hover-z="1" data-animated="">
                                                            <i class="fa fa-flag fa-lg fa-pull-left"></i>
                                                            <span style="display:inline-block; width: 10px;"></span>
                                                            Enroll for Course
                                                            <span style="display:inline-block; width: 10px;"></span>
                                                        </label>
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                    <?php }?>
                                    
                                    <?php if($val_ca == 0){?>
                                    <script type = "text/javascript" language = "javascript">
                                    $('document').ready(function()
                                    {
                                    $('#enroll_ca_btn').onclick(function(event)
                                    {
                                    $('document').load("<?php echo base_url();?>display_view/enroll/<?php echo $query['cid'];?>");
                                    });
                                    });
                                    </script>
                                    <div  class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                        <div class="panel-body">
                                            <div class="media v-middle">
                                                
                                                <div class="media-body media-right">
                                                    <a href = "<?php echo base_url();?>display_view/enroll_ca/<?php echo $query['cid'];?>">
                                                        <label  id = "enroll_ca_btn" class="btn btn-primary btn-sm paper-shadow relative ripple ripple-dark-fade" onclick="mybtn()" data-z="0.5" data-hover-z="1" data-animated="">
                                                            <i class="fa fa-flag fa-lg fa-pull-left"></i>
                                                            <span style="display:inline-block; width: 1px;"></span>
                                                            Enroll for Course Admin
                                                            <span style="display:inline-block; width: 0px;"></span>
                                                        </label>
                                                        <!-- </a> -->
                                                        
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                        <?php }?>
                                        
                                        <div  class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                            <div class="panel-body">
                                                <div class="media v-middle">
                                                    
                                                    <div class="media-body media-right">
                                                        <a href = "<?php echo base_url();?>display_view/composemail/<?php echo $query['cid'];?>">
                                                            <label  id = "enroll_ca_btn" class="btn btn-primary btn-sm paper-shadow relative ripple ripple-dark-fade" onclick="mybtn()" data-z="0.5" data-hover-z="1" data-animated="">
                                                                <i class="fa fa-flag fa-lg fa-pull-left"></i>
                                                                <span style="display:inline-block; width: 1px;"></span>
                                                                Ask Doubts
                                                                <span style="display:inline-block; width: 0px;"></span>
                                                            </label>
                                                            <!-- </a> -->
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- // END .page-section -->
                                    </div>
                                </div>
                                <!-- /st-content-inner -->
                            </div>
                            <!-- /st-content -->
                        </div>
                        <!-- /st-pusher -->
                        <!-- Footer -->
                        <footer class="footer">
                            <strong>Learning</strong> v1.1.0 &copy; Copyright 2015
                        </footer>
                        <!-- // Footer -->
                    </div>
                    <!-- /st-container -->
                    <!-- Inline Script for colors and config objects; used by various external scripts; -->
                    <script>
                    var colors = {
                    "danger-color": "#e74c3c",
                    "success-color": "#81b53e",
                    "warning-color": "#f0ad4e",
                    "inverse-color": "#2c3e50",
                    "info-color": "#2d7cb5",
                    "default-color": "#6e7882",
                    "default-light-color": "#cfd9db",
                    "purple-color": "#9D8AC7",
                    "mustard-color": "#d4d171",
                    "lightred-color": "#e15258",
                    "body-bg": "#f6f6f6"
                    };
                    var config = {
                    theme: "html",
                    skins: {
                    "default": {
                    "primary-color": "#42a5f5"
                    }
                    }
                    };
                    </script>
                    <!-- Vendor Scripts Bundle
                    Includes all of the 3rd party JavaScript libraries above.
                    The bundle was generated using modern frontend development tools that are provided with the package
                    To learn more about the development process, please refer to the documentation.
                    Do not use it simultaneously with the separate bundles above. -->
                    <script src="<?php echo base_url(); ?>public/js/vendor/all.js"></script>
                    <!-- Vendor Scripts Standalone Libraries -->
                    <!-- <script src="js/vendor/core/all.js"></script> -->
                    <!-- <script src="js/vendor/core/jquery.js"></script> -->
                    <!-- <script src="js/vendor/core/bootstrap.js"></script> -->
                    <!-- <script src="js/vendor/core/breakpoints.js"></script> -->
                    <!-- <script src="js/vendor/core/jquery.nicescroll.js"></script> -->
                    <!-- <script src="js/vendor/core/isotope.pkgd.js"></script> -->
                    <!-- <script src="js/vendor/core/packery-mode.pkgd.js"></script> -->
                    <!-- <script src="js/vendor/core/jquery.grid-a-licious.js"></script> -->
                    <!-- <script src="js/vendor/core/jquery.cookie.js"></script> -->
                    <!-- <script src="js/vendor/core/jquery-ui.custom.js"></script> -->
                    <!-- <script src="js/vendor/core/jquery.hotkeys.js"></script> -->
                    <!-- <script src="js/vendor/core/handlebars.js"></script> -->
                    <!-- <script src="js/vendor/core/jquery.hotkeys.js"></script> -->
                    <!-- <script src="js/vendor/core/load_image.js"></script> -->
                    <!-- <script src="js/vendor/core/jquery.debouncedresize.js"></script> -->
                    <!-- <script src="js/vendor/core/modernizr.js"></script> -->
                    <!-- <script src="js/vendor/core/velocity.js"></script> -->
                    <!-- <script src="js/vendor/tables/all.js"></script> -->
                    <!-- <script src="js/vendor/forms/all.js"></script> -->
                    <!-- <script src="js/vendor/media/slick.js"></script> -->
                    <!-- <script src="js/vendor/charts/flot/all.js"></script> -->
                    <!-- <script src="js/vendor/nestable/jquery.nestable.js"></script> -->
                    <!-- <script src="js/vendor/countdown/all.js"></script> -->
                    <!-- <script src="js/vendor/angular/all.js"></script> -->
                    <!-- App Scripts Bundle
                    Includes Custom Application JavaScript used for the current theme/module;
                    Do not use it simultaneously with the standalone modules below. -->
                    <script src="<?php echo base_url(); ?>public/js/app/app.js"></script>
                    <?php $this->view('addons/footer.php'); ?>
                    <!-- ================================================
                    Scripts
                    ================================================ -->
                    
                    <!-- jQuery Library -->
                    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery-1.11.2.min.js"></script>
                    <!--materialize js-->
                    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/materialize.js"></script>
                    <!--scrollbar-->
                    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
                    
                    <!-- chartist -->
                    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/chartist-js/chartist.min.js"></script>
                    <!-- chartjs -->
                    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/chartjs/chart.min.js"></script>
                    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/chartjs/chart-script.js"></script>
                    <!-- sparkline -->
                    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/sparkline/jquery.sparkline.min.js"></script>
                    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/sparkline/sparkline-script.js"></script>
                    
                    <!-- google map api -->
                    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>
                    <!--jvectormap-->
                    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
                    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
                    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jvectormap/vectormap-script.js"></script>
                    
                    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
                    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins.js"></script>
                    <!-- Toast Notification -->
                    <script type="text/javascript">
                    // Toast Notification
                    /*    $(window).load(function() {
                    setTimeout(function() {
                    Materialize.toast('<span>Hiya! I am a toast.</span>', 1500);
                    }, 1500);
                    setTimeout(function() {
                    Materialize.toast('<span>You can swipe me too!</span>', 3000);
                    }, 5000);
                    setTimeout(function() {
                    Materialize.toast('<span>You have new order.</span><a class="btn-flat yellow-text" href="#">Read<a>', 3000);
                    }, 15000);
                    });*/
                    $(function() {
                    // Google Maps
                    $('#map-canvas').addClass('loading');
                    var latlng = new google.maps.LatLng(40.6700, -73.9400); // Set your Lat. Log. New York
                    var settings = {
                    zoom: 10,
                    center: latlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    mapTypeControl: false,
                    scrollwheel: false,
                    draggable: true,
                    styles: [{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7dcdcd"}]}],
                    mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                    navigationControl: false,
                    navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                    };
                    var map = new google.maps.Map(document.getElementById("map-canvas"), settings);
                    google.maps.event.addDomListener(window, "resize", function() {
                    var center = map.getCenter();
                    google.maps.event.trigger(map, "resize");
                    map.setCenter(center);
                    $('#map-canvas').removeClass('loading');
                    });
                    var contentString =
                    '<div id="info-window">'+
                        '<p>18 McLuice Road, Vellyon Hills,<br /> New York, NY 10010<br /><a href="https://plus.google.com/102896039836143247306/about?gl=za&hl=en" target="_blank">Get directions</a></p>'+
                    '</div>';
                    var infowindow = new google.maps.InfoWindow({
                    content: contentString
                    });
                    var companyImage = new google.maps.MarkerImage('http://demo.geekslabs.com/ashoka/images/map-marker.png',
                    new google.maps.Size(36,62),// Width and height of the marker
                    new google.maps.Point(0,0),
                    new google.maps.Point(18,52)// Position of the marker
                    );
                    var companyPos = new google.maps.LatLng(40.6700, -73.9400);
                    var companyMarker = new google.maps.Marker({
                    position: companyPos,
                    map: map,
                    icon: companyImage,
                    title:"Shapeshift Interactive",
                    zIndex: 3});
                    google.maps.event.addListener(companyMarker, 'click', function() {
                    infowindow.open(map,companyMarker);
                    pageView('/#address');
                    });
                    });
                    
                    </script>
                </body>
            </html>