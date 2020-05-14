<!DOCTYPE html>
<html>
<head>
    <title>Jour 3</title>
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
echo "test";
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

$ma_variable = "Valeur de ma variable";
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
//echo "<h3>$adresse_espace_1</h3>";

// mais aussi...
$adresse_espace_2 = "$rue $cp $ville";
$adresse_espace_3 = '$rue $cp $ville';

echo "<h3>$adresse_espace_3</h3>";

// regarder la différence !
//
// Dans le premier, on affiche la valeur de la variable
// Dans le second, les variables ne sont pas évaluées : ça reste des chaînes de caractères.

echo "<hr>";

$nom_resto = "PHEUPHEU";
$nom_resto = "Bohème";
//echo $nom_resto; // TESTER

$nom_autre_resto = " Chez Hennette ";
//$nom_autre_resto .= " Chez Nico ";
$nom_autre_resto = $nom_autre_resto . " Chez Nico ";
echo $nom_autre_resto; // TESTER



// on aurait pu écrire A LA PLACE
// $nom_autre_resto = $nom_autre_resto . " Chez Nico ";


echo "<hr>";

/********* EXO *******/

// créer deux variables
// une pour l'autreur Molière
// et la seconde pour la pièce L'Avare et écrire à l'écran "L'Avare a été écrite par Molière"

$piece = 'L\'Avare';

$auteur = "Molière";

echo "$piece a été écrite par $auteur";
echo "<hr>";


/***************** Chercher quelques fonctions sur les chaines de caractères ********************/

$jolie_chaine = "   Lorem ipsum dolor sit amet, consectetur <strong>adipiscing elit</strong>. Nullam mattis finibus tincidunt.   ";

echo "Chaine de départ : $jolie_chaine <br><br>";

echo "<hr><h1>Fonctions sur les chaines de caractères</h1>";

echo strlen(strip_tags($jolie_chaine));

$alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$_10_PREMIERS = substr($alphabet, 0, 10);
$_10_DERNIERS = substr($alphabet, -10, 10);

echo "<h1> $_10_PREMIERS </h1>";

echo substr("abcdef", 1, -7);


#        - le nombre de caractères dans ma chaine (la taille d'une chaine) strlen
echo strlen($jolie_chaine);
echo "<hr>";

#        - la fonction qui permet de remplacer le mot "dolor" dans la chaine par le mot "porte"

echo str_replace("dolor", "porte", $jolie_chaine);
echo "<hr>";

#        - la fonction qui mélange les lettres d'une chaine
echo str_shuffle($jolie_chaine); // on va voir apparaitre des éléments du tag  !
echo "<hr>";

#        - inverse la chaine (la premiere lettre de la chaine se retrouve à la fin)
echo strrev($jolie_chaine); // on découvre des éléments du tag à l'envers !
echo "<hr>";

#        - retourner la place du mot "elit" dans une chaine
echo strpos($jolie_chaine, "elit"); // on découvre des éléments du tag à l'envers !
echo "<hr>";

#        - effacer les tags HTML de ma chaine // strip_tags
echo strip_tags($jolie_chaine); // utile pour retirer du code malveillant quand on reçoit des valeurs via un formualaire
echo "<hr>";


#        - mettre la chaine en majuscule
echo strtoupper($jolie_chaine);
echo "<hr>";


#        - Récupérer seulement les 10 premiers caractères de ma chaine
echo substr($jolie_chaine,0, 10); // les espaces sont considérés comme des caractères !
echo "<hr>";

#        - Récupérer seulement les 10 derniers caractères de ma chaine
echo substr($jolie_chaine,-10, 10); // les espaces sont considérés comme des caractères !
echo "<hr>";


#        - effacer les espaces en début et en fin de chaine
echo trim($jolie_chaine);
echo "<hr>";




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

echo "\$addition = $addition <br> \$multiplication = $multiplication <br> \$division = $division <br> \$soustraction = $soustraction <br> \$modulo = $modulo <br>";

echo "<br> <a href='img/modulo.png' target='_blank'>Explication du modulo</a> <br>";

$un_chiffre_dans_une_chaine = "7";
echo gettype($un_chiffre_dans_une_chaine ) . "<br>";
// est ce que je peux multiplier cette variable par 2 ?

echo "7"  ;


/************************ opération combinée ****************/
echo "<h2>Opérations combinées</h2>";

$a = 10;
$b = 2;

#$a += $b;
echo $a;
// même chose que : écrire d'une autre façon
// $a = $a + $b;

echo "<br/>";

# $a -= $b;
echo $a;
// même chose que : écrire d'une autre façon
// $a = $a - $b;


echo "<br/>";
$a = 10;
$b = 2;

$a *= $b;
echo $a;
// même chose que : écrire d'une autre façon
// $a = $a * $b;

echo "<br/>";
$a = 10;
$b = 2;

$a /= $b;
echo $a;
// même chose que : écrire d'une autre façon
// $a = $a / $b

$a = 10;
$b = 2;

echo "<hr>";



/******************** incrémenter / décrémenter **************************/
echo "<h2>Incrémenter / Décrémenter (de 1)</h2>";


/********** incrémenter ***********/
$a = 10;
$a++;
echo $a;
// exercice : ecrire cette commande d'une autre façon
// $a = $a + 1;

echo "<hr/>";

$a = 10;
echo $a++; // On a 10 !!! On affiche la valeur de $a PUIS on fait l'oppération $a = $a + 1;
echo "<br>";
echo $a; // On a 11 !

echo "<hr>";

$a = 10;
echo ++$a; // On obtient 11 :  on fait l'oppération $a + 1 PUIS on affiche $a

//echo "<br>";
//echo $a;

/********** décrémenter ***********/
$a = 10;
$a--;
//echo $a;
// exercice : ecrire cette commande d'une autre façon
// $a = $a - 1;

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

echo "<br>";
// TESTER
// define('TEMPERATURE_EBULLITION_EAU',90); // ERREUR : on ne peut pas modifier la valeur d'une constante
// echo "Température d'ébulition de l'eau  = " . TEMPERATURE_EBULLITION_EAU . "°C "; // pas de $ pour les constantes

echo "<hr>";

/**** Des constantes magiques ****/

echo "<h2>Des constantes magiques</h2>";
echo "Chemin du repertoire où se trouve cette ligne : " . __DIR__ . "<br/>";
echo "Chemin du fichier ou se trouve cette ligne : " . __FILE__ . "<br/>";
echo "Numéro de la ligne de cet écho  : " . __LINE__ ."<br/>";

?>



<hr>
<?php
include("nav.php");
?>
</body>
</html>