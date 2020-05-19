<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title_page) ? $title_page : strtoupper($nom_du_resto) . " - Restaurant" ?></title>
    <link rel="stylesheet" href="<?php echo $_url_base . $_dossier_template ?>css/mes_styles.css" />
</head>

<body>
<header>
    <div class="container">
        <?php include "navigation.php" ?>
    </div>
</header>