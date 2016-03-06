<!-- Fixed navbar -->
<?php
$user = $this->ion_auth->user()->row_array();
//print_r($user);
?>
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
          </ul>
        </li>
        <li class="dropdown">
          <a href="<?php echo base_url();?>quiz/qbank" class="dropdown-toggle" data-toggle="dropdown">Question Bank <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>quiz/qbank">All Questions</a></li>
            <li><a href="<?php echo base_url();?>quiz/categories">Categories</a></li>
            <li><a href="<?php echo base_url();?>quiz/difficultlevel">Difficulty Levels</a></li>
            <li><a href="<?php echo base_url();?>quiz/qbank/add_new">Add Question</a></li>
          </ul>
        </li>
        <!--<li class="dropdown active">
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
        <a href="user/<?php echo $user['username']?>">
          <img src="<?php echo base_url()."contents/images/people/".$user['image'];?>" alt="<?php echo $user['username']?>" class="img-circle width-80" />
        </a>
        <h4 class="text-display-1 margin-none"><?php echo $user['first_name']." ".$user['last_name']?></h4>
      </div>
    </div>
    <ul class="sidebar-menu">
      <li><a href="<?php echo base_url()?>dashboard"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
      <li><a href="<?php echo base_url()?>inbox"><i class="fa fa-paper-plane"></i><span>Messages</span></a></li>
      <li><a href="<?php echo base_url()?>quiz/qbank"><i class="fa fa-bank"></i><span>My Question Bank</span></a></li>
      <li><a href="<?php echo base_url()?>logout"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
    </ul>
  </div>
</div>