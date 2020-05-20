<style>
    table {
        border: 1px #ccc solid;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    td, th {
        border: 1px #ccc solid;
        padding:3px;
        text-align: center;
    }

</style>
<?php

// Affiche dans un tableau HTML mes tables de multiplication


function creerTableauMultiplication($nombreLigne, $nombreColonne) {
    // retrourne une chaine HTML dans laquelle il y a mon tableau.
    $strHTML = "" . PHP_EOL. PHP_EOL. PHP_EOL. PHP_EOL;

    if($nombreLigne > 0 && $nombreColonne > 0) {

        $strHTML .= "<table>" . PHP_EOL; // $strHTML = $strHTML . "<table>";
        // Creation des lignes.

        // premiere ligne d'entete
        $strHTML .=  "<tr>" . PHP_EOL;
        $strHTML .= "<th>Multiplication</th>" . PHP_EOL;
        // BOUCLE
        for($premiere_colonne=1; $premiere_colonne <= $nombreColonne; $premiere_colonne++ ) {
            $strHTML .=  "<th>" . PHP_EOL;
            $strHTML .= $premiere_colonne;
            $strHTML .=  "</th>" . PHP_EOL;
        }
        $strHTML .=  "</tr>" . PHP_EOL;

        // lignes de résultat
        for($l=1; $l<=$nombreLigne; $l++) {
            $strHTML .= "<tr>" . PHP_EOL;
            $strHTML .= "<th>$l</th>" . PHP_EOL;

            for($c=1; $c<=$nombreColonne; $c++) {
                $strHTML .= "<td>" . PHP_EOL;
                $strHTML .= $l * $c;
                $strHTML .= "</td>" . PHP_EOL;
            }
            $strHTML .= "</tr>" . PHP_EOL;
        }


        $strHTML .= "</table>" . PHP_EOL;
    }

    return $strHTML;
}

echo creerTableauMultiplication(10,5);


echo creerTableauMultiplication(1,10);