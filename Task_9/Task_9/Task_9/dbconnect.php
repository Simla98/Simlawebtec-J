<?php 

	function connect() {
		$conn = new mysqli("localhost", "Shimla_Sadik", "YES", "user.sql");
		if($conn->connect_errno) {
			die("Connection failed due to" . $conn->connect_error);
		}

		return $conn;
	}


?>