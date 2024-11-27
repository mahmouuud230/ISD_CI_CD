<?php
	$conn = new mysqli('db', 'db_admin', 'pass', 'library_db');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>
