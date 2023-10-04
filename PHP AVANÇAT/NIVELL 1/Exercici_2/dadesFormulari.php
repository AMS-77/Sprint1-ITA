<?php
/* Millora l’exercici anterior fent que es guardi l’username en una variable de sessió. 
S’haurà de mostrar l’username per pantalla mitjançant l’accés a aquesta variable de sessió. */

//S'ha de posar al començament de l'script PHP, abans d'enviar qualsevol cosa al navegador.
session_start ();

$nom = $_POST ["nom"];
$cognoms = $_POST ["cognoms"];
$email = $_POST ["email"];

//Guarda el nostre nom com usuari a la sessió a la variable superglobal
$_SESSION["username"] = $nom;

//accedim al valor de variable d'inici de sessió.
echo "La sessió actual és de: " . $_SESSION ["username"];

echo "<br />Em dic " . $nom . " " . $cognoms . " i el meu email és " . $email;
?>
