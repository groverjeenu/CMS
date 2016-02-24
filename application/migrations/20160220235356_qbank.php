<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Qbank extends CI_Migration
{
    public function __construct()
	{
	    parent::__construct();
	}
	
	public function up()
	{
	    $query = "CREATE TABLE IF NOT EXISTS `qbank` (
				  `qid` int(11) NOT NULL,
				  `question` text NOT NULL,
				  `description` text NOT NULL,
				  `cid` int(11) NOT NULL,
				  `did` int(11) NOT NULL,
				  `institute_id` int(11) NOT NULL DEFAULT '1',
				  `q_type` int(11) NOT NULL
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($query);
    }
    
	public function down()
	{
		$this->db->query("DROP TABLE qbank;");
	   // $this->dbforge->drop_table('SET_YOUR_TABLE_HERE', TRUE);
    }
}
/* End of file '20160220235356_qbank' */
/* Location: .//home/prabhat/Documents/coursera/appcode/application/migrations/20160220235356_qbank.php */
