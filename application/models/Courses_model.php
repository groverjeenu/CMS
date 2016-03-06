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
				'course_name' => $details['title'],
				'description' => $details['description'],
				'syllabus' => $details['syllabus'],
			);
		if($details['is_key'])
		{
			$data['course_key'] = $details['course_key'];
		}
		$this->db->insert('courses',$data);
		$id = $this->db->insert_id();
		$data['id'] = $id;
		$this->add_faculty_to_course($id,$this->ion_auth->get_user_id());
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

	public function get_general($cid)
	{
		$this->db->select('cid, course_name,description, syllabus, course_key,imagename');
		$result = $this->db->get_where('courses',array("cid" => $cid));
		if($result->num_rows() != 1)
		{
			return false;
		}
		return $result->row_array();
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

	public function  get_user_courses($usr = NULL)
	{
		if(!$usr)
		$curr_user = (array)($this->ion_auth->user()->row());
		else $curr_user = $usr;
		$user_courses =  $this->db->query("select * from users,enrollments,courses where users.id = enrollments.student_id and enrollments.course_id = courses.cid and users.id = ?",$curr_user['id'])->result_array();
		return $user_courses;

	}

	public function check_if_enrolled($cid)
	{
		$curr_user = (array)($this->ion_auth->user()->row());
		$val = (array)$this->db->query("select count(*) as cnt  from enrollments where course_id = ? and student_id = ?",array($cid, $curr_user['user_id']) )->row();
		
		return $val['cnt'];
		

	}

	public function enroll($cid)
	{
		$curr_user = (array)($this->ion_auth->user()->row());
		$this->db->query("insert into enrollments(course_id,student_id) values(?,?)",array($cid,$curr_user['user_id']));
	}

	public function get_course_lectures($cid)
	{
		$lectures = $this->db->query("select * from lectures where course_id = ? and is_public = 1 order by upload_time",$cid)->result_array();
		return $lectures;

	}

	public function getcourse_name($id)
	{
		$id = intval($id);
		//echo $id;
		$course = $this->db->query("select * from course_courseadmin,courses, assignment, submissions where course_courseadmin.cid=courses.cid and courses.cid=assignment.cid and assignment.assignment_id=submissions.assignment_id and isgraded=0 and courseadmin=?",$id)->result_array();
		return $course;
	}

	public function getsubmissions($id)
	{
		$id = intval($id);
		$ass = $this->db->query("select * from assignment, submissions, users, courses where assignment.cid=courses.cid and submissions.assignment_id=assignment.assignment_id and submissions.user_id=users.id and assignment.assignment_id=? ", $id)->row_array();
		return $ass;
	}

	public function get_query_courses($qry)
	{
		$this->db->like('course_name', $qry, 'both');
		 $courses = $query = $this->db->get('courses')->result_array();
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


	public function get_course_assignments($cid)
	{
		return $this->db->query("select * from assignment where cid  = ? order by start_date",$cid)->result_array();
	}

	

	public function update_submissions($data)
	{
		$this->db->query("update submissions set grade = ?, penalty = ? , graded_by = ?, isgraded=1 where assignment_id = ?", array($data['grade'], $data['penalty'], $data['graded_by'], $data['assignment_id']));
	}


	public function get_course_grades($cid,$usr = NULL)
	{
		if(!$usr)
		{
		$curr_user = (array)($this->ion_auth->user()->row());
		$uid = $curr_user['user_id'];
		}
		else
		{
			$curr_user = $usr;
			$uid = $curr_user['id'];
		}
		
		return $this->db->query("select * from enrollments,assignment,submissions where enrollments.course_id = assignment.cid and assignment.assignment_id = submissions.assignment_id and submissions.user_id = ? and enrollments.student_id = ? and isgraded = 1 and assignment.cid = ?",array($uid,$uid,$cid))->result_array();
	}

	public function get_total_weight($cid)
	{
		$wt = (array)$this->db->query("select sum(weightage) as wt from assignment where cid = ?",$cid)->row();
		return $wt['wt'];
	}
	public function get_fac_courses($id)
	{
		$id = intval($id);
		$query = $this->db->query("select * from courses, course_faculty where cid=course_id and faculty_id=?", $id)->result_array();
		return $query;
	}

	public function get_pending_approvals($id)
	{
		$id = intval($id);
		$query = $this->db->query("select * from courses, course_courseadmin, users, course_faculty where courses.cid =course_courseadmin.cid and courses.cid =course_faculty.course_id and users.id = course_courseadmin.courseadmin and course_courseadmin.is_approved = 0 and course_courseadmin.cid = course_faculty.course_id and course_faculty.faculty_id=?", $id)->result_array();
		return $query;
	}

	public function enroll_ca($cid)
	{
		$curr_user = (array)($this->ion_auth->user()->row());
		$this->db->query("insert into course_courseadmin(cid, courseadmin) values(?,?)",array($cid,$curr_user['user_id']));
	}

	public function is_ca($cid)
	{
		$curr_user = (array)($this->ion_auth->user()->row());
		$val = (array)$this->db->query("select count(*) as cnt  from course_courseadmin where cid = ? and courseadmin = ?",array($cid, $curr_user['user_id']) )->row();
		
		return $val['cnt'];

	}

	public function update_ca($id)
	{
		$id = intval($id);
		$this->db->query("update course_courseadmin set is_approved=1 where courseadmin=?", $id);
	}

}
