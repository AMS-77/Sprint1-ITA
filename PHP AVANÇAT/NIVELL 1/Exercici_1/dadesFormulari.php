<?php
/* Crea un formulari HTML amb els camps que vulguis (almenys un nom o username). 
El formulari ha de tenir com a action un document PHP. El codi d’aquest document PHP
haurà de mostrar els valors dels diferents camps del formulari mitjançant variables superglobals. */

$nom = $_POST ["nom"];
$cognoms = $_POST ["cognoms"];
$email = $_POST ["email"];

echo "Em dic " . $nom . " " . $cognoms . " i el meu email és " . $email;
?>
