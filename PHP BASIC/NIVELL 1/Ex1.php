<?php
/*Exercici 1--> Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla.
Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla.*/

    $num = 3;
    $numD = 1.83;
    $paraula = "casa";
    $esPar = "TRUE";
    define ( "NOM" , "Toni");

    /*Si treballem amb el Terminal hauriem de posar la etiqueta \n pel salt de linia:
    echo $num . "\n" . $numD . "\n" . $paraula . "\n" . $esPar;
    Pero treballem amb el navegador i posem BR pel salt de linia:" */
    echo $num . "<br>" . $numD . "<br>" . $paraula . "<br>" . $esPar;

    //mostrem per pantalla el valor de la constant, entre etiquetes h1.
    echo "<h1> NOM </h1>";

?>