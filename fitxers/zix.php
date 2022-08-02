<!-- Francesc Roca Rodriguez -->

<?php
session_start();
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
    <link href="estils.css" rel="stylesheet" type="text/css">
    <title>ZIX FRR</title>
</head>
<body>
<div name="contenidor" style="margin-bottom: 70px;">
<div style="float: right">
    <a href="../controlador/tancar.php">Tancar sessió</a>
</div>
<br>
<div style="float: right">
  <a href="../vista/contingut.view.php"> Tornar a pàgina principal</a>
</div>
<br>
<div style="float: right">
<h3>Número de visites en aquesta pàgina</h3>
<?php require_once('../visites/visites.php') ?>
</div>
<div>
    <h1>ZIX</h1>
    <h2>Guardo i llegeixo els fitxers que necessitis!</h2>
</div>
<div>
<h3>Ús de l'eina</h3>
<img src="../vista/src/gifanimat.gif" width="350" height="300" style="border: 3px solid #000">
</div>
<div>
<form method="POST" action="upload.php" enctype="multipart/form-data">
    <div>
    <h3>Puja fitxers txt, jpg o pdf</h3>
    <br>
      <span>Prova a  pujar un fitxer:</span>
      <input type="file" name="uploadedFile" required/>
    </div>
 
    <input type="submit" name="uploadBtn" value="Pujar!" />
  </form>
</div>
<br>
<div>
    <h2>Llistat dels fitxers al directori</h2>
    <?php include('zix_model.php'); ?>
</div>
<div>
    <?php include('llegirFitxer.php');?>
</div>
</div>
<div class="footer">
  <p>ZIX, programat per Francesc Roca Rodriguez</p>
</div>
</body>
</html>