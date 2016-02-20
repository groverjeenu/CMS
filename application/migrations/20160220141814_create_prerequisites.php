<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Create_prerequisites extends CI_Migration
{
    public function __construct()
	{
	    parent::__construct();
	}
	
	public function up()
	{
	    $query = "CREATE TABLE `prerequisites` (
				  `course_id` int(11) NOT NULL,
				  `prereq_id` int(11) NOT NULL,
				  `strict` tinyint(4) NOT NULL DEFAULT '0',
				  PRIMARY KEY (`course_id`,`prereq_id`)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($query);
    }
    
	public function down()
	{
		$this->db->query("DROP TABLE prerequisites;");
	   // $this->dbforge->drop_table('SET_YOUR_TABLE_HERE', TRUE);
    }
}
/* End of file '20160220141814_create_prerequisites' */
/* Location: .//home/prabhat/Documents/coursera/appcode/application/migrations/20160220141814_create_prerequisites.php */
