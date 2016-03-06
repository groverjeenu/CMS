<!DOCTYPE html>
<html class="st-layout ls-top-navbar-large ls-bottom-footer show-sidebar sidebar-l3" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo $query['course_name']." | ".$this->config->item('sitename');?></title>
        <!-- Vendor CSS BUNDLE
        Includes styling for all of the 3rd party libraries used with this module, such as Bootstrap, Font Awesome and others.
        TIP: Using bundles will improve performance by reducing the number of network requests the client needs to make when loading the page. -->
        <link href="<?php echo base_url();?>public/css/vendor/all.css" rel="stylesheet">

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
        <style type="text/css">
        .mytextarea
        {
        resize : none;
        height: auto !important;
        }
        </style>
        <!-- Vendor CSS Standalone Libraries
        NOTE: Some of these may have been customized (for example, Bootstrap). -->
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
        TIP:
        - Using bundles will improve performance by greatly reducing the number of network requests the client needs to make when loading the page. -->
        <link href="<?php echo base_url();?>public/css/app/app.css" rel="stylesheet">
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
        <!-- Wrapper required for sidebar transitions -->
        <div class="st-container">
            <?php $this->view('courses/courses_sidebar', array('course' => $this->courses->get_general($cid)));?>
            <!-- sidebar effects OUTSIDE of st-pusher: -->
            <!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->
            <!-- content push wrapper -->
            <div class="st-pusher" id="content">
                <!-- sidebar effects INSIDE of st-pusher: -->
                <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->
                <!-- this is the wrapper for the content -->
                <div class="st-content">
                    <!-- extra div for emulating position:fixed of the menu -->
                    <div class="st-content-inner padding-none">
                        <div class="container-fluid">
                            <div style="margin-top:10px"></div>
                            <div class = "row card-panel">
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
                                        <p class="text-subhead text-light">A brief description.</p>
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
                                <div class='pull-right'>
                                    <div class="page-section width-270 width-auto-xs">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /st-content-inner -->
                </div>
                <!-- /st-content -->
            </div>
            <!-- /st-pusher -->
            <?php $this->view('common/footer');?>
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
        <script src="<?php echo base_url();?>public/js/vendor/all.js"></script>

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
        <script src="<?php echo base_url();?>public/js/app/app.js"></script>
        <!-- App Scripts Standalone Modules
        As a convenience, we provide the entire UI framework broke down in separate modules
        Some of the standalone modules may have not been used with the current theme/module
        but ALL the modules are 100% compatible -->
        <!-- <script src="js/app/essentials.js"></script> -->
        <!-- <script src="js/app/material.js"></script> -->
        <!-- <script src="js/app/layout.js"></script> -->
        <!-- <script src="js/app/sidebar.js"></script> -->
        <!-- <script src="js/app/media.js"></script> -->
        <!-- <script src="js/app/messages.js"></script> -->
        <!-- <script src="js/app/maps.js"></script> -->
        <!-- <script src="js/app/charts.js"></script> -->
        <!-- App Scripts CORE [html]:
        Includes the custom JavaScript for this theme/module;
        The file has to be loaded in addition to the UI modules above;
        app.js already includes main.js so this should be loaded
        ONLY when using the standalone modules; -->
        <!-- <script src="js/app/main.js"></script> -->
        <script>
        </script>
    </body>
</html>