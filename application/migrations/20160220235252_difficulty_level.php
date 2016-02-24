<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Difficulty_level extends CI_Migration
{
    public function __construct()
	{
	    parent::__construct();
	}
	
	public function up()
	{
	    $query = "CREATE TABLE IF NOT EXISTS `difficulty_level` (
				  `did` int(11) NOT NULL,
				  `level_name` varchar(100) NOT NULL,
				  `institute_id` int(11) NOT NULL DEFAULT '1'
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($query);
    }
    
	public function down()
	{
		$this->db->query("DROP TABLE difficulty_level;");
	   // $this->dbforge->drop_table('SET_YOUR_TABLE_HERE', TRUE);
    }
}
/* End of file '20160220235252_difficulty_level' */
/* Location: .//home/prabhat/Documents/coursera/appcode/application/migrations/20160220235252_difficulty_level.php */
