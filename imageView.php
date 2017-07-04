<?php
	include 'db.php';
	if(isset($_GET['image_id']) && is_numeric($_GET['image_id'])){
		$sql = "SELECT imageType,imageData FROM output_images WHERE imageId=" .$_GET['image_id'];
		$result = $db->query($sql);
			$row = $result->fetch(PDO::FETCH_ASSOC);
			header("Content-type: ".$row["imageType"]);
			echo $row["imageData"];
		}
	$result->closeCursor();
?>