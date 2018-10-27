<?php

// Coder le jeu du FizzBuzz
// Parcourir les nombres de 0 à 100
// Quand le nombre est un multiple de 3, afficher Fizz
// Quand le nombre est un multiple de 5, afficher Buzz
// Quand le nombre est un multiple de 15, afficher FizzBuzz
// Sinon afficher le nombre

echo '<h2>Le jeu du FizzBuzz</h2>';

// Parcourir les nombres de 0 à 100
for ($i = 1; $i <= 100; $i++) {
    if($i % 15 === 0) {
        echo 'FizzBuzz <br>';
    } else if ($i % 3 === 0) {
        echo 'Fizz <br>';
    } else if ($i % 5 === 0) {
        echo 'Buzz <br>';
    } else {
        echo $i .'<br>';
    }
}
 
?>