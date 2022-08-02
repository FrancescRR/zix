<!-- Francesc Roca -->

<?php

include "connexio.php";
        
        try {
                $stmt = $connexio->prepare("INSERT INTO `usuaris` (usuari, contrasenya) VALUES (:usuari, :contrasenya)");
                $stmt->bindParam(':usuari', $usuari);
                $stmt->bindParam(':contrasenya', $contrasenya_1);
                
                $stmt->execute();
                session_start();
                $_SESSION['usuari'] = $usuari;
                
            } catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
?>