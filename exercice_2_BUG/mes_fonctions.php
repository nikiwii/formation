<?php
function maPoesie($tableauNbVersParStrophe = array(4,4,3,3)) {
// en parametre on passe un tableau de chiffre.
// chaque chiffre represente le nombre de vers dans une strophe
// si je veux un poème de 1 seul vers (un monostiche) j'appellerai la fonction
// maPoesie(array(1));
// si je veux un poème de 3 strophes, la première de 4 vers et les deux autres de 3, j'appellerai la fonction
// maPoesie(array(4,3,3));
$strPoesie = "";
foreach ($tableauNbVersParStrophe as $nbVers) {
$strPoesie .= uneStrophe($nbVers);
return $strPoesie;}
function uneStrophe($nombreDeVers = 4) {
$strStrophe = ""; // ça sera ma valeur de retour
for($i=0; $i<$nombreDeVers; $i++) {
$strStrophe .= unVers() . PHP_EOL;}
$strStrophe .= PHP_EOL;
return $strstrophe;}
function unVers($nbMotDansLeVers = 6) {
include "mots_francais.php";
$mots_francais = array_flip($mots_francais);
// ma clé devient valeur et ma valeur devient la clé.
$hasard_cle_mots_francais  = array_rand($mots_francais,5);
// Tire des clés au hasard dans mon tableau
$str_5_mots_francais = implode( " ", $hasard_cle_mots_francais);
// transforme le tableau $hasard_cle_5_mots_francais en chaine de caractère.
return $str_5_mots_francais;}