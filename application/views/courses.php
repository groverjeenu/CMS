<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-tap-highlight" content="no">
		<meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
		<meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
		<title>Courses | Incourse</title>
		<!-- Favicons-->
		<link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
		<!-- Favicons-->
		<link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
		<!-- For iPhone -->
		<meta name="msapplication-TileColor" content="#00bcd4">
		<meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
		<!-- For Windows Phone -->
		<!-- CORE CSS-->
		<link href="<?php echo base_url(); ?>public/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="<?php echo base_url(); ?>public/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
		<!-- CSS for full screen (Layout-2)-->
		<link href="<?php echo base_url(); ?>public/css/style-fullscreen.css" type="text/css" rel="stylesheet" media="screen,projection">
		<!-- Custome CSS-->
		<link href="<?php echo base_url(); ?>public/css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
		<!-- CSS for full screen (Layout-2)-->
		<link href="<?php echo base_url(); ?>public/css/style-fullscreen.css" type="text/css" rel="stylesheet" media="screen,projection">
		<!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
		<link href="<?php echo base_url(); ?>public/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="<?php echo base_url(); ?>public/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="<?php echo base_url(); ?>public/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="css/app/app.css" rel="stylesheet">
	</head>
	<body>
		<?php $this->view('addons/header.php'); ?>
		<!-- START MAIN -->
		<div id="main">
			<!-- START WRAPPER -->
			<div class="wrapper">
				<div class="st-pusher" id="content">
					<!-- sidebar effects INSIDE of st-pusher: -->
					<!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->
					<!-- this is the wrapper for the content -->
					<div class="st-content">
						<!-- extra div for emulating position:fixed of the menu -->
						<div class="st-content-inner padding-none">
							<div class="container-fluid">
								<div class="page-section">
									<h1 class="text-display-1">Create New Course</h1>
								</div>
								<!-- Tabbable Widget -->
								<div class="tabbable paper-shadow relative" data-z="0.5">
									<!-- Tabs -->
									<ul class="nav nav-tabs">
										<li class="active"><a href="app-instructor-course-edit-course.html"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Course</span></a></li>
										<li><a href="app-instructor-course-edit-meta.html"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Meta</span></a></li>
										<li><a href="app-instructor-course-edit-lessons.html"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Lessons</span></a></li>
									</ul>
									<!-- // END Tabs -->
									<!-- Panes -->
									<div class="tab-content">
										<div id="course" class="tab-pane active">
											<form action="app-instructor-course-edit-course.html">
												<div class="form-group form-control-material">
													<input type="text" name="title" id="title" placeholder="Course Title" class="form-control used" value="Basics of HTML" />
													<label for="title">Title</label>
												</div>
												<div class="form-group">
													<label for="description">Description</label>
													<textarea name="description" id="description" cols="30" rows="10" class="summernote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consectetur dignissimos itaque nesciunt nostrum, provident saepe similique. Delectus dicta distinctio quibusdam velit veniam? Aperiam cum dignissimos doloremque officiis
													quisquam velit!</textarea>
												</div>
											</form>
											<div class="text-right">
												<a href="app-instructor-course-edit-course.html#" class="btn btn-primary">Save</a>
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
				
				<?php $this->view('addons/footer.php'); ?>
			</body>
		</html>