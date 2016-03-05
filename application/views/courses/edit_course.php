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
        <link href="<?php echo base_url();?>public/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

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
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div id="course" class="card">
                                        <?php $attributes = array('class' => 'form');
                                            echo form_open('courses/edit/general/'.$course['cid'],$attributes);?>
                                            <!-- <form action="app-instructor-course-edit-course.html" class="form"> -->
                                            <div class="form-group form-control-material">
                                                <input type="text" name="title" id="title" placeholder="Course Title" class="form-control used" value="<?php echo $course['course_name']?>" />
                                                <label for="title">Title</label>
                                                <?php echo form_error('title');?>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" id="description" cols="30" rows="10" class="summernote"><?php echo $course['description'];?></textarea>
                                                <?php echo form_error('description');?>
                                            </div>
                                            <div class="form-group">
                                                <label for="syllabus">Syllabus</label>
                                                <textarea name="syllabus" id="syllabus" cols="30" rows="10" class="summernote"><?php echo $course['syllabus'];?></textarea>
                                                <?php echo form_error('syllabus');?>
                                            </div>
                                            <h5>Enrollment Key</h5>
                                            <div class="form-group" >
                                                <div class="btn-group btn-group-sm">
                                                    <button type="button" id="enable_toggle" class="btn btn-default" value="Enable">Enable</button>
                                                    <button type="button" id="disable_toggle" class="btn btn-default" value="Disable" >Disable</button>
                                                </div>
                                            </div>
                                            <input type='text' class='hidden' name='is_key' id='is_key' value="<?php echo $course['is_key'] ?>"/>
                                            <div class="form-group form-control-material">
                                                <input type="text" <?php if(!$course['is_key']) echo 'disabled="disabled"'  ?>name="course_key" data-toggle="key" id="course_key" placeholder="Course Key" class="form-control used" value="<?php echo $course['course_key']; ?>" />
                                                <?php echo form_error('course_key');?>
                                            </div>
                                            <div class="form-group">
                                                    <label class="control-label">Course Icon</label>
                                                    <input id="course_icon" name="course_icon"  type="file" class="file" data-show-caption="false" data-show-upload="false" data-allowed-file-extensions='["png", "jpg","gif","jpeg"]'>
                                                    <?php echo $file_error; ?>
                                            </div>
                                            <div class="text-right">
                                                <button type='submit' class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
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
    <script src="<?php echo base_url();?>public/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/js/fileinput.min.js"></script>
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
    <script>
        $(document).on('ready', function() {
            $("#course_icon").fileinput({
                autoReplace: true,
                maxFileCount: 1,
                initialPreview: [
                    "<img src='<?php echo base_url();?>contents/images/course_icons/<?php echo $course['imagename'];?>' class='file-preview-image' alt='course-icon' title='<?php echo $course['course_name'];?>' >",
                    
                ],
                initialPreviewConfig: [
                {
                    url: '<?php echo base_url();?>course_icon/delete',
                    key: "<?php echo $course['imagename'];?>"
                },
                overwriteInitial: true,
                maxFileSize: 5000,
            });
        });
    </script>
</body>
</html>