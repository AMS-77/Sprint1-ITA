<?php
/*Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. 
La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

Per exemple:

Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”. */

function totesPosicionsContenenChar($arrayParaules, $caracter)
{
    $resposta = true; //inicialitzem la variable, si no trobés el caràcter en alguna de les paraules sería TRUE
    //amb el count asegurem que recorre tot l'array, posar signe '<' ja que el primer index és 0...
    for ($i = 0; $i < count ($arrayParaules); $i++) 
    {
        //strpos() buscarà el caràcter en cada paraula, si posem ==false la condició es compleix quan no trobi el caràcter
        if (strpos($arrayParaules [$i], $caracter) == false) 
        {
            $resposta = false;
        }
    }
    return $resposta;
}

$arrayProva = ["hk", "jk", "lk"];
$caracterProva = 'h';
//truquem a la funció
$caracterEnTotes = totesPosicionsContenenChar ($arrayProva, $caracterProva);
//Com que la funció ens retorna 0 ó 1, lo que fa el final d'aquest echo és sustituir 1 per TRUE i 0 per FALSE.
echo "Tenim el caracter $caracterProva en totes les posicions de l'array?: " . ($caracterEnTotes ? "TRUE" : "FALSE");
?>