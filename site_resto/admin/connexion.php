<?php
    include "../config.php";

?><!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
    show_error(); // fonction que j'ai préalablement écrite
    show_success(); // fonction que j'ai préalablement écrite
?>


<div class="box_connect">
    <h1>Se connecter</h1>
    <form method="post" action="connexion_reponse.php">
        <input type="text" name="identifiant_admin" placeholder="Identifiant">
        <br>
        <input type="password" name="motdepasse_admin" placeholder="Mot de passe">
        <br><br>
        <input type="submit">
    </form>


</div>


</body>
</html>