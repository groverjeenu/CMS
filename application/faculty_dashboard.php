<!DOCTYPE html>
<html class="st-layout ls-top-navbar-large ls-bottom-footer show-sidebar sidebar-l3" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>ECourse</title>
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
                          <div style="margin-top: 20px">
                            <div class = "col-sm-6">
                              <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                          <h4 class="text-headline margin-none">My Courses</h4>
                                          <p class="text-subhead text-light">Your recent courses</p>
                                </div>
                                  <ul class="list-group">
                                  <?php $i=0 ?>
                                  <?php foreach ($courses as $key) {
                                  ?>
                                  <li class="list-group-item media v-middle">
                                    <div class="media-body">
                                      <a href="<?php echo base_url();?>display_view/course/<?php echo $key['cid']?>" class="text-subhead list-group-link"><?php echo $key['course_name'];?></a>
                                    </div>
                                    <!--div class="media-right">
                                      <div class="progress progress-mini width-100 margin-none">
                                        <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                        </div>
                                      </div>
                                    </div-->
                                  </li>
                                  <?php }?>
                                  <!--li class="list-group-item media v-middle">
                                    <div class="media-body">
                                      <a href="app-instructor-course-edit-course.html" class="text-subhead list-group-link">Angular in Steps</a>
                                    </div>
                                    <div class="media-right">
                                      <div class="progress progress-mini width-100 margin-none">
                                        <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="list-group-item media v-middle">
                                    <div class="media-body">
                                      <a href="app-instructor-course-edit-course.html" class="text-subhead list-group-link">Bootstrap Foundations</a>
                                    </div>
                                    <div class="media-right">
                                      <div class="progress progress-mini width-100 margin-none">
                                        <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                        </div>
                                      </div>
                                    </div>
                                  </li-->
                                </ul>
                                <!--div class="panel-footer text-right">
                                  <a href="app-instructor-courses.html" class="btn btn-white paper-shadow relative" data-z="0" data-hover-z="1" data-animated>View all</a>
                                          <a href="app-instructor-course-edit-course.html" class="btn btn-primary paper-shadow relative" data-z="0" data-hover-z="1" data-animated>CREATE COURSE <i class="fa fa-plus"></i></a>
                                </div-->
                              </div>  
                            </div>
                            <div class = "col-sm-6">
                              <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                          <h4 class="text-headline margin-none">Course Admin Applications</h4>
                                          <p class="text-subhead text-light">Pending Approvals</p>
                                </div>
                                  <ul class="list-group">
                                  <?php foreach ($ta as $key) {
                                  ?>
                                  <li class="list-group-item media v-middle">
                                    <div class="media-body">
                                      <a href="app-instructor-course-edit-course.html" class="text-subhead list-group-link">Name: <?php echo $key['first_name']?> <?php echo $key['last_name'] ?></a>
                                      <br><a href="app-instructor-course-edit-course.html" class="text-subhead list-group-link">Course: <?php echo $key['course_name']?></a>
                                      
                                    
                                    </div>
                                    <div class="pull-right">
                                      
                                    <a href="<?php echo base_url()."display_view/course_admin_add/".$key['courseadmin'] ?>" class="btn btn-white paper-shadow relative" data-z="0" data-hover-z="1" data-animated>Approve</a>
                                          <a href="app-instructor-course-edit-course.html" class="btn btn-primary paper-shadow relative" data-z="0" data-hover-z="1" data-animated>Deny</a>
                                        </div>
                                  </li>
                                  <?php }?>
                                  <!--li class="list-group-item media v-middle">
                                    <div class="media-body">
                                      <a href="app-instructor-course-edit-course.html" class="text-subhead list-group-link">Angular in Steps</a>
                                    </div>
                                    <div class="media-right">
                                      <div class="progress progress-mini width-100 margin-none">
                                        <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="list-group-item media v-middle">
                                    <div class="media-body">
                                      <a href="app-instructor-course-edit-course.html" class="text-subhead list-group-link">Bootstrap Foundations</a>
                                    </div>
                                    <div class="media-right">
                                      <div class="progress progress-mini width-100 margin-none">
                                        <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                        </div>
                                      </div>
                                    </div>
                                  </li-->
                                </ul>
                                
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
    $(document).ready(function()
    {
    autosize($('textarea'));
    $('#enable_toggle').click(function(){
    $("#is_key").val('enabled');
    $("#course_key").prop('disabled',false);
    });
    $('#disable_toggle').click(function(){
    $("#is_key").val('disabled');
    $("#course_key").prop('disabled',true);
    });
    });
    </script>
