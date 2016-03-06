<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Display_view extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->model('courses_model','courses');
		$this->load->model('lessons_model','lessons');
		$this->load->model('mail_model','mail');
		$this->load->model('admindash_model');
		$this->load->model('assignments_model','assignments');
		$this->load->model('lessons_model');
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');

		if(!$this->ion_auth->logged_in())
		{
			redirect("login","refresh");
		}

	}

	public function index()
	{
		#echo "Jeenu";
		

		$this->load->view('homepage');
		
	}

	

	
	
	

	public function dashboard()
	{
		if($this->ion_auth->in_group('faculty'))
		{
			//$this->load->view('fac');
			$id = $this->ion_auth->get_user_id();
			$courses = $this->courses->get_fac_courses($id);
			$data['courses'] = $courses;
			$ta = $this->courses->get_pending_approvals($id);
			$data['ta'] = $ta;
			//foreach ($courses as $key) {
				# code...
			//	echo $key['course_name'];
			//}
			$this->load->view('faculty_dashboard', $data);
		}
		else if($this->ion_auth->in_group('admin'))
		{
			$users = $this->admindash_model->get_faculty_approvals();
			$data['users'] = $users;
			$this->load->view('admin_dashboard', $data);
		}
		else if($this->ion_auth->in_group('course-admin'))
		{
			$id = $this->ion_auth->get_user_id();
			$query = $this->courses->getcourse_name($id);
			$data['query'] = $query;
			$this->load->view('csadmin_dashboard', $data);
		}
		else
		{
			$data['user_courses'] = $this->courses->get_user_courses();
			$data['all_courses'] = $this->courses->get_all_courses();
			$this->load->view('dashboard',$data);
		}
	}

	public function admin_helper_add($id)
	{
		$this->admindash_model->update_faculty($id);
		$this->ion_auth->remove_from_group(NULL, $id);
		$this->ion_auth->add_to_group(3, $id);
		redirect('dashboard');
	}

	public function admin_helper_rem($id)
	{
		$this->admindash_model->update_faculty($id);
		redirect('dashboard');
	}

	public function create_group()
	{
		$this->ion_auth->create_group('members');
		$this->ion_auth->create_group('admin');
		$this->ion_auth->create_group('faculty');
		$this->ion_auth->create_group('course-admin');

	}

	public function courselist()
	{
		
		$query = $this->courses->get_all_courses();

		/*$code = "<div class=\"panel panel-default paper-shadow\" data-z=\"0.5\">
              <div class=\"panel-body\">

                <div class=\"media media-clearfix-xs\">
                  <div class=\"media-left text-center\">
                    <div class=\"cover width-150 width-100pc-xs overlay cover-image-full hover margin-v-0-10\">
                      <span class=\"img icon-block height-130 bg-primary\"></span>
                      <span class=\"overlay overlay-full padding-none icon-block bg-primary\">
                        <span class=\"v-center\">
                            <i class=\"fa fa-css3\"></i>
                        </span>
                      </span>
                      <a href=\"app-student-course.html\" class=\"overlay overlay-full overlay-hover overlay-bg-white\">
                        <span class=\"v-center\">
                            <span class=\"btn btn-circle btn-primary btn-lg\"><i class=\"fa fa-graduation-cap\"></i></span>
                        </span>
                      </a>
                    </div>
                  </div>
                  <div class=\"media-body\">
                    <h4 class=\"text-headline margin-v-5-0\"><a href=\"app-student-course.html\">CSS Awesomeness with LESS Processing</a></h4>
                    <p class=\"small\">
                      <span class=\"fa fa-fw fa-star text-yellow-800\"></span>
                      <span class=\"fa fa-fw fa-star text-yellow-800\"></span>
                      <span class=\"fa fa-fw fa-star text-yellow-800\"></span>
                      <span class=\"fa fa-fw fa-star-o text-yellow-800\"></span>
                      <span class=\"fa fa-fw fa-star-o text-yellow-800\"></span>
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda aut debitis, ducimus, ea eaque earum eius enim eos explicabo facilis harum impedit natus nemo, nobis obcaecati omnis perspiciatis praesentium quaerat quas
                      quod reprehenderit sapiente temporibus vel voluptatem voluptates voluptatibus?</p>

                    <hr class=\"margin-v-8\" />
                    <div class=\"media v-middle\">
                      <div class="media-left">
                        <img src="images/people/50/guy-2.jpg" alt="People" class="img-circle width-40" />
                      </div>
                      <div class="media-body">
                        <h4><a href="">Adrian Demian</a>
                          <br/>
                        </h4>
                        Instructor
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>"*/
            $data['query'] = $query;

            
       
        $this->load->view('courselist',$data);
	}

	public function course($cid)
	{
		if($this->ion_auth->in_group('faculty'))
		{
			if(!$this->ion_auth->logged_in())
			{
				redirect("login","refresh");
			}

			$query = $this->courses->get_course($cid);
			$data['query'] = $query;
				

			$usr= $this->ion_auth->user()->row();
			$data['user']= (array)$usr;

			$val = $this->courses->check_if_enrolled($cid);
			$val_ca = $this->courses->is_ca($cid);
			
			$lectures = $this->courses->get_course_lectures($cid);
			$data['val'] = $val;
			$data['val_ca'] = $val_ca;
			$data['lectures'] = $lectures;
			$data['assignments'] = $this->courses->get_course_assignments($cid);
			$data['wt'] = $this->courses->get_total_weight($cid);
			$data['cid'] = $cid;
			

			$this->load->view('faculty_course',$data);	
		}

		else
		{
			if(!$this->ion_auth->logged_in())
			{
				redirect("login","refresh");
			}

			$query = $this->courses->get_course($cid);
			$data['query'] = $query;
				

			$usr= $this->ion_auth->user()->row();
			$data['user']= (array)$usr;

			$val = $this->courses->check_if_enrolled($cid);
			$val_ca = $this->courses->is_ca($cid);
			
			$lectures = $this->courses->get_course_lectures($cid);
			$data['val'] = $val;
			$data['val_ca'] = $val_ca;
			$data['lectures'] = $lectures;
			$data['quiz'] = $this->courses->get_course_quiz($cid);
			$data['assignments'] = $this->courses->get_course_assignments($cid);
			$data['grades_course']=$this->courses->get_course_grades($cid);
			$data['wt'] = $this->courses->get_total_weight($cid);

			$this->load->view('coursepage',$data);
		}

	}

	public function edit_profile()
	{	
		if(!$this->ion_auth->logged_in())
		{
			redirect("login","refresh");
		}

		$usr= $this->ion_auth->user()->row();
		$data['user']= (array)$usr;


		 //foreach($data['user'] as $k)echo $k."<br>";
		$this->load->view('edit_profile',$data);
	}

	public function lectures($id)
	{

		$lec = $this->lessons_model->get($id);
		if($this->courses->check_if_enrolled($lec['course_id']) == 0 )
		{
			$this->session->set_flashdata('item', 'You are not enrolled for the course');
			redirect('display_view/dashboard',"refresh");
		}

		//echo $id;
		$data['lec'] = $lec;
		$this->load->view('courselectures', $data);
	}
	public function enroll($cid)
	{
		$this->courses->enroll($cid);
		//$this->course($cid);
		redirect("display_view/course/".$cid,"refresh");
	}

	public function cadmindash()
	{
		$id = $this->ion_auth->get_user_id();
		$query = $this->courses->getcourse_name($id);
		$data['query'] = $query;
		//foreach ($query as $key ) {
			# code...
		//	echo $key['assignment_id'];
		//}
		$this->load->view('csadmin_dashboard', $data);
	}

	public function assigngrades($id)
	{
		$query = $this->courses->getsubmissions($id);
		$data['query'] = $query;
		$this->load->view('assign_grades', $data);
	}

	public function submit_grades($id)
	{
		$data['assignment_id'] = $id;
		$data['grade'] = $_POST['grade'];
		$data['penalty'] = $_POST['penalty'];
		$data['graded_by'] = $this->ion_auth->get_user_id();
		$this->courses->update_submissions($data);
		echo "Successfully Submitted";
		$id1 = $this->ion_auth->get_user_id();
		redirect('display_view/cadmindash/'.$id1, 'refresh');
	       			
	}
	public function get_query_courses()
	{
		header('Content-Type: application/x-json; charset=utf-8');
		$qry = $_POST['qry'];
		echo json_encode(array("data"=>$this->courses->get_query_courses($qry), "base_url"=> base_url() ));


	}

	public function assignments($aid)
	{
		$ass = $this->assignments->get($aid);
		if($this->courses->check_if_enrolled($ass['cid']) == 0 )
		{
			redirect('display_view/'.$ass['cid'],"refresh");
		}
		$cid =$ass['cid'];
		$query = $this->courses->get_course($cid);
		$data['query'] = $query;
			

		$usr= $this->ion_auth->user()->row();
		$data['user']= (array)$usr;

		$val = $this->courses->check_if_enrolled($cid);
		$lectures = $this->courses->get_course_lectures($cid);
		$data['val'] = $val;
		$data['lectures'] = $lectures;
		$data['assignments'] = $this->courses->get_course_assignments($cid);
		$data['ass'] = $ass;
		$data['error'] = 0;
		$data['sub'] = $this->assignments->get_user_submission($aid,$data['user']['id']); 
		$this->load->view('assignment',$data);





	}

	public function facultydash()
	{
		if($this->ion_auth->in_group('faculty'))
		{
			$id = $this->ion_auth->get_user_id();
			$courses = $this->courses->get_fac_courses($id);
			$data['courses'] = $courses;
			$ta = $this->courses->get_pending_approvals($id);
			$data['ta'] = $ta;
			//foreach ($courses as $key) {
				# code...
			//	echo $key['course_name'];
			//}
			$this->load->view('faculty_dashboard', $data);
		}
		else
		{
			redirect('login', 'refresh');
		}
	}


	public function enroll_ca($cid)
	{
		$this->courses->enroll_ca($cid);
		//$this->course($cid);
		//$this->load->view('coursepage')
		redirect("display_view/course/".$cid,"refresh");
	}

	public function course_admin_add($id)
	{
		$this->courses->update_ca($id);
		$this->ion_auth->remove_from_group(NULL, $id);
		$this->ion_auth->add_to_group(4, $id);
		redirect('display_view/facultydash', 'refresh');
	}

	public function forgot_password()
	{
		echo "Password link sent to your email address";
	}
	public function grades()
	{
		if(!$this->ion_auth->logged_in())
		{
			redirect("login","refresh");
		}

		$query = $this->courses->get_user_courses();
		$usr= $this->ion_auth->user()->row();
			$data['user']= (array)$usr;
		//$data['query'] = $query;
			
		foreach($query as $cidd)
		{
			$cid = $cidd['cid'];
			

			// $val = $this->courses->check_if_enrolled($cid);
			// $val_ca = $this->courses->is_ca($cid);
			
			// $lectures = $this->courses->get_course_lectures($cid);
			// $data['val'] = $val;
			// $data['val_ca'] = $val_ca;
			// $data['lectures'] = $lectures;
			$data['data'][$cid]['course'] = $this->courses->get_course($cid);
			$data['data'][$cid]['assignments'] = $this->courses->get_course_assignments($cid);
			$data['data'][$cid]['grades_course']=$this->courses->get_course_grades($cid);
			$data['data'][$cid]['wt'] = $this->courses->get_total_weight($cid);
		}

		
		$this->load->view('grades',$data);
	}


	public function composemail($cid)
	{
		if($this->ion_auth->in_group('faculty'))
		{
			$fac = $this->mail->getstumails($cid);
			$user = $this->mail->getuseremail();
			$data['fac'] = $fac;
			$data['user'] = $user;
			$this->load->view('mail_compose_fac', $data);
		}	
		else
		{	
			$fac = $this->mail->getfacmails($cid);
			$user = $this->mail->getuseremail();
			$data['fac'] = $fac;
			$data['user'] = $user;
			$this->load->view('mail_compose', $data);
		}
	}

	public function sendmail()
	{
		$data['sender_id'] = $this->ion_auth->get_user_id();
		$data['body'] = htmlspecialchars($_POST['textarea']);
		$data['is_read'] = 0;
		date_default_timezone_set('Asia/Kolkata');
		$data['date'] = date('Y-m-d H:i:s');
		$this->mail->send_mail($data);

		foreach ($_POST['select2'] as $key) {
			$sender = $this->mail->getid($data);
			$this->mail->update_receiver($sender['mail_id'], $key);
		}
		redirect('dashboard', 'refresh');
	}

	public function inbox()
	{
		$mail = $this->mail->mail_data();
		$data['mail'] = $mail;
		$this->load->view('inbox', $data);
	}

	public function sent_mail()
	{
		$mail = $this->mail->mail_data_sent();
		$data['mail'] = $mail;
		$this->load->view('sent_mail', $data);
	}

	public function view_profile()
	{
		if(!$this->ion_auth->logged_in())
		{
			redirect("login","refresh");
		}

		$usr= $this->ion_auth->user()->row();
		$data['user']= (array)$usr;


		 //foreach($data['user'] as $k)echo $k."<br>";
		$this->load->view('view_profile',$data);
	}

	

} 
