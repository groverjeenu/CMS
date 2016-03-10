<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quiz extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('quiz/quiz_model', '', TRUE);
		$this->load->model('courses_model','courses');
		//$this->load->model('group_model', '', TRUE);
		//$this->load->model('quiz/group_model', '', TRUE);
		/*if (!$this->session->userdata('logged_in'))
		{
			redirect('login');
		}*/
	}

	function index($cid,$limit = '0')
	{
		$data['title'] = "Quiz/Test";
		$data['limit'] = $limit;
		$data['resultstatus'] = false;
		$data['courseid'] = $cid;
		$data['result'] = $this->quiz_model->quiz_list($cid,$limit);
		$this->load->view("quiz".'/quiz_list', $data);
	}


	function add_new($cid=false)
	{
		if(!$cid)
		{
			redirect('dashboard');
		}
		$data['courseid']=$cid;
		$this->load->model('quiz/category', '', TRUE);
		$data['category'] = $this->category->category_dropdown();
		$this->load->model('quiz/difficult_level', '', TRUE);
		$data['difficult_level'] = $this->difficult_level->level_dropdown();

		if ($this->input->post('submit_quiz')) {
			$data['resultstatus'] = $this->quiz_model->add_quiz($cid);
			$qselect = $this->input->post('qselect');
			redirect('quiz/quiz/edit_quiz/'.$data['resultstatus'].'/'.$qselect);
		}
		$data['title'] = "Add new quiz";
		if(!isset($data['resultstatus'])) $data['resultstatus'] = false;
		$this->load->view("quiz".'/new_quiz', $data);
	}


	function edit_quiz($id, $qselect = '1')
	{
		$data['courseid'] = $this->quiz_model->get_courseid($id);
		$this->load->model('quiz/category', '', TRUE);
		$data['category'] = $this->category->category_dropdown();
		$this->load->model('quiz/difficult_level', '', TRUE);
		$data['difficult_level'] = $this->difficult_level->level_dropdown();
		if ($this->input->post('submit_quiz')) {
			$data['resultstatus'] = $this->quiz_model->edit_quiz($id);
		}
		if(!isset($data['resultstatus'])) $data['resultstatus'] = false;

		$data['result'] = $this->quiz_model->quiz_detail($id);

		if ($data['result']->qselect == "1") {
			$data['assigned_questions'] = $this->quiz_model->assigned_questions($id);
		} else {
			$data['assigned_questions'] = $this->quiz_model->assigned_questions_manually($id);

		}
		$data['qselect'] = $qselect;
		$data['title'] = "Edit quiz";

		$this->load->view("quiz".'/edit_quiz', $data);
	}



	function remove_quiz($id) {

		$data['resultstatus'] = $this->quiz_model->remove_quiz($id);
		redirect('quiz/quiz', 'refresh');
	}

	function attempt($id)
	{
		$data['result'] = $this->quiz_model->quiz_detail($id);
		$data['title'] = $data['result']->quiz_name;
		if(!isset($data['resultstatus'])) $data['resultstatus'] = false;
		$this->load->view("quiz".'/quiz_detail', $data);
	}


	// update individual question time spent
	function update_time($id, $qtime) {
		$this->quiz_model->update_time($id, $qtime);
	}


	// update answer
	function update_answer($id, $oid) {
		$this->quiz_model->update_answer($id, $oid);
	}
	function update_fillups() {
		$this->quiz_model->update_fillups();
	}

	function add_question($quid, $qid) {
		$this->quiz_model->add_question($quid, $qid);
	}

	function remove_question_quiz($quid, $qid) {
		
		$this->quiz_model->remove_question_quiz($quid, $qid);
		redirect('quiz/quiz/edit_quiz/'.$quid, 'refresh');
	}



	function up_question($quid, $qid, $not = '1') {
		for ($i = 1; $i <= $not; $i++) {
			$this->quiz_model->up_question($quid, $qid);
		}
		redirect('quiz/quiz/edit_quiz/'.$quid, 'refresh');
	}

	function down_question($quid, $qid, $not = '1') {
		for ($i = 1; $i <= $not; $i++) {
			$this->quiz_model->down_question($quid, $qid);
		}
		redirect('quiz/quiz/edit_quiz/'.$quid, 'refresh');
	}




	function access_test($id)
	{
		$this->load->helper('cookie');

		$data['resultstatus'] = $this->quiz_model->quiz_verify($id);
		$data['quiz_id'] = $id;
		$data['result'] = $this->quiz_model->quiz_detail($id);
		$data['title'] = $data['result']->quiz_name;
		if ($data['resultstatus'] == "1") {
			if (!$this->input->cookie('rid', TRUE)) {
				redirect('quiz/quiz/access_test/'.$id, 'refresh');
			}
			$rid = $this->input->cookie('rid', TRUE);
			//get the question answer
			$data['user_answer'] = $this->quiz_model->get_user_answer($rid);
			$question_user_ans = array();

			foreach ($data['user_answer'] as $val_ans) {
				$question_user_ans[$val_ans['q_id']] = $val_ans['essay_cont'];

			}

			$data['question_user_ans'] = $question_user_ans;
			// get assignied questions
			$data['assigned_question'] = $this->quiz_model->get_question($rid);
			// get time information
			$data['time_info'] = $this->quiz_model->get_time_info($rid);

			// time remaining in seconds
			// total time - time spent
			$data['seconds'] = (($data['result']->duration) * 60) - ($data['time_info']['time_spent']);

			// get quiz data like quiz duration, title
			$data['quiz_data'] = $this->quiz_model->get_quiz_data($id);

			// load quiz access page
			$this->load->view("quiz".'/quiz_access', $data);


		} else {
			// load quiz detail page with error
			$data['result'] = $this->quiz_model->quiz_detail($id);
			$data['title'] = $data['result']->quiz_name;
			$this->load->view("quiz".'/quiz_detail', $data);
		}

	}

	function close_practice() {
		$result_id = $this->input->cookie('rid', TRUE);
		$this->db->where('rid', $result_id);
		if ($this->db->delete('quiz_result')) {
			$this->load->helper('cookie');
			delete_cookie("rid");
			redirect('quiz/quiz/', 'refresh');
		}


	}


	function submit_quiz($id) {

		$this->load->helper('cookie');

		$data['resultstatus'] = $this->quiz_model->quiz_submit($id);
		$data['result'] = $this->quiz_model->quiz_detail($id);
		$data['title'] = $data['result']->quiz_name;
		$this->load->view("quiz".'/quiz_detail', $data);


	}

}
