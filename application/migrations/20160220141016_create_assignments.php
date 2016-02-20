<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Create_assignments extends CI_Migration
{
    public function __construct()
	{
	    parent::__construct();
	}
	
	public function up()
    {
        $query = "CREATE TABLE `assignments` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `course_id` int(11) NOT NULL,
              `credits` int(10) unsigned NOT NULL,
              `outdate` datetime NOT NULL,
              `deadline` datetime NOT NULL,
              `hard_deadline` datetime NOT NULL,
              `upload_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `update_time` timestamp NOT NULL,
              `name` varchar(45) NOT NULL,
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
    }
    
    public function down()
    {
        $this->db->query("DROP TABLE assignments;");
    }
}
/* End of file '20160220141016_create_assignments' */
/* Location: .//home/prabhat/Documents/coursera/appcode/application/migrations/20160220141016_create_assignments.php */
