<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Jour 8</title>
    <link rel="stylesheet" type="text/css" href="css/messtyles.css">
</head>

<body>
    <h1>Jour 14</h1>
    <div class="p">
        <h2>La base de données</h2>
        <br>


            <h4>Introduction</h4>

            <div class="txt-left">
                Une base de données est un système informatique qui permet de stocker, d'organiser, d'analyser et de rechercher des données.<br>

                Afin d'accéder à une base de données, il est commun d'utiliser un gestionnaire de base de données.<br><br>

                Nous allons utiliser phpMyAdmin qui est le gestionnaire très commun pour gérer une base MySQL <br><br>

                <a href="http://localhost/phpmyadmin" target="_blank">PhpMyAdmin</a> <small>Changer le lien si votre serveur est sur localhost:8080 par exemple</small>

                <br><br>

                Pour accéder à une base de donnée, nous avons besoin d'un serveur de base de données, d'un utilisateur, d'un mot de passe et d'une base de données.
                <br>
                Le serveur : localhost<br>
                l'utilisateur : root<br>
                mot de passe : <small>Laisser vide</small><br>
                <br>
                Et on se connecte !
            </div>

            <h4>Quelle données ?</h4>

            <div class="txt-left">
                L'interet d'une base de données est de ranger ses données.<br>
                <br>
                + Nous allons imaginer un site internet d'un journal d'information et quelle sont les dont il a besoin.
                <br>
                + le site d'un cinéma
                <br>
                + un site marchand
                <br>
                + les pays et les capitales
                <br>
                + les stations Velib (<a href="https://opendata.paris.fr/explore/dataset/velib-disponibilite-en-temps-reel/information/?disjunctive.name&disjunctive.is_installed&disjunctive.is_renting&disjunctive.is_returning&disjunctive.nom_arrondissement_communes" target="_blank">Voir ici</a>)
            </div>

            <h4>Le vocabulaire</h4>
            <div class="txt-left">
                Dans une base de données, nous rangeons les données dans des <strong>tables</strong>.<br>
                Chaque ligne de la table est appelée un <strong>enregistrement</strong><br>
                Et chaque colonne de la table est appelé un <strong>attribut</strong> (ex : nom, prénom, adresse...)<br>
                <hr>
                Chaque attribut peut être de type différent (Chaine de caractère, nombre entier, nombre à virgule, booléen, date...)
                <hr>
                Un enregistrement est souvent associé à un identifiant unique que l'on peut appeler également <strong>clé</strong>
            </div>

            <h4>Le modèle relationnel</h4>
            <div class="txt-left">
                Représentons dans un tableau une base de données qui lie des villes à des pays et observons les colonnes.
                <br>
                Essayons d'améliorer la représentation de ses tableaux.
                <hr>
                On vient de faire une base de données relationnelles !!!
            </div>


            <h4>Faire ses premières requêtes</h4>
            <div class="txt-left">
                Les bases de données utilisent leur propre language que l'on appelle SQL (Structured Query Language). <br>
                <br>
                Il permet par exemple d'aller chercher un ou plusieurs résultat dans une table.<br>
                Nous appelons les insctrutions en SQL des <strong>requêtes</strong>.
                <br>
                - Via PhpMyAdmin, nous allons créer une base de données "bibilothèque". <br>
                - Dans cette base de données, nous allons créer une table qui s'appelle livres <br>
                - Dans cette table, nous allons ajouter 4 champs : un identifiant et titre, texte, nom_auteur, annee_sortie<br>
                <small>A chaque fois que vous faites quelque choses, phpMyAdmin vous indique quelle requête est fabriquée derrière ! Vous êtes déja en train de faire des requêtes sans le savoir</small>
                - Entrer plusieurs auteurs (là, on peut s'aider de wikipedia)
                <hr>
                Maintenant on va essayer de faire des requêtes de recherche avec l'instruction <strong>SELECT</strong> !
                <br>
                Chercher :
                - Tous les Livres
                - Uniquement les auteurs
                - Un livre en particulier
                - le livre d'un auteur en particulier
                - Tous les livres sortis au XIXème sciècle.








            </div>


        </div>




    </div>

</body>
</html>
