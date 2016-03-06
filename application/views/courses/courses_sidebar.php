<!-- Fixed navbar -->
<?php $firstname = "Prabhat"; $lastname="Agarwal"; $username = "prabhat"; $imagehash = "lop";
$user = (array)$this->ion_auth->user()->row();
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
            <a class="svg" href="dashboard.html"><?php echo $this->config->item('sitename'); ?>
            </a>
          </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-nav">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="app-instructor-course-edit-course.html#" class="dropdown-toggle" data-toggle="dropdown">Forum <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="app-forum.html">Forum Home</a></li>
                <li><a href="app-forum-category.html">Forum Category</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="app-instructor-course-edit-course.html#" class="dropdown-toggle" data-toggle="dropdown">Courses <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="app-directory-grid.html">Courses Grid</a></li>
                <li><a href="app-directory-list.html">Courses List</a></li>
                <li><a href="app-student-course.html">Course Details</a></li>
              </ul>
            </li>
            <li class="dropdown">
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
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-nav-bordered navbar-right">
            <!-- notifications -->
            <li class="dropdown notifications updates">
              <a href="app-instructor-course-edit-course.html#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="badge badge-primary">4</span>
              </a>
              <ul class="dropdown-menu" role="notification">
                <li class="dropdown-header">Notifications</li>
                <li class="media">
                  <div class="pull-right">
                    <span class="label label-success">New</span>
                  </div>
                  <div class="media-left">
                    <img src="<?php echo base_url();?>public/images/people/50/guy-2.jpg" alt="people" class="img-circle" width="30">
                  </div>
                  <div class="media-body">
                    <a href="app-instructor-course-edit-course.html#">Adrian D.</a> posted <a href="app-instructor-course-edit-course.html#">a photo</a> on his timeline.
                    <br/>
                    <span class="text-caption text-muted">5 mins ago</span>
                  </div>
                </li>
                <li class="media">
                  <div class="pull-right">
                    <span class="label label-success">New</span>
                  </div>
                  <div class="media-left">
                    <img src="<?php echo base_url();?>public/images/people/50/guy-6.jpg" alt="people" class="img-circle" width="30">
                  </div>
                  <div class="media-body">
                    <a href="app-instructor-course-edit-course.html#">Bill</a> posted <a href="app-instructor-course-edit-course.html#">a comment</a> on Adrian's recent <a href="app-instructor-course-edit-course.html#">post</a>.
                    <br/>
                    <span class="text-caption text-muted">3 hrs ago</span>
                  </div>
                </li>
                <li class="media">
                  <div class="media-left">
                    <span class="icon-block s30 bg-grey-200"><i class="fa fa-plus"></i></span>
                  </div>
                  <div class="media-body">
                    <a href="app-instructor-course-edit-course.html#">Mary D.</a> and <a href="app-instructor-course-edit-course.html#">Michelle</a> are now friends.
                    <p>
                      <span class="text-caption text-muted">1 day ago</span>
                    </p>
                    <a href="app-instructor-course-edit-course.html">
                      <img class="width-30 img-circle" src="<?php echo base_url();?>public/images/people/50/woman-6.jpg" alt="people">
                    </a>
                    <a href="app-instructor-course-edit-course.html">
                      <img class="width-30 img-circle" src="<?php echo base_url();?>public/images/people/50/woman-3.jpg" alt="people">
                    </a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- // END notifications -->
            <!-- User -->
            <li class="dropdown">
              <a href="app-instructor-course-edit-course.html#" class="dropdown-toggle user" data-toggle="dropdown">
                <img src="<?php echo base_url()."contents/images/people/$imagehash";?>" alt="<?php echo $username?>" class="img-circle" width="40" /> <?php echo $username?> <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="app-student-profile.html">Account</a></li>
                <li><a href="app-student-billing.html">Billing</a></li>
                <li><a href="login.html">Logout</a></li>
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