<!-- Francesc Roca Rodríguez -->

<?php
if(isset($_GET['nomFitxer'])){
    $nomFitxer = $_GET['nomFitxer'];

    $nomFitxer = filter_var($nomFitxer, FILTER_SANITIZE_STRING);

    $rutaFitxer = "src/".$nomFitxer;

    $contingut = file_get_contents("src/".$nomFitxer);
    echo "<h2>Contingut del fitxer escollit:</h2>";

    $extension = pathinfo($nomFitxer, PATHINFO_EXTENSION);

    if($extension == "txt"){
        echo $contingut;
    }else if($extension == "jpg"){
        echo "<img src='".$rutaFitxer."' width='600 height='700'>";
    }else if($extension == "pdf"){
        echo "<embed src='".$rutaFitxer."#toolbar=0&navpanes=0&scrollbar=0' type='application/pdf' width='100%' height='600px' >";
    }
}
?>