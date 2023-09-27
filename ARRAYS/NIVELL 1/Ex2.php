<?php
/* $X = array (10, 20, 30, 40, 50,60);
Mostrar per pantalla la mida de l’array anterior i posteriorment elimina un element de l’array anterior. 
Després d'eliminar l'element, les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs). 
Mostra per última vegada la mida de l’array. */

$X = array (10, 20, 30, 40, 50, 60);

echo count($X);   //mostrem la longitud de l'array.

unset ($X[2]);   //esborrem l'element 2 que és el 30. Però encara ens donarà 6, si fem un count.

$X = array_values ($X); //reorganitzem l'array perque no hi quedi un espai buit

echo "\n" . count($X);   //mostrem la longitud de l'array que ara sí és de longitud 5
?>