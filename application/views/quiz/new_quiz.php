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
        div.category_box{
            border:1px solid #d4e0ed;
            width:110px;
            padding:4px;
            background:#e4edf7;
            float:left;
            margin-right:5px;
            font-size:14px;
            color:#000000;
            font-family:arial;
            font-weight:bold;
            cursor:pointer;
            }
            a.tooltip {outline:none; } a.tooltip strong {line-height:30px;} a.tooltip:hover {text-decoration:none;} a.tooltip span { z-index:10;display:none; padding:14px 20px; margin-top:20px; margin-left:-125px; width:240px; line-height:16px; } a.tooltip:hover span{ display:inline; position:absolute; border:2px solid #FFF; color:#EEE; background:#000 url(images/css-tooltip-gradient-bg.png) repeat-x 0 0; } .callout {z-index:20;position:absolute;border:0;top:-14px;left:120px;} /*CSS3 extras*/ a.tooltip span { border-radius:2px; -moz-border-radius: 2px; -webkit-border-radius: 2px; -moz-box-shadow: 0px 0px 8px 4px #666; -webkit-box-shadow: 0px 0px 8px 4px #666; box-shadow: 0px 0px 8px 4px #666; opacity: 0.8; }
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
                            <div style="margin-top:10px;"></div>
                            <?php
                            if($resultstatus){ echo "<div class='alert alert-success'>".$resultstatus."</div>"; }
                            ?>
                            <form method="post" action="<?php echo site_url('quiz/quiz/add_new');?>">
                                <div class="row" style="margin-top:10px;">
                                    <div class="col-lg-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading h3">
                                                <?php if($title){ echo $title; } ?>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        
                                                        <div class="form-group">
                                                            <label>Quiz Name</label>
                                                            <input type='text'  class="form-control"  name='quiz_name' >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Quiz Description</label>
                                                            <textarea name="description"  placeholder=""></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Quiz Duration in Minutes</label>
                                                            <input type='text' name='quiz_time_duration'  class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Start Time ( YYYY/MM/DD HH:MM:SS  )</label>
                                                            <input type='text' name='test_start_time'  class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>End Time ( eg. 2014/10/31 23:59:59 )</label>
                                                            <input type='text' name='test_end_time'  class="form-control" >
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label>Percentage required to pass</label>
                                                            <select name="pass_percentage"  class="form-control">
                                                                <?php for($i = 0;$i <= 100;$i++){ ?>
                                                                <option value="<?php echo $i;  ?>"><?php echo $i;  ?>%</option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Allow to View Answer </label> &nbsp;&nbsp;
                                                            <input type='radio' name='view_answer' value='1' >Yes &nbsp;&nbsp;&nbsp;
                                                            <input type='radio' name='view_answer' value='0' >No
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Maximum Attempts </label>
                                                            <select name="max_attemp"  class="form-control">
                                                                <?php for($i = 1;$i <= 1000;$i++){ ?>
                                                                <option value="<?php echo $i;  ?>"><?php echo $i;  ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Quiz Type </label>
                                                            <select name="qiz_type" class="form-control">
                                                                <option value="0">Exam</option>
                                                                <option value="1">Practice</option>
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Correct answer score</label>
                                                            <input type='text' name='correct_answer_score' value="1"    class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Incorrect answer score</label>
                                                            <input type='text' name='incorrect_answer_score' value="0"    class="form-control" >
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <h3>Add questions</h3>
                                                <div class="form-group">
                                                    <div class="btn-group btn-group-sm">
                                                      <button type="button" id="automatic" class="btn btn-default" value="Automatically" data-container="body" data-toggle="popover" data-content='Automatically <span> <strong> System select questions randomly</strong><br />You just need to define category, level and number of questions you want in the quiz. </span>'>Automatically</button>
                                                      <button type="button" id="manual" class="btn btn-default" value="Manually" data-container="body" data-toggle="popover" data-content='anually <span><strong> Select questions manually</strong><br />You have to select questions one by one from question bank. </span>' >Manually</button>
                                                    </div>
                                                </div>
                                                <div style="clear:both;"></div>
                                                <div id="qauto" class="">
                                                    <div class="row">
                                                        <select name="cid" id='cid' style="width:50%" class="form-control col-sm-6" data-toggle="select2">
                                                            <option value="0">Select Category:</option>
                                                            <?php foreach($category as $value){ ?>
                                                            <option value="<?php echo $value->cid; ?>"> <?php echo $value->category_name; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <select name="did" id='did' style="width:50%" class="form-control col-sm-6"  data-toggle="select2">
                                                            <option value="0">Select Difficult Level:</option>
                                                            <?php foreach($difficult_level as $value){ ?>
                                                            <option value="<?php echo $value->did; ?>"> <?php echo $value->level_name; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group" style="margin-top:10px;">
                                                        <label>No. of Ques. to add in test</label>
                                                        <span id="no_of_question"></span> 
                                                    </div> 
                                                    
                                                </div>
                                                <div id="qman" class="hidden">
                                                    <h1> Click on 'Submit Quiz' button and you will go to question selection module.</h1>
                                                </div>
                                                <table id="formdata">
                                                    <tr>
                                                        <td valign="top"></td>
                                                        <td valign="top">
                                                            <input type="hidden" value="1" name="qselect" id="qselect">
                                                            <input type="submit" value="Submit Quiz" name="submit_quiz" class="btn btn-default">
                                                        </td>
                                                    </tr>
                                                </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- <div class="" >
                                    Add questions
                                    <br><br>
                                    <div class="category_box" id="qautobtn" style='background:#2f72b7;color:#ffffff;height:25px;' onClick="changetabqselection('qauto','qman','1');">
                                        <a class="tooltip" href="javascript:changetabqselection('qauto','qman','1');" id="qautobtna" style="color:#ffffff;opacity:1;">Automatically <span>
                                        <img class="callout" src="<?php echo base_url();?>images/callout_black.gif" /> <strong> System select questions randomly</strong><br />You just need to define category, level and number of questions you want in the quiz. </span></a></div>
                                        <div class="category_box"  id="qmanbtn" onClick="changetabqselection('qman','qauto','0');" style="height:25px;" ><a class="tooltip" href="javascript:changetabqselection('qman','qauto','0');" id="qmanbtna" style="color:#212121;opacity:1;">Manually <span> <img class="callout" src="<?php echo base_url();?>images/callout_black.gif" /> <strong> Select questions manually</strong><br />You have to select questions one by one from question bank. </span></a></div>
                                        <div style="clear:both;"></div>
                                        <br><br>
                                        <div id="qauto">
                                            <select name="cid" id='cid'>
                                                <option value="0">Select Category:</option>
                                                <?php foreach($category as $value){ ?>
                                                <option value="<?php echo $value->cid; ?>"> <?php echo $value->category_name; ?></option>
                                                <?php } ?>
                                            </select>
                                            <select name="did" id='did'>
                                                <option value="0">Select Difficult Level:</option>
                                                <?php foreach($difficult_level as $value){ ?>
                                                <option value="<?php echo $value->did; ?>"> <?php echo $value->level_name; ?></option>
                                                <?php } ?>
                                            </select><br>  No. of Ques. to add in test <span id="no_of_question"></span>
                                        </div>
                                        <div id="qman" style="display:none;visibility:hidden;">
                                            <h1> Click on 'Submit Quiz' button and you will go to question selection module.</h1>
                                        </div>
                                        <br>
                                        <table id="formdata">
                                            <tr>
                                                <td valign="top"></td>
                                                <td valign="top">
                                                    <input type="hidden" value="1" name="qselect" id="qselect">
                                                    
                                                    <input type="submit" value="Submit Quiz" name="submit_quiz" class="btn btn-default">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div> -->
                            </form>
                        </div>
                    </div>
                    <!-- /st-content-inner -->
                </div>
                <!-- /st-content -->
            </div>
        </div>
        <?php $this->view('common/footer');?>
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
    <script src="<?php echo base_url();?>editor/tiny_mce.js"></script>
    <script src="<?php echo base_url();?>public/js/basic.js"></script>

    

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

        $("#manual").click(function()
        {
            $("#qauto").addClass("hidden");
            $("#qman").removeClass("hidden");
            $("#qselect").val(0);

        });
        $("#automatic").click(function()
        {
            $("#qman").addClass("hidden");
            $("#qauto").removeClass("hidden");
            $("#qselect").val(1);

        });

    });
   
	function removeqids(){
		document.getElementById('removeqids').submit();
	}
	var selstatus="0";
	function selectall(noq){

		for(var i=1; i <= noq; i++)
		{
			var che="checkbox"+i;
			if(selstatus=="0"){
				document.getElementById(che).checked=true;
			}else{
				document.getElementById(che).checked=false;
			}
		}

		if(selstatus=="0"){
		selstatus="1";
		}else if(selstatus=="1"){
		selstatus="0";
		}
	}


	function sortby(limi,cid){
	   window.location="<?php echo site_url();?>/quiz/quiz/qbank/index/0/"+cid;
	}


    </script>
    <script type="text/javascript">
        
    tinyMCE.init({
        
    mode : "textareas",
            theme : "advanced",
            relative_urls:false,
        plugins: "jbimages",
        
    // ===========================================
    // PUT PLUGIN'S BUTTON on the toolbar
    // ===========================================
        

        
            theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
            theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
            theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
            theme_advanced_buttons4 : "jbimages,insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
            
            
        });

    </script>
   
</body>
</html>
