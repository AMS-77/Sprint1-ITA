<?php
class Ex2TestingNivell1 {
    private $nota;

    public function __construct(float $nota) 
    {
        $this->nota = $nota;
    }

    public function verificarGrau() {
        return match (true)
        {
            $this->nota >= 60 => "Primera Divisió",
            $this->nota >= 45 => "Segona Divisió",
            $this->nota >= 33 => "Tercera Divisió",
            default => "Reprovat",
        };
    }
}
?>

