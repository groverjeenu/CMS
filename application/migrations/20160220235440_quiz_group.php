<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Quiz_group extends CI_Migration
{
    public function __construct()
	{
	    parent::__construct();
	}
	
	public function up()
	{
	    $query = "CREATE TABLE IF NOT EXISTS `quiz_group` (
				  `qgid` int(11) NOT NULL,
				  `quid` int(11) NOT NULL,
				  `gid` int(11) NOT NULL,
				  `institute_id` int(11) NOT NULL DEFAULT '1'
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($query);
    }
    
	public function down()
	{
		$this->db->query("DROP TABLE quiz_group;");
	   // $this->dbforge->drop_table('SET_YOUR_TABLE_HERE', TRUE);
    }
}
/* End of file '20160220235440_quiz_group' */
/* Location: .//home/prabhat/Documents/coursera/appcode/application/migrations/20160220235440_quiz_group.php */
