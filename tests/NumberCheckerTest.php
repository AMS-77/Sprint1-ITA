<?php
/*- Exercici 1 /nivell 1
Donada la classe NumberChecker programa els tests unitaris que facin falta per certificar
que el codi font de la classe fa el que ha de fer.*/

//Importem la Classe TestCase per poder extendre'l a la Classe que n'hem a provar
use PHPUnit\Framework\TestCase;  

//Utilitzem require en vegades de include, ja que la inclusió de l'arxiu NumberChecker és esencial per
//fer les proves, i així en cas de que no trobi l'arxiu el programa es detindrà donant un error fatal. 
require './src/NumberChecker.php';

class NumberCheckerTest extends TestCase { //hereda les funcions de prova (la gran majoria asserts) de TestCase

//N'hem a provar tant el cas positiu com el negatiu de cada mètode (fent servir ):
	public function test_isEven() {
		$number1 = new NumberChecker(2);
		$this->assertTrue($number1->isEven());

		$number2 = new NumberChecker(1);
    	$this->assertFalse($number2->isEven());
	}

	public function test_isPositive() {
		$number1 = new NumberChecker(10);
        $this->assertTrue($number1->isPositive());

		$number2 = new NumberChecker(-10);
        $this->assertFalse($number2->isPositive());
	}
}
?>
