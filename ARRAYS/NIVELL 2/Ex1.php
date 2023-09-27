<?php
/*Crea un programa que contingui dos arrays de nombres enters/floats. Un cop creats, 
mostra per pantalla el resultat de:

La intersecció dels dos arrays (nombres en comú)
La mescla dels dos arrays. */

declare (strict_types = 1);

$array1 = array(1, 2, 3.14, 4, 2.5);
$array2 = array(1, 3, 3.14, 4, 2.6);

//fem la intersecció dels 2 arrays:
$arr1InterArr2 = array_intersect ($array1, $array2);
echo "La intersecció dels 2 arrays és:\n";
//print_r és l'opció més recomanada per mostrar els valors dels arrays.
print_r  ($arr1InterArr2);


//fem la mescla dels 2 arrays:
$arr1MesclaArr2 = array_merge($array1, $array2);
echo "La mescla dels 2 arrays és:\n";
print_r  ($arr1MesclaArr2);
?>