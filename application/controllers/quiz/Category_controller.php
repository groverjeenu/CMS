<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('quiz/category', '', TRUE);
		/*if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		}
		if(!$this->ion_auth->in_group('faculty'))
		{
			redirect('dashboard');
		}*/
	}

	function index($limit = '0')
	{
		$data['result'] = $this->category->category_list($limit);
		$data['title'] = "Category list";
		$data['limit'] = $limit;

		$data['resultstatus'] = false;
		$this->load->view("quiz".'/category_list', $data);
	}


	function remove_category($cid) {
		$this->category->remove_category($cid);
		redirect('quiz/category_controller', 'refresh');
	}

// add new category form
	function add_new() {
		$data['title'] = "Add Category";
		$data['resultstatus'] = false;
		$this->load->view("quiz".'/add_category', $data);
	}

// insert group into database
	function insert_category() {
		//echo "<pre>"; print_r($_POST);
		// form validation rules
		$this->form_validation->set_rules('categoryname', 'Category Name', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->add_new();
		}
		else
		{
			$data['title'] = "Add Category";
			$data['resultstatus'] = $this->category->insert_category();
			$this->load->view("quiz".'/add_category', $data);
		}
	}

	// edit the category form
	public function edit_category($cid, $resultstatus = '') {
		$data['title'] = "Edit category";
		$data['category'] = $this->category->get_category($cid);
		$data['cid'] = $cid;
		$data['resultstatus'] = $resultstatus;
		$this->load->view("quiz".'/edit_category', $data);
	}


	// update category in database
	function update_category($cid) {
		// form validations
		$this->form_validation->set_rules('categoryname', 'Category Name', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->edit_category($cid);
		}
		else {
			$resultstatus = $this->category->update_category($cid);
			$this->edit_category($cid, $resultstatus);
		}
	}
}



















