<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Create_difficult_level extends CI_Migration
{
    public function __construct()
	{
	    parent::__construct();
	}
	
	public function up()
	{
	    $query = "CREATE TABLE IF NOT EXISTS `difficult_level` (
				  `did` int(11) NOT NULL,
				  `level_name` varchar(100) NOT NULL,
				  `institute_id` int(11) NOT NULL DEFAULT '1'
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($query);
    }
    
	public function down()
	{
		$this->db->query("DROP TABLE difficult_level;");
	   // $this->dbforge->drop_table('SET_YOUR_TABLE_HERE', TRUE);
    }
}
/* End of file '20160229234123_create_difficult_level' */
/* Location: .//home/prabhat/Documents/coursera/appcode/application/migrations/20160229234123_create_difficult_level.php */
