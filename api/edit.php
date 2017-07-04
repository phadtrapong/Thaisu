<?php
	include '../db.php';

	function is_html($string)
	{
  		return preg_match("/<[^<]+>/",$string,$m) != 0;
	}
	$isSuccess = false; 
	if (isset($_GET["id"])){

		$id = $_GET["id"];
		if(!is_html($id) && is_numeric($id)){

			$sql = "SELECT * FROM output_images WHERE imageId=".$id;
			$result = $db->query($sql);
			$row = $result->fetch(PDO::FETCH_ASSOC);
			$json_array = array(
    				'id' => $row['imageId'],
    				'name' => $row['name'],
    				'category' => $row['category'],
    				'isSuccess' => true
			);
			$isSuccess = true;
			echo json_encode($json_array);
		}
	}
	if(!$isSuccess){
		$json_error_arr = array(
			'isSuccess' => $isSuccess
		);
		echo json_encode($json_error_arr);
	}
?>