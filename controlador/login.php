<!-- Francesc Roca -->

<?php

$errors = '';
$enviat = '';

if (isset($_POST['submit'])) {
	$usuari = $_POST['usuari'];
	$contrasenya = $_POST['contrasenya'];

	if ($usuari == "") {
		$errors.= "*Introdueix un nom d'usuari.<br />";
	}

	if ($contrasenya == "") {
		$errors.= '*Introdueix una contrasenya.<br />';
	}
	
	if (!$errors) {
		$enviat = 'true';
        require 'select.php';
	}
	
}
require '../vista/login.view.php';

?>