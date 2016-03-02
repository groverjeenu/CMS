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

	public function add($courseid)
	{
		$data['courseid'] = $courseid;
		$this->load->library('upload');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','Lesson Title','trim|required|xss_clean');
		$this->form_validation->set_rules('description','Description','trim|xss_clean');
		$this->form_validation->set_rules('start','Release Date','trim|required|xss_clean');
		$this->form_validation->set_rules('end','Due Date','trim|required|xss_clean');
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
       			$data['cid'] = $courseid;
       			$data['title'] = $this->input->post('title');
       			$data['description'] = $this->input->post('description');
       			$data['filename'] = $this->upload->data('file_name');
       			$data['start_date'] = $this->input->post('start');
       			$data['deadline'] = $this->input->post('end');
       			$data['weightage'] = $this->input->post('weightage');
       			$id = $this->assignment->add($data);
            	echo "File uploaded successfully";
            	echo "<br>textName = ".$this->upload->data('file_name');
            	echo "<br>Id if lecture = ".$id;


            }
	        

		}
		//echo "You are adding lesson for $courseid";
	}

	public function edit($courseid,$assgnid)
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
		
	
}
/* End of file '/Lessons.php' */
/* Location: ./application/controllers//Lessons.php */