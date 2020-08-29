<?php
/*
 Voici un petit fichier qui explique comment on crypte un mot de passe

 imaginons un formulaire d'inscription qui retourne 2 valeurs : 1 email et 1 mot de passe
 nous allons les récupérer avec $_POST["email"] et $_POST["mdp"]

    ex :
        email :  nicolash@gmail.com
        mot de passe : azerty

(j'avoue que le mot de passe n'est pas particulierement bien choisi, il est très commun :
mais c'est pour vous expliquer quelques "règles" de sécurité
https://www.journaldugeek.com/2017/12/20/voici-la-liste-des-25-mots-de-passe-les-plus-populaires-et-probablement-les-moins-surs-de-2017/#:~:text=Le%20mot%20de%20passe%20le,le%20plus%20fourni%20%C2%AB%2012345678%20%C2%BB.)

*/

$motdepasse_formulaire = "azerty"; // on imagine que c'est le mot de passe que l'utilisateur entre via un formulaire.



// Cas 1 : on ne crypte pas le mot de passe

$motdepasse_enbase = "azerty"; // le mot de passe qu'on a enregistré dans la base, ici absolument pas crypté.

if($motdepasse_formulaire == $motdepasse_enbase) {
    echo "Bravo, vous êtes entré dans un site pas du tout protégé !";
    echo "<hr>";
}


// Cas 2 : on crypte (mal) le mot de passe
// nous pouvons utiliser par exemple la fonction md5 (il en existe d'autre : sha1 ...)

$motdepasse_enbase = "ab4f63f9ac65152575886860dde480a1"; // ici, c'est ce que nous enregistrons dans la base, ça correspond à la valeur de md5(azerty)

// echo md5($motdepasse_formulaire);

if(md5($motdepasse_formulaire) == $motdepasse_enbase) {
    echo "Bravo, vous êtes entré dans un site un peu protégé, mais c'est pas encore top.";
    echo "<hr>";
    // Ce n'est pas encore l'idéal car si quelqu'un pirate la base, il sait que tous les codes qui sont ab4f63f9ac65152575886860dde480a1
    // correspondent à azerty
}


// Cas 3 : nous allons "saler" le mot de passe. c'est à dire que l'on va ajouter un sufixe que nous seul connaissons pour
// rentre le mot de passe codé plus difficile a décode

$sel = "Xdkjfd6556@dfskjdf###sds56LKsss"; // on est d'accord, c'est une chaine de caractère par simple

// echo md5($sel . $motdepasse_formulaire); // c'est ce que nous allons enregistré en base.

$motdepasse_enbase = "63924fb3639001d3347efc0e8f4a2576";

if(md5($sel . $motdepasse_formulaire) == $motdepasse_enbase) {
    echo "Bravo, vous êtes entré dans un site encore un peu plus protégé.";
    echo "<hr>";
    // si quelqu'un pirate la base, il ne peut pas deviner facilement le mot de passe sans connaitre la variable $sel.
}

// le problème de md5, c'est qu'il est possible de la faire "à l'envers"
// aller sur le site https://md5decrypt.net/
// entrer le code suivant : ab4f63f9ac65152575886860dde480a1*
// cliquez sur décrypter
// ... et vous avez mon mot de passe, celui qui est codé simplement avec md5()
// ... entrez maintenant le deuxième : 63924fb3639001d3347efc0e8f4a2576
// ... il n'y arrive pas (c'est donc un peu mieux) mais d'autres peuvent réussir !

// nous allons utiliser la fonction password_hash : https://www.php.net/manual/fr/function.password-hash.php
echo "J'affiche le hash de mon mot de passe : " ;
echo password_hash($motdepasse_formulaire, PASSWORD_DEFAULT);
// recharger la page plusieurs fois... vous voyez que le résultat est différent à chaque fois !!!

$motdepasse_enbase = '$2y$10$MVPA8PN3OXdUGZbCrXdJg.5pI0QVbSVCt4niHSNBY0qGOrFdup7lq' ; // qui correspond à 1 password_hash

if(password_verify($motdepasse_formulaire, $motdepasse_enbase)) {
    echo "<hr>";
    echo "ICI c'est super bien protégé !";
    echo "<hr>";
}






