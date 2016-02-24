<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Quiz_qids extends CI_Migration
{
    public function __construct()
	{
	    parent::__construct();
	}
	
	public function up()
	{
	    $query = "CREATE TABLE IF NOT EXISTS `quiz_qids` (
				  `qquid` int(11) NOT NULL,
				  `quid` text NOT NULL,
				  `cid` text NOT NULL,
				  `did` text NOT NULL,
				  `no_of_questions` int(11) NOT NULL,
				  `institute_id` int(11) NOT NULL DEFAULT '1'
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($query);
    }
    
	public function down()
	{
		$this->db->query("DROP TABLE quiz_qids;");
	   // $this->dbforge->drop_table('SET_YOUR_TABLE_HERE', TRUE);
    }
}
/* End of file '20160220235450_quiz_qids' */
/* Location: .//home/prabhat/Documents/coursera/appcode/application/migrations/20160220235450_quiz_qids.php */
