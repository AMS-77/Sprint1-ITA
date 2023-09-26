<?php
/*   Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament
 el 50% del temps.

Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat
 i FALSE en cas contrari.

Consell: pot ser que la funció rand () et resulti útil. */

declare(strict_types = 1); //Strict Typing Mode activat

/*Construim la funció que ens retornará el seu valor binari, per a PHP un 0 será false y qualsevol altre valor
com en aquest cas 1, será true:*/
function isBitten ()
{
    $mossegada = rand(0,1);
    return $mossegada;
}

//invoquem la funció i guardem el valor a $mossegada:
$mossegada = isBitten();

//Si el valor es 1 escriurá true i si es 0 escriurà false
echo "el valor de mossegada es: " . ($mossegada ? "true\n" : "false\n");

//Segons lo que retorni la funció 
if ($mossegada){
    echo "Charlie t'ha mossegat el dit";
}else{
    echo "Charlie no t'ha mossegat encara";
}
?>