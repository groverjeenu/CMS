<!-- Fixed navbar -->
<?php
$user = $this->ion_auth->user()->row_array();
$courseid = $course['cid'];?>
<div class="navbar navbar-size-large navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="app-instructor-course-edit-course.html#sidebar-menu" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-ellipsis-v"></i></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <div class="navbar-brand navbar-brand-primary navbar-brand-logo navbar-nav-padding-left">
        <a class="svg" href="dashboard.html">
          <!--               <img src="<?php echo base_url()."public/img/site_icon.jpg";?>" alt="<?php echo $this->config->item('sitename'); ?>" class="img-circle" width="5"/>
          -->              <?php echo $this->config->item('sitename'); ?>
        </a>
      </div>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main-nav">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="<?php echo base_url();?>display_view/inbox" class="dropdown-toggle" data-toggle="dropdown">Inbox <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>inbox">Inbox Home</a></li>
            <li><a href="<?php echo base_url();?>display_view/sent_mail">Sent Mail</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="app-instructor-course-edit-course.html#" class="dropdown-toggle" data-toggle="dropdown">Courses <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>courses/add">Add Course</a></li>
            <li><a href="<?php echo base_url();?>display_view/sent_mail">Courses List</a></li>
            <li><a href="<?php echo base_url();?>quiz/qbank">Question Bank</a></li>
          </ul>
        </li>
        <!-- <li class="dropdown">
          <a href="app-instructor-course-edit-course.html#" class="dropdown-toggle" data-toggle="dropdown">Student <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="app-student-dashboard.html">Dashboard</a></li>
            <li><a href="app-student-courses.html">My Courses</a></li>
            <li><a href="app-take-course.html">Take Course</a></li>
            <li><a href="app-course-forums.html">Course Forums</a></li>
            <li><a href="app-take-quiz.html">Take Quiz</a></li>
            <li><a href="app-student-profile.html">Edit Profile</a></li>
            <li><a href="app-student-billing.html">Edit Billing</a></li>
            <li><a href="app-student-messages.html">Messages</a></li>
          </ul>
        </li>
        <li class="dropdown active">
          <a href="app-instructor-course-edit-course.html#" class="dropdown-toggle" data-toggle="dropdown">Instructor <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="app-instructor-dashboard.html">Dashboard</a></li>
            <li><a href="app-instructor-courses.html">My Courses</a></li>
            <li class="active"><a href="app-instructor-course-edit-course.html">Edit Course</a></li>
            <li><a href="app-instructor-earnings.html">Earnings</a></li>
            <li><a href="app-instructor-statement.html">Statement</a></li>
            <li><a href="app-instructor-profile.html">Edit Profile</a></li>
            <li><a href="app-instructor-billing.html">Edit Billing</a></li>
            <li><a href="app-instructor-messages.html">Messages</a></li>
          </ul>
        </li> -->
      </ul>
      <ul class="nav navbar-nav navbar-nav-bordered navbar-right">
        <!-- // END notifications -->
        <!-- User -->
        <li class="dropdown">
          <a href="app-instructor-course-edit-course.html#" class="dropdown-toggle user" data-toggle="dropdown">
            <img src="<?php echo base_url()."contents/images/people/".$user['image'];?>" alt="<?php echo $user['username']?>" class="img-circle" width="40" /> <?php echo $user['username']?> <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url()."user/".$user['username'];?>">Profile</a></li>
            <li><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
            <li><a href="<?php echo base_url();?>logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
</div>
<!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
<div class="sidebar left sidebar-size-3 sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu" data-type="collapse">
  <div data-scrollable>
    <div class="sidebar-block">
      <div class="profile">
        <a href="<?php echo base_url()."courses/".$courseid;?>">
          <img src="<?php echo base_url()."contents/images/course_icons/".$course['imagename'];?>" alt="<?php echo $course['course_name']?>" class="img-circle width-80" />
        </a>
        <h4 class="text-display-1 margin-none"><?php echo $course['course_name']?></h4>
      </div>
    </div>
    <ul class="sidebar-menu">
      <li id="li_overview"><a href="<?php echo base_url()."courses/".$courseid;?>"><i class="md-home"></i><span>Overview</span></a></li>
      <li id="li_general"><a href="<?php echo base_url()."courses/edit/".$courseid;?>"><i class="md-home"></i><span>General</span></a></li>
      <li id="li_meta"><a href="<?php echo base_url()."courses/edit/".$courseid."/meta";?>"><i class="md-description"></i><span>MetaData</span></a></li>
      <li id="li_lectures"><a href="<?php echo base_url()."courses/".$courseid."/lectures";?>"><i class="md-video-collection"></i><span>Lectures</span></a></li>
      <li id="li_assignments"><a href="<?php echo base_url()."courses/".$courseid."/assignments";?>"><i class="md-assignment"></i><span>Assignments</span></a></li>
      <li id="li_materials"><a href="<?php echo base_url()."courses/".$courseid."/materials";?>"><i class="md-my-library-books"></i><span>Course Materials</span></a></li>
      <li id="li_forum"><a href="<?php echo base_url()."courses/".$courseid."/forum";?>"><i class="md-forum"></i><span>Forum</span></a></li>
      <li id="li_students"><a href="<?php echo base_url()."courses/".$courseid."/students";?>"><i class="md-account-child"></i><span>Students/Members</span></a></li>
      <li id="li_notifications"><a href="<?php echo base_url()."courses/".$courseid."/notfications";?>"><i class="md-notifications"></i><span>Notifications</span></a></li>
    </ul>
  </div>
</div>