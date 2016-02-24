<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Courses extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

	}
	

	public function add($details)
	{
		
	}


	public function get_all()
	{
		return ('This is your first application');
	}

	public function get_all_courses()
	{
		return $this->db->query("select * from courses ,course_faculty ,users where courses.cid = course_faculty.course_id and course_faculty.faculty_id = users.id");
	}
}
