<!DOCTYPE html>
<html class="st-layout ls-top-navbar-large ls-bottom-footer show-sidebar sidebar-l3" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo $this->config->item('sitename')." | ".$page_title;?></title>
        <!-- Vendor CSS BUNDLE
        Includes styling for all of the 3rd party libraries used with this module, such as Bootstrap, Font Awesome and others.
        TIP: Using bundles will improve performance by reducing the number of network requests the client needs to make when loading the page. -->
        <link href="<?php echo base_url();?>public/css/vendor/all.css" rel="stylesheet">
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
            <?php $this->view('common/header');?>
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
                            <div class="page-section">
                                <h1 class="text-display-1">General Course Details</h1>
                            </div>
                            <!-- Tabbable Widget -->
                            <div class="tabbable paper-shadow relative" data-z="0.5">
                                <!-- Tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active"><a  data-toggle="tab" href="#course"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Course</span></a></li>
                                    <li><a data-toggle="tab" href="#meta"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Meta</span></a></li>
                                    <li><a data-toggle="tab" href="#lessons"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Lessons</span></a></li>
                                </ul>
                                <!-- // END Tabs -->
                                <!-- Panes -->
                                <div class="tab-content">
                                    <div id="course" class="tab-pane active">
                                        <?php $attributes = array('class' => 'form');
                                        echo form_open('courses/edit');?>
                                        <!-- <form action="app-instructor-course-edit-course.html" class="form"> -->
                                        <div class="form-group form-control-material">
                                            <?php if(isset($course['course_name'])) $title =  $course['course_name']; else $title= set_value('title');
                                            echo $title;?>
                                            <input type="text" name="title" id="title" placeholder="Course Title" class="form-control used" value="<?php echo $title?>" />
                                            <label for="title">Title</label>
                                            <?php echo form_error('title');?>
                                        </div>
                                        <div class="form-group form-control-material mytextarea" >
                                            <textarea id="description" name = "description" class="form-control used" row="20" placeholder="Write course description here...." value="<?php if(isset($course['description'])) echo $course['description']; else echo set_value('description');?>"><?php if(isset($course['description'])) echo $course['description']; else echo set_value('description');?></textarea>
                                            <label for="description">Description</label>
                                            <?php echo form_error('description');?>
                                        </div>
                                        <div class="form-group form-control-material mytextarea">
                                            <textarea id="syllabus" name= "syllabus" class="form-control used" row="20" placeholder="Write course syllabus here...." value="<?php if(isset($course['syllabus'])) echo $course['syllabus']; else echo set_value('syllabus');?>"><?php if(isset($course['syllabus'])) echo $course['syllabus'] ;else echo set_value('syllabus');?></textarea>
                                            <label for="syllabus">Syllabus</label>
                                            <?php echo form_error('syllabus');?>
                                        </div>
                                        <h5>Enrollment Key</h5>
                                        <div class="form-group" >
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" id="enable_toggle" class="btn btn-default" value="Enable">Enable</button>
                                                <button type="button" id="disable_toggle" class="btn btn-default" value="Disable" >Disable</button>
                                            </div>
                                        </div>
                                        <input type='text' class='hidden' name='is_key' id='is_key' value="<?php if(isset($course['is_key'])) echo $course['is_key']; else echo set_value('is_key');?>"/>
                                        <div class="form-group form-control-material">
                                            <input type="text" <?php if(isset($course['is_key'])) {if(!$course['course_key']) echo "disabled='disabled'"; }else if(!set_value('is_key')) echo "disabled='disabled'"; ?>name="course_key" data-toggle="key" id="course_key" placeholder="Course Key" class="form-control used" value="<?php if(isset($course['course_key'])) echo $course['course_key']; else echo set_value('course_key');?>" />
                                            <?php echo form_error('course_key');?>
                                        </div>
                                        <div class="text-right">
                                            <button type='submit' class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                                <div id="meta" class="tab-pane">
                                    <form class="form-horizontal" method="course/edit">
                                        <div class="form-group">
                                            <label for="select" class="col-sm-3 control-label">Stream</label>
                                            <div class="col-sm-9 col-md-9">
                                                <select id="stream" name='stream[]' class="form-control selectpicker" multiple data-style="btn-white" data-live-search="true" data-size="5">
                                                    <?php
                                                    $streams = $this->courses->all_streams();
                                                    foreach ($streams as $stream) {
                                                    echo "<option value=".$stream['id'].">".$stream['name']."</option>";
                                                    }?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="duration" class="col-sm-3 control-label">Course Duration(in Days)</label>
                                            <div class="col-sm-4 col-md-2">
                                                <input type="text" name="days" class="form-control" placeholder="No. of Days" value="<?php if(isset($course['days'])) echo $course['days']; else echo set_value('days'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="start" class="col-sm-3 control-label">Start Date</label>
                                            <div class="col-sm-9 col-md-4">
                                                <input name='start' id="start" type="text" class="form-control datepicker" value="<?php if(isset($course['start'])) echo $course['start']; else echo set_value('start'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="end" class="col-sm-3 control-label">End Date</label>
                                            <div class="col-sm-9 col-md-4">
                                                <input name='end' id="end" type="text" class="form-control datepicker" value="<?php if(isset($course['end'])) echo $course['end']; else echo set_value('end'); ?>">
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type='submit' class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                                <?php $lesson['id'] = 1;
                                        $lesson['name'] = "I am a lesson";
                                        $lesson['last_updated'] = time(0);
                                        $lessons = array($lesson);
                                        $no_lessons = 1;
                                        $courseid= $course['id'];
                                ?>
                                <div id="lessons" class="tab-pane">
                                    <div class="media v-middle s-container">
                                        <div class="media-body">
                                            <h5 class="text-subhead text-light"><?php echo $no_lessons;?> Lessons</h5>
                                        </div>
                                        <div class="media-right">
                                            <a class="btn btn-primary paper-shadow relative" href="<?php echo base_url()."courses/$courseid/";?>lessons/add">Add lesson</a>
                                        </div>
                                    </div>
                                    <div class="nestable" id="nestable-handles-primary">
                                        <ul class="nestable-list">
                                            <?php 
                                                foreach($lessons as $lesson){
                                            ?>
                                            <li class="nestable-item nestable-item-handle" data-id="<?php echo $lesson['id']?>">
                                                <div class="nestable-handle"><i class="md md-menu"></i></div>
                                                <div class="nestable-content">
                                                    <div class="media v-middle">
                                                        <div class="media-left">
                                                            <div class="icon-block half bg-purple-400  text-white">
                                                                <i class="fa fa-book"></i>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="text-title media-heading margin-none">
                                                            <a href='<?php echo base_url()."courses/".$courseid."/lessons/".$lesson['id'];?>' class="link-text-color"><?php echo $lesson['name'];?></a>
                                                            </h4>
                                                            <?php //TODO: Add timeago here for udating last updated?>
                                                            <div class="text-caption">updated 1 month ago</div>
                                                        </div>
                                                        <div class="media-right">
                                                            <a href="<?php echo base_url()."courses/".$courseid."/lessons/edit/".$lesson['id'];?>" class="btn btn-white btn-flat"><i class="fa fa-pencil fa-fw"></i> Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- // END Panes -->
                        </div>
                        <!-- // END Tabbable Widget -->
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
    <script src="<?php echo base_url();?>public/js/autosize.min.js"></script>
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
    autosize($('textarea'));
    $(document).ready(function()
    {
    autosize($('textarea'));
    });
    </script>
</body>
</html>