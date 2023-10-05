<?php
class MetodesMagics {
    private $nom;
    private $clau;

    //No definirem un __construct() ja que si no estaríem sobreescrivint el que ja está definit per defecte


    public function setClau($clau)
    {
        $this->clau = $clau;
    }

    //Sobreescribim el métode màgic   __set():
    
        public function __set($clau, $name) 
        {
            if ($this->clau == "1234") 
            {
                $this->nom = $name;
                echo "Correcte. El teu nom ara és ". $this->nom;
            } else {
                echo "La teva clau no és correcte i no pots canviar el teu nom";
            }
        }
    
    // Sobreescrivim el mètode màgic __toString
    public function __toString() 
    {
        return "Aquest es el meu nom de veritat: " . $this->nom;
    }
}
?>