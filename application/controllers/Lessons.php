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
            	$data['video'] = $this->upload->data('file_name');
            	$config['upload_path']          = './contents/texts';
				$config['allowed_types']        = 'pdf|txt|gzip|gtar|zip|rar|tar|tgz|gz';
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

	       			$data['title'] = $this->input->post('title');
	       			$data['description'] = $this->input->post('description');
	       			$data['text'] = $this->upload->data('file_name');
	       			if($this->input->post('visibility') == "on")
	       				$data['is_public'] = TRUE;
	       			else
	       				$data['is_public'] = FALSE;
	       			$id = $this->lesson->add($data);
	       			/*if(!$id)
					{
						$this->session->set_flashdata('type','danger');
						$this->session->set_flashdata('message','Some unexpected error ocuured');
						redirect('courses/'.$courseid."/lectures",'refresh');
					}
					else
					{
						$this->session->set_flashdata('type','success');
						$this->session->set_flashdata('message','Lesson successfully added');
						redirect('courses/'.$courseid."/lectures",'refresh');
					}*/
	            	echo "File uploaded successfully";
	            	echo "<br>VideoName = ".$data['video'];
	            	echo "<br>textName = ".$this->upload->data('file_name');
	            	echo "<br>Visi = ".$this->input->post('visibility');
	            	echo "<br>Id if lecture = ".$id;


	            }
	        }

		}
		//echo "You are adding lesson for $courseid";
	}

	public function edit($courseid,$lectureid)
    {
    	$data['page_title'] = "Edit Lesson";
    	$data['courseid'] = $courseid;
    	$data['text_error'] = "";
    	$data['video_error'] = "";
    	$lesson = $this->lesson->get($lectureid);
    	if(!$this->input->post())
		{
	    	if(!$lesson)
	    	{
	    		show_error("Some unexpected error occurred");
	    		exit(0);
	    	}
	    	if($lesson['is_public'])
	    		$lesson['visibility'] = "on";
	    	$data['lesson'] = $lesson;
	    	$this->load->view('lessons/edit_lesson',$data);
    	}
    	else
    	{
    		$this->load->library('upload');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('title','Lesson Title','trim|required|xss_clean');
			$this->form_validation->set_rules('description','Description','trim|required|xss_clean');
			$this->form_validation->set_rules('visibility','Visibility','trim|xss_clean');
			$lesson['name'] = set_value('title');
			$lesson['description'] = set_value('description');
			$lesson['visibility'] = set_value('visibility');
    		if($this->form_validation->run() == FALSE)
    		{
    			$data['lesson'] = $lesson;
    			$this->load->view('lessons/edit_lesson',$data);
    		}
    		else
    		{
    			if($this->isFileForUpload('video'))
    			{
    				if ( !$this->upload->do_upload('video'))
		            {
		    			$data['lesson'] = $lesson;
		                $data['video_error'] = $this->upload->display_errors();
		                $this->load->view('lessons/edit_lesson', $data);
		            }
		            else
		            {
		            	$videopath = APPPATH."/contents/videos/".$lesson['video'];
    					unlink($videopath);
    					$lesson['video'] = $this->upload->data('file_name');
		            }
    			}
    			if($this->isFileForUpload('text'))
				{
					$config['upload_path']          = './contents/texts';
					$config['allowed_types']        = 'pdf|txt|gzip|gtar|zip|rar|tar|tgz|gz';
					$config['file_ext_tolower']		= TRUE;
					$config['encrypt_name']			= TRUE;
					$config['max_size']             = 100000;
					$this->upload->initialize($config);
		            if ( !$this->upload->do_upload('text'))
		            {
		            	$data['lesson'] = $lesson;
		                $data['text_error'] = $this->upload->display_errors();
		                $this->load->view('lessons/edit_lesson', $data);
		            }
		            else
		            {
		            	$textpath = APPPATH."/contents/texts/".$lesson['text'];
		            	unlink($textpath);
		            	$lesson['text'] = $this->upload->data('file_name');
		            }
				}
				$lesson['title'] = $this->input->post('title');
				$lesson['description'] = $this->input->post('description');
				$lesson['is_public'] = false;
				if($this->input->post('visibility') == "on")
				{
					$lesson['is_public'] = true;
				}
    			$status = $this->lesson->edit($lectureid,$lesson);
    			if(!$status)
				{
					$this->session->set_flashdata('type','danger');
					$this->session->set_flashdata('message','Some unexpected error ocuured');
					redirect('courses/'.$courseid."/lessons/edit/".$lectureid,"refresh");
				}
				else
				{
					$this->session->set_flashdata('type','success');
					$this->session->set_flashdata('message','Lecture successfully updated');
					redirect("courses/".$courseid."/lectures","refresh");
				}

    		}

    	}
    }

	private function isFileForUpload($name)
    {
    	return ($_FILES && $_FILES[$name]['name'] !== "");
    }
		
	
}
/* End of file '/Lessons.php' */
/* Location: ./application/controllers//Lessons.php */
