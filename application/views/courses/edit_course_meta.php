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
        <link href="<?php echo base_url();?>public/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/loader.css" media="all" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!-- Wrapper required for sidebar transitions -->
        <div id="loader-wrapper">
            <div id="loader"></div>        
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <div class="st-container">
            <?php $this->view('courses/courses_sidebar',array('course'=>$course));?>
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
                        <?php if($this->session->flashdata('message')) { ?>
                        <div class="alert alert-<?php echo $this->session->flashdata('type');?>" role="alert"><?php echo $this->session->flashdata('message');?></div>
                        <?php } ?>
                        <div class="container-fluid">
                            <div class="page-section">
                                <h1 class="text-display-1">Course Meta</h1>
                            </div>
                            <div class="tabbable paper-shadow relative" data-z="0.5">
                                <!-- Tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active"><a  data-toggle="tab" href="#schedule"><i class="fa fa-fw fa-calendar"></i> <span class="hidden-sm hidden-xs">Schedule</span></a></li>
                                    <li><a data-toggle="tab" href="#faculty"><i class="fa fa-fw fa-group"></i> <span class="hidden-sm hidden-xs">Faculty</span></a></li>
                                    <li><a data-toggle="tab" href="#cadmins"><i class="fa fa-fw fa-group"></i> <span class="hidden-sm hidden-xs">Course Admins</span></a></li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="schedule">
                                        <?php $attributes = array('class' => 'form-horizontal');
                                            echo form_open('courses/edit/'.$course['cid']."/meta",$attributes);?>
                                            <div class="form-group">
                                                <label for="select" class="col-sm-3 control-label">Stream</label>
                                                <div class="col-sm-9 col-md-9">
                                                    <select id="stream" name='stream[]' style="width: 75%;" multiple="multiple" data-toggle="select2">
                                                        <?php
                                                        $streams = $this->courses->all_streams();
                                                        foreach ($streams as $stream) {
                                                        echo "<option id='".$stream['id']."' value=".$stream['id'].">".$stream['name']."</option>";
                                                        }?>
                                                    </select>
                                                    <?php echo form_error('stream[]');?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="duration" class="col-sm-3 control-label">Course Duration(in Days)</label>
                                                <div class="col-sm-4 col-md-2">
                                                    <input type="text" name="duration" class="form-control" placeholder="No. of Days" value="<?php echo $course['duration'] ?>">
                                                </div>
                                                <?php echo form_error('duration');?>
                                            </div>
                                            <div class="form-group">
                                                <label for="start" class="col-sm-3 control-label">Start Date</label>
                                                <div class="col-sm-9 col-md-4">
                                                    <input name='start' id="start" type="text" class="form-control datepicker" value="<?php echo $course['start']?>">
                                                </div>
                                                <?php echo form_error('start');?>
                                            </div>
                                            <div class="form-group">
                                                <label for="end" class="col-sm-3 control-label">End Date</label>
                                                <div class="col-sm-9 col-md-4">
                                                    <input name='end' id="end" type="text" class="form-control datepicker" value="<?php echo $course['end'] ?>">
                                                </div>
                                                <?php echo form_error('end');?>
                                            </div>
                                            <div class="text-right">
                                                <button type='submit' class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="faculty">
                                        <?php $faculties = $this->courses->getAllFaculty($course['cid']);
                                            $faculty_no = count($faculties);?>
                                        <div class="media v-middle s-container">
                                            <div class="media-body">
                                                <h4 class="text-subhead text-light"><?php echo $faculty_no; 
                                                if($faculty_no > 1) echo " Faculties"; else echo " Faculty"?></h4>
                                            </div>
                                            <div class="media-right">
                                            </div>
                                        </div>
                                        <div class="s-container">
                                            <?php $attributes = array('class' => 'form-inline');
                                            echo form_open('courses/edit/'.$course['cid']."/add_faculty",$attributes);?>
                                                <div class="row">
                                                    <div class="form-group col-sm-8">
                                                        <select id="faculty" name='faculty[]' style="width: 100%;" multiple="multiple" data-toggle="select2">
                                                        <?php $fs = $this->user->search_faculty();
                                                        foreach ($fs as $fu) { ?>

                                                            <option id="<?php echo $fu['username']?>" value="<?php echo $fu['id'] ?>"><span>
                                                            <img src="<?php echo base_url()."contents/images/people/".$fu['image'];?>" alt="<?php echo $fu['username']?>" class="img-circle width-30" />
                                                            <?php
                                                            echo $fu['first_name']." ".$fu['last_name'] ?></span></option>
                                                            <?php }?>

                                                        </select>
                                                        <?php echo form_error('faculty[]');?>
                                                    </div>
                                                    <div class="checkbox form-group col-sm-1">
                                                        <input id="is_guest" type="checkbox" name="is_guest">
                                                        <label for="is_guest">Guest</label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <button type="submit" class="btn btn-primary paper-shadow relative" >Add Faculty</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="nestable" id="nestable-handles-primary">
                                            <ul class="nestable-list">
                                                <?php 
                                                    foreach($faculties as $faculty){
                                                ?>
                                                <li class="nestable-item nestable-item-handle" data-id="<?php echo $faculty['username']?>">
                                                    <div class="nestable-handle"><i class="md md-menu"></i></div>
                                                    <div class="nestable-content">
                                                        <div class="media v-middle">
                                                            <div class="media-left">
                                                                <div class="icon-circle half bg-white-400  text-white">
                                                                    <img src="<?php echo base_url()."contents/images/people/".$faculty['image'];?>" alt="<?php echo $faculty['username']?>" class="img-circle width-50" />
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="text-title media-heading margin-none">
                                                                <a href='<?php echo base_url()."people/".$faculty['username']?>' class="link-text-color"><?php echo $faculty['first_name']." ".$faculty['last_name'];?></a>
                                                                </h4>
                                                                <?php $role = "Main";
                                                                if($faculty['role'] == "guest") $role ="Guest";
                                                                $iso = date(DATE_RFC2822,strtotime($faculty['last_updated'])); $dis = date('l jS \of F Y h:i:s A',strtotime($faculty['last_updated'])); ?>
                                                                <div class="text-caption">Role: <?php echo $role; ?>
                                                                    <br>added 
                                                                    <time class="timeago" datetime="<?php echo $iso;?>"><?php echo $dis; ?></time>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="media-right">
                                                                <a href="<?php echo "";// echo base_url()."courses/".$courseid."/lessons/edit/".$lesson['id'];?>" class="btn btn-white btn-flat"><i class="fa fa-pencil fa-fw"></i> Edit</a>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php }?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="cadmins">
                                        <?php $faculties = $this->courses->getAllCAdmins($course['cid']);
                                            $faculty_no = count($faculties);?>
                                        <div class="media v-middle s-container">
                                            <div class="media-body">
                                                <h4 class="text-subhead text-light"><?php echo $faculty_no; 
                                                if($faculty_no > 1) echo " Course Administrators"; else echo " Course Administrator"?></h4>
                                            </div>
                                            <div class="media-right">
                                            </div>
                                        </div>
                                        <div class="s-container">
                                            <?php $attributes = array('class' => 'form-inline');
                                            echo form_open('courses/edit/'.$course['cid']."/add_cadmin",$attributes);?>
                                                <div class="row">
                                                    <div class="form-group col-sm-9">
                                                        <select id="cadmin" name='cadmin[]' style="width: 100%;" multiple="multiple" data-toggle="select2">
                                                        <?php
                                                        $fs = $this->user->search_faculty();
                                                        foreach ($fs as $fu) { ?>

                                                        <option id="<?php echo $fu['username']?>" value="<?php echo $fu['id'] ?>"><span>
                                                            <img src="<?php echo base_url()."contents/images/people/".$fu['image'];?>" alt="<?php echo $fu['username']?>" class="img-circle width-30" />
                                                            <?php
                                                            echo $fu['first_name']." ".$fu['last_name'] ?></span></option>
                                                        <?php }?>
                                                    </select>
                                                    <?php echo form_error('cadmin[]');?>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <button type="submit" class="btn btn-primary paper-shadow relative" >Add Course Admin</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="nestable" id="nestable-handles-primary">
                                            <ul class="nestable-list">
                                                <?php 
                                                    foreach($faculties as $faculty){
                                                ?>
                                                <li class="nestable-item nestable-item-handle" data-id="<?php echo $faculty['username']?>">
                                                    <div class="nestable-handle"><i class="md md-menu"></i></div>
                                                    <div class="nestable-content">
                                                        <div class="media v-middle">
                                                            <div class="media-left">
                                                                <div class="icon-circle half bg-white-400  text-white">
                                                                    <img src="<?php echo base_url()."contents/images/people/".$faculty['image'];?>" alt="<?php echo $faculty['username']?>" class="img-circle width-50" />
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="text-title media-heading margin-none">
                                                                <a href='<?php echo base_url()."people/".$faculty['username']?>' class="link-text-color"><?php echo $faculty['first_name']." ".$faculty['last_name'];?></a>
                                                                </h4>
                                                                <?php $iso = date(DATE_RFC2822,strtotime($faculty['last_updated'])); $dis = date('l jS \of F Y h:i:s A',strtotime($faculty['last_updated'])); ?>
                                                                <div class="text-caption">added 
                                                                    <time class="timeago" datetime="<?php echo $iso;?>"><?php echo $dis; ?></time>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="media-right">
                                                                <a href="<?php echo "";// echo base_url()."courses/".$courseid."/lessons/edit/".$lesson['id'];?>" class="btn btn-white btn-flat"><i class="fa fa-pencil fa-fw"></i> Edit</a>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php }?>
                                            </ul>
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
    <script src="<?php echo base_url();?>public/js/loader.js"></script>
    <script src="<?php echo base_url();?>public/js/jquery.timeago.js"></script>

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
        $(document).ready(function(){
            var topics = <?php echo json_encode($course['stream'])?>;
            $("#stream").select2('val',topics);
            $("time.timeago").timeago();
            $("#li_meta").addClass('active');
            
        });
        
    </script>
</body>
</html>