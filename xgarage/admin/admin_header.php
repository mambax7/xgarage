<?php
include("../../../mainfile.php");
include_once(XOOPS_ROOT_PATH."/class/xoopsmodule.php");
include(XOOPS_ROOT_PATH."/include/cp_functions.php");

	$mydirname = basename( dirname( dirname( __FILE__ ) ) ) ;
	
	require_once( XOOPS_ROOT_PATH."/modules/$mydirname/include/gtickets.php" ) ;

if ( $xoopsUser ) {
	$xoopsModule = XoopsModule::getByDirname("garage");
	if ( !$xoopsUser->isAdmin($xoopsModule->mid()) ) { 
		redirect_header(XOOPS_URL."/",3,_NOPERM);
		exit();
	}
} else {
	redirect_header(XOOPS_URL."/",3,_NOPERM);
	exit();
}
if ( file_exists("../language/".$xoopsConfig['language']."/admin.php") ) {
	include("../language/".$xoopsConfig['language']."/admin.php");
} else {
	include("../language/english/admin.php");
}
$myts =& MyTextSanitizer::getInstance();
?>