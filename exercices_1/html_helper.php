<?php

// nous allons écrire une série de fonctions qui vont nous permettre de générer du code HTML

// 1 -
// la fonction html_a( $texte , $url,  $class, $new_window)
// les paramètres url_lien et $texteest sont obligatoires
// quand $new_window est à 1, notre lien ouvrira une nouvelle fenêtre
//
// ex :
// echo html_a("Les décodeuses", "https://www.lesdecodeuses.fr", "lien_rouge", TRUE);
// écrire
// <a href='https://www.lesdecodeuses.fr' class='lien_rouge' target='_blank'>Les décodeuses</a>




// 2 -
// la fonction html_tag($nomDuTag, $contenu, $class);
// retourne le tag HTML $nomDuTag bien construit :
// ce tag aura comme contenu $contenu et pourra avoir la class $class (mais ce n'est pas obligatoire)
//
// ex :
// echo html_tag("div", "Vivement lundi", "texte_rouge");
// écrit :
// <div class="texte_rouge">Vivement lundi</div>





//  3 -
// une fonction html_ul($tableau)
// qui prends un tableau en paramètre et le ressort sous forme de liste <ul><li>
//
// ex :
// echo html_ul(["kiwi", "banane", "pomme"]);
// écrit :
// <ul>
//    <li>kiwi</li>
//    <li>banace</li>
//    <li>pomme</li>
// <ul>



