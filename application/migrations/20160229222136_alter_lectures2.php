<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Alter_lectures2 extends CI_Migration
{
    public function __construct()
	{
	    parent::__construct();
	}
	
	public function up()
	{
	    $query = "ALTER TABLE `lectures` 
					CHANGE COLUMN `id` `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
					CHANGE COLUMN `course_id` `course_id` INT(11) UNSIGNED NOT NULL ;
					";
		$this->db->query($query);
    }
    
	public function down()
	{
		$this->db->query("");
	   // $this->dbforge->drop_table('SET_YOUR_TABLE_HERE', TRUE);
    }
}
/* End of file '20160229222136_alter_lectures2' */
/* Location: .//home/prabhat/Documents/coursera/appcode/application/migrations/20160229222136_alter_lectures2.php */
