<?php

require_once '../model.php';

if (isset($_POST['searchproduct'])) {
	
		echo $_POST['name'];

    try {
    	
    	$allSearchedUsers = searchProduct($_POST['name']);
    	require_once '../searchalluser.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

?>