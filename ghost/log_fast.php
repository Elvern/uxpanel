<?php

include("../include/common.php");
include("../config.php");
include("../include/session.php");
include("../include/dbconnect.php");

include("../include/account.php");
include("../include/ghost.php");

if(isset($_SESSION['account_id']) && isset($_REQUEST['id']) && is_numeric($_REQUEST['id']) && isset($_SESSION['is_' . $_REQUEST['id'] . '_ghost']) && isset($_REQUEST['last_line'])) {
	$log = ghostGetLogFast($_REQUEST['id'], $_REQUEST['last_line']);
	
	if($log !== false) {
		foreach($log as $line) {
			echo $line . "\n";
		}
	}
} else {
	header("Location: ../panel/");
}

?>
