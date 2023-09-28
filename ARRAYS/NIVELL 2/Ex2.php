<?php
/*Crea un programa que llisti les notes dels/les alumnes d’una classe. 
Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada alumne. 
Cada alumne tindrà 5 notes (valorades del 0 al 10).

A més, crea una funció que, donades les notes de tots els/les alumnes, ens mostri tant la mitjana 
de la nota de cada alumne, com la nota mitjana de la classe sencera*/

declare (strict_types = 1);

/*Fem la funció, la clau per poder fer-ho está en la funció array_keys() per accedir a les notes 
de cada alumne i a més saber anidar bé un parell de bucles, un bucle extern per iterar per l'array principal
i el bucle intern per accedir als arrays de cada alumne */
function mitjanesAlumneiClasse($alumnes)
{
    $sumNotClasse = 0; 
    //Anem per les mitjes per alumne.
    for ($i=0 ; $i < count ($alumnes) ; $i++)
    {
        /*Accedim a les claus de l'array $alumnes. Per fer-ho amb la funció array_keys crearem altre array,
          que en aquest cas será dels noms dels alumnes que fan d'index de l'array principal*/   
        $clausArrayPrincipal = array_keys ($alumnes);
        $sumNotAlumne = 0;
        $alumne = $clausArrayPrincipal [$i]; //guarda els noms per després fer un echo de la mitja de cadascun
        
        //anidem altre cicle FOR  per accedir a les notes de cada alumne
        for ($j = 0 ; $j < count ($alumnes[$alumne]) ; $j++)
        {
            $sumNotAlumne += $alumnes[$alumne][$j]; //acumulem la suma de les 5 notes de cada alumne    
        }
        //Aprofitem per acumular la suma de les notes de tota la classe .
        $sumNotClasse += $sumNotAlumne;

        $mitjaAlumne = $sumNotAlumne / count ($alumnes[$alumne]);
        echo "La mitjana de l'alumne $alumne és de: $mitjaAlumne\n";   
    }
    echo "\nLa mitjana de tota la classe és de: " . ($sumNotClasse / (count ($alumnes) * count ($alumnes[$alumne])));
}



//Farem un array per 3 alumnes y cada alumne tindrà un array amb 5 notes. Com index es tindrà el nom de l'alumne
$notesJosep = [5,6,7,8,9];
$notesAna = [8,7,6,7,8];
$notesDavid = [10,10,9,9,8];
$alumnes = array("Josep" => $notesJosep, "Ana" => $notesAna, "David" => $notesDavid);
//llistem les notes de la classe
print_r ($alumnes);
//Truquem a la funció 
mitjanesAlumneiClasse($alumnes);
?>