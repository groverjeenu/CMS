<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_courses extends CI_Migration {

	public function up()
	{
		$query ="CREATE TABLE `courses` (
				  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT,
				  `course_name` varchar(45) NOT NULL,
				  `description` varchar(45) NOT NULL,
				  `syllabus` longtext NOT NULL,
				  `course_key` varchar(45) DEFAULT NULL,
				  PRIMARY KEY (`cid`)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$this->db->query($query);
	}

	public function down()
	{
		$query = "DROP TABLE courses";
		$this->db->query($query);
	}

}
