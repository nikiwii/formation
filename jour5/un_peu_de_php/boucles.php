<?php
    include("_function.php");
?><!DOCTYPE html>
<html>
<head>
    <title>Jour 5</title>
    <style>
        body {
            text-align: left;
            padding-left: 20px;
        }

        nav a{
            border:1px #ccc solid;
            padding: 3px 10px;
            text-decoration: none;
            background-color: #eee;
            color-adjust: #000;
            margin-right: 10px;
        }

        h1 {
            background: #ccc;
            padding: 10px;
        }

        h2 {
            border-bottom:1px #ccc dotted;
            border-top:1px #ccc dotted;
            margin-top: 40px;
            padding: 20px 0 5px;
        }

        table {
            margin: 20px 0px;
            border-collapse: collapse;
        }

        table, table td {
            border:1px #ccc solid;
        }

        table td {
            padding: 5px;
        }

    </style>
</head>

<body>

<h1>Les boucles</h1>


<?php

// Les boucles sont destinées à répéter des lignes de codes de façon automatique.


/////////////////////////  Boucle while :
h2("La boucle while");


$i = 0; // valeur de départ de la boucle


while ($i <= 5) {  // Tant que $i < 30 alors fait le code suivant.
    echo $i . '---';
    $i++; ///// SUPER IMPORTANT ///
    // l'incrémentation est obligatoire pour changer la valeur de $i
    // jusqu'à ce que la condition while devienne fausse (cela évite une boucle infinie)
}

hr();

# EXO 1 : Ecrivez une fonction tableDeMultiplication() qui prend en paramètre un chiffre et écrit la
# table de multiplication (jusqu'à 10)


# EXO 2 : Ecrire un <select> qui nous permettre de choisir une annéé entre 1900 et aujourd'hui



////////////////////////// Boucle do while :
h2("La boucle do ..... while");
// La boucle do while a la particularité de s'exécuter au moins une fois,
// puis de tourner tant que la condition de fin est vraie.


$j = 1;
do {
    addBr("On passe ici une fois");
} while($j > 10);
// la condition est FAUSSE mais la boucle s'est pourtant exécuter une fois.
// Attention à ne pas oublier le ";" à la fin du do...while


////////////////////////// Boucle for :
h2("La boucle for");

echo '<br>';


for($j = 0; $j < 16; $j++) {
    // dans les () on trouve :
    // la valeur de départ;
    // la condition d'entrée dans la boucle;
    // l'incrémentation ou la décrémentation
    // on peut dire "pour j allant de 0 à 15"
    // (15 car j doit rester strictement inférieur à 16, donc 15)
    addBr($j);
}

// pour que ce soit plus facilement lisible, je prefère écrire
for($j = 0; $j <= 15; $j++) {
    // ...
}

hr();
//addbrX($j);


hr();

# Exercices :
# 1- faire une boucle for qui affiche les valeurs 0 à 9 sur la même ligne séparé par un " - ";


# 2- faire la même chose en mettant les valeurs dans une <table>


echo '<table border="1">';
echo '<tr>';
for($i = 0; $i < 10; $i++) {
    echo "<td>$i</td>";
}
echo '</tr>';
echo '</table>';


# 3-  Faire un tableau de 5 lignes sur 5 colonnes :


?>






<hr>
<?php
include("nav.php");
?>
</body>
</html>