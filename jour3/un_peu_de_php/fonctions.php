<!DOCTYPE html>
<html>
<head>
    <title>Jour 3</title>
    <style>
        body {
            text-align: center;
        }

        .btn{
            border:1px #ccc solid;
            padding: 3px 10px;
            text-decoration: none;
            background-color: #eee;
            color-adjust: #000;
            margin-right: 10px;
        }

    </style>
</head>

<body>

<h1>Les fonctions</h1>


<h2>Les fonctions prédéfinies</h2>
<?php

// Nous avons déjà vu plusieurs fonction
//
// ecrire à quoi servent les fonctions suivantes :
//
// gettype()
// strlen($string)
// empty()
// isset()
// trim()

echo "<h2>Les fonctions définues par l'utilisateur</h2>";

// un utilisateur peut ecrire ses propres fonctions
// une fonction ne peut être définie qu'une seule fois


function html_h1($titre) {
    echo "<h1>$titre</h1>";
}

html_h1("Mon titre");

function addBr($var) {
    echo $var;
    echo "<br>";
}

addBr("Plus besoin de mettre de br à la fin de ma chaine !");
addBr("Je suis à la ligne !");

// tester simplement
// addBr();
//
// mettre une valeur "" par default


// exo : ecrire une fonction addBrX($var, $couleur) qui écrit le contenu de $var dans une div avec une bordure de la
// couleur $couleur et un padding de 10px
// si aucune couleur n'est envoyé, on met la couleur rouge par default


function add($val1, $val2) {
    return $val1 + $val2; // les insctructions qui suivent un return ne sont pas executer.
    echo "SUPER mais personne ne me verra"; //
}

$resultat = add(5,10);
addBr($resultat);

// développer une fonction nombre_de_photo() qui prendra en paramètre le nombre de photos que j'ai prise hier
// et qui l'écrira en toute lettre.
// ex : hier, vous avez pris 5 photos.
//
// La particularité de cette fonction est qu'elle ne se trompe jamais
// elle ne fait pas de fautes de grammaire ! (perso, j'ai besoin de ce genre de fonction !)

// Dans une fonction, nous pouvons préciser le type des paramètres que nous lui passons

function dire_age(string $nom, int $age) {
    return "$nom a $age ans";
}

// essayer d'écrire $nom après la fermeture de ma fonction

addBr(dire_age("Nicolas",42));

// EXO : modifier la fonction précédente.
// Si on s'interesse à Nicolas, retourner plutôt "Nicolas est cachotier".

// on peut avoir plusieurs return dans une même fonction.

// EXO  ecrire une fonction est_adulte($age) qui retourne TRUE si la personne est adulte

// propagation d'une $variable

$chaine = "UNE CHAINE";

function ma_function_A() {
    $chaine = "La chaine de ma fonction";

    addBr("ma_function_A a été exécutée");
}

// afficher à plusieurs endroit la valeur de la variable chaine
// et constater.



?>
<hr>
<a href="index.php" class="btn">Les bases </a>
<a href="ifelse.php" class="btn">Conditions & Comparaisons</a>
<a href="fonctions.php" class="btn">Les fonctions</a>

</body>
</html>
