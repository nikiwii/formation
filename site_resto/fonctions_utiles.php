<?php

    function changeDePage($url) {
        // permet de faire une redirection vers $url

        header("location:" . $url);
        exit;
    }

function show_error() {
    // affiche toutes les cases de mon tableau $_SESSION["erreur"]
    if(!empty($_SESSION["erreur"])) {
        echo "<div class='erreur'><ul>";
        foreach ($_SESSION["erreur"] as $erreur) {
            echo "<li>$erreur</li>";
        }
        echo "</ul></div>";
    }

    unset($_SESSION["erreur"]); // une fois les erreurs affichées, je supprime le tableau pour être sur de ne plus les afficher plus tard.
}

function show_success() {
    // affiche toutes les cases de mon tableau $_SESSION["success"]
    if(!empty($_SESSION["success"])) {
        echo "<div class='success'><ul>";
        foreach ($_SESSION["success"] as $success) {
            echo "<li>$success</li>";
        }
        echo "</ul></div>";
    }

    unset($_SESSION["success"]); // une fois les erreurs affichées, je supprime le tableau pour être sur de ne plus les afficher plus tard.
}

function proteger_page() {
        // fonction qui permet de vérifier que la variable $_SESSION["connected_user"] existe
        // si c'est le cas, nous sommes connecté sinon, on retourne à l'accueil
        // et on ajoute un message d'erreur.
        if(empty($_SESSION["connected_user"])) {
            // je ne suis pas connecté.
            changeDePage(RESTO_URL_SITE . "admin/connexion.php");
        }
}

function ajouterErreur($texteMessageErreur) {
    // Ajouter un texte dans notre tableau des erreurs.
    $_SESSION["erreur"][] = $texteMessageErreur;
}

function ajouterSuccess($texteMessageSuccess) {
    // Ajouter un texte dans notre tableau des success.
    $_SESSION["success"][] = $texteMessageSuccess;
}

function debug($var) {
        var_dump($var);
}

function enregistreValeur($iduu, $valeur) {
    // permet d'enregistrer une donnée dans la table simpledonnee

    global $bdd;
    // permet de récupérer la variable $bdd, même si celle-ci est à l'extérieur de ma fonction
    // dans cette variable, il y a le connexion à la base de données, nous pouvons donc
    // l'utilise dans notre fonction.

    // 1 - on verifie si la donnée existe déjà dans la table.

    $nbVal = $bdd -> prepare("SELECT count(*) as nbEnregistrement from simpledonnee where iduu = :iduu");
    $nbVal -> execute([":iduu" => $iduu]);
    $resultNbVal =  $nbVal -> fetch(PDO::FETCH_ASSOC);


    if($resultNbVal["nbEnregistrement"] == 0) {

        // nous n'avons pas d'enregistrement, nous devons l'insérer dans la base.

        $query = $bdd -> prepare("INSERT into simpledonnee(iduu, valeur) VALUES ( :iduu, :valeur )");
        $query -> execute([":iduu" => $iduu, ":valeur" => $valeur]);


    } else {
        // l'enregistrement existe, nous devons le mettre à jour.
        $query = $bdd -> prepare("UPDATE simpledonnee SET valeur=:valeur WHERE iduu = :iduu");
        $query -> execute([":iduu" => $iduu, ":valeur" => $valeur]);
    }

}

function MontrerValeur($iduu) {
    // montre la valeur de simpledonnee

    global $bdd;

    // 1 - on verifie si la donnée existe déjà dans la table.
    $query = $bdd -> prepare("SELECT * from simpledonnee where iduu = :iduu");
    $query -> execute([":iduu" => $iduu]);
    $val = $query ->  fetch(PDO::FETCH_ASSOC);

    if(isset($val["valeur"])) {
        return $val["valeur"];
    }

}


function enregistrerFichier($fichier, $destination) {

        if($fichier["error"] == UPLOAD_ERR_OK || $fichier["error"] == UPLOAD_ERR_NO_FILE) {
            // nous utilisons ici des constantes fournies par PHP. Nous pourrions utiliser les chiffres correspondants
            // mais nous utilisons plutôt ces constantes qui ont un nom qui est plus compréhensible
            // voir : https://www.php.net/manual/fr/features.file-upload.errors.php


            if($fichier["error"] == UPLOAD_ERR_OK) {
                // un fichier a été envoyé correctement, nous devons le traiter
                //
                // 1 - nous verrifions que le chemin de destination existe, sinon nous le créons.

                verifierCheminFichier($destination);

                move_uploaded_file($fichier["tmp_name"], RESTO_PATH_SITE . $destination);

            }
        } else {
            ajouterErreur("Un fichier n'a pas été enregistré.");

        }
}

function verifierCheminFichier($chemin) {
        //
    // verifier si un chemin de fichier existe.
    // si les répértoires n'existent pas, nous allons les créer.
    //
        $arrChemin = explode("/", $chemin);

        $verifChemin = RESTO_PATH_SITE;
        foreach ($arrChemin as $dossier) {
            if(!strstr($dossier, ".")) {
                // si il n'y a pas de point dans le nom du dossier, c'est qu'il s'agit d'un dossier
                // (sinon, c'est un fichier)
                $verifChemin .= $dossier ."/";
                var_dump($verifChemin);
                if(!is_dir($verifChemin)) { // ce n'est pas un dossier, alors nous allons le créer.
                    mkdir($verifChemin);
                }
            }
        }
}

function echoKey($tableau, $cle, $valeurDefaut = "") {
        // ecrit la valeur de la case clé de mon tableau.
    if(!empty($tableau[$cle])) {
        echo $tableau[$cle];
    } else {
        echo $valeurDefaut;
    }


}


function html_image($urlImage, $classHtml = "") {
        // on affiche le tag vers l'image seulement si l'image existe.

        if(is_file(RESTO_PATH_SITE .$urlImage)) {
            return "<img src='".RESTO_URL_SITE."/$urlImage' class='$classHtml'>";
        }
        return "";
}

function html_a($text, $lien = "#", $class="", $confirm="") {
        // fabrique la balise <a href></a>

    if($confirm != "") {
        $confirm = "onclick=\"return confirm('$confirm')\"";
    }

    return "<a href='$lien' class='$class' $confirm >$text</a>";
}

function f($str) {
    // formate une chaine avant de l'enregistrer dans la base.
    // permet de mettre des guillemets dans ma chaine.

    global $bdd;


    return $bdd->quote($str);

}