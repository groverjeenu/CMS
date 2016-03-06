<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Courses_model','courses');
		$this->load->model("user");
		if(!$this->ion_auth->logged_in())
		{
			redirect('login',"refresh");
		}
	}
	
	public function index($id)
	{
		redirect('courses/'.$id);
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
		$this->form_validation->set_rules('course_icon',"Course Icon","trim|xss_clean");

		if($this->form_validation->run()===FALSE)
		{
			
			$data['file_error'] = "";
 			$this->load->view('courses/add_course', $data);
		}
		else
		{
			if($this->isFileForUpload("course_icon"))
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
			$data_insert = $this->input->post();
			if($data['imagename'])
				$data_insert['imagename'] = $data['imagename'];
			log_message("DEBUG","loplop ".$data['imagename']."    ".$data_insert['imagename']);
			$data = $this->courses->add($data_insert);
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
				redirect("courses/add","refresh");
				//$this->load->view('courses/edit_course', array('hash' => $course_hash));
				//redirect('courses/edit/'.$course_hash,'refresh');
			}
		}
	}

	public function lectures($cid)
	{
		$data['page_title'] = "Course Lessons";
		$course = $this->courses->get_general($cid);
		$data['course'] = $course;
		$this->load->view('courses/lectures',$data);
	}

	public function add_faculty($courseid)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('faculty[]',"Faculties","required|xss_clean");
		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('message',form_error('faculty[]'));
			$this->session->set_flashdata('type',"alert");
			redirect('courses/edit/'.$courseid."/meta",'refresh');
		}
		else
		{
			$is_guest = $this->input->post('is_guest');
			$status = $this->courses->add_faculty_to_course($courseid,$this->input->post('faculty'),$is_guest);
			if(!$status)
			{
				$this->session->set_flashdata('type','danger');
				$this->session->set_flashdata('message','Some unexpected error ocuured');
				redirect('courses/edit/'.$courseid."/meta",'refresh');
			}
			else
			{
				$this->session->set_flashdata('type','success');
				$this->session->set_flashdata('message','Faculties successfully added');
				redirect('courses/edit/'.$courseid."/meta",'refresh');
			}
		}

	}

	public function add_cadmin($courseid)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('cadmin[]',"Course Administrators","required|xss_clean");
		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('message',form_error('cadmin[]'));
			$this->session->set_flashdata('type',"alert");
			redirect('courses/edit/'.$courseid."/meta",'refresh');
		}
		else
		{
			$status = $this->courses->add_cadmin_to_course($courseid,$this->input->post('cadmin'));
			if(!$status)
			{
				$this->session->set_flashdata('type','danger');
				$this->session->set_flashdata('message','Some unexpected error ocuured');
				redirect('courses/edit/'.$courseid."/meta",'refresh');
			}
			else
			{
				$this->session->set_flashdata('type','success');
				$this->session->set_flashdata('message','Course Admins successfully added');
				redirect('courses/edit/'.$courseid."/meta",'refresh');
			}
		}

	}

	public function deleteIcon()
	{
		$id = $this->input->post('key');
		log_message("ERROR","loploplop $id");
		if($id && is_numeric($id) && $id > 0)
		{
			$imagename = $this->courses->get_imagename($id);
			if($imagename)
			{
				if($imagename != "course.png")
				{
					$this->courses->set_default_image($id);
					unlink(APPPATH."/contents/images/course_icons/".$imagename);
				}
				echo json_encode("deleted");
			}
		}
		else
		{
			echo json_encode("Invalid");
		}
	}

	public function edit_general($courseid)
    {
    	/*if(!$this->ion_auth->in_group('faculty'))
		{
			show_error("Access Forbidden",403);
			exit(0);
		}*/
		if(!$this->input->post())
		{
	    	$course = $this->courses->get_general($courseid);
	    	if(!$course)
	    	{
	    		show_error("Some unexpected error occurred");
	    		exit(0);
	    	}
	    	$course['is_key'] = "disabled";
	    	if($course['course_key'] != NULL)
	    		$course['is_key'] = "enabled";
	    	$data['course'] = $course;
	    	$data['file_error'] = "";
	    	$data['page_title'] = "Edit Course";

	     	/*$course['id'] = $courseid;
	    	$course['name'] = "This is a course";
	    	$course['description'] = "This is a desciption";
	    	$course['syllabus'] = "This is a syllabus";*/
	    	$this->load->view('courses/edit_course',$data);
    	}
    	else
    	{
    		$data['page_title'] = "Edit Course";
			$this->load->library('form_validation');
			$this->form_validation->set_rules('title','Course Title','trim|required|xss_clean');
			$this->form_validation->set_rules('description','Description','trim|required|xss_clean');
			$this->form_validation->set_rules('syllabus','Syllabus','trim|required|xss_clean');
			$this->form_validation->set_rules('is_key',"key exists","trim|required|in_list[enabled,disabled]|xss_clean");
			$this->form_validation->set_rules('course_key',"course key","trim|callback_course_key_check|xss_clean");

			if($this->form_validation->run()===FALSE)
			{
				$data['file_error'] = "";
				$course['cid'] = $courseid;
 				$course['course_name'] = set_value('title');
				$course['description'] = set_value('description');
				$course['syllabus'] = set_value('syllabus');
				$course['is_key'] = set_value('is_key');
				$course['course_key'] = set_value('course_key');
				$course['imagename'] = $this->courses->get_imagename($courseid);
				$data['course'] = $course;
	 			$this->load->view('courses/edit_course', $data);
			}
			else
			{
				$icon = $this->input->post('course_icon');
				if($this->isFileForUpload('course_icon'))
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
		            	$course['course_name'] = set_value('title');
						$course['cid'] = $courseid;
						$course['description'] = set_value('description');
						$course['syllabus'] = set_value('syllabus');
						$course['is_key'] = set_value('is_key');
						$course['course_key'] = set_value('course_key');
						$course['imagename'] = $this->courses->get_imagename($courseid);
		                $data['file_error'] = $this->upload->display_errors();
		                $data['course'] = $course;
		                $this->load->view('courses/edit_course', $data);
		            }
		            else
		            {
		            	$data['imagename'] = $this->upload->data('file_name');
		            }
		        }
				if(isset($data['imagename']))
					$data_insert['imagename'] = $data['imagename'];
				$data_insert['course_name'] = $this->input->post('title');
				$data_insert['description'] = $this->input->post('description');
				$data_insert['syllabus'] = $this->input->post('syllabus');
				$data_insert['course_key'] = NULL;
				if($this->input->post('is_key')=="enabled")
				{
					$data_insert['course_key'] = $this->input->post('course_key');
				}
 				$status = $this->courses->update($courseid,$data_insert);
				
				if(!$status)
				{
					$this->session->set_flashdata('type','danger');
					$this->session->set_flashdata('message','Some unexpected error ocuured');
					$data['page_title'] = "Edit Course";
					redirect('courses/edit/'.$courseid,"refresh");
					//$this->load->view('courses/edit_course', $data);
				}
				else
				{
					$this->session->set_flashdata('type','success');
					$this->session->set_flashdata('message','Course successfully updated');
					redirect("courses/edit/".$courseid,"refresh");
					//$this->load->view('courses/edit_course', array('hash' => $course_hash));
					//redirect('courses/edit/'.$course_hash,'refresh');
				}
			}
    	}
    }

    public function edit_meta($courseid)
    {
    	$data['page_title'] = "Edit Course";
    	$course = $this->courses->get_meta($courseid);
    	if(!$this->input->post())
		{
	    	$course = $this->courses->get_meta($courseid);
	    	if(!$course)
	    	{
	    		show_error("Some unexpected error occurred");
	    		exit(0);
	    	}
	    	$course['stream'] = $this->courses->getTopicIds($courseid);
	    	$data['course'] = $course;
	    	$this->load->view('courses/edit_course_meta',$data);
    	}
    	else
    	{
    		$this->load->library('form_validation');
    		$this->form_validation->set_rules('stream[]',"Course Streams","required|xss_clean");
    		$this->form_validation->set_rules('duration',"Course Duration","required|is_natural_no_zero|xss_clean");
    		$this->form_validation->set_rules('start',"Start Date","required|xss_clean");
    		$this->form_validation->set_rules('end',"End Date","required|xss_clean");

    		if($this->form_validation->run() == FALSE)
    		{
    			$course['duration'] = set_value('duration');
    			$course['start'] = set_value('start');
    			$course['end'] = set_value('end');
    			$course['stream'] = set_value('stream');
    			$data['course'] = $course;
    			$this->load->view('courses/edit_course_meta',$data);
    		}
    		else
    		{
    			$status = $this->courses->update_meta($courseid,$this->input->post());
    			if(!$status)
				{
					$this->session->set_flashdata('type','danger');
					$this->session->set_flashdata('message','Some unexpected error ocuured');
					redirect('courses/edit/'.$courseid."/meta","refresh");
				}
				else
				{
					$this->session->set_flashdata('type','success');
					$this->session->set_flashdata('message','Course successfully updated');
					redirect("courses/edit/".$courseid."/meta","refresh");
				}

    		}

    	}

    }

    public function edit__($courseid)
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

    private function isFileForUpload($name)
    {
    	return ($_FILES && $_FILES[$name]['name'] !== "");
    }
	
	public function facultystudents($cid)
	{
		$student = $this->courses->getstulist($cid);
		$data['student'] = $student;
		$data['cid'] = $cid;
		$this->load->view('studentlist', $data);
	}

}
/* End of file '/Courses.php' */
/* Location: ./application/controllers//Courses.php */
