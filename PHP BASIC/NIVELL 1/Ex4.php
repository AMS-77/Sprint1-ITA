<?php
/*  Fes un programa que implementi una funció on es compti fins
a un nombre determinat. Si no s’inclou un nombre determinat, 
el nombre haurà de tenir un valor per defecte igual a 10. 
A més, aquesta funció ha de tenir un segon paràmetre que indiqui 
de quant a quant es compta(D'1 en 1, de 2 en 2…). 
El compte s’ha de mostrar per pantalla pas per pas.     */

declare(strict_types = 1); //Strict Typing Mode activat

//funció que agafará els 2 paràmetres que demanarem per consola
function comptarDequantAquant (int $num, int $tipusCompteig){
    for($i = 0; $i <= $num; $i += $tipusCompteig)
    {
        echo $i . "\n";
    }
}

//demanem el primer paràmetre
echo "Entra el nombre fins al que vulguis comptar: ";
$entrada = fgets (STDIN);
//evaluarem que sigui un nombre i que a més sigui sencer
if (is_numeric($entrada) && ($entrada % 1 == 0)){
    $numValidat = (int) $entrada;   //castejarem a int per que entri bé a la funció
}else{
    echo "\nno has introduit un nombre determinat. El teu nombre serà 10";
    $numValidat = 10;
}

//demanem el segon paràmetre:
$aturaWhile = false;  //variable per controlar la sortida del bucle
do{
    $entrada = 0;
    echo "\nDigues de quant en quant vols comptar: ";
    $entrada = fgets (STDIN);
    //evaluarem que sigui un nombre, que a més sigui sencer i que no sigui més gran que numValidat
    if (is_numeric($entrada) && ($entrada %  1 == 0) && ($entrada <= $numValidat)){
        //Castejarem a int per no tenir problemes quan la variable entri cap a la funció. 
        $tipusCompteig = (int) $entrada;
        $aturaWhile = true;
    }else{
        echo "\nNo has introduit un nombre vàlid. Torna-hi.";
    }
}while(!$aturaWhile);

//Cridem a la funció comptarDequantAquant 
comptarDequantAquant ($numValidat, $tipusCompteig);
?>
