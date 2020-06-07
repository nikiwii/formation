<nav>
    <ul>
      <li>
            <a href="<?php echo RESTO_URL_SITE ?>">Accueil</a>
      </li>
        <?php foreach( tousLesMenus() as $menu ) {
            echo "<li>";
            echo html_a($menu["nom"], RESTO_URL_SITE . "menu.php?menuAAfficher=$menu[id_menu]");
            echo "</li>";
        }
        ?>

    </ul>
</nav>
