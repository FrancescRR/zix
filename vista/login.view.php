<!-- Francesc Roca -->

<?php

session_start();
error_reporting(0);
$varsesio = $_SESSION['usuari'];

if($varsesio != null || $varsesio != ''){
    header ('Location: ../index.php');
}
?>

<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../estils/estil.css"> 
    <title>Formulari de login</title>
</head>
<body>
    <h1>LOGIN</h1>

<div>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

  <input type="text" name="usuari" id="usuari" placeholder="Usuari..." value="<?php if(!$enviat && isset($usuari)) echo $usuari?>">

  <input type="password" name="contrasenya" id="contrasenya" placeholder="Contrasenya...">

<?php if (!empty($errors)): ?>
          <div class="alert error" role="alert">
              <?php echo $errors; ?>
          </div>
      <?php endif; ?>

  	  <input type="submit" class="btn" name="submit" value="Iniciar sessió">
    <div>
        <p>Encara no tens una compte?</p>
    <div>

    <a href="../controlador/registrarse.php">Registra't aquí</a>
</div>
</form>
</body>
</html>