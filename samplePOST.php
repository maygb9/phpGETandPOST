<?php

    $n1 = $_POST['No1'];
    $n2 = $_POST['No2'];
	$result = $n1." ".$n2;
	
    $json = array("status" => 200, "msg" => "POST Executed call!");
	/* Output header */
	header('Content-type: application/json');
	echo json_encode($json);
	
?>