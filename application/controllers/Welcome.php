<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

		

		

		

	}
	public function index()
	{
		$this->load->view('homepage');
		#$this->load->view('welcome_message');
		/*$ans  = $this->db->query("select * from migrations");
		foreach ($ans->result_array() as $key ) {
			foreach($key as $i)
				echo $i."\t";
			echo "<br>";
		}*/
		
		

	}

	public function test($var)
	{	
		$uri = base_url(uri_string());
		$pos = strpos($uri,"/js/");
		$str = substr($uri, $pos+4);
		redirect("public/js/".$str);

	}

	public function dash()
	{
		$this->load->view('dashboard');
	}

	public function admindash()
	{
		$this->load->view('admin_dashboard');
	}

	public function edit_courses()
	{
		$this->load->model('Courses_model','courses');
		$this->load->view('courses/edit_course');
	}

	public function courselist()
	{
		$this->load->view('courselist');
	}

	public function usercourselist()
	{
		$this->load->view('usercourselist');
	}
	
	public function coursepage()
	{
		$this->load->view('coursepage');
	}

	public function courselectures()
	{
		$this->load->view('courselectures');
	}
	
	public function videotest()
	{
		$this->load->view('video_test');
	}

	public function edit()
	{
		$this->load->view('edit_profile');
	}

	public function viewgrades()
	{
		$this->load->view('view_grades');
	}
	public function cadmindash()
	{
		$this->load->view('csadmin_dashboard');
	}
	public function assigngrades()
	{
		$this->load->view('assign_grades');
	}

	public function mail()
	{
		$this->load->view('mail_compose');
	}
	public function trymail()
	{
		$from_email = 'admin@incourse.com';
		$to_email = "prabhat.agr2010@gmail.com";
		$subject = 'Verify Your Account';
		//$verify_link = base_url().'user/verifyAccount/'.md5($to_email.$this->secret.$rand_num);
		$message = "This is magic";
		//log_message('DEBUG',"EMAIL LINK:".$verify_link);
		//email configuration
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' =>'10.3.100.244',
			'smtp_port' => 25,
			'smtp_user' => "",
			'smtp_pass' => '',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE,
			'newline' => "\r\n"
			);

		//send email
		$this->email->initialize($config);
		$this->email->from($from_email, 'The KGTS');
		$this->email->to($to_email);
		$this->email->subject($subject);
		$this->email->message($message);
		if($this->email->send())
		echo "Sucess";
	}


	public function parent_login()
	{
		$this->load->view('parent_login');
	}

	public function view_ward_grades()
	{
		$this->form_validation->set_rules('ward_email', 'ward_email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('passkey', 'passkey', 'trim|required|xss_clean');
		//echo $this->input->post('identity')." ".$this->input->post('password');
		if ($this->form_validation->run() == true)
		{

				$usr = $this->db->query("select * from users where email = ?",$this->input->post('ward_email'))->row();
				$datas = (array)$usr;

				if($datas && $datas != NULL && $datas['parent_key'] == $this->input->post('passkey'))
				{

					$query = $this->courses->get_user_courses($datas);
					//$usr= $this->ion_auth->user()->row();
						$data['user']= (array)$usr;
						$data['data'] = array();
						//echo $datas['email'];
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
						$data['data'][$cid]['course'] = $this->courses->get_course($cid);						;
						$data['data'][$cid]['assignments'] = $this->courses->get_course_assignments($cid);
						$data['data'][$cid]['grades_course']=$this->courses->get_course_grades($cid,$datas);
						$data['data'][$cid]['wt'] = $this->courses->get_total_weight($cid);
					}

				
					$this->load->view('ward_grades',$data);
				}
				else
				{
					redirect("welcome/parent_login","refresh");
					//echo ":hgfg";
				}

		}
		else
			redirect("welcome/parent_login","refresh");
			//echo " bhh";

		
	}
}
