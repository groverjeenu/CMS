<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Lessons extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('lessons_model','lesson');
	}
	
	public function index($courseid,$lessonid)
	{
		echo "You are viewing $lessonid lesson for $courseid";
	}

	public function add($courseid)
	{
		$data['courseid'] = $courseid;
		$this->load->library('upload');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','Lesson Title','trim|required|xss_clean');
		$this->form_validation->set_rules('description','Description','trim|required|xss_clean');
		//$this->form_validation->set_rules('video','Lecture Video','trim|required');
		//$this->form_validation->set_rules('text','Lecture text','trim|required');

		if($this->form_validation->run() == FALSE)
		{
			$data['error'] = validation_errors();

			$this->load->view('lessons/add_lesson',$data);
		}
		else
		{
			if ( !$this->upload->do_upload('video'))
            {
                $data['error'] = $this->upload->display_errors();
                $this->load->view('lessons/add_lesson', $data);
            }
            else
            {
            	echo "File uploaded successfully";
            	echo "<br>Name = ".$this->upload->data('file_name');

            }

		}
		//echo "You are adding lesson for $courseid";
	}

	public function edit($courseid,$lessonid)
	{
		echo "You are editing $lessonid lesson for $courseid";
	}
		
	
}
/* End of file '/Lessons.php' */
/* Location: ./application/controllers//Lessons.php */
