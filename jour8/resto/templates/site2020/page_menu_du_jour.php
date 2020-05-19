<!DOCTYPE html>
<html>

<head>
  <title><?php echo $titre . " - " . $nom_du_resto ?></title>
  <link rel="stylesheet" href="<?php echo $_url_base . $_dossier_template ?>css/mes_styles.css" />
</head>

<body>

  <header>
    <div class="container">
      <?php include "navigation.php" ?>
    </div>
  </header>

  <main>
    <div class="container">
        <h1><?php echo $titre?></h1>
        <h2>Entrée</h2>
        <?php echo $entree ?>

        <h2>Plat</h2>
        <?php echo $plat ?>

        <h2>Dessert</h2>
        <?php echo $dessert ?>

    </div>
  </main>

    <?php include "footer.php" ?>

</body>
</html>
