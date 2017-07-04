<?php
include 'session.php';
$id =(int)$_GET['id'];

// sending query
try {
$result = $db->query("DELETE FROM output_images WHERE imageId = '$id'");
}
catch(PDOException $ex){
	echo "error cannot delete";
}
header('Location: '.'./view.php');
?>