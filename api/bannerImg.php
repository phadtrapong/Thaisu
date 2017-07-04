<?php
	include '../db.php';

	$imgUrl = '';
	$name = '';
	$imgUrl2 = '';
	$name2 = '';
	$imgUrl3 = '';
	$name3 = '';
	$imgUrl4 = '';
	$name4 = '';
	$imgUrl5 = '';
	$name5 = '';
	$imgUrl6 = '';
	$name6 = '';

	$slogan1 = '';
	$slogan2 = '';
	$slogan3 = '';

	$query = "SELECT * FROM output_images WHERE category = 'caurosal1' ORDER BY imageId DESC LIMIT 1";
	$query2 = "SELECT * FROM output_images WHERE category = 'caurosal2' ORDER BY imageId DESC LIMIT 1";
	$query3 = "SELECT * FROM output_images WHERE category = 'caurosal3' ORDER BY imageId DESC LIMIT 1";
	$query4 = "SELECT * FROM output_images WHERE category = 'news1' ORDER BY imageId DESC LIMIT 1";
	$query5 = "SELECT * FROM output_images WHERE category = 'news2' ORDER BY imageId DESC LIMIT 1";
	$query6 = "SELECT * FROM output_images WHERE category = 'news3' ORDER BY imageId DESC LIMIT 1";
	$querySlogan1 = "SELECT * FROM contact_us WHERE id=2";
	$querySlogan2 = "SELECT * FROM contact_us WHERE id=3";
	$querySlogan3 = "SELECT * FROM contact_us WHERE id=4";

	$imgResult = $db->query($query);
	$imgResult2 = $db->query($query2);
	$imgResult3 = $db->query($query3);
	$imgResult4 = $db->query($query4);
	$imgResult5 = $db->query($query5);
	$imgResult6 = $db->query($query6);
	$slogan1Result = $db->query($querySlogan1);
	$slogan2Result = $db->query($querySlogan2);
	$slogan3Result = $db->query($querySlogan3);

	$dbResultx = ($imgResult->rowCount() > 0) ? true : false;
	$dbResultx2 = ($imgResult2->rowCount() > 0) ? true : false;
	$dbResultx3 = ($imgResult3->rowCount() > 0) ? true : false;
	$dbResultx4 = ($imgResult4->rowCount() > 0) ? true : false;
	$dbResultx5 = ($imgResult5->rowCount() > 0) ? true : false;
	$dbResultx6 = ($imgResult6->rowCount() > 0) ? true : false;
	$dbResultx7 = ($slogan1Result->rowCount() > 0) ? true : false;
	$dbResultx8 = ($slogan2Result->rowCount() > 0) ? true : false;
	$dbResultx9 = ($slogan3Result->rowCount() > 0) ? true : false;

	if($dbResultx){
		$row = $imgResult->fetch(PDO::FETCH_ASSOC);
		$imgUrl = 'imageView.php?image_id='.$row["imageId"];
		$output[] = array( 'url' => 'imageView.php?image_id='.$row["imageId"], 'name' => $row['name'] );
	}
	if($dbResultx2){
		$row2 = $imgResult2->fetch(PDO::FETCH_ASSOC);
		$imgUrl2 = 'imageView.php?image_id='.$row2["imageId"];
		$output[] = array( 'url' => 'imageView.php?image_id='.$row2["imageId"], 'name' => $row2['name'] );
	}
	if($dbResultx3){
		$row3 = $imgResult3->fetch(PDO::FETCH_ASSOC);
		$imgUrl3 = 'imageView.php?image_id='.$row3["imageId"];
		$output[] = array( 'url' => 'imageView.php?image_id='.$row3["imageId"], 'name' => $row3['name'] );
	}
	if($dbResultx4){
		$row4 = $imgResult4->fetch(PDO::FETCH_ASSOC);
		$imgUrl4 = 'imageView.php?image_id='.$row4["imageId"];
		$output[] = array( 'url' => 'imageView.php?image_id='.$row4["imageId"], 'name' => $row4['name'] );
	}
	if($dbResultx5){
		$row5 = $imgResult5->fetch(PDO::FETCH_ASSOC);
		$imgUrl5 = 'imageView.php?image_id='.$row5["imageId"];
		$output[] = array( 'url' => 'imageView.php?image_id='.$row5["imageId"], 'name' => $row5['name'] );
	}
	if($dbResultx6){
		$row6 = $imgResult6->fetch(PDO::FETCH_ASSOC);
		$imgUrl6 = 'imageView.php?image_id='.$row6["imageId"];
		$output[] = array( 'url' => 'imageView.php?image_id='.$row6["imageId"], 'name' => $row6['name'] );
	}
	if($dbResultx7){
		$row7 = $slogan1Result->fetch(PDO::FETCH_ASSOC);
		$slogan1 = $row7['detail'];
		$output[] = array('name' => 'slogan1', 'header' => $row7['header'], 'detail' => $row7['detail'] );
	}
	if($dbResultx8){
		$row8 = $slogan2Result->fetch(PDO::FETCH_ASSOC);
		$slogan2 = $row8['detail'];
		$output[] = array('name' => 'slogan2', 'header' => $row8['header'], 'detail' => $row8['detail'] );
	}
	if($dbResultx9){
		$row9 = $slogan3Result->fetch(PDO::FETCH_ASSOC);
		$slogan3 = $row9['detail'];
		$output[] = array('name' => 'slogan3', 'header' => $row9['header'], 'detail' => $row9['detail'] );
	}

	echo json_encode($output);
?>