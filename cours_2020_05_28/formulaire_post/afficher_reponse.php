<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/mes_styles.css">
</head>
<body>


<div class="showme">
    <div class="title">
        Afficher les réponses POST
    </div>

    <div class="content">
        <table>
            <tr>
                <td>Nom</td>
                <td><?php echo $_POST["nom"]?></td>
            </tr>

            <tr>
                <td>Prénom</td>
                <td><?php echo $_POST["prenom"]?></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><?php echo $_POST["annee"]?></td>
            </tr>

            <tr>
                <td>Année naissance</td>
                <td><?php echo $_POST["annee"]?></td>
            </tr>

            <tr>
                <td>Pays</td>
                <td><?php echo $_POST["pays"]?></td>
            </tr>

        </table>
    </div>

</div>



</body>
</html>
