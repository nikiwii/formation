<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Jour 5</title>
    <style>
        h1 {
            background-color: #ccc;
            padding: 10px;
            margin-bottom: 40px;
        }
        body {
            text-align: center;
        }

        .p {
            border-bottom: 1px #ccc solid;
            padding-bottom: 20px;
            font-size: 1em;
            line-height: 1.5em;
        }

        .p a {
            display: block;
            text-decoration: none;
            font-size: 1.2em;
            margin-bottom: 1em;
        }

        nav a {
            display: block;
            text-decoration: none;
            font-size: 1.2em;
            margin-bottom: 1em;
        }

    </style>
</head>

<body>
    <h1>Jour 5</h1>
    <div class="p">
        <h2>Un peu de php</h2>
        <br>
        <?php
        $prexixe_nav = "un_peu_de_php/";
        include("un_peu_de_php/nav.php");
        ?>
    </div>
    <div class="p">
        <h2>Mon (petit) musée</h2>
        <a href="mon_musee/index.php">la demande...</a>
    </div>
</body>
</html>
