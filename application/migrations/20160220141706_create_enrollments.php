<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Create_enrollments extends CI_Migration
{
    public function __construct()
	{
	    parent::__construct();
	}
	
	public function up()
	{
	    $query = "CREATE TABLE `enrollments` (
				  `enrol_id` int(11) NOT NULL AUTO_INCREMENT,
				  `course_id` int(11) NOT NULL,
				  `student_id` int(11) NOT NULL,
				  `registration_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
				  PRIMARY KEY (`enrol_id`)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($query);
    }
    
	public function down()
	{
		$this->db->query("DROP TABLE enrollments;");
	   // $this->dbforge->drop_table('SET_YOUR_TABLE_HERE', TRUE);
    }
}
/* End of file '20160220141706_create_enrollments' */
/* Location: .//home/prabhat/Documents/coursera/appcode/application/migrations/20160220141706_create_enrollments.php */
