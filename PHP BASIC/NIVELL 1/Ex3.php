<?php
/*Exercici 3
a) Declara dues variables X i Y de tipus int, dues variables N i M 
de tipus double i assigna a cadascuna un valor. A continuació, 
mostra per pantalla per a X i Y:

El valor de cada variable.
La suma.
La resta.
El producte.
El mòdul.               Per N i M realitzaràs el mateix.

Per a totes les variables (X, Y, N, M):

El doble de cada variable.
La suma de totes les variables.
El producte de totes les variables.

b) Crea una funció Calculadora que entri dos nombres per paràmetre,
i en un tercer paràmetre et permeti fer la suma, la resta, la multiplicació
o la divisió dels dos nombres.*/ 

declare(strict_types = 1);    //Activem el Strict Typing Mode, ens imposa fer una declaració estricta de variables.

//Tenim el Strict Typing Mode, però si les variables son fora de l'àmbit de les funcions no cal declararles.
$X = 55 ; $Y = 45; 
$N = 2.5 ; $M = 7.3;

//funció calculadora (la declaracio double en PHP no funciona, ha de ser Float)
function calculadora (float $n1, float $n2, string $oper)
{
    switch ($oper){
        case "+":
            echo "El resultat de $n1 $oper $n2 és: " . ($n1 + $n2);
            break;
        case "-":
            echo "El resultat de $n1 $oper $n2 és: " . ($n1 - $n2);
            break;  
        case "*":
            echo "El resultat de $n1 $oper $n2 és: " . ($n1 * $n2);
            break;
        case "/":
            echo "El resultat de $n1 $oper $n2 és: " . ($n1 / $n2);
            break;      
    }   
}

//Mostrem tot per les variables X e Y
echo "El valor de X és: $X \n";
echo "El valor de Y és: $Y \n";
echo "La suma de X e Y és: " . ($X + $Y) . "\n";
echo "La resta de X menys Y és: " . ($X - $Y) . "\n";
echo "El producte de X e Y és: " . ($X * $Y) . "\n";
echo "El mòdul de X entre Y és: " . ($X % $Y) . "\n";

//Mostrem tot per les variables N e M
echo "El valor de N és: $N \n";
echo "El valor de M és: $M \n";
echo "La suma de N e M és: " . ($N + $M) . "\n";
echo "La resta de N menys M és: " . ($N - $M) . "\n";
echo "El producte de N e M és: " . ($N * $M) . "\n";
echo "El mòdul de N entre M és: " . ($N % $M) . "\n";

//Mostrem per X,Y,N,M)
echo "El doble de cada variable: 2X =  " . ($X*2) . " , 2Y = " . ($Y*2) . " , 2N = " . ($N*2) . " , 2M = " . ($M*2);
echo "\nLa suma de totes les variables és: " . ($X + $Y + $N + $M);
echo "\nEl producte de totes les variables és: " . ($X * $Y * $N * $M);

//Demanem la entrada de dades pel teclat i fem la crida a la funció calculadora amb els tres paràmetres entrats.
$entrada = "";
do{
    echo "\nAquesta es la calculadora de 2 nombres, digues el primer: ";
    $entrada = fgets(STDIN);    //captura les dades que introdueix l'usuari a la variable intermitja $entrada
    if (is_numeric ($entrada) ){  //evaluem si és un nombre
        //Convertim l'string $entrada a un valor de tipus float, si no donarà problemes al pasar com paràmetre a la
        //funció ja que estem treballant en mode Strict Typing Mode. Ho fem amb floatval
        $num1 = floatval($entrada);
    }else{
        echo "entrada no és correcta. Torna a repetir.";
    }
}while (!is_numeric ($entrada));

do{
    echo "digues el segon: ";
    $entrada = fgets(STDIN);
    if (is_numeric ($entrada) ){
        $num2 = floatval($entrada);
    }else{
        echo "entrada no és correcta. Torna a repetir.";
    }
}while (!is_numeric ($entrada));

do{
    $oper = "0";
    echo "Selecciona l'operació, introdueix: ( + , - , * , / ), qualsevol dels quatre operadors: ";
    /*En aquest cas posarem trim() per eliminar espais en blanc, ja que al ser caràcters lo que introduim si
    que afecta a les comparacions. No pasa lo mateix amb els valors numerics. Aquí el problema es que ens deu
    agafar l'ENTER com espais buits o salt de linia i l'afegeig al caracter que seleccionem.*/
    $entrada = trim(fgets(STDIN));   
    if ($entrada == "+" || $entrada == "-" ||$entrada == "*" || $entrada == "/"){  
        $oper = $entrada;
    }else{
        echo "entrada no és correcta. Torna a repetir.";
    }
}while ($oper == "0");

//Truquem a la funcio pasant els paràmetres:
calculadora ($num1, $num2, $oper);
?>