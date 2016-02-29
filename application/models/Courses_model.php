<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Courses_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ion_auth_model');

	}
	

	public function add($details)
	{
		$data = array(
				'course_name' => $details['course_name'],
				'description' => $details['description'],
				'syllabus' => $details['syllabus'],
			);
		if($details['is_key'])
		{
			$data['course_key'] = $details['course_key'];
		}
		$this->db->insert('courses',$data);
		$id = $this->db->insert();
		return $id;
	}

	//public add

	public function get_all()
	{
		return ('This is your first application');
	}

	public function get_all_courses()
	{
		 $courses = $this->db->query("select * from courses")->result_array();
		 $d = array();
		 foreach($courses as $c)
		 {
		 	$t = "";
		 	$qq = $c['cid'];
		 	$z = $this->db->query("select * from course_faculty ,users where course_faculty.course_id = ?  and course_faculty.faculty_id = users.id",$qq)->result_array(); 
		 	foreach($z as $p)
		 	{
		 		$t = $t.$p['first_name']."\t".$p['last_name']."\t,";
		 	}
		 	$t = substr($t,0,-2);
		 	$d[$c['cid']] = array("names" =>$t,"course_name"=>$c['course_name'],"description"=>$c['description'],"course_key" =>$c['course_key']);
		 }
		 
		 //$this->db->query("select * from courses ,course_faculty ,users where courses.cid = course_faculty.course_id and course_faculty.faculty_id = users.id");
		 return $d;
	}

	public function get_course($cid)
	{
		 $courses = $this->db->query("select * from courses where cid = ?",$cid)->result_array();
		 $d = array();
		 $n = $this->db->query("select count(DISTINCT student_id) AS cnt  from enrollments where course_id = ?",$cid)->result_array();
		 foreach($n as $ee)
		 	{
		 		$number = $ee['cnt'];
		 	}
		 foreach($courses as $c)
		 { 
		 	$t = "";
		 	$qq = $c['cid'];
		 	$z = $this->db->query("select * from course_faculty ,users where course_faculty.course_id = ?  and course_faculty.faculty_id = users.id",$qq)->result_array(); 
		 	foreach($z as $p)
		 	{
		 		$t = $t.$p['first_name']."\t".$p['last_name']."\t,";
		 	}
		 	$t = substr($t,0,-2);
		 	$d[$c['cid']] = array("names" =>$t,"cid"=>$c['cid'],"course_name"=>$c['course_name'],"description"=>$c['description'],"course_key" =>$c['course_key'],"syllabus"=>$c['syllabus'],"attending"=>$number);
		 }
		 
		 //$this->db->qu
		 return $d[$c['cid']];
	}

	public function  get_user_courses()
	{
		$curr_user = (array)($this->ion_auth->user()->row());
		$user_courses =  $this->db->query("select * from users,enrollments,courses where users.id = enrollments.student_id and enrollments.course_id = courses.cid and users.id = ?",$curr_user['id'])->result_array();
		return $user_courses;

	}

	public function check_if_enrolled($cid)
	{
		$curr_user = (array)($this->ion_auth->user()->row());
		$val = (array)$this->db->query("select count(*) as cnt  from enrollments where course_id = ? and student_id = ?",array($cid, $curr_user['user_id']) )->row();
		
		return $val['cnt'];
		

	}

	public function get_course_lectures($cid)
	{
		$lectures = $this->db->query("select * from lectures where course_id = ? and is_public = 1 order by upload_time",$cid)->result_array();
		return $lectures;

	}
}
