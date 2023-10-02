<?php   
/*Escriu un programa que defineixi una classe Shape amb un constructor 
que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle 
que heretin de Shape i que calculin respectivament l'àrea de la forma area().*/

class Shape 
{
    protected $ample;
    protected $alt;

    public function __construct($ample, $alt) 
    {
        $this->ample = $ample;
        $this->alt = $alt;
    }

    /*definim la funció area () a la Clase pare ja que les filles comparteixen els càlculs a falta 
    d'algun canvi, reutilitzarem codi fent servir l'Herencia a Rectangle i la sobreescriptura de métodes a Triangle. */
    function area() 
    {
        return $this->ample * $this->alt;
    }
}


class Triangle extends Shape
{
    //Sobreescrivim el métode area() de la Clase Pare (Shape)
    function area() 
    {
        return ((parent::area()) / 2);
    }
}

class Rectangle extends Shape
{
    //No sobreescriu res del métode area(), bé tot per Herencia
}

// Instanciem els 2 objectes
$triangle  = new Triangle (8, 7);
$rectangle = new Rectangle (8, 7);

echo "l'area del triangle és: " . $triangle->area() . "\n";
echo "l'area del rectangle és: " . $rectangle->area();
?>
