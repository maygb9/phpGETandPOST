<?php
    // Retrieve the URL variables (using PHP).
    $num = $_GET['myNumber'];
    $fruit = $_GET['myFruit'];
	$json = array("status" => 200, "msg" => "Executed call!");
    /* Output header */
	header('Content-type: application/json');
	echo json_encode($json);
	
?>