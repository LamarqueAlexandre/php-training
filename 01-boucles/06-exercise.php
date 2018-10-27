<?php

// Ecrire un code qui permet d'afficher les tables de multiplication de 0 à 10
// dans un tableau

// Afficher les tables de multiplication 

echo '<table align="center" style="border-collapse: collapse">';
for ($i = 0; $i <= 10; $i++) {
    echo '<tr align="center">';
    for ($j = 0; $j <= 10; $j++) {
        echo '<td style="border: 1px solid black">'.  $i * $j . '</td>' ;
    }
}

?>