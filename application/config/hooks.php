<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['pre_controller'][] = array(
	'class'    => '',
	'function' => 'webconfig_session',
	'filename' => 'webconfig.php',
	'filepath' => 'hooks'
);

$hook['pre_controller'][] = array(
	'class'    => 'MY_Setup',
	'function' => 'check',
	'filename' => 'Setup.php',
	'filepath' => 'libraries'
);

$hook['pre_controller'][] = array(
	'class'    => 'MY_Authorize',
	'function' => 'check',
	'filename' => 'Authorize.php',
	'filepath' => 'libraries'
);

$hook['post_controller_constructor'][] = array(
	'class'    => 'MY_Page',
	'function' => 'load_theme',
	'filename' => 'Page.php',
	'filepath' => 'libraries'
);


/* End of file hooks.php */
/* Location: ./application/config/hooks.php */
