<!DOCTYPE html>
<html>

<head>
  <title><?php echo $titre . " - " . $nom_du_resto ?></title>
  <link rel="stylesheet" href="<?php echo $_url_base . $_dossier_template ?>css/mes_styles.css" />
</head>

<body>

<header>
    <h1>Mes menus de  <?php echo $nom_du_resto ?></h1>
</header>


<div class="row">

  <?php include "navigation.php" ?>

  <main>

        <h2><?php echo $titre?></h2>
        <h3>Entrée</h3>
        <?php echo $entree ?>

        <h3>Plat</h3>
        <?php echo $plat ?>

        <h3>Dessert</h3>
        <?php echo $dessert ?>


  </main>


</div>

    <?php include "footer.php" ?>

</body>
</html>
