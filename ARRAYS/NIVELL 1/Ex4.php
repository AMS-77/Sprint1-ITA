<?php
/*  Fes un array associatiu que representi informació de tu mateix/a. En concret ha d’incloure:

nom
edat
email
menjar favorit   */

//Array asociatiu
$arrayPersonal = ["nom" => "Toni", "edat" => "45", "email" => "ams77@outlook.es", "menjar_favorit" => "paella"];

//imprimim l'index "email"
echo $arrayPersonal ["email"];

/*Si posesim "echo $arrayPersonal [2];" ens donaria error ja que els nombres d' index ja no es diuen 0,1, 2, 3...
han estat sustituits per una clau personalitzada com "nom", "edat"...d'això va un array associatiu, per
no dependre de les seves posicions numériques per treballar amb ell*/
?>