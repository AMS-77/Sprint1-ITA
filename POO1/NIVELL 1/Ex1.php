<?php
/* Crea una classe Employee, defineix com a atributs el seu nom i sou. 
Definir un mètode initialize que rebi com a paràmetres el nom i sou. 
Plantejar un segon mètode print que imprimeixi el nom i 
un missatge si ha de pagar o no impostos (si el sou supera 6000, paga impostos). */

class Employee
{
    //Es declaren protected en vistes de la posibilitat de necessitar Classes filles com Vigilant, Administratiu...
    protected $nom;   
    protected $sou;

    /* Deixarem pendent fer els getters y setters, a veure com escala aquest programa en el futur, 
    ara no fan falta */

    /*Aquesta funció és la causa de no haver fet un Constructor personalitzat, ja que fa les tasques 
    d'inicialitzar els valors dels atributs si truquem a aquesta funció una vegada instanciem la Clase per
    crear l'objecte  (igualment es crea un Constructor per defecte, que inicialitza &nom i $sou amb valor null) */
    public function initialize ($nom, $sou)
    {
        $this->nom = $nom;
        $this->sou = $sou;
    }

    public function print()
    {
        if ($this->sou >6000)
        {
            echo "El nom és $this->nom i has de pagar impostos";
        }else{
            echo "El nom és $this->nom i no has de pagar impostos";
        }
    }
}
echo "Introdueix el nom: \n";
$nom = fgets (STDIN);
echo "Introdueix el sou: \n";
$sou = fgets (STDIN); 

//instanciem la Classe per crear l'objecte, a falta d'un Constructor personalitzat els atributs s'inicialitzen com "null"
$employee = new Employee ();   
//tenim aquesta funció per inicialitzar els atributs
$employee->initialize ($nom, $sou);
$employee->print();
?>
