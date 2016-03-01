<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Assignments extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('assignment_model','assignment');
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
		
	
}
/* End of file '/Lessons.php' */
/* Location: ./application/controllers//Lessons.php */