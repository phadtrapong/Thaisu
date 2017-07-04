<?php
	include 'session.php';

	if(isset($_POST['btn-upload'])){
		foreach($_POST AS $key => $value) { $_POST[$key] = ($value); }
		$id = $_POST['id'];
		$imgSize = $_FILES['file']['size'];
		$imgErrorCode = $_FILES['file']['error'];
		$imgData = addslashes(file_get_contents($_FILES['file']['tmp_name']));
		$imageProperties = getimageSize($_FILES['file']['tmp_name']);

		$sqlNotUpdateImg = "UPDATE output_images 
		SET 
		name='{$_POST['name']}',
		category='{$_POST['category']}'
		WHERE imageId={$id}";

		$sqlUpdateImg = "UPDATE output_images 
		SET 
		imageType='{$imageProperties['mime']}',
		imageData='{$imgData}',
		name='{$_POST['name']}',
		category='{$_POST['category']}'
		WHERE imageId={$id}";

		try {
			if($imgSize != 0 && $imgErrorCode == 0 && $id > 0){ // imgSize not 0 and file not an error 
				$result2 = $db->query($sqlUpdateImg);
			}
			else if($id > 0){
				$result3 = $db->query($sqlNotUpdateImg);
			}
		}
		catch(PDOException $ex){
			echo "error cannot updating database";
		}
		header('Location: '.'./editProducts.php?id='.$id);

	}
?>