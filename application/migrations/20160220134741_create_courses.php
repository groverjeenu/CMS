<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

// You can find dbforge usage examples here: http://ellislab.com/codeigniter/user-guide/database/forge.html


class Migration_Create_courses extends CI_Migration
{	
	public function up()
	{
	    $fields = array(
            'id' => array(
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
                'auto_increment' => TRUE
            )
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('courses', TRUE);
    }
    
	public function down()
	{
	    $this->dbforge->drop_table('courses', TRUE);
    }
}
/* End of file '20160220134741_create_courses' */
/* Location: .//home/prabhat/Documents/coursera/appcode/application/migrations/20160220134741_create_courses.php */
