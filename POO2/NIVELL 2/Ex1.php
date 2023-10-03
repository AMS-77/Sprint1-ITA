<?php
/*Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament
l'àrea de la forma area().

Important:
Si, és el mateix exercici que a POO1, però aquí necessitem que ho resolguis aplicant algun 
dels conceptes del tema POO2. */



//APLICARÉ CLASE ABSTRACTA JA QUE LES CLASES FILLES (TRIANGLE I RECTANGLE) COMPARTEIXEN ELS MATEIXOS ATRIBUTS.

abstract class Shape 
{
    protected $ample;
    protected $alt;

    public function __construct($ample, $alt) 
    {
        $this->ample = $ample;
        $this->alt = $alt;
    }
    
    //metode abstracte, el seu cos ha de quedar buit
    abstract function area();
}


class Triangle extends Shape
{
    function area() 
    {
        return ($this->ample * $this->alt) / 2;
    }
}

class Rectangle extends Shape
{
    function area() 
    {
        return $this->ample * $this->alt;
    }
}

// Instanciem els 2 objectes
$triangle  = new Triangle (8, 7);
$rectangle = new Rectangle (8, 7);

echo "l'area del triangle és: " . $triangle->area() . "\n";
echo "l'area del rectangle és: " . $rectangle->area();
?>
