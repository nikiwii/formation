<?php

//
// Nous allons mettre notre tableau d'auteurs dans une liste <UL> <LI>
//

$auteurs = array(
    array('prenom' => 'Pierre', 'nom' => 'Deproges', 'annee_naissance' => 1939, "annee_mort" => 1988,),
    array('prenom' => 'Albert', 'nom' => 'Camus', 'annee_naissance' => 1913, "annee_mort" => 1960,),
    array('prenom' => 'Gustave', 'nom' => 'Flaubert', 'annee_naissance' => 1821, "annee_mort" => 1880,),
    array('prenom' => 'Victor', 'nom' => 'Hugo', 'annee_naissance' => 1802, "annee_mort" => 1885,),
    array('prenom' => 'Georges', 'nom' => 'Feydeau', 'annee_naissance' => 1862, "annee_mort" => 1921,),
    array('prenom' => 'Jean-Luc', 'nom' => 'Lagarce', 'annee_naissance' => 1957, "annee_mort" => 1995,),
);


echo "<h1>Il y a " . count($auteurs) . " auteurs sur votre site</h1>";
// count est une fonction PHP qui retourne le nombre d'éléments que j'ai dans un tableau

echo PHP_EOL . PHP_EOL . PHP_EOL;

echo "<ul>" . PHP_EOL;

// on parcourt le tableau $auteurs
foreach ($auteurs as $auteur) {
    echo "<li>" . PHP_EOL;
    // var_dump($auteur);
    echo $auteur["nom"] . " " . $auteur["prenom"] . " (" . $auteur["annee_naissance"] . " - " . $auteur["annee_mort"] . ")";
    echo PHP_EOL . "" . PHP_EOL;
}

echo "</ul>" . PHP_EOL;


echo "<hr>";
//
// Code pour parcourir le tableau avec une boucle for
// Nous allons quand même préférer la boucle foreach si nous devons parcourir le tableau en entier.
//


// cela fonctionne uniquement quand l'index de mon tableau est un chiffre
// (et que les chiffres se suivent !)

echo "<ul>";
for ($i = 0; $i < count($auteurs); ++$i) {
    echo "<li>";
    echo $auteurs[$i]["nom"] . " " . $auteurs[$i]["prenom"];
    echo "</li>";
}
echo "</ul>";

