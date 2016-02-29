<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Courses_model','courses');
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
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','Course Title','trim|required|xss_clean');
		$this->form_validation->set_rules('description','Description','trim|required|xss_clean');
		$this->form_validation->set_rules('syllabus','Syllabus','trim|required|xss_clean');
		$this->form_validation->set_rules('is_key',"key exists","trim|required|in_list[enabled,disabled]|xss_clean");
		$this->form_validation->set_rules('course_key',"course key","trim|callback_course_key_check|xss_clean");

		if($this->form_validation->run()===FALSE)
		{
			log_message('DEBUG','ERror in validation'.validation_errors());

			$this->load->view('courses/add_course');
		}
		else
		{
			log_message('DEBUG','some info');
			$data = $this->courses->add($this->input->post());
			$id = $data['id'];
			$course_hash = $data['hash'];
			if(is_null($id))
			{
				$this->session->set_flashdata('message','Some unexpected error ocuured');
				$this->load->view('courses/add_course');
			}
			else
			{
				$this->session->set_flashdata('message','Course successfully created');
				$this->session->set_flashdata('hash',$course_hash);

				//$this->load->view('courses/edit_course', array('hash' => $course_hash));
				redirect('courses/edit/'.$course_hash,'refresh');
			}	
		}
	}

    public function edit($courseid)
    {
    	/*if(!$this->ion_auth->in_group('faculty'))
		{
			show_error("Access Forbidden",403);
			exit(0);
		}*/
    	//$course = $this->courses->get_minimal($courseid);
    	$course['id'] = $courseid;
    	$course['name'] = "This is a course";
    	$course['description'] = "This is a desciption";
    	$course['syllabus'] = "This is a syllabus";
    	$this->load->view('courses/edit_course',array('course'=>$course));
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
}
/* End of file '/Courses.php' */
/* Location: ./application/controllers//Courses.php */
