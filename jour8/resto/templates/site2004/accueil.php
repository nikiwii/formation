<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $nom_du_resto ?> - ACCUEIL</title>
    <link rel="stylesheet" href="<?php echo $_url_base . $_dossier_template ?>css/mes_styles.css" />
</head>

<body>


    <header>
        <h1>Restaurant <?php echo $nom_du_resto ?></h1>
    </header>


    <div class="row">
          <?php include "navigation.php" ?>

          <main>
                    <p>Audacieux, inédit et spectaculaire, le <strong class="majuscule"><?php  echo $nom_du_resto  ?></strong> est né le 12 Mai 2020.<br/><br/>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rhoncus ornare dolor, at aliquam erat eleifend a. Morbi sed orci aliquam, fringilla nunc sed, ultrices tortor. In aliquam porttitor mauris eget laoreet. In tincidunt quam vulputate turpis consequat feugiat. Nulla faucibus lectus in pharetra aliquet. Vivamus vehicula, eros vel vulputate tristique, lorem magna placerat diam, id pretium tellus magna et nisl. Fusce ornare tincidunt erat, in luctus sem dignissim eu. Nulla id orci ut tellus cursus tempus. Nulla at nunc consectetur, scelerisque erat sed, rutrum lacus. Nullam nec neque facilisis ex scelerisque mollis sit amet sit amet arcu. Ut volutpat metus eu eleifend euismod. Nunc dapibus et mi in cursus. Ut nunc magna, gravida vitae quam quis, consequat maximus ipsum. Cras mi odio, commodo sed massa at, blandit pellentesque nibh. Nunc sodales, dolor nec facilisis ultricies, eros tortor vestibulum sapien, id egestas risus turpis vitae tellus.
                    </p>
        </main>

    </div>

    <?php include "footer.php" ?>

</body>
</html>