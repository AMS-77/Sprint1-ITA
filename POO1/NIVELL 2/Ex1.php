<?php 
/*Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.

Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a 
l'objecte a què se li aplica el mètode.

Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.

Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.

A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus. */

class PokerDice
{
    private $cares = ["As", "K", "Q", "J", "7", "8"];
    private $ultimaTirada;   //ho posem com atribut i així cada dau guardarà el seu últim resultat
    //de tipus static perque anirà acumulant les tirades dels 5 daus (propietat compartida per les 5 instancies)
    private static $tiradesTotals;

    public function throw ()
    {
        //utilitzem array_rand per seleccionar un número d'index aleatori en un array que en aquest cas conté Strings
        $indexAleatori = array_rand($this->cares);
        //grabem el valor de la tirada a $ultimaTirada de la instancia o dau que toqui
        $this->ultimaTirada = $this->cares[$indexAleatori];
        //Accedirem a la propietat estática (comú a tots els daus) amb self i anem incrementant.
        self :: $tiradesTotals ++;
    }


    public function shapeName () 
    {
        return $this-> ultimaTirada;
    }

    public static function getTotalThrows () 
    {
        return self :: $tiradesTotals; //accedim a la dada estática amb self
    }

}

do{
    $aturarWhile = FALSE;
    //Declarem un array per tenir enmagatzemats els últims resultats dels daus a cada instancia:
    $resultatDaus = [];

    //Crearem els 5 daus i els llençem:
    for ($i = 1; $i <= 5; $i++) 
    {
        $formemNom = "DAU" . $i;   //Creem els noms del daus.
        $resultatDaus [$formemNom] = new PokerDice();;
        $resultatDaus [$formemNom] ->throw(); 
        echo "Tirada del dau $i: " . $resultatDaus [$formemNom]->shapeName() . "\n";
    }

    $seguir = readline ("Vols seguir tirant els daus? Contesta Y per continuar i qualsevol tecla per acabar: ");

    if ($seguir == "Y" || $seguir == "y" )
    {
        $aturarWhile = TRUE;
    }

}while ($aturarWhile);

echo "Nombre total de tirades: " . PokerDice::getTotalThrows() . "\n"; 

//Comprobem que la funció shapeName funciona bé i que l'array ha guardat les dades de cada dau:
$entrada = readline ( "De quin dau vols saber el últim resultat?: ");
$nomDau = "DAU" . $entrada;

echo "L'ultim resultat del DAU$entrada ha estat: " . $resultatDaus[$nomDau]->shapeName() . "\n";
?>