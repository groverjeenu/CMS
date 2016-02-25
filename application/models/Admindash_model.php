<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Admindash_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

	}
	
	public function get_faculty_approvals()
	{
		$users = $this->db->query("select * from users where is_faculty=1")->result_array();
		return $users;
	}
}
