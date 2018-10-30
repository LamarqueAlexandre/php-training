<?php

// 1. Créer une fonction calculant le carré d'un nombre
echo '<h2>1/ Créer une fonction calculant le carré d\'un nombre</h2>';
function square($number) {
    return $number * $number;
}

echo square(5). '<br>';
echo square(12). '<br>';
echo square(48). '<br>';

// 2. Créer une fonction calculant l'aire d'un rectangle et une fonction pour celle d'un cercle

echo '<h2>2/ Créer une fonction calculant l\'aire d\'un rectangle et une fonction pour celle d\'un cercle</h2>';
function rectArea($length, $width) {
    return $length * $width;
}

echo rectArea(10, 5). '<br>';

// 3. Créer une fonction calculant le prix TTC d'un prix HT. Nous aurons besoin de 2 paramètres, le prix HT et le taux.
// 4. Ajouter un 3ème paramètre à cette fonction permettant de l'utiliser dans les 2 sens (HT vers TTC ou TTC vers HT)

?>