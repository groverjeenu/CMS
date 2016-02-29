<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		this->load->library('ion_auth');

	}
	

	public function get_user()
	{
		$id = $this->ion_auth->get_user_id();

	}
}