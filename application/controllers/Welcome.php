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
		$from_email = 'mutiny@kgts.in';
		$to_email = "prabhat.agr2010@gmail.com";
		$subject = 'Verify Your Account';
		//$verify_link = base_url().'user/verifyAccount/'.md5($to_email.$this->secret.$rand_num);
		$message = "This is magic";
		//log_message('DEBUG',"EMAIL LINK:".$verify_link);
		//email configuration
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' =>'ssl://cp-11.webhostbox.net ',
			'smtp_port' => 465,
			'smtp_user' => $from_email,
			'smtp_pass' => 'WEQg,]9&t.00mAh',
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
		echo $this->email->send();
	}
}
