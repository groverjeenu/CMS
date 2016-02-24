<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Quiz extends CI_Migration
{
    public function __construct()
	{
	    parent::__construct();
	}
	
	public function up()
	{
	    $query = "CREATE TABLE IF NOT EXISTS `quiz` (
				  `quid` int(11) NOT NULL,
				  `quiz_name` varchar(100) NOT NULL,
				  `description` text NOT NULL,
				  `start_time` int(11) NOT NULL,
				  `end_time` int(11) NOT NULL,
				  `duration` int(11) NOT NULL,
				  `pass_percentage` varchar(5) NOT NULL,
				  `test_type` int(1) NOT NULL,
				  `credit` varchar(10) NOT NULL,
				  `view_answer` int(1) NOT NULL,
				  `max_attempts` int(3) NOT NULL,
				  `correct_score` varchar(1000) NOT NULL,
				  `incorrect_score` varchar(1000) NOT NULL,
				  `institute_id` int(11) NOT NULL DEFAULT '1',
				  `qids_static` text,
				  `qselect` int(11) NOT NULL DEFAULT '1',
				  `ip_address` text NOT NULL,
				  `camera_req` int(1) NOT NULL DEFAULT '0',
				  `pract_test` int(11) NOT NULL DEFAULT '0'
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($query);
    }
    
	public function down()
	{
		$this->db->query("DROP TABLE quiz;");
	   // $this->dbforge->drop_table('SET_YOUR_TABLE_HERE', TRUE);
    }
}
/* End of file '20160220235417_quiz' */
/* Location: .//home/prabhat/Documents/coursera/appcode/application/migrations/20160220235417_quiz.php */
