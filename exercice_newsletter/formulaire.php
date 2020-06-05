<?php

    include "config.php";

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Jour 14</title>
    <link rel="stylesheet" type="text/css" href="css/messtyles.css">
</head>
<body>

<?php
    if(isset($_SESSION["erreur"])) {
        echo "<div class='err'>Une erreur s'est produite</div>";
    }

    if(isset($_SESSION["success"])) {
        echo "<div class='bravo'>L'enregistrement s'est passé correctement.</div>";
    }

    unset($_SESSION["erreur"], $_SESSION["success"]); // j'efface mes variables de session si elles existent.

?>


<form action="reponse.php" method="post">
    <input type="text" placeholder="Nom" name="fnom">
    <input type="text" placeholder="Prénom" name="fprenom">
    <input type="text" placeholder="Email" name="femail">
    <br><br>
    <input type="submit">
</form>


</body>
</html>