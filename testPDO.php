<?php
	$host = "localhost";
	$username = "root";
	$password = "skywalker";
	$db_name = "showitem";

	$db = new PDO("mysql:host=localhost;dbname=showitem", $username, $password);
	$query = "SELECT * FROM output_images WHERE category='KAD' ORDER BY imageId DESC";
        $result = $db->query($query);
        $count = ($result->fetchColumn() > 0) ? true : false;
        if($count){
        	while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            {
            	echo $row["name"];
            }
        }
    }
?>