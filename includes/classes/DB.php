<?php

// $servername = "127.0.0.1";
// $username = "root";
// $password = "";
// $dbname = "23w11";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
// } 

class DB {

	private static function connect() {
		$pdo = new PDO('mysql:host=127.0.0.1;dbname=indoc;charset=utf8', 'root', '');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}

	public static function query($query, $params = array()) {
		$statement = self::connect()->prepare($query);
		$statement->execute($params);

		if (explode(' ', $query)[0] == 'SELECT') {
			$data = $statement->fetchAll();
			return $data;
		}

		
	}

}	

?>