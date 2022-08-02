<!-- Francesc Roca Rodriguez -->

<?php
        $resultats = glob('src/{*.jpg,*.pdf,*.txt}', GLOB_BRACE);

        echo "<a href='zix.php'><img src='../vista/src/reset.png' width='30px' height='30px'></a>";
        echo "<ul>";
        foreach ($resultats as &$valor) {
            $valor = substr($valor, 4);
            echo "<li><a href='zix.php?nomFitxer=".$valor ."'>".$valor ."</a></li>";
        }
        echo "</ul>";
    ?>