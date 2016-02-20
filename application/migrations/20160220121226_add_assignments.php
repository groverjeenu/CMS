<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_assignments extends CI_Migration {

	public function up()
	{
		$query ="CREATE TABLE `assignments` (
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
					) ENGINE=InnoDB DEFAULT CHARSET=utf8;"
		$this->db->query($query);
	}

	public function down()
	{
		$query = "DROP TABLE assignments";
		$this->db->query($query);
	}

}
