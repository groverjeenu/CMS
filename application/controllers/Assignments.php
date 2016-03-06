<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Assignments extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('assignment_model','assignment');
		$this->load->model('assignments_model','assignments');
		$this->load->model('courses_model','courses');
		$this->load->helper(array('form', 'url'));
	}
	
	public function index($courseid,$assgnid)
	{
		echo "You are viewing $assgnid lesson for $courseid";
	}

	public function listall($cid)
	{
		$data['page_title'] = "Course Assignments";
		$course = $this->courses->get_general($cid);
		$data['course'] = $course;
		$this->load->view('courses/assignments',$data);
	}

	public function add($courseid)
	{
		$data['courseid'] = $courseid;
		$data['page_title'] = 'Add Assignment';
		$this->load->library('upload');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','Lesson Title','trim|required|xss_clean');
		$this->form_validation->set_rules('description','Description','trim|xss_clean');
		$this->form_validation->set_rules('start_date','Release Date','trim|required|xss_clean');
		$this->form_validation->set_rules('deadline','Due Date','trim|required|xss_clean');
		$this->form_validation->set_rules('weightage','Weightage','trim|required|doubleval|less_than_equal_to[100]|greater_than_equal_to[0]|xss_clean');
		//$this->form_validation->set_rules('video','Lecture Video','trim|required');
		//$this->form_validation->set_rules('text','Lecture text','trim|required');

		if($this->form_validation->run() == FALSE)
		{
			$data['error'] = validation_errors();

			$this->load->view('assignments/add_assignment',$data);
		}
		else
		{
			$config['upload_path']          = './contents/assignments';
			$config['allowed_types']        = 'pdf|txt|gzip|gtar|zip|rar|tar|tgz|gz';
			$config['file_ext_tolower']		= TRUE;
			$config['encrypt_name']			= TRUE;
			$config['max_size']             = 100000;
			$this->upload->initialize($config);
            if ( !$this->upload->do_upload('text'))
            {
                $data['error'] = $this->upload->display_errors();
                $this->load->view('assignments/add_assignment',$data);
            }
            else
            {
            	unset($data['courseid']);
       			$assignment['cid'] = $courseid;
       			$assignment['title'] = $this->input->post('title');
       			$assignment['description'] = $this->input->post('description');
       			$assignment['filename'] = $this->upload->data('file_name');
       			$timestamp = strtotime($this->input->post('start_date'));
				$assignment['start_date'] = date("Y-m-d H:i:s", $timestamp);
				$assignment['deadline'] = date("Y-m-d H:i:s", strtotime($this->input->post('deadline')));
       			$assignment['weightage'] = $this->input->post('weightage');
       			$id = $this->assignment->add($assignment);
       			if(!$id)
				{
					$this->session->set_flashdata('type','danger');
					$this->session->set_flashdata('message','Some unexpected error ocuured');
					redirect('courses/'.$courseid."/assignments",'refresh');
				}
				else
				{
					$this->session->set_flashdata('type','success');
					$this->session->set_flashdata('message','Assignment successfully added');
					redirect('courses/'.$courseid."/assignments",'refresh');
				}
            }
		}
		//echo "You are adding lesson for $courseid";
	}

	public function edit($courseid,$assignmentid)
    {
    	$data['page_title'] = "Edit Assignment";
    	$data['courseid'] = $courseid;
    	$data['file_error'] = "";
    	$assignment = $this->assignments->get($assignmentid);
    	if(!$this->input->post())
		{
	    	if(!$assignment)
	    	{
	    		show_error("Some unexpected error occurred");
	    		exit(0);
	    	}
	    	$data['assignment'] = $assignment;
	    	$this->load->view('assignments/edit_assignment',$data);
    	}
    	else
    	{
    		$this->load->library('upload');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('title','Assignment Title','trim|required|xss_clean');
			$this->form_validation->set_rules('description','Description','trim|xss_clean');
			$this->form_validation->set_rules('start_date','Release Date','trim|required|xss_clean');
			$this->form_validation->set_rules('deadline','Due Date','trim|required|xss_clean');
			$this->form_validation->set_rules('weightage','Weightage','trim|required|doubleval|less_than_equal_to[100]|greater_than_equal_to[0]|xss_clean');
			$assignment = $this->input->post();
    		if($this->form_validation->run() == FALSE)
    		{
    			$data['assignment'] = $assignment;
    			$this->load->view('assignments/edit_assignment',$data);
    		}
    		else
    		{
    			if($this->isFileForUpload('text'))
				{
					$config['upload_path']          = './contents/assignments';
					$config['allowed_types']        = 'pdf|txt|gzip|gtar|zip|rar|tar|tgz|gz';
					$config['file_ext_tolower']		= TRUE;
					$config['encrypt_name']			= TRUE;
					$config['max_size']             = 100000;
					$this->upload->initialize($config);
		            if ( !$this->upload->do_upload('text'))
		            {
		            	$data['assignment'] = $assignment;
		                $data['file_error'] = $this->upload->display_errors();
		                $this->load->view('assignments/edit_assignment', $data);
		            }
		            else
		            {
		            	$textpath = APPPATH."/contents/assignments/".$assignment['filename'];
		            	unlink($textpath);
		            	$assignment['filename'] = $this->upload->data('file_name');
		            }
				}
				$assignment['title'] = $this->input->post('title');
				$assignment['description'] = $this->input->post('description');
				$timestamp = strtotime($this->input->post('start_date'));
				$assignment['start_date'] = date("Y-m-d H:i:s", $timestamp);
				$assignment['deadline'] = date("Y-m-d H:i:s", strtotime($this->input->post('deadline')));
				$assignment['weightage'] = $this->input->post('weightage');
				
    			$status = $this->assignments->edit($assignmentid,$assignment);
    			if(!$status)
				{
					$this->session->set_flashdata('type','danger');
					$this->session->set_flashdata('message','Some unexpected error ocuured');
					redirect('courses/'.$courseid."/assignments/edit/".$lectureid,"refresh");
				}
				else
				{
					$this->session->set_flashdata('type','success');
					$this->session->set_flashdata('message','Lecture successfully updated');
					redirect("courses/".$courseid."/assignments","refresh");
				}

    		}

    	}
    }

	public function edit__($courseid,$assgnid)
	{
		echo "You are editing $assgnid lesson for $courseid";
	}
	public function submission($aid)
	{
		$config['upload_path'] = './contents/submissions';
		$config['allowed_types']        = 'pdf|txt|gzip|gtar|zip|rar|tar|tgz|gz';
		$config['file_ext_tolower']		= TRUE;
		$config['encrypt_name']			= TRUE;
		$config['max_size']             = 100000;
		$this->load->library('upload');
		 $this->upload->initialize($config);


		//$data['error'] = 0;
		// $ass = $this->assignments->get($aid);
		// if($this->courses->check_if_enrolled($ass['cid']) == 0 )
		// {
		// 	redirect('display_view/'.$ass['cid'],"refresh");
		// }
		// $cid =$ass['cid'];
		// $query = $this->courses->get_course($cid);
		// $data['query'] = $query;
			

		$usr= $this->ion_auth->user()->row();
		$data['user']= (array)$usr;

		// $val = $this->courses->check_if_enrolled($cid);
		// $lectures = $this->courses->get_course_lectures($cid);
		// $data['val'] = $val;
		// $data['lectures'] = $lectures;
		// $data['assignments'] = $this->courses->get_course_assignments($cid);
		// $data['ass'] = $ass;
		// $data['sub'] = $this->assignments->get_user_submission($aid,$data['user']['id']);
		
		// echo $this->upload->data('file_name');

		if ( ! $this->upload->do_upload('userfile'))
		{
			$this->upload->display_errors();
			$error = array('error' => $this->upload->display_errors());
			//$data['error'] = 1;
			echo $error['error'];
			echo "error";

			//$this->load->view('assignment', $data);
		}
		else
		{
			$data['upload_data'] = $this->upload->data();
			$this->assignments->upload($aid,$this->upload->data('file_name'),$data['user']['id']);
			$data['sub'] = $this->assignments->get_user_submission($aid,$data['user']['id']);

			redirect('display_view/assignments/'.$aid, "refresh");
		}
	}

	private function isFileForUpload($name)
    {
    	return ($_FILES && $_FILES[$name]['name'] !== "");
    }
		
	
}
/* End of file '/Lessons.php' */
/* Location: ./application/controllers//Lessons.php */