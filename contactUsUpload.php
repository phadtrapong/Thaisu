<?php
	include 'session.php';

	if(isset($_POST['btn-upload'])){
		foreach($_POST AS $key => $value) { $_POST[$key] = ($value); }

		$imgSize = $_FILES['file']['size'];
		$imgErrorCode = $_FILES['file']['error'];
		$imgData = addslashes(file_get_contents($_FILES['file']['tmp_name']));
		$imageProperties = getimageSize($_FILES['file']['tmp_name']);

		$sql = "UPDATE contact_us SET header='{$_POST['header']}', detail='{$_POST['detail']}'
		WHERE id = 1";

		$sql2 = "INSERT INTO output_images(imageType ,imageData, name, category)
		VALUES('{$imageProperties['mime']}', '{$imgData}', 'aboutus', 'aboutus')";

		try {
			$result = $db->query($sql);
			if($imgSize != 0 && $imgErrorCode == 0){ // imgSize not 0 and file not an error 
				$result2 = $db->query($sql2);
			}
		}
		catch(PDOException $ex){
			echo "error cannot change contact us content";
		}
		header('Location: '.'./uploadContact.php');

	}
?>