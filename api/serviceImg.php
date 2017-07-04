<?php
	include '../db.php';

	$id = 0;
	$query = "SELECT * FROM output_images WHERE category = 'service' ORDER BY imageId DESC LIMIT 1";
	$imgResult = $db->query($query);
	$dbResultx = ($imgResult->rowCount() > 0) ? true : false;
	if($dbResultx){
	    $row2 = $imgResult->fetch(PDO::FETCH_ASSOC);
	    $id = $row2['imageId'];
	 }
	echo json_encode($id);
?>