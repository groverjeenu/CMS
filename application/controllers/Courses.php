<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->model('courses_model');
		$data['content'] = $this->courses_model->get_all();
		$this->load->view('courses_view', $data);
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
		$this->form_validation->set_rules('element','Element label','trim|required');
		if($this->form_validation->run()===FALSE)
		{
			$data['input_element'] = array('name'=>'element', 'id'=>'element', 'value'=>set_value('element'));
			$this->load->view('courses_view', $data);
		}
		else
		{
			$field = $this->input->post('element');
			$this->load->model('courses_model');
			if($this->courses_model->add(array('field_name'=>$field)))
			{
				$this->load->view('courses_success_page_view');
			}
			else
			{
				$this->load->view('courses_error_page_view');
			}
		}
	}
	
	public function edit()
	{
		$this->form_validation->set_rules('element','Element label','trim|required');
		$this->form_validation->set_rules('id','ID','trim|is_natural_no_zero|required');
		if($this->form_validation->run()===FALSE)
		{
			if(!$this->input->post())
			{
				$id = intval($this->uri->segment($this->uri->total_segments()));
			}
			else
			{
				$id = set_value('id');
			}
			$data['input_element'] = array('name'=>'element', 'id'=>'element', 'value'=>set_value('element'));
			$data['hidden'] = array('id'=>set_value('id',$id));
			$this->load->view('courses_view', $data);
		}
		else
		{
			$element = $this->input->post('element');
			$id = $this->input->post('id');
			$this->load->model('courses_model');
			if($this->courses_model->update(array('element'=>$element),array('id'=>$id)))
			{
				$this->load->view('courses_success_page_view', $data);
			}
			else
			{
				$this->load->view('courses_error_page_view');
			}
		}
	}
	public function delete($id)
	{
		$id = intval($id);
		if($id!=0)
		{
			$this->load->model('courses_model');
			$data['content'] = $this->courses_model->delete();
			$this->load->view('courses_view', $data);
		}
		else
		{
			redirect(site_url(),'refresh');
		}
	}
}
/* End of file '/Courses.php' */
/* Location: ./application/controllers//Courses.php */
