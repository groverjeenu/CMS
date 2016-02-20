<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Create_lectures extends CI_Migration
{
    public function __construct()
	{
	    parent::__construct();
	}
	
	public function up()
	{
	    $query = "CREATE TABLE `lectures` (
				  `id` int(11) NOT NULL,
				  `course_id` int(11) NOT NULL,
				  `upload_time` timestamp NOT NULL,
				  `name` varchar(128) NOT NULL,
				  `hastext` int(11) DEFAULT NULL,
				  `extension` varchar(45) DEFAULT NULL,
				  `duration` time DEFAULT NULL,
				  PRIMARY KEY (`id`)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($query);
    }
    
	public function down()
	{
		$this->db->query("DROP TABLE lectures;");
	   // $this->dbforge->drop_table('SET_YOUR_TABLE_HERE', TRUE);
    }
}
/* End of file '20160220141757_create_lectures' */
/* Location: .//home/prabhat/Documents/coursera/appcode/application/migrations/20160220141757_create_lectures.php */
