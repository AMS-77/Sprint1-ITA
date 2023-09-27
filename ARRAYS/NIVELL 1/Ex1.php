<?php
// Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un. 

declare(strict_types = 1); //Strict Typing Mode activat 

$numEnters = [2,4,8,16,32];  //inicialitzem 1 array de 5 nombres enters

//en un cicle for imprimim els seus valos d'un en un.
for ($i = 0; $i <= 4; $i++) 
{
    echo "$numEnters[$i]\n";
}
?>