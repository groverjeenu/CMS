<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Courses_model','courses');
		if(!$this->ion_auth->logged_in())
		{
			redirect('login',"refresh");
		}
	}
	
	public function index()
	{

	}
		
	public function get($id)
	{
		$id = intval($id);
		if($id!=0)
		{
			$this->load->model('courses_model');
			$data['content'] = $this->courses_model->get($id);
			$this->load->view('courses_view', $data);
		}
		else
		{
			redirect(site_url(),'refresh');
		}
	}
	
	public function add()
	{
		/*if(!$this->ion_auth->in_group('faculty'))
		{
			show_error("Access Forbidden",403);
			exit(0);
		}*/
		$data['page_title'] = "Add Course";
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','Course Title','trim|required|xss_clean');
		$this->form_validation->set_rules('description','Description','trim|required|xss_clean');
		$this->form_validation->set_rules('syllabus','Syllabus','trim|required|xss_clean');
		$this->form_validation->set_rules('is_key',"key exists","trim|required|in_list[enabled,disabled]|xss_clean");
		$this->form_validation->set_rules('course_key',"course key","trim|callback_course_key_check|xss_clean");

		if($this->form_validation->run()===FALSE)
		{
			
			$data['file_error'] = "";
 			$this->load->view('courses/add_course', $data);
		}
		else
		{
			$icon = $this->input->post('course_icon');
			if(isset($icon))
			{
				$this->load->library('upload');
				$config['upload_path']          = './contents/images/course_icons';
				$config['allowed_types']        = 'jpg|png|gif|jpeg';
				$config['file_ext_tolower']		= TRUE;
				$config['encrypt_name']			= TRUE;
				$config['max_size']             = 5000;
				$this->upload->initialize($config);
	            if ( !$this->upload->do_upload('course_icon'))
	            {
	                $data['file_error'] = $this->upload->display_errors();
	                $this->load->view('courses/add_course', $data);
	                exit(0);
	            }
	            else
	            {
	            	$data['imagename'] = $this->upload->data('file_name');
	            }
	        }
			log_message('DEBUG','some info');
			$data_insert = $this->input->post();
			$data = $this->courses->add($this->input->post());
			$id = $data['id'];
			if(is_null($id))
			{
				$this->session->set_flashdata('type','danger');
				$this->session->set_flashdata('message','Some unexpected error ocuured');
				$data['page_title'] = "Add Course";
				$this->load->view('courses/add_course', $data);
			}
			else
			{
				$this->session->set_flashdata('type','success');
				$this->session->set_flashdata('message','Course successfully created');
				redirect("courses/add");
				//$this->load->view('courses/edit_course', array('hash' => $course_hash));
				//redirect('courses/edit/'.$course_hash,'refresh');
			}
		}
	}

	public function edit_general($courseid)
    {
    	/*if(!$this->ion_auth->in_group('faculty'))
		{
			show_error("Access Forbidden",403);
			exit(0);
		}*/
    	$course = $this->courses->get_general($courseid);
    	if(!$course)
    	{
    		show_error("Some unexpected error occurred");
    		exit(0);
    	}
    	if(isset($course['course_key']))
    		$course['is_key'] = 'enabled';
    	$data['course'] = $course;
    	$data['file_error'] = "";
    	$data['page_title'] = "Edit Course";
     	/*$course['id'] = $courseid;
    	$course['name'] = "This is a course";
    	$course['description'] = "This is a desciption";
    	$course['syllabus'] = "This is a syllabus";*/
    	$this->load->view('courses/edit_course',$data);
    }

    public function edit($courseid)
    {
    	/*if(!$this->ion_auth->in_group('faculty'))
		{
			show_error("Access Forbidden",403);
			exit(0);
		}*/
    	$course = $this->courses->get_minimal($courseid);
    	if(isset($course['course_key']))
    		$course['is_key'] = 'enabled';
    	$data['course'] = $course;
     	/*$course['id'] = $courseid;
    	$course['name'] = "This is a course";
    	$course['description'] = "This is a desciption";
    	$course['syllabus'] = "This is a syllabus";*/
    	$this->load->view('courses/edit_course',$data);
    }

    public function course_key_check($str,$is_key)
    {
    	$is_key = $this->input->post('is_key');
        if ($is_key== 'enabled')
        {
        	if(!isset($str) || is_null($str))
        	{
        		$this->form_validation->set_message('course_key_check', 'The {field} field can not be the empty');
            	return FALSE;
        	}
        	else if(strlen($str) < 6 || strlen($str) > 12)
        	{
        		$this->form_validation->set_message('course_key_check', 'The {field} field must be within 6 to 12 characters');
            	return FALSE;
        	}
        	return TRUE;   
        }
        else
        {
            return TRUE;
        }
    }

    public function view_quiz()
    {
    	$this->load->view('quiz_1/quiz_access');
    }
}
/* End of file '/Courses.php' */
/* Location: ./application/controllers//Courses.php */
