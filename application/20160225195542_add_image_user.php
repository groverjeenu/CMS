<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Add_image_user extends CI_Migration
{
    public function __construct()
	{
	    parent::__construct();
	}
	
	public function up()
	{
	    $query = "ALTER TABLE `users` ADD column `image` VARCHAR(100) NOT NULL default 'user.png';";
		$this->db->query($query);
    }
    
	public function down()
	{
		$this->db->query("ALTER TABLE users drop column image;");
	   // $this->dbforge->drop_table('SET_YOUR_TABLE_HERE', TRUE);
    }
}
/* End of file '20160225195542_add_image_user' */
/* Location: .//home/sk/CMS/application/migrations/20160225195542_add_image_user.php */
