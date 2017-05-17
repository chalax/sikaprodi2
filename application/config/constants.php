<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

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
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

$GLOBALS['clxsalt'] =md5('ch4l4x');
function clxsalt(){
	return $GLOBALS['clxsalt'];
}

function isusercan($requstedcapability='',$object='',$objectid=''){

	// capabilities = 'editown', 'viewall'

	$CI =& get_instance();
	$iduser = $CI->session->userdata('iduser');
	$idlogin = $CI->session->userdata('idlogin');
	$user_capability =array();

	$s = $CI->db->query("select a.*,b.* from login as a, user as b where a.id_login=$idlogin and b.id_user=$iduser and a.id_login=b.id_login");
	if($s->num_rows()>0){
		$ss =$s->result_array();
		$user_capability = explode(",", $ss[0]['user_capability']);
		
	}

	if($requstedcapability=='editown'){
		//object adalah item yang dibuat dan properti adalah id_dari item tersebut
		if(isdraf() && isown()){
			return true;
		}else{
			return false;
		}

	}elseif ($requstedcapability=='viewall') {
		return in_array($requstedcapability, $user_capability);
	}elseif ($requstedcapability=='createsubmission') {
		if(iskaps()){
			return true;
		}else{
			return false;
		}
	}
	

}

function iskajur(){
	$CI =& get_instance();
	$positin = $CI->session->userdata['position'];
	if($position=='Kajur'){
		return true;
	}else{
		return false;
	}
}

function iskaps(){
	$CI =& get_instance();
	$position = $CI->session->userdata['position'];
	if($position=='KaPS'){
		return true;
	}else{
		return false;
	}
}

function isadmin(){
	$CI =& get_instance();
	$position = $CI->session->userdata['position'];
	if($position=='Administrator'){
		return true;
	}else{
		return false;
	}
}

function isdraf($idsubmission){
	$CI =& get_instance();
	$rs = $CI->db->query("select * from submission where id_submission = $idsubmission and status_submission = 'draft'");
	if($rs->num_rows()>0){
		return true;
	}else{
		return false;
	}
}

function isown($idsubmission){
	$CI =& get_instance();
	$iduser = $CI->session->userdata('iduser');
	$s = $CI->db->query("select * from submission where id_submission=$idsubmission and id_user=$iduser");
	if($s->num_rows()>0){
		return true;
	}else{
		return false;
	}
}

function islogin(){
	$CI =& get_instance();
	if(null !== $CI->session->userdata('idlogin')){
		return true;
    }else{
    	return false;
    }
}
