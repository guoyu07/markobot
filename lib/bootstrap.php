<?
require_once('constants.php');

// set internal encoding with utf-8.
mb_internal_encoding('UTF-8');

// set include path for batch processing.
// it is better not to set using htaccess.
set_include_path(get_include_path() . PATH_SEPARATOR . realpath('../db'));
set_include_path(get_include_path() . PATH_SEPARATOR . realpath('../lib'));
set_include_path(get_include_path() . PATH_SEPARATOR . realpath('../lib/contrib'));
