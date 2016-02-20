<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Create_course_faculty extends CI_Migration
{
    public function __construct()
	{
	    parent::__construct();
	}
	
	public function up()
	{
	    $query = "CREATE TABLE `course-faculty` (
				  `course_id` int(11) NOT NULL,
				  `faculty_id` int(11) NOT NULL,
				  `faculty_role` enum('guest','main') NOT NULL,
				  PRIMARY KEY (`course_id`,`faculty_id`)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($query);
    }
    
	public function down()
	{
		$this->db->query("DROP TABLE course_faculty;");
	   // $this->dbforge->drop_table('SET_YOUR_TABLE_HERE', TRUE);
    }
}
/* End of file '20160220141348_create_course_faculty' */
/* Location: .//home/prabhat/Documents/coursera/appcode/application/migrations/20160220141348_create_course_faculty.php */
