<?php
class Ex2TestingNivell1 {
    private $nota;

    public function __construct(float $nota) 
    {
        $this->nota = $nota;
    }

    public function verificarGrau(): string 
    {
        if ($this->nota >= 60) 
        {
            return "Primera Divisió";
        } elseif ($this->nota >= 45) 
        {
            return "Segona Divisió";
        } elseif ($this->nota >= 33) 
        {
            return "Tercera Divisió";
        } else {
            return "Reprovat";
        }
    }
}
?>