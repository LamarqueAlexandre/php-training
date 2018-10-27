<?php

// 03 - Ecrire le code permettant de trouver le PGCD de deux nombres
// Test avec a = 1071 et b = 1029

// Déclaration de la fonction 
function pgcd($nombre1, $nombre2) {
    $pgcd = null;

    
    do {
        // On fait la division de nombre1 par nombre2
        // Et on affecte le reste à la variable i
        $i = $nombre1 % $nombre2; 
        
        // Si le reste est différent de 0, nombre1 prend la valeur de nombre2
        // Et nombre2 prend la valeur de i
        // Sinon, PGCD est égal à la valeur de nombre2

        if($i !== 0) {
            $nombre1 = $nombre2;
            $nombre2 = $i;
        } else {
            $pgcd = $nombre2;
        } 
    
    } while ($i !== 0);

    return $pgcd;

}

echo pgcd(1071, 1029);





?>