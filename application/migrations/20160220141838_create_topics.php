<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Create_topics extends CI_Migration
{
    public function __construct()
	{
	    parent::__construct();
	}
	
	public function up()
	{
	    $query = "CREATE TABLE `topics` (
			  `id` int(11) NOT NULL,
			  `name` varchar(128) NOT NULL,
			  `parent_id` int(11) NOT NULL,
			  `description` varchar(128) DEFAULT NULL,
			  PRIMARY KEY (`id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($query);
    }
    
	public function down()
	{
		$this->db->query("DROP TABLE topics;");
	   // $this->dbforge->drop_table('SET_YOUR_TABLE_HERE', TRUE);
    }
}
/* End of file '20160220141838_create_topics' */
/* Location: .//home/prabhat/Documents/coursera/appcode/application/migrations/20160220141838_create_topics.php */
