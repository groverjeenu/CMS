<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Assignments_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ion_auth_model');

	}


	public function get($aid)
	{
		return (array)$this->db->query("select * from assignment where assignment_id = ?",$aid)->row();
	}
}
?>