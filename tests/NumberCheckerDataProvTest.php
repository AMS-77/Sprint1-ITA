<?php
//Programa un DataProvider per a la classe Test de l’exercici 1 del nivell anterior i fes-lo servir:
/*- Exercici 1 /nivell 1
Donada la classe NumberChecker programa els tests unitaris que facin falta per certificar
que el codi font de la classe fa el que ha de fer.*/

use PHPUnit\Framework\TestCase;  

require './src/NumberChecker.php';

class NumberCheckerDataProvTest extends TestCase { 

/*Tenim la necessitat més d'un valor i no volem repetir el codi de proves, fem servir 
un dataProvider. ¿Com es defineix un DataProvider?:
    public function dataProviderName()
    {
    return [
        [valor1, valorEsperado1],
        [valor2, valorEsperado2],
        // Agrega més conjunts de dades segons sigui necesari.
    ];
    }  a més d'això una linia abans dels mètodes de prova posarem aquest comentari per indicar quin és el
     métode DataProvider: /**
                            * @dataProvider dataProviderName
                            */
    
    //Definim un DataProvider per cada funció.
    public static function evenNumbersProvider()
    {
        //Hem agregat el mateix nombre de dades que a l'exercici anterior, però el codi de prova es reduirà.
        return [
        [2, true],   
        [1, false],   ];  //Podria ser una llista molt més llarga, pero amb aquest parell de dades vegem que 
                            //funciona igual que a l'exercici anterior.
    }

    public static function positNumbersProvider()
    {
        return [
        [10, true],  
        [-10, false],     ];
    }

    /*Respecte a les funcions de prova de l'exercici anterior canvien tres coses, que no es duplica codi per
    provar diferents nombres, que li tenim que passar per paràmetres les dades del seu dataProvider i 
    canviem el tipus d'assert.
    */

    /**
    * @dataProvider evenNumbersProvider
    */
	public function test_isEven($nombre, $esperat) 
    {
		$valorActual = new NumberChecker($nombre);
		$this->assertEquals($esperat, $valorActual->isEven());
	}

    /**
    * @dataProvider positNumbersProvider
    */
	public function test_isPositive($nombre, $esperat) 
    {
		$valorActual = new NumberChecker($nombre);
		$this->assertEquals($esperat, $valorActual->isPositive());
	}
}
?>