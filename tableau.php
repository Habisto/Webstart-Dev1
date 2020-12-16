<?php
    echo "Exercice sur le tableau php!";

    $tableau = array(1, 2, 3, 4, 5, 6);
    $autre_tableau = [1, 2, 3, 4, 5, 6];

    echo "<pre>";
    var_dump($tableau);
    var_dump($autre_tableau);
    echo "</pre>";

    $noms = array('A' => 'Abruti', 'B' => 'Batard', 'C' => 'Connasse');
    foreach ($noms as $lettre => $nom){ 
        echo "$lettre = $nom <br/>";
    }
    ?>