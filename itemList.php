<?php
include 'session.php';
$data = array();
$sql = "SELECT * FROM output_images ORDER BY imageId DESC";
$result_set=mysql_query($sql, $link);
while($row = mysql_fetch_array($result_set))
{
	$data[] = [ 'data' => 
	[
	'imageId' => $row['imageId'], 
	'name' =>  $row["name"], 
	'category'=> $row["category"] 
	]
	];
}
echo json_encode($data);
?>