<?php
/**Crea una classe que contingui els mètodes getFile() i getDir() que torni el path sencer
 * i el directori del fitxer utilitzant constants màgiques.*/

class constantsMagiques {
    public function getFile() {
        return __FILE__; // Retorna el path complet de l'arxiu actual
    }

    public function getDir() {
        return __DIR__; // Retorna la ruta de directoris on es troba l'arxiu actual
    }
}

//instanciem un objecte per poder cridar als métodes.
$objecteConstants = new constantsMagiques ();

//guardarem les dades a les seves variables
$pathComplet = $objecteConstants->getFile();
$directoriArxiu = $objecteConstants->getDir();

//Mostrem en pantalla :

echo "El path complet és: $pathComplet i l'arxiu es troba al directori: $directoriArxiu";
?>