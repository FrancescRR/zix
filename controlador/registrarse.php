<!-- Francesc Roca -->

<?php

$errors = '';
$enviat = '';

if (isset($_POST['submit'])) {
	$usuari = $_POST['usuari'];
	$contrasenya_1 = $_POST['contrasenya_1'];
	$contrasenya_2 = $_POST['contrasenya_2'];

	if (!empty($usuari)) {
		
		$usuari = trim($usuari);
		
		$usuari = filter_var($usuari, FILTER_SANITIZE_STRING);
		
		if ($usuari == "") {
				$errors.= "Introdueix un nom d'usuari.<br />";
			}
		} else {
				$errors.= "Introdueix un nom d'usuari.<br />";
		}

	if (!empty($contrasenya_1)) {
        
	} else {
			$errors.= 'Introdueix una contrasenya.<br />';
	}

    if (!empty($contrasenya_2)) {

        if($contrasenya_1 == $contrasenya_2){
			
			$contrasenya_1 = hash("sha512",$contrasenya_1);
		
		}else {
            $errors.= 'Les contrasenyes no coincideixen.<br />';
        }
	} else {
		$errors.= 'La confirmació de contrasenya és obligatòria.<br />';
	}

	include "connexio.php";
	
	try{
			$stmt = $connexio->prepare("SELECT `usuari` FROM `usuaris` WHERE usuari = 
			:usuari LIMIT 1");

			$stmt->bindValue(':usuari', $usuari, PDO::PARAM_STR);
			
			$stmt->execute();

			$row = $stmt->fetch(PDO::FETCH_ASSOC);

			if ($row) {
				$errors.="Aquest usuari ja està registrat";
			}
		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
			}

	if (!$errors) {
		$enviat = 'true';
        require 'insert.php';
	    }
    }

require '../vista/registrarse.view.php';
?>