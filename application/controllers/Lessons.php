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
		$this->form_validation->set_rules('visibility','Visibility','trim|xss_clean');
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
            	$data['videoname'] = $this->upload->data('file_name');
            	$config['upload_path']          = './contents/texts';
				$config['allowed_types']        = 'pdf|txt';
				$config['file_ext_tolower']		= TRUE;
				$config['encrypt_name']			= TRUE;
				$config['max_size']             = 100000;
				$this->upload->initialize($config);
	            if ( !$this->upload->do_upload('text'))
	            {

	                $data['error'] = $this->upload->display_errors();
	                $this->load->view('lessons/add_lesson', $data);
	            }
	            else
	            {
	            	unset($data['courseid']);
	       			$data['course_id'] = $courseid;
	       			$data['name'] = $this->input->post('title');
	       			$data['description'] = $this->input->post('description');
	       			$data['textname'] = $this->upload->data('file_name');
	       			if($this->input->post('visibility') == "on")
	       				$data['is_public'] = TRUE;
	       			else
	       				$data['is_public'] = FALSE;
	       			$id = $this->lesson->add($data);
	            	echo "File uploaded successfully";
	            	echo "<br>VideoName = ".$data['videoname'];
	            	echo "<br>textName = ".$this->upload->data('file_name');
	            	echo "<br>Visi = ".$this->input->post('visibility');
	            	echo "<br>Id if lecture = ".$id;


	            }
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
