<?php
	include 'session.php';

	if(isset($_POST['btn-upload'])){
		foreach($_POST AS $key => $value) { $_POST[$key] = ($value); }

		$id = 0;

		$imgSize = $_FILES['file']['size'];
		$imgErrorCode = $_FILES['file']['error'];
		$imgData = addslashes(file_get_contents($_FILES['file']['tmp_name']));
		$imageProperties = getimageSize($_FILES['file']['tmp_name']);

		$imgSize2 = $_FILES['file2']['size'];
		$imgErrorCode2 = $_FILES['file2']['error'];
		$imgData2 = addslashes(file_get_contents($_FILES['file2']['tmp_name']));
		$imageProperties2 = getimageSize($_FILES['file2']['tmp_name']);

		$imgSize3 = $_FILES['file3']['size'];
		$imgErrorCode3 = $_FILES['file3']['error'];
		$imgData3 = addslashes(file_get_contents($_FILES['file3']['tmp_name']));
		$imageProperties3 = getimageSize($_FILES['file3']['tmp_name']);

		$sql = "INSERT INTO output_images(imageType ,imageData, name, category)
		VALUES('{$imageProperties['mime']}', '{$imgData}', '{$_POST['name']}', 'caurosal1')";
		$sqlnext = "SELECT * FROM output_images
		WHERE name = '{$_POST['name']}' and category = 'caurosal1' ";

		$sql2 = "INSERT INTO output_images(imageType ,imageData, name, category)
		VALUES('{$imageProperties2['mime']}', '{$imgData2}', '{$_POST['name2']}', 'caurosal2')";
		$sqlnext2 = "SELECT * FROM output_images
		WHERE name = '{$_POST['name2']}' and category = 'caurosal2' ";

		$sql3 = "INSERT INTO output_images(imageType ,imageData, name, category)
		VALUES('{$imageProperties3['mime']}', '{$imgData3}', '{$_POST['name3']}', 'caurosal3')";
		$sqlnext3 = "SELECT * FROM output_images
		WHERE name = '{$_POST['name3']}' and category = 'caurosal3' ";

		try {
			// first item
			if($imgSize != 0 && $imgErrorCode == 0){
				$result = $db->query($sql);
			}
			else{
				$resultNext = $db->query($sqlnext);
			}
			// second item
			if($imgSize2 != 0 && $imgErrorCode2 == 0){
				$result2 = $db->query($sql2);
			}
			else{
				$resultNext2 = $db->query($sqlnext2);
			}
			// third item
			if($imgSize3 != 0 && $imgErrorCode3 == 0){
				$result3 = $db->query($sql3);
			}
			else{
				$resultNext3 = $db->query($sqlnext3);
			}
		}
		catch(PDOException $ex){
			echo "error cannot add caurosal item";
		}
		header('Location: '.'./caurosalUI.php');

	}
?>