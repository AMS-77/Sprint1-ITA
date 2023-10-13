<?php
/*Programa un DataProvider per a la classe Test de l’exercici 2 del nivell 1 i fes-lo servir.

L'exercici 5: Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.
Condicions:
Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà. */
use PHPUnit\Framework\TestCase;
require './src/Ex2TestingNivell1.php';

class Ex2TestingNivell2DatProvTest extends TestCase {

    //Un dataProvider, pero a diferencia de l'ecxercici anterior, no fiquem les parelles manualment,
    //definim un bucle que ens farà totes les posibilitats de l'1 al 100
    public static function percentatgesProvider()
    {
        $data = []; //inicialitzem l'array buit on ficarem totes les parelles (nombre, grau) de l'1 al 100
        for ($nota = 1; $nota <= 100; $nota++) {
            if ($nota >= 60) {
                $data[] = [$nota, "Primera Divisió"];
            } elseif ($nota >= 45) {
                $data[] = [$nota, "Segona Divisió"];
            } elseif ($nota >= 33) {
                $data[] = [$nota, "Tercera Divisió"];
            } else {
                $data[] = [$nota, "Reprovat"];
            }
        }
        return $data;
    }

    //les 3 linies segUents per poder utilitzar l'array sencer, les 100 parelles de dades per fer les proves.
    /**
    * @dataProvider percentatgesProvider
    */
        public function test_VerificarGrau($nota, $esperat)
    {
        $alumne = new Ex2TestingNivell1($nota);
        $this->assertEquals($esperat, $alumne->verificarGrau());
    }
}
?>