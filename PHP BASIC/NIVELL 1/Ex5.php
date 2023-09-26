<?php
/* Exercici 5
Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

Condicions:

Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà. */

declare(strict_types = 1); //Strict Typing Mode activat

//Definim la funció que rebrà el paràmetre del %
function verificaGrau (float $nota){
    if ($nota >= 60){
        $missatge = "Ets de Primera Divisió";
    }else if ($nota >= 45 && $nota <=59){
        $missatge = "Ets de Segona Divisió";
    }else if ($nota >= 33 && $nota <=44){
        $missatge = "Ets de Tercera Divisió";
    }else{
        $missatge = "Estàs reprovat";
    }
    echo $missatge;
}

//Demanem el % per consola;
$aturaWhile = false;
do{
echo "Introdueix la nota en %: ";
$entrada = fgets (STDIN);

    if (is_numeric ($entrada) && $entrada >= 0 && $entrada <= 100){
        $nota = (float) $entrada;
        $aturaWhile = true;
    }else{
        echo "La nota introduida es incorrecta. Torna-hi!";
    }

}while(!$aturaWhile);

//Trucada a la funció:
verificaGrau ($nota);
?>
