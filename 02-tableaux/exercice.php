<?php

$eleves = [
    0 => [
        'nom' => 'Simon',
        'notes' => [10, 8, 6, 20, 10, 1, 15, 2]
    ],
    1 => [
        'nom' => 'Thomas',
        'notes' => [4, 18, 20, 15, 13, 7]
    ],
    2 => [
        'nom' => 'Jean',
        'notes' => [17, 14, 16, 6, 10, 9, 13]
    ],
    3 => [
        'nom' => 'Enzo',
        'notes' => [1, 14, 19, 2, 1, 8, 19]
    ]
];

// On souhaite afficher la liste de tous les élèves avec leurs notes.

echo '<h2>1/ Afficher la liste de tous les élèves avec leurs notes</h2>';
foreach ($eleves as $eleve) {
    echo $eleve['nom'].' a eu les notes suivantes : '; 
    
    // Nombre de notes
    $notesCount = count($eleve['notes']);
    // Parcourir toutes les notes de l'élèves
    foreach ($eleve['notes'] as $key => $note) {
        echo $note;
        // Si la note est la dernière
        if ($key === $notesCount - 1) {
            echo '.';
        } else if ($key === $notesCount - 2) {
            echo ' et ';
        } else {
            echo ', ';
        }
    } 
    echo '<br>';
}

// On souhaite calculer la moyenne de Jean
echo '<h2>2/ Calculer la moyenne de Jean</h2>';
$notesJean = $eleves[2]['notes']; // Toutes les notes de Jean

$sum = 0; // La somme des notes de Jean
// Nombre de notes
$notesCount = count($notesJean);
foreach ($notesJean as $note) {
    $sum += $note;
}
// Afficher la moyenne
echo round($sum / $notesCount, 2) . '<br>'; //Arrondi à 2 décimales


// On veut savoir combien d'élèves ont eu la moyenne
echo "<h2>3/ Combien d'élèves ont eu la moyenne</h2>";
// Compter le nombre d'élèves qui ont la moyenne
$countAverage = 0;
foreach($eleves as $eleve) {
    $average = array_sum($eleve['notes']) / count($eleve['notes']);
    echo $eleve['nom'];

    if($average >= 10) {
        echo ' a la moyenne <br>';
        $countAverage++;
    } else {
        echo ' n\'a pas la moyenne <br>';
    }
}
echo 'Nombre d\'élèves avec la moyenne : '.$countAverage;


// Savoir quel(s) élève(s) a(ont) la meilleure note
echo '<h2>4/ Quel(s) élève(s) a(ont) la meilleure note</h2>';

$bestNote = 0;

foreach($eleves as $eleve) {
    foreach($eleve['notes'] as $note) {
        if ($note > $bestNote) {
            $bestNote = $note;
        }
    }
}

foreach($eleves as $eleve) {
    foreach($eleve['notes'] as $note) {
        if ($note === $bestNote) {
            echo $eleve['nom']. ' a la meilleure note : '.$bestNote .'<br>';
            break; //Arrête les itérations sur la boucle
        }
    }
}

// Qui a eu au moins un 20 ?
echo '<h2>5/ Qui a eu au moins un 20 ?</h2>';

$isTwenty = false;

foreach($eleves as $eleve) {
    foreach($eleve['notes'] as $note) {
        if($note === 20) {
            $isTwenty = true;
            break;
        }
    }
}
if($isTwenty) {
    echo 'Quelqu\'un a eu au moins 20';
} else {
    echo 'Personne n\'a eu 20';
}

?>
