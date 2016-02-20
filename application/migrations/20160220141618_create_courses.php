<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Create_courses extends CI_Migration
{
    public function __construct()
	{
	    parent::__construct();
	}
	
	public function up()
	{
	    $query = "CREATE TABLE `courses` (
					  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT,
					  `course_name` varchar(45) NOT NULL,
					  `description` varchar(45) NOT NULL,
					  `syllabus` longtext NOT NULL,
					  `course_key` varchar(45) DEFAULT NULL,
					  PRIMARY KEY (`cid`)
					) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($query);
    }
    
	public function down()
	{
		$this->db->query("DROP TABLE courses;");
	   // $this->dbforge->drop_table('SET_YOUR_TABLE_HERE', TRUE);
    }
}
/* End of file '20160220141618_create_courses' */
/* Location: .//home/prabhat/Documents/coursera/appcode/application/migrations/20160220141618_create_courses.php */
