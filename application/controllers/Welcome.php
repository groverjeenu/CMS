<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('homepage');
		#$this->load->view('welcome_message');
		/*$ans  = $this->db->query("select * from migrations");
		foreach ($ans->result_array() as $key ) {
			foreach($key as $i)
				echo $i."\t";
			echo "<br>";
		}*/
		

	}

	public function dash()
	{
		$this->load->view('dashboard');
	}

	public function courses()
	{
		$this->load->view('courses');
	}

	public function courselist()
	{
		$this->load->view('courselist');
	}

	
}
