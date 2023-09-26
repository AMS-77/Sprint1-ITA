<?php
/* Exercici 2:
Imagina que som a una botiga on es ven:

Xocolata: 1 euro
Xiclets: 0,50 euros
Caramels: 1,50 euros

Implementa un programa que permeti afegir càlculs a un total de compres
d'aquest tipus. Per exemple, que si comprem:

2 xocolates, 1 de xiclets i 1 de caramels, tinguem un programa que permeti
anar afegint els subtotals a un total, tal que així:

funció(2 xocolates)+funció(1 de xiclets) + funció(1 de carmels) = 2 + 0.5 + 1.5

Sent, per tant, el total, 4.        */

//declare(strict_types = 1); //Strict Typing Mode activat  

//Funció per anar calculant el parcial de la comanda, ens retorna el subtotal fins que s'acabi comanda
function ferComanda ($numProducte, $quantitat)
{
    switch ($numProducte) {
        case 1:
            $subtotal = 1 * $quantitat;
            break;
        case 2:
            $subtotal = 0.5 * $quantitat;
            break;
        case 3:
            $subtotal = 1.5 * $quantitat;
            break;
    }
    return $subtotal;
}

//Inicialitzem les variables:
$totalComanda = 0;
$comandaCompletada = false;

//Cicle while que es repetirá fins que vulguem deixar d'afegir subtotals a la comanda
while(!$comandaCompletada)
{
    echo "\nTenim aquests productes, selecciona el número de producte desitjat:
    \n 1.xocolata\n 2.xiclets\n 3.caramels\n 4.Finalitzar la comanda \nQuin producte vols?: ";    

    $entrada = fgets(STDIN);
    if ($entrada == 4){
        $comandaCompletada = true;
    }else{
        do{
            if (is_numeric($entrada) && $entrada > 0 && $entrada < 4)
            {
                $numProducte = $entrada;   
                $aturarWhile = true; 
            }else {
                echo "producte no existent. Torna a repetir.";
            }
        }while (!$aturarWhile);

        $aturarWhile = false;
        do{
            echo "Quina quantitat vols?: ";
            $entrada = fgets(STDIN);
            
            if (is_numeric($entrada))
            {
                $quantitat = $entrada;   
                $aturarWhile = true; 
            }else {
                echo "Quantitat introduida no vàlida. Torna-hi.";
            }
        }while (!$aturarWhile);
        $parcialComanda = ferComanda($numProducte, $quantitat);
        $totalComanda += $parcialComanda;
        echo "S'ha afegit un subtotal de: $parcialComanda euros y el total fins ara és de $totalComanda euros";
    }
}
        echo "Compra finalitzada, el total a pagar és: $totalComanda euros";



?>