<?php
	$servername = "localhost";
	$username = "u875483083_cdstr";
	$password = "dG5H@BL5>nBA!5`LwG";
	$dbname = "u875483083_ft";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	    //die("Connection failed: " . $conn->connect_error);
		echo 0;
	} 

	function Cadastro($email, $conn){
		$stmt = $conn->prepare("INSERT INTO cadastro (email) VALUES (?)");
		$stmt->bind_param("s", $email);
		if($stmt->execute())
			echo 1;
		else
			echo 0;
	}
?>
