<?php

$serveur = 'localhost';
$utilisateur = 'root';
$motdepasse = '';
$nomBaseDeDonnees = "formation_bibliotheque";



//On établit la connexion
$bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees", $utilisateur, $motdepasse, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));


function showTable($tableName) {

    global $bdd;

    $qColonnes = $bdd -> query("SHOW COLUMNS FROM  " . $tableName);
    $arrColonnes = $qColonnes -> fetchAll();

    $qEnregistrements = $bdd -> query("SELECT * FROM  " . $tableName);
    $arrResult = $qEnregistrements->fetchAll();


    echo "<table class='enregistrement'>";
    echo "<tr>";

    foreach($arrColonnes as $colonne){
        $class = $colonne["Key"] == "PRI" ? "cle_primaire" : "";
        echo "<td class='$class'>" . $colonne["Field"] . "</td>";
    }

    echo "</tr>";


    foreach($arrResult as $ligneResult){
        echo "<tr>";

        foreach($arrColonnes as $colonne){

            $class= "";

            if(
                is_string($ligneResult[$colonne["Field"]]) &&
                strlen($ligneResult[$colonne["Field"]]) > 70
            ){
                $ligneResult[$colonne["Field"]] = mb_substr( $ligneResult[$colonne["Field"]], 0 , 70) . "...";
                $class="mini";
            }

            if(is_string($ligneResult[$colonne["Field"]])) {
                $ligneResult[$colonne["Field"]] = htmlspecialchars($ligneResult[$colonne["Field"]]);
            }

            echo "<td class='$class'>" . $ligneResult[$colonne["Field"]] . "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
}

function showInTable($arr, $champsExclus = array()) {

    // 1 recupere les clés.

    echo "<table class='enregistrement'>";

    if(!empty($arr[0])) {
        echo "<tr>";

        $lesCles = array_keys($arr[0]);
        foreach($lesCles as $nomCle) {
            if(!in_array($nomCle, $champsExclus)) {
                echo "<td>";
                echo $nomCle;
                echo "</td>";
            }
        }

        echo "</tr>";

        foreach($arr as $result) {
            echo "<tr>";
            foreach($lesCles as $nomCle) {
                if(!in_array($nomCle, $champsExclus)) {
                    $class = "";
                    if (
                        is_string($result[$nomCle]) &&
                        strlen($result[$nomCle]) > 150
                    ) {
                        $result[$nomCle] = mb_substr($result[$nomCle], 0, 150) . "...";
                        $class = "mini";
                    }
                    if(is_string($result[$nomCle])) {
                        $result[$nomCle] = htmlspecialchars($result[$nomCle]);
                    }
                    echo "<td class='$class'>";
                    echo nl2br($result[$nomCle]);
                    echo "</td>";
                }
            }
            echo "</tr>";
        }
    }
    echo "</table>";
}