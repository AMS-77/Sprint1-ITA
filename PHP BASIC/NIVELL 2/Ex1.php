<?php
/*  Exercici 1
Escriu una funció que determini la quantitat total a pagar per una 
trucada telefònica segons les següents premisses:

1. Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
2. Cada minut addicional a partir dels 3 primers és un pas de comptador
     i costa 5 cèntims. */

declare(strict_types = 1); //Strict Typing Mode activat  

//Fem la funció que calcula y retorna el cost total
function calcularCostTrucada (int $minutsTrucada)
{
     if ($minutsTrucada <= 3)
     {
          $costTotal = 10;
     }else{
          $minutsAdicionals = $minutsTrucada - 3;
          $costAdicional = $minutsAdicionals * 5;
          $costTotal = $costAdicional + 10;
     }
     return $costTotal;
}

//agafem les dades per consola
do{
     echo "Introdueix els minuts de la trucada: ";
     $entrada = fgets(STDIN);
     if (is_numeric ($entrada))
     {
          $entrada = (float) $entrada; //castejem a float per conservar els decimals introduits i aplicar ceil correctament.

          //redondeig al alça en cas que sigui un nombre decimal, a més castejem a int per poder enviar a la funció
          //i que no dongui problemes.
          $minutsTrucada = ceil($entrada);
          $minutsTrucada = (int) $minutsTrucada;
     }else{
          echo "No has introduit un nombre. Proba altra vegada.";
     }
}while (!is_numeric($entrada));

$costTotal = calcularCostTrucada ($minutsTrucada);

echo "El cost total de la trucada serà de: $costTotal centims";
?>
