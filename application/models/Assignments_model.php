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
	public function upload($aid,$file,$user_id)
	{
		$this->db->query("delete from submissions where assignment_id = ? and user_id = ?",array($aid,$user_id));
		$this->db->query("insert into submissions(file_name,assignment_id,user_id) values(?,?,?)",array($file,$aid,$user_id));
	}

	public function get_user_submission($aid,$uid)
	{
		$sub['submiss_time'] = '0000-00-00 00:00:00';
		$sub = (array)$this->db->query("select * from submissions where assignment_id = ? and user_id = ?",array($aid,$uid))->row();
		if($sub == NULL)
			$sub['submiss_time'] = NULL;;
		return $sub;
	}
}
?>