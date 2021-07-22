<?php

// 	
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "projectintern");

$conn= mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>