<!-- Francesc Roca -->

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "m14-practica7-froca";
	
	try {
			$connexio = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
        }
?>