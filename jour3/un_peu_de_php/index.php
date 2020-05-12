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

<h1>Le php, c'est pas difficile</h1>

<?php //la balise ouverante de mon code PHP

// Ceci est un commentaire sur une ligne

# Ceci est également un commentaire sur une ligne (je crois que je vous l'ai pas dit... mais c'est que, perso, je ne l'utilise jamais)

/*
    Ceci est un commentaire sur plusieurs
    ligne
    Commenter son code : c'est une très très bonne idée ! (quelque soit le langage)
 */

$ma_variable = "Valeur de ma variable";
// le nom d'une variable commence toujours par un $
// ici ma variable est une chaine de caractère
//
// une instruction PHP se termine toujours

echo "<hr>";
// permet d'écrire à l'écran

// pour connaître le type d'une variable, nous utilisons la fonction PHP gettype()
echo gettype($ma_variable); // ici on retourne et affiche "string" : c'est donc une chaine

//
// il existe énormément de fonctions dans PHP
// la documentation de PHP est très bien faite.
// par exemple, la documentation pour gettype se trouve ici
// https://www.php.net/manual/fr/function.gettype.php
//
// il est important de savoir chercher la fonction adéquate

echo "<br> <a href='img/ecran1.png' target='_blank'>Capture d'écran de la doc PHP</a>";

echo "<hr>";

$ma_Variable = "Je suis une chaîne de caractère";
echo $ma_variable;
// ici, sur l'écran, nous allons lire "Valeur de ma variable" et non "Je suis une chaîne de caractère"
// CAR le nom d'une variable est sensible à la casse (les majuscules)


/************************ Les chaines de caractères ************************/

$rue = "6 rue Sauffroy";
$cp = "75017";
$ville = "Paris";

$adresse = $rue . $cp . $ville;

// permet de concaténer une chaine
// mais il manque les espaces


$adresse_espace_1 = $rue . " " . $cp . " " . $ville;

// mais aussi...
$adresse_espace_2 = "$rue $cp $ville";
$adresse_espace_3 = '$rue $cp $ville';

// regarder la différence !
//
// Dans le premier, on affiche la veleur de la variable
// Dans le second, les variables ne sont pas évalué : ça reste des chaîne de caractères.

echo "<hr>";

$nom_resto = "PHEUPHEU";
$nom_resto = "Bohème";
// echo $nom_resto; // TESTER

$nom_autre_resto = " Chez Hennette ";
$nom_autre_resto .= " Chez Nico ";
// echo $nom_autre_resto; // TESTER

// on aurait pu écrire A LA PLACE
// $nom_autre_resto = $nom_autre_resto . " Chez Nico ";


echo "<hr>";

/********* EXO *******/

// créer deux variables
// une pour l'autreur Molière
// et la seconde pour la pièce L'Avare et écrire à l'écran "L'Avare a été écrite par Molière"


/***************** Chercher quelques fonctions sur les chaines de caractères ********************/

$jolie_chaine = "   Lorem ipsum dolor sit amet, consectetur <strong>adipiscing elit</strong>. Nullam mattis finibus tincidunt.   ";

echo "Chaine de départ : $jolie_chaine <br><br>";

/*
        - le nombre de caractère dans ma chaine (la taille d'une chaine)
        - la fonction qui permet de remplacer le mot "dolor" dans la chaine par le mot "porte"
        - la fonction qui mélange les lettres d'une chaine
        - inverse la chaine (la premiere lettre de la chaine se retrouve à la fin)
        - retourner la place du mot "elit" dans une chaine
        - effacer les tags HTML de ma chaine
        - mettre la chaine en majuscule
        - Récupérer seulement les 10 premiers caractères de ma chaine
        - Récupérer seulement les 10 dernier caractères de ma chaine
        - effacer les espaces en début et en fin de chaine

 */


/************************ Les Nombres ************************/
echo "<h2>Les nombres</h2>";


$entier = 55;
$decimal = 50.5;

/***************** Les opérateurs *******************/

echo "<h2>Les opérateurs</h2>";

$addition = $entier + 5;
$multiplication = $entier * $decimal;
$division = $entier / 3;
$soustraction = $entier - 21;
$modulo = 7 % 2;

//echo "\$addition = $addition <br> \$multiplication = $multiplication <br> \$division = $division <br> \$soustraction = $soustraction <br> \$modulo = $modulo <br>";

echo "<br> <a href='img/modulo.png' target='_blank'>Explication du modulo</a> <br>";

$un_chiffre_dans_une_chaine = "7";
echo gettype($un_chiffre_dans_une_chaine ) . "<br>";
// est ce que je peux multiplier cette variable par 2 ?


/************************ opération combinée ****************/
echo "<h2>Opérations combinées</h2>";

$a = 10;
$b = 2;

//$a += $b;
//echo $a;
// même chose que : écrire d'une autre façon

//$a -= $b;
//echo $a;
// même chose que : écrire d'une autre façon

//$a *= $b;
//echo $a;
// même chose que : écrire d'une autre façon

//$a /= $b;
//echo $a;
// même chose que : écrire d'une autre façon




/******************** incrémenter / décrémenter **************************/
echo "<h2>Incrémenter / Décrémenter (de 1)</h2>";


/********** incrémenter ***********/
$a = 10;
$a++;
//echo $a;
// exercice : ecrire cette commande d'une autre façon


$a = 10;
//echo $a++;
//echo "<br>";
//echo $a;

$a = 10;
//echo ++$a;
//echo "<br>";
//echo $a;

/********** décrémenter ***********/
$a = 10;
$a--;
//echo $a;
// exercice : ecrire cette commande d'une autre façon

$a = 10;
//echo $a--;
//echo "<br>";
//echo $a;

$a = 10;
//echo --$a;
//echo "<br>";
//echo $a;



/**************** Les constantes ********************/

echo "<h2>Les constantes</h2>";

// Une CONSTANTE n'est pas une variable car sa valeur ne peut pas être modifiée durant le script.
// sa valeur ne change pas

define('TEMPERATURE_EBULLITION_EAU',100); // on écrit (par convention) les constantes en majuscule
echo "Température d'ébulition de l'eau  = " . TEMPERATURE_EBULLITION_EAU . "°C "; // pas de $ pour les constantes

// TESTER
// define('TEMPERATURE_EBULLITION_EAU',90);

echo "<hr>";

/**** Des constantes magiques ****/

echo "<h2>Des constantes magiques</h2>";

echo "Chemin du repertoire où se trouve cette ligne : " . __DIR__ . "<br/>";
echo "Chemin du fichier ou se trouve cette ligne : " . __FILE__ . "<br/>";
echo "Numéro de la ligne de cet écho  : " . __LINE__ ."<br/>";

?>

<hr>

<a href="index.php" class="btn">Les bases </a>
<a href="ifelse.php" class="btn">Conditions & Comparaisons</a>
<a href="fonctions.php" class="btn">Les fonctions</a>

</body>
</html>
