<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Qbank extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('xlsimport/php-excel-reader/excel_reader2');
		$this->load->helper('xlsimport/spreadsheetreader.php');
		$this->load->model('quiz/qbank_model', '', TRUE);
		/*if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		}
		if(!$this->ion_auth->in_group('faculty'))
		{
			redirect('dashboard');
		}*/
	}

	function index($limit = '0', $cid = '0')
	{
		$this->load->helper('form');
		$this->load->model('quiz/category', '', TRUE);
		$data['category'] = $this->category->category_dropdown();
		$this->load->model('quiz/difficult_level', '', TRUE);
		$data['difficult_level'] = $this->difficult_level->level_dropdown();
		$data['result'] = $this->qbank_model->question_list($limit, $cid);
		$data['title'] = "Question Bank";
		$data['limit'] = $limit;
		$data['fcid'] = $cid;

		//$this->load->view("quiz".'/header', $data);
		$this->load->view("quiz".'/question_list', $data);
		//$this->load->view("quiz".'/footer', $data);
	}

	function select_questions($quid = '0', $quiz_name = '', $limit = '0', $cid = '0')
	{

		$data['fcid'] = $cid;

		$this->load->helper('form');
		$this->load->model('quiz/category', '', TRUE);
		$data['category'] = $this->category->category_dropdown();
		$this->load->model('quiz/difficult_level', '', TRUE);
		$data['difficult_level'] = $this->difficult_level->level_dropdown();
		$data['result'] = $this->qbank_model->question_list($limit, $cid);
		$data['title'] = "Question Bank";
		$data['limit'] = $limit;
		$data['quid'] = $quid;
		$data['quiz_name'] = $quiz_name;
		$this->load->model('quiz_model', '', TRUE);
		$data['assigned_questions'] = $this->quiz_model->assigned_questions_manually($quid);
		//TODO:Check this our
		$this->load->view("quiz".'/select_questions', $data);

	}


	function import()
	{
		if (isset($_FILES['xlsfile'])) {
			$targets = 'xls/';
			$targets = $targets . basename( $_FILES['xlsfile']['name']);
			$docadd = ($_FILES['xlsfile']['name']);
			if (move_uploaded_file($_FILES['xlsfile']['tmp_name'], $targets)) {
				$Filepath = $targets;
				$allxlsdata = array();
				date_default_timezone_set('UTC');

				$StartMem = memory_get_usage();
				//echo '---------------------------------'.PHP_EOL;
				//echo 'Starting memory: '.$StartMem.PHP_EOL;
				//echo '---------------------------------'.PHP_EOL;

				try
				{
					$Spreadsheet = new SpreadsheetReader($Filepath);
					$BaseMem = memory_get_usage();

					$Sheets = $Spreadsheet -> Sheets();

					//echo '---------------------------------'.PHP_EOL;
					//echo 'Spreadsheets:'.PHP_EOL;
					//print_r($Sheets);
					//echo '---------------------------------'.PHP_EOL;
					//echo '---------------------------------'.PHP_EOL;

					foreach ($Sheets as $Index => $Name)
					{
						//echo '---------------------------------'.PHP_EOL;
						//echo '*** Sheet '.$Name.' ***'.PHP_EOL;
						//echo '---------------------------------'.PHP_EOL;

						$Time = microtime(true);

						$Spreadsheet -> ChangeSheet($Index);

						foreach ($Spreadsheet as $Key => $Row)
						{
							//echo $Key.': ';
							if ($Row)
							{
								//print_r($Row);
								$allxlsdata[] = $Row;
							}
							else
							{
								var_dump($Row);
							}
							$CurrentMem = memory_get_usage();

							//echo 'Memory: '.($CurrentMem - $BaseMem).' current, '.$CurrentMem.' base'.PHP_EOL;
							//echo '---------------------------------'.PHP_EOL;

							if ($Key && ($Key % 500 == 0))
							{
								//echo '---------------------------------'.PHP_EOL;
								//echo 'Time: '.(microtime(true) - $Time);
								//echo '---------------------------------'.PHP_EOL;
							}
						}

						//	echo PHP_EOL.'---------------------------------'.PHP_EOL;
						//echo 'Time: '.(microtime(true) - $Time);
						//echo PHP_EOL;

						//echo '---------------------------------'.PHP_EOL;
						//echo '*** End of sheet '.$Name.' ***'.PHP_EOL;
						//echo '---------------------------------'.PHP_EOL;
					}

				}
				catch (Exception $E)
				{
					echo $E -> getMessage();
				}


				$this->qbank_model->import_question($allxlsdata);

			}

		}

		else {
			echo "Error: " . $_FILES["file"]["error"];
		}
		redirect('qbank');
	}

	function add_new_mul() {

		$this->load->model('quiz/category', '', TRUE);
		$data['category'] = $this->category->category_dropdown();
		$this->load->model('quiz/difficult_level', '', TRUE);
		$data['difficult_level'] = $this->difficult_level->level_dropdown();

		//$data['resultstatus'] = $this->qbank_model->add_new_mul();

		$data['title'] = "Add new question";

		$this->load->view("quiz".'/new_question_1', $data);




	}

	function add_new($q_t = '0')
	{
		$data['q_t'] = $q_t;
		$this->load->model('quiz/category', '', TRUE);
		$data['category'] = $this->category->category_dropdown();
		$this->load->model('quiz/difficult_level', '', TRUE);
		$data['difficult_level'] = $this->difficult_level->level_dropdown();
		if ($this->input->post('cid')) {
			$data['resultstatus'] = $this->qbank_model->add_question();
		}
		$data['title'] = "Add new question";
		if ($q_t == 0) {
			$this->load->view("quiz".'/new_question', $data);
		}
		if ($q_t == 1) {
			$this->load->view("quiz".'/new_question_1', $data);
		}
		if ($q_t == 2) {
			$this->load->view("quiz".'/new_question_2', $data);
		}
		if ($q_t == 3) {
			$this->load->view("quiz".'/new_question_3', $data);
		}
		if ($q_t == 4) {
			$this->load->view("quiz".'/new_question_4', $data);
		}
		if ($q_t == 5) {
			$this->load->view("quiz".'/new_question_5', $data);
		}
	}

	function edit_question($id, $q_type = '0')
	{
		$this->load->model('quiz/category', '', TRUE);
		$data['category'] = $this->category->category_dropdown();
		$this->load->model('quiz/difficult_level', '', TRUE);
		$data['difficult_level'] = $this->difficult_level->level_dropdown();
		if ($this->input->post('cid')) {
			//print_r($_POST);
			$data['resultstatus'] = $this->qbank_model->update_question($id, $q_type);
		}
		$data['result'] = $this->qbank_model->get_question($id);
		$q_type = $data['result']['0']['q_type'];
		//echo $q_type;die;
		$data['title'] = "Edit question";
		if ($q_type == "0") {
			$this->load->view("quiz".'/edit_question', $data);
		}
		if ($q_type == "1") {
			$this->load->view("quiz".'/edit_question_1', $data);
		}
		if ($q_type == "2") {
			$this->load->view("quiz".'/edit_question_2', $data);
		}
		if ($q_type == "3") {
			$this->load->view("quiz".'/edit_question_3', $data);
		}
		if ($q_type == "4") {
			$this->load->view("quiz".'/edit_question_4', $data);
		}
		if ($q_type == "5") {
			$this->load->view("quiz".'/edit_question_5', $data);
		}

	}


	function remove_question($id) {
		$data['resultstatus'] = $this->qbank_model->remove_question($id);
		redirect('quiz/qbank', 'refresh');
	}

	function remove_qids($limit) {
		$qids = $this->input->post('qid');
		$data['resultstatus'] = $this->qbank_model->remove_qids($qids);
		redirect('quiz/qbank/index/'.$limit, 'refresh');
	}

// get desired question for particular subject and difficulty level
	function get_level_question($difficulty_level, $category) {
		$this->db->where("cid", $category);
		$this->db->where("did", $difficulty_level);
		$query =	$this->db->get("qbank");
		$num = $query->num_rows();
		echo $num;
	}

}