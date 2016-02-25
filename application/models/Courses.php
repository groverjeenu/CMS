<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Courses extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

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
		 	$d[$c['cid']] = array("names" =>$t,"cid"=>$c['cid'],"course_name"=>$c['course_name'],"description"=>$c['description'],"course_key" =>$c['course_key'],"syllabus"=>$c['syllabus'],"attending"=>$number);
		 }
		 
		 //$this->db->qu
		 return $d[$c['cid']];
	}
}
