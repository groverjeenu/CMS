<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Lessons_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function add($data)
	{
		$this->db->insert('lectures',$data);
		return $this->db->insert_id();
	}

	public function get($id)
	{
		$id = intval($id);
		$result = (array)$this->db->get('lectures',array('id'=>$id))->row();
		$result = $this->db->get_where('lectures',array('id'=>$id))->row_array();
		return $result;
	}

	public function edit($id,$data)
	{

	}
	
	
}
/* End of file '/Lessons_model.php' */
/* Location: ./application/models//Lessons_model.php */