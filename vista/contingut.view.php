<!-- Francesc Roca -->

<?php

$varsesio = $_SESSION['usuari'];

if($varsesio == null || $varsesio = ''){
    header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="fitxers/estils.css">
    <title>Contingut punt view</title>
</head>
<body>
<div>
    <h1>Benvingut/da!</h1>
</div>
<div style="float:right">
    <a href="controlador/tancar.php">Tancar sessió</a>
</div>
<br>
<div style="float: right">
    <h3>Número de visites en aquesta pàgina</h3>
    <?php require_once('visites/visites.php') ?>
</div>
<div>
    <h2><a href="#miModal">NOVETATS!</a></h2>
    <div id="miModal" class="modal">
    <div class="modal-contenido">
        <a href="#"><img src="vista/src/close.png" width="30px" height="30px"></a>
        <h2>Novetats del lloc</h2>
        <p>Hem implementat la nova tecnologia ZIX!</p>
        <a href="fitxers/zix.php">Prova ZIX!</a>
    </div>
</div>
<div>
<h2>Eines</h2>
<a href="fitxers/zix.php">ZIX, pujada i lectura de fitxers</a>
</div>
<br>
</body>
</html>