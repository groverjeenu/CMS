<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');


$config['upload_path']          = './contents/videos';
$config['allowed_types']        = 'mpeg|mpg|mpe|3gp|mp4';
$config['file_ext_tolower']		= TRUE;
$config['encrypt_name']			= TRUE;
$config['max_size']             = 500000;

/*'mpeg'	=>	'video/mpeg',
	'mpg'	=>	'video/mpeg',
	'mpe'	=>	'video/mpeg',
	'qt'	=>	'video/quicktime',
	'mov'	=>	'video/quicktime',
	'avi'	=>	array('video/x-msvideo', 'video/msvideo', 'video/avi', 'application/x-troff-msvideo'),
	'movie'	=>	'video/x-sgi-movie',
	'3g2'   =>	'video/3gpp2',
	'3gp'   =>	array('video/3gp', 'video/3gpp'),
	'mp4'   =>	'video/mp4',
	'm4a'   =>	'audio/x-m4a',
	'f4v'   =>	array('video/mp4', 'video/x-f4v'),
	'flv'	=>	'video/x-flv',
	'webm'	=>	'video/webm',*/