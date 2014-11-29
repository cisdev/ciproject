<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */


/*  ====================== Custom Constants By Dev Sharma =========================== */

define('MD5_PREFIX_PASS','dev_');
define('SITE_NAME','Devsharma');

define('BASE_PATH','ci_demo/');
define('HTTP_PATH', "http://".$_SERVER['HTTP_HOST'].'/'.BASE_PATH);
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/'.BASE_PATH);


define('ADMIN_HTTP_PATH', "http://".$_SERVER['HTTP_HOST'].'/'.BASE_PATH.'super_admin/');
define('ADMIN_ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/'.BASE_PATH.'super_admin/');


/*    ===============  admin path ==============   */
define('COMPANY_ADMIN_HTTP_PATH', "http://".$_SERVER['HTTP_HOST'].'/'.BASE_PATH.'admin/');
define('COMPANY_ADMIN_ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/'.BASE_PATH.'admin/');



/* ========================== Assets HTTP path ==============================*/
define('ASSETS_PATH', HTTP_PATH.'assets/');
define('IMG_PATH', ASSETS_PATH.'images/');
define('FONT_PATH', ASSETS_PATH.'fonts/');
define('EXPORT_PATH', ASSETS_PATH.'export/');
define('CSS_PATH', ASSETS_PATH.'css/');
define('JS_PATH', ASSETS_PATH.'js/');
define('LIB_PATH', ASSETS_PATH.'lib/');
define('CKEDITOR_PATH', LIB_PATH.'ckeditor/');
define('SCROLL_PATH', LIB_PATH.'scrollbar/');
define('JSUI_PATH', LIB_PATH.'jquery-ui/');
define('BLOCKUI_PATH', LIB_PATH.'blockUI/');
define('COLORBOX_PATH', LIB_PATH.'colorbox/');
define('JQWIDGETS_PATH', LIB_PATH.'jqwidgets/');
define('SELECT2_PATH', LIB_PATH.'select2/');
define('SLIDER_PATH', LIB_PATH.'slider/');
define('VALID_PATH', LIB_PATH.'validation/');

/* ---- Color Picker --- */
define('COLOR_PICKER_PATH', LIB_PATH.'colorpicker/');


define('UPLOAD_PATH', ASSETS_PATH.'uploads/' );
define('COMPANY_UPLOAD_PATH', UPLOAD_PATH.'company/' );



/* ========================== Assets ROOT path ==============================*/
define('ASSETS_ROOT_PATH', ROOT_PATH.'assets/');
define('IMG_ROOT_PATH', ASSETS_ROOT_PATH.'images/');
define('FONT_ROOT_PATH', ASSETS_ROOT_PATH.'fonts/');
define('EXPORT_ROOT_PATH', ASSETS_ROOT_PATH.'export/');
define('IMPORT_ROOT_PATH', ASSETS_ROOT_PATH.'import/');
define('CSS_ROOT_PATH', ASSETS_ROOT_PATH.'css/');
define('JS_ROOT_PATH', ASSETS_ROOT_PATH.'js/');
define('LIB_ROOT_PATH', ASSETS_ROOT_PATH.'lib/');
define('CKEDITOR_ROOT_PATH', LIB_ROOT_PATH.'ckeditor/');
define('SCROLL_ROOT_PATH', LIB_ROOT_PATH.'scrollbar/');
define('JSUI_ROOT_PATH', LIB_ROOT_PATH.'jquery-ui/');
define('BLOCKUI_ROOT_PATH', LIB_ROOT_PATH.'blockUI/');
define('COLORBOX_ROOT_PATH', LIB_ROOT_PATH.'colorbox/');
define('JQWIDGETS_ROOT_PATH', LIB_ROOT_PATH.'jqwidgets/');
define('SELECT2_ROOT_PATH', LIB_ROOT_PATH.'select2/');
define('SLIDER_ROOT_PATH', LIB_ROOT_PATH.'slider/');
define('VALID_ROOT_PATH', LIB_ROOT_PATH.'validation/');
define('UPLOAD_ROOT_PATH', ASSETS_ROOT_PATH.'uploads/' );
define('COMPANY_ROOT_UPLOAD_PATH', UPLOAD_ROOT_PATH.'company/' );



/* ========================== ADMIN HTTP ASSETS PATH ==============================*/
define('ADMIN_ASSETS_PATH', ASSETS_PATH.'admin/');
define('ADMIN_IMG_PATH', ADMIN_ASSETS_PATH.'images/');
define('ADMIN_ICONS_PATH', ADMIN_IMG_PATH.'icons/');
define('ADMIN_CSS_PATH', ADMIN_ASSETS_PATH.'css/');
define('ADMIN_JS_PATH', ADMIN_ASSETS_PATH.'js/');
define('ADMIN_CUSTOMJS_PATH', ADMIN_JS_PATH.'custom/');


/* ========================== ADMIN Assets ROOT path ==============================*/
define('ADMIN_ASSETS_ROOT_PATH', ROOT_PATH.'assets/admin/');
define('ADMIN_IMG_ROOT_PATH', ASSETS_PATH.'admin/assets/images/');
define('ADMIN_CSS_ROOT_PATH', ASSETS_PATH.'admin/assets/css/');
define('ADMIN_JS_ROOT_PATH', ASSETS_PATH.'admin/assets/js/');


define('PER_PAGE', '10');  // This is the number of results displayed per page
define('ENCRYPT_KEY','');  // this constant used for encrypting the ids

define('VMAX_FILE_SIZE',5000000);  // 5MB FILE SIZE



/* End of file constants.php */
/* Location: ./application/config/constants.php */