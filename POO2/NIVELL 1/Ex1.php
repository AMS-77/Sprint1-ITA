<?php
/* Necessitem crear un tipus de dades que representi un animal. 
Els animals tenen un nom, ara bé, no és el mateix el so de la “parla” d’un gos, que el d’un gat. 
Per tant, necessitem crear altres tipus de dades que ens ajudin a programar aquests comportaments. 
Bàsicament, volem un mètode makeSound() que mostri un missatge diferent si es tracta 
d’un gos (per exemple,“Bup, bup!”) o un gat (per exemple “Meu!”). */

abstract class Animal
{
    private $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    //getter per accedir a $nom desde l'aplicació
    public function getNom ()
    {
        return $this->nom;
    }

    //Declarem un métode abstracte que obligará a donar a les Classes que heretin una implementació concreta al cos del metode
    abstract protected function makeSound ();
}

//Crearem  les classes filles 
class Gos extends Animal 
{
    public function makeSound()
    {
        echo "Bup, bup!";
    }
}

class Gat extends Animal 
{
    public function makeSound()
    {
        echo "Meu!";
    }
}

//Fem l'aplicació creant les instancies i trucant al métode makeSound() per veure el comportament de cada animal

$gos1 = new Gos ("Rocky");
$gat1 = new Gat ("Green");

echo "El só del gos " . $gos1->getNom() . " és: ";
$gos1->makeSound(); 

echo "\nEl só del gat " . $gat1->getNom() . " és: ";
$gat1->makeSound(); 

?>