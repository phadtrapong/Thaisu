<?php
	include '../db.php';

	$service1 = '';

	$queryService1 = "SELECT * FROM contact_us WHERE id=5";

	$serviceResult1 = $db->query($queryService1);
	$dbResultx1 = ($serviceResult1->rowCount() > 0) ? true : false;

	if($dbResultx1){
		$row7 = $serviceResult1->fetch(PDO::FETCH_ASSOC);
		$output[] = array('name' => 'Service', 'header' => $row7['header'], 'detail' => $row7['detail'] );
	}

	echo json_encode($output);
?>