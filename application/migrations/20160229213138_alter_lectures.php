<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Alter_lectures extends CI_Migration
{
    public function __construct()
	{
	    parent::__construct();
	}
	
	public function up()
	{
	    $query = "ALTER TABLE `lectures` 
					CHANGE COLUMN `hastext` `videoname` VARCHAR(128) NOT NULL ,
					CHANGE COLUMN `extension` `textname` VARCHAR(128) NOT NULL ,
					CHANGE COLUMN `duration` `description` TEXT NOT NULL ,
					ADD COLUMN `is_public` TINYINT NOT NULL AFTER `description`;
					";
		$this->db->query($query);
    }
    
	public function down()
	{
		$this->db->query("ALTER TABLE lectures DROP COLUMN is_public");
	   // $this->dbforge->drop_table('SET_YOUR_TABLE_HERE', TRUE);
    }
}
/* End of file '20160229213138_alter_lectures' */
/* Location: .//home/prabhat/Documents/coursera/appcode/application/migrations/20160229213138_alter_lectures.php */
