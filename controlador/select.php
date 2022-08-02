<!-- Francesc Roca -->

<?php

if(isset($_POST['submit'])){

	$usuari = $_POST['usuari'];
	$contrasenya = $_POST['contrasenya'];
    
		include "connexio.php";
    
    try{
			$stmt = $connexio->prepare("SELECT * FROM `usuaris` WHERE usuari = 
			:usuari AND contrasenya = :contrasenya LIMIT 1");

			$stmt->bindValue(':usuari', $usuari, PDO::PARAM_STR);
			
			$contrasenya = hash("sha512",$contrasenya);
			$stmt->bindValue(':contrasenya', $contrasenya, PDO::PARAM_STR);

			$stmt->execute();

			$row = $stmt->fetch(PDO::FETCH_ASSOC);

			if ($row) {

				if($contrasenya = $row['contrasenya']) {
					
					session_start();
					$_SESSION['usuari'] = $usuari;
					header('Location: index.php');
				}
			}
			
			else{
				header ('Location: ../vista/error.view.php');
			}
		}catch(PDOException $e){
					echo "Error: " . $e->getMessage();
				}
}
?>