<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Essay_qsn extends CI_Migration
{
    public function __construct()
	{
	    parent::__construct();
	}
	
	public function up()
	{
	    $query = "CREATE TABLE IF NOT EXISTS `essay_qsn` (
				  `essay_id` int(11) NOT NULL,
				  `q_id` int(11) NOT NULL,
				  `r_id` int(11) NOT NULL,
				  `essay_cont` longtext NOT NULL,
				  `essay_score` int(11) NOT NULL,
				  `essay_status` int(11) NOT NULL DEFAULT '0',
				  `q_type` int(11) NOT NULL DEFAULT '0'
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($query);
    }
    
	public function down()
	{
		$this->db->query("DROP TABLE essay_qsn;");
	   // $this->dbforge->drop_table('SET_YOUR_TABLE_HERE', TRUE);
    }
}
/* End of file '20160220235323_essay_qsn' */
/* Location: .//home/prabhat/Documents/coursera/appcode/application/migrations/20160220235323_essay_qsn.php */
