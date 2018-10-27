<?php

// 02 - Ecrire une boucle qui affiche uniquement les nombres pairs entre 1 et 100

for ($i = 1; $i < 101; $i++) {
    if($i % 2 === 0) {
        echo $i . '<br>';
    }
}

?>