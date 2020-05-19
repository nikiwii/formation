<?php

$tab_1 = array(
    "prenom" => "Pierre",
    "nom" => "Deproges",
    "annee_naissance" => 1939,
    "annee_mort" => 1988, // on peut terminer son tableau par une virgule même s'il n y a rien après.
);

$tab_2 = array(
    "prenom" => "Pierre",
    "nom" => "Deproges",
    "annee_naissance" => 1939,
    "annee_mort" => 1988, // on peut terminer son tableau par une virgule même s'il n y a rien après.
    "oeuvres" => array("Le Petit Reporter", "La Minute nécessaire de monsieur Cyclopède", "Les Bons Conseils du professeur Corbiniou"),
);



function html_separation() {
    // écrit 3 sauts de ligne , le tag HR et 3 sauts de lignes à la fin.
    echo PHP_EOL . PHP_EOL . PHP_EOL;
    echo "<hr>";
    echo PHP_EOL . PHP_EOL . PHP_EOL;
}



/////////////////////////////////////////////////////////////////////
// essayer de comprendre ce que font les fonctions suivantes
//
// Dans la peau de l'interpréteur de PHP
/////////////////////////////////////////////////////////////////////

function choisir_un_meilleur_nom($param_1, $param_2) {

    if(strlen($param_1) < strlen($param_2)) {
        return 2;
    } elseif(strlen($param_1) == strlen($param_2)) {
        return 0;
    } if(strlen($param_1) > strlen($param_2)) {
        return 1;
    }
}

# echo choisir_un_meilleur_nom("Nicolas", "Hennette");
# echo choisir_un_meilleur_nom("Hennette", "Nicolas");
# echo choisir_un_meilleur_nom("tata", "toto");


/////////////////////////////////////////////////////////////////////
html_separation(); //////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////

function code_php() {
    echo "<?php echo'Je vous jure que ce n'est pas compliqué' ?>";
    // n'oubliez pas de regarder le code source de votre page !
}

# code_php();


/////////////////////////////////////////////////////////////////////
html_separation(); //////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////


function format_c($je_veux_formater = TRUE) {
    echo "Vous aller effacer TOUS les fichiers de votre disque dur";

    if($je_veux_formater === TRUE) {
        format_disk("c:");
    } else {
        echo "Aucun fichier n'a été supprimé.";
    }
}

# format_c(FALSE);
# format_c(TRUE);

/////////////////////////////////////////////////////////////////////
html_separation(); //////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////


function je_sais_pas_ce_que_je_fais($nombre){
    if($nombre<=0){
        echo'<span style="color:blue">'.$nombre.'</span>';
    }
    elseif($nombre<=19){
        echo'<span style="color:green">'.$nombre.'</span>';
    }
    else{
        echo'<span style="color:red">'.$nombre.'</span>';
    }
    echo PHP_EOL;
}

# je_sais_pas_ce_que_je_fais(30);
# je_sais_pas_ce_que_je_fais(-50);
# je_sais_pas_ce_que_je_fais(15);


function je_sais_pas_ce_que_je_fais_BIS(){
    // Attention !
    // dans le code de cette fonction, j'utilise la fonction précédente "je_sais_pas_ce_que_je_fais"
    // si vous avez changé son nom, il faudra le repercuter

    for($i=25; $i>=-15; $i--) {
        je_sais_pas_ce_que_je_fais($i);
        echo "<br>";
    }
}

 # je_sais_pas_ce_que_je_fais_BIS();


/////////////////////////////////////////////////////////////////////
html_separation(); //////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////// Pour aller encore plus loin (si vous ne craquez pas !)   ////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
/// même moi, j'ai du mal à me relire ! Alors pas de soucis ! /////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////


function parcourir_tableau($tableau) {
    // ça on ne l'a pas vu... mais vous pouvez essayer de parcourir le code est comprendre
    // deviner ce que va écrire notre fonction

    echo "<ul>"  . PHP_EOL;
    foreach($tableau as $key => $value) {
        if(is_array($value)) {
            parcourir_tableau($value); // WHAT ? L'enfoiré !
        } else {
            echo "<li>" . $value . "</li>"  . PHP_EOL;
        }
    }
    echo "</ul>" . PHP_EOL;
}

# parcourir_tableau($tab_1);
# parcourir_tableau($tab_2);


html_separation();

////////////////////////////////////////////////////

function nom_de_fonction_pas_clair_1($parametre_1) {

    // fonction bien obscure !

    $a = range('A', 'Z');
    $b = range('a', 'z');
    $bb = range(0, 9);

    $c = array_merge($a, $b, $bb);

    $n = count($c);

    $s = "";

    for($i=1; $i<=$parametre_1; $i++) {
        $h = rand(0, $n - 1); // Pourquoi on met - 1 ?
        $s .= $c[$h];
    }

    return $s;

}

# echo nom_de_fonction_pas_clair_1(10);
# echo nom_de_fonction_pas_clair_1(100);



html_separation();