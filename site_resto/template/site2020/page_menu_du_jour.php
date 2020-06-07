<?php
    include "include/head.php";

?>

  <main>
    <div class="container">
        <h1>
            <?php echo $menu_a_afficher["titre"]?>
        </h1>
        <div class="row">
            <div class="col-6">


                <h2>Entrée</h2>
                <?php echo $menu_a_afficher["entree"]?>

                <h2>Plat</h2>
                <?php echo $menu_a_afficher["plat"]?>

                <h2>Dessert</h2>
                <?php echo $menu_a_afficher["dessert"]?>
            </div>

            <div class="col-6">
                <?php echo html_image("image/menu/$_GET[menuAAfficher].jpg");?>

            </div>

        </div>





    </div>
  </main>


<?php
include "include/footer.php";
?>
