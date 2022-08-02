<!-- Francesc Roca -->

<?php
session_start();
error_reporting(0);

$varsesio = $_SESSION['usuari'];

if($varsesio == null || $varsesio = ''){
    header ('Location: controlador/login.php');
}else{
    include ('vista/contingut.view.php');
}
?>