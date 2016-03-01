<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Assignment_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function add($data)
	{
		$this->db->insert('assignment',$data);
		return $this->db->insert_id();
	}

	public function get($id)
	{
		$id = intval($id);
		$result = $this->db->get('assignment',array('id'=>$id))->result_array();
		return $result;
	}

	public function edit($id,$data)
	{

	}
	
	
}
/* End of file '/Lessons_model.php' */
/* Location: ./application/models//Lessons_model.php */