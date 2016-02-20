<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Create_course_topics extends CI_Migration
{
    public function __construct()
	{
	    parent::__construct();
	}
	
	public function up()
	{
	    $query = "CREATE TABLE `course_topics` (
			  `course_id` int(11) NOT NULL,
			  `topic_id` int(11) NOT NULL,
			  PRIMARY KEY (`course_id`,`topic_id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($query);
    }
    
	public function down()
	{
		$this->db->query("DROP TABLE course_topics;");
	   // $this->dbforge->drop_table('SET_YOUR_TABLE_HERE', TRUE);
    }
}
/* End of file '20160220141512_create_course_topics' */
/* Location: .//home/prabhat/Documents/coursera/appcode/application/migrations/20160220141512_create_course_topics.php */
