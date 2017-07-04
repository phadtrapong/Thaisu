<?php
	include 'session.php';

	if(isset($_POST['btn-upload'])){
		foreach($_POST AS $key => $value) { $_POST[$key] = ($value); }

		$header1 = $_POST['headerone'];
		$detail1 = $_POST['detailone'];
		$header2 = $_POST['headertwo'];
		$detail2 = $_POST['detailtwo'];
		$header3 = $_POST['headerthree'];
		$detail3 = $_POST['detailthree'];

		$sql1 = "UPDATE contact_us SET header='{$header1}', detail='{$detail1}'
		WHERE id = 2";
		$sql2 = "UPDATE contact_us SET header='{$header2}', detail='{$detail2}'
		WHERE id = 3";
		$sql3 = "UPDATE contact_us SET header='{$header3}', detail='{$detail3}'
		WHERE id = 4";

		try {
			$result1 = $db->query($sql1);
			$result2 = $db->query($sql2);
			$result3 = $db->query($sql3);
		}
		catch(PDOException $ex){
			echo "error cannot change contact us content";
		}
		header('Location: '.'./sloganUI.php');

	}
?>