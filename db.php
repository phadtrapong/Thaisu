<?php
	$host = "localhost";
	$username = "";
	$password = "";
	$db_name = "";

	$db = new PDO("mysql:host=localhost;dbname=", $username, $password);
        $db->exec("set names utf8");
?>
