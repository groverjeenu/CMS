<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Courses_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

	}
	

	public function add($details)
	{
		$data = array(
				'course_name' => $details['title'],
				'description' => $details['description'],
				'syllabus' => $details['syllabus'],
			);
		if($details['is_key'])
		{
			$data['course_key'] = $details['course_key'];
		}
		$this->db->insert('courses',$data,false);
		$id = $this->db->insert_id();
		$data['id'] = $id;
		$this->add_faculty_to_course($id,$this->ion_auth->get_user_id());
		$data['hash'] = $id;
		return $data;
	}

	public function add_faculty_to_course($cid,$faculty_id,$is_guest)
	{
		$type = 'main';
		if($is_guest)
		{
			$type = 'guest';
		}
		$data = array('course_id' => $cid, 'faculty_id' => $faculty_id, 'faculty_role' => $type);
		$this->db->insert('course_faculty',$data);

	}

	public function all_streams()
	{
		return $this->db->get_where('topics',array('parent_id' => 1, 'id!=' => 1))->result_array();
	}

	public function get($cid)
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
