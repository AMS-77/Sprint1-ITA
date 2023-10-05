<?php
/*Sobreescriu alguna de les lògiques d’entre tots els mètodes màgics que hi ha (que no sigui __construct).*/
//farem un programa que ens preguntarà una clau i el nostre nom que es canviarà en cas que la clau hagi estat correcte.
include "metodesMagics.php";

$objecte = new MetodesMagics();

$clau = readline("Introdueix la clau per poder canviar el teu nom: ");

$objecte->setClau ($clau);

$nom = readline ("\nIntrodueix el teu nom");

//Aquí estimulem que s'executi el métode màgic __setNom()
$objecte->nom = $nom;

//INFORMACIÓ:
/*Els "mètodes màgics" en PHP són mètodes especials que comencen amb doble guionet baix (__).
 Aquests mètodes permeten controlar el comportament d'objectes en certes situacions o en resposta a certes crides. 
 Alguns d'aquests mètodes màgics són:

__construct: Aquest mètode és el constructor d'una classe i s'executa quan es crea una nova instància de la classe.

__destruct: Aquest mètode es crida quan un objecte és eliminat o ja no hi ha referències a ell.

__toString: Aquest mètode es crida quan es vol convertir un objecte a una cadena de text utilitzant l'operador 
de concatenació (.) o mitjançant l'ús de echo.

__get i __set: Aquests mètodes es criden quan es llegeix o s'escriu una propietat inaccesible d'una classe,
 respectivament.

__isset i __unset: Aquests mètodes es criden quan es comprova si una propietat existeix o esborra una 
propietat inaccesible, respectivament.

__call i __callStatic: Aquests mètodes es criden quan es fa una crida a un mètode que no existeix o no és 
accessible, respectivament.

__invoke: Aquest mètode es crida quan s'intenta cridar un objecte com si fos una funció.

No és possible sobreescriure directament cap d'aquests mètodes màgics en una classe ja que són específics 
de PHP i tenen un comportament predefinit. En canvi, pots implementar-los en les teves pròpies classes per 
personalitzar el comportament de l'objecte en funció de les teves necessitats. En altres paraules, pots definir 
el comportament personalitzat que aquests mètodes haurien de tenir en les teves classes.*/
?>