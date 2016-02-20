<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Create_submissions extends CI_Migration
{
    public function __construct()
	{
	    parent::__construct();
	}
	
	public function up()
	{
	    $query = "CREATE TABLE `submissions` (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
				  `assignment_id` int(11) NOT NULL,
				  `credit_obtained` double NOT NULL DEFAULT '0',
				  `submitter_id` int(11) NOT NULL,
				  `submiss_time` timestamp NOT NULL,
				  `isgraded` tinyint(4) NOT NULL,
				  `graded_by` int(11) DEFAULT NULL,
				  `penalty` double NOT NULL DEFAULT '0',
				  PRIMARY KEY (`id`)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($query);
    }
    
	public function down()
	{
		$this->db->query("DROP TABLE submissions;");
	   // $this->dbforge->drop_table('SET_YOUR_TABLE_HERE', TRUE);
    }
}
/* End of file '20160220141828_create_submissions' */
/* Location: .//home/prabhat/Documents/coursera/appcode/application/migrations/20160220141828_create_submissions.php */
