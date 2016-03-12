<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Mail_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getfacmails($cid)
	{
		$cid = intval($cid);
		$query = $this->db->query("select * from courses, course_faculty, users where cid=course_id and users.id=faculty_id and cid=?", $cid)->result_array();
		return $query;
	}

	public function getstumails($cid=1)
	{
		$cid = intval($cid);
		$id = $this->ion_auth->get_user_id();
		$query = $this->db->select('email, id')->from('users')->get()->result_array();
		//$query = $this->db->query("select * from course_faculty, users, enrollments where users.id=student_id and course_faculty.course_id = enrollments.course_id and course_faculty.faculty_id=? and enrollments.course_id=?", array($id,$cid))->result_array();
		return $query;
	}

	public function getuseremail()
	{
		$user = $this->ion_auth->get_user_id();
		$query = $this->db->query("select * from users where id=?", $user)->row_array();
		return $query;
	}

	public function send_mail($data)
	{
		$this->db->query('insert into mail_body values(null, ?, ?, ?, ?)', $data);
	}

	public function getid($data)
	{
		return $this->db->query('select * from mail_body where sender_id=? and date=?', array($data['sender_id'], $data['date']))->row_array();
	}

	public function update_receiver($id, $data)
	{
		//foreach ($data as $key) {
			$this->db->query('insert into mail_recipients values(?,?)', array($id, $data));
		//}
	}

	public function mail_data()
	{
		$id = $this->ion_auth->get_user_id();
		return $this->db->query('select * from mail_body, mail_recipients, users where mail_body.mail_id=mail_recipients.mail_id and sender_id = users.id and (rec_id=?) order by date desc',$id)->result_array();
	}

	public function mail_data_sent()
	{
		$id = $this->ion_auth->get_user_id();
		return $this->db->query('select * from mail_body, mail_recipients, users where mail_body.mail_id=mail_recipients.mail_id and rec_id = users.id and sender_id=? order by date desc', $id)->result_array();
	}

	
}
/* End of file '/Mail_model.php' */
/* Location: ./application/models/Mail_model.php */