</body>
</html>


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
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    
                                </div>
                            </div>
                            <div class="row" >
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Question Bank</div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <form method="post" action="<?php echo site_url('qbank/remove_qids/'.$limit);?>" id="removeqids">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th><input type="checkbox" name=""  onClick="selectall('<?php echo count($result);?>');"></th>
                                                                <th>ID</th>
                                                                <th>Question</th>
                                                                <th>Category</th>
                                                                <th>Level</th>
                                                                <th>Type</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            
                                                            <?php
                                                            if($result==false){
                                                            ?>
                                                            <tr>
                                                                <td colspan="6">
                                                                    No record foud!
                                                                </td>
                                                            </tr>
                                                            <?php
                                                            }else{
                                                            $j=0;
                                                            foreach($result as $row){
                                                            $j+=1;
                                                            if($row->q_type=="0"){
                                                            $type="Multiple Choice - single answers";
                                                            }
                                                            if($row->q_type=="1"){
                                                            $type="Multiple Choice - multiple answers";
                                                            }
                                                            if($row->q_type=="2"){
                                                            $type="Fill in the Blank";
                                                            }
                                                            if($row->q_type=="3"){
                                                            $type="Short Answer";
                                                            }
                                                            if($row->q_type=="4"){
                                                            $type="Essay";
                                                            }
                                                            if($row->q_type=="5"){
                                                            $type="Matching";
                                                            }
                                                            ?>
                                                            <tr>
                                                                <td data-th="Select"><input type="checkbox" name="qid[]" value="<?php echo $row->qid;?>" id="checkbox<?php echo $j;?>"></td>
                                                                <td data-th="ID"><?php echo $row->qid;?></td>
                                                                <td data-th="Question"><?php echo substr(strip_tags($row->question),"0","20");?></td>
                                                                <td data-th="Category"><?php echo $row->category_name;?></td>
                                                                <td data-th="Level"><?php echo $row->level_name;?></td>
                                                                <td data-th="Type"><?php echo $type;?></td>
                                                                <td data-th="Action">
                                                                    <a href="javascript: if(confirm('Do you really want to remove this question?')){ window.location='<?php echo site_url('qbank/remove_question/'.$row->qid );?>'; }" class="btn btn-danger btn-xs">Remove</a>
                                                                    <a href="<?php echo site_url('qbank/edit_question/'.$row->qid.'/'.$row->q_type );?>" class="btn btn-info btn-xs">Edit</a>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                            }
                                                            }
                                                            ?>
                                                            
                                                            
                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                                <!-- /.col-lg-6 -->
                                <!-- /.col-lg-6 -->
                            </div>
                            <div>
                                <a href="javascript:removeqids();"  class="btn btn-danger">Remove</a>
                                &nbsp;&nbsp;
                                <?php
                                if(($limit-($this->config->item('number_of_rows')))>=0){ $back=$limit-($this->config->item('number_of_rows')); }else{ $back='0'; } ?>
                                <a href="<?php echo site_url('qbank/index/'.$back.'/'.$fcid);?>"  class="btn btn-primary">Back</a>
                                &nbsp;&nbsp;
                                <?php
                                $next=$limit+($this->config->item('number_of_rows'));  ?>
                                <a href="<?php echo site_url('qbank/index/'.$next.'/'.$fcid);?>"  class="btn btn-primary">Next</a>
                                &nbsp;&nbsp;
                                <a href="javascript:showhiddendiv('importbox');"  class="btn btn-warning">Import</a>
                                <div class="searchbox form-group" id="importbox">
                                    <?php echo form_open('qbank/import',array('enctype'=>'multipart/form-data')); ?>
                                    <form>
                                        <h3>Import Question</h3>
                                        <select name="cid" class="form-control"  >
                                            <option value="0">Select Category</option>
                                            <?php foreach($category as $value){ ?>
                                            <option value="<?php echo $value->cid; ?>"><?php echo $value->category_name; ?></option>
                                            <?php } ?>
                                        </select>
                                        <select name="did" class="form-control">
                                            <option value="0">Select level</option>
                                            <?php foreach($difficult_level as $value){ ?>
                                            <option value="<?php echo $value->did; ?>"><?php echo $value->level_name; ?></option>
                                            <?php } ?>
                                        </select>
                                        Upload Excel file ( .xls only )
                                        <input type="hidden" name="size" value="3500000">
                                        <input type="file" name="xlsfile"/>
                                        <div style="clear:both;">/
                                        </div>
                                        <input type="submit" value="Import"  class="btn btn-default"/>
                                        
                                        <a href="<?php echo base_url();?>xls/sample.xls" target="new">Click here</a> to download sample file to know file format.
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>