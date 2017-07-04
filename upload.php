<?php
	include 'session.php';

	if(isset($_POST['btn-upload'])){
		foreach($_POST AS $key => $value) { $_POST[$key] = ($value); }

		$id = 0;
		$imgData = addslashes(file_get_contents($_FILES['file']['tmp_name']));
		$imageProperties = getimageSize($_FILES['file']['tmp_name']);

		$sql = "INSERT INTO output_images(imageType ,imageData, name, category)
		VALUES('{$imageProperties['mime']}', '{$imgData}', '{$_POST['name']}', '{$_POST['category']}')";

		$sqlnext = "SELECT * FROM output_images
		WHERE name = '{$_POST['name']}' and category = '{$_POST['category']}'";

		try {
			$result = $db->query($sql);
			$resultnext = $db->query($sqlnext);
            $dbResultx = ($resultnext->rowCount() > 0) ? true : false;
                if($dbResultx){
                    $row = $resultnext->fetch(PDO::FETCH_ASSOC);
                    $id = $row['imageId'];
                }
		}
		catch(PDOException $ex){
			echo "error cannot add item";
		}
		header('Location: '.'./editProducts.php?id='.$id);

	}
?>