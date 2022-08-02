<!-- Francesc Roca -->

<?php

session_start();
error_reporting(0);
$varsesio = $_SESSION['usuari'];

if($varsesio != null || $varsesio != ''){
    header ('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../estils/estil.css">
  <title>Formulari de registre</title>
</head>
<body>
  	<h1>REGISTRAR-SE</h1>	
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

  	  <input type="text" name="usuari" id="usuari" placeholder="Usuari..." value="<?php if(!$enviat && isset($usuari)) echo $usuari?>">

  	  <input type="password" name="contrasenya_1" id="contrasenya_1" placeholder="Contrasenya...">
  	
  
  	  <input type="password" name="contrasenya_2" id="contrasenya_2" placeholder="Confirma la contrasenya...">

	  <?php if (!empty($errors)): ?>
				<div class="alert error" role="alert">
					<?php echo $errors; ?>
				</div>
			<?php elseif($enviat) :
				header("Location: ../index.php");
				?>
			
			<?php endif; ?>


  	  	<input type="submit" class="btn" name="submit" value="Registrar-se">
    	<div>
  			<p>
  				Ja tens una compte?
    		</p>
		</div>			
    <a href="../index.php">Iniciar sessió</a>
  </form>
    </div>
</body>
</html>