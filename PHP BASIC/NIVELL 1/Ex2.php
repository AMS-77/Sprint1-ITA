<?php
/*Exercici 2   (Els 2 strings s'han de veure en negrita)
Imprimeix per pantalla "Hello, World!" utilitzant una variable. En acabat:

Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.
Imprimeix per pantalla la mida (longitud) de la variable.
Imprimeix per pantalla l'string en ordre invers de caràcters.
Crea una nova variable amb el contingut “Aquest és el curs de PHP” i imprimeix 
per pantalla la concatenació de tots dos strings.*/ 

    $missatge = "Hello, World!";
    $tipusCurs = "Aquest es el curs de PHP";

    echo "<b> $missatge </b> <br>";   //en negrita i fem un salt de linia
    $missatgeMay = strtoupper ($missatge);   //conversió a Mayuscules
    echo "<b> $missatgeMay <b> <br>"; 

    //strlen ens diu el tamany en bytes de la cadena, que normalment coincideix amb el nombre de caràcters i espais.
    echo "La longitud de la variable missatge és de: " . strlen($missatge) . " caracters inclosos els espais <br>";
    
    echo "El resultat d'invertir l'ordre de missatge és: " . strrev($missatge); //strrev inverteix l'orde de la cadena

    echo "<br> $missatge  $tipusCurs";
?>