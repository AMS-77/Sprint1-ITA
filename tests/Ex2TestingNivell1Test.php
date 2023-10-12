<?php
/*Practiquem una mica de TDD. Recorda l’exercici 5 del nivell de PHP Bàsics i pensa tests que podries 
realitzar per provar el seu correcte funcionament. Programa’ls i després ves realitzant el programa a testejar
pas a pas segons valides els tests prèviament creats.*/
/*L'exercici 5: Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.
Condicions:
Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà. */
use PHPUnit\Framework\TestCase;
require './src/Ex2TestingNivell1.php';

class Ex2TestingNivell1Test extends TestCase {
    public function test_VerificarGrau() {
        $alumne = new Alumne(100);
        $this->assertEquals("Primera Divisió", $alumne->verificarGrau());
        $alumne = new Alumne(60);
        $this->assertEquals("Primera Divisió", $alumne->verificarGrau());
        $alumne = new Alumne(59);
        $this->assertEquals("Segona Divisió", $alumne->verificarGrau());
        $alumne = new Alumne(45);
        $this->assertEquals("Segona Divisió", $alumne->verificarGrau());
        $alumne = new Alumne(44);
        $this->assertEquals("Tercera Divisió", $alumne->verificarGrau());
        $alumne = new Alumne(33);
        $this->assertEquals("Tercera Divisió", $alumne->verificarGrau());
        $alumne = new Alumne(32);
        $this->assertEquals("Reprovat", $alumne->verificarGrau());
        $alumne = new Alumne(0);
        $this->assertEquals("Reprovat", $alumne->verificarGrau());
    }
}
?>