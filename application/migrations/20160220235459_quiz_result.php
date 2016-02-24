<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Quiz_result extends CI_Migration
{
    public function __construct()
	{
	    parent::__construct();
	}
	
	public function up()
	{
	    $query = "CREATE TABLE IF NOT EXISTS `quiz_result` (
				  `rid` int(11) NOT NULL,
				  `uid` int(11) NOT NULL,
				  `quid` int(11) NOT NULL,
				  `qids` text NOT NULL,
				  `category_name` varchar(1000) DEFAULT NULL,
				  `qids_range` varchar(1000) DEFAULT NULL,
				  `oids` text NOT NULL,
				  `start_time` int(11) NOT NULL,
				  `end_time` int(11) NOT NULL,
				  `last_response` int(11) NOT NULL,
				  `time_spent` int(11) NOT NULL,
				  `time_spent_ind` text NOT NULL,
				  `score` float NOT NULL,
				  `percentage` varchar(10) NOT NULL DEFAULT '0',
				  `q_result` int(11) NOT NULL,
				  `status` int(11) NOT NULL DEFAULT '0',
				  `institute_id` int(11) NOT NULL DEFAULT '1',
				  `photo` text NOT NULL,
				  `essay_ques` int(11) NOT NULL DEFAULT '0',
				  `score_ind` varchar(2000) NOT NULL
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($query);
    }
    
	public function down()
	{
		$this->db->query("DROP TABLE quiz_result;");
	   // $this->dbforge->drop_table('SET_YOUR_TABLE_HERE', TRUE);
    }
}
/* End of file '20160220235459_quiz_result' */
/* Location: .//home/prabhat/Documents/coursera/appcode/application/migrations/20160220235459_quiz_result.php */
