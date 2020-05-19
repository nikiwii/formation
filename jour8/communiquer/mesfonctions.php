<?php

function tableDeMultiplication($tableDe) {
    // permet d'écrire un table la table de multiplication de $tableDe

    if(!is_numeric($tableDe)) {
        echo "Merci de renseigner un nombre ";
    } else {
        echo "<h3>Table de $tableDe</h3>";

        for($i=1; $i<=10; $i++) {
            echo "$i * $tableDe = " . $i * $tableDe . "<br/>";
        }
    }
}