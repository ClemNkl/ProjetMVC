<?php

echo '<a href="index.php"> << Retour aux paramètres</a><article>';
$i = 1;
foreach ($A_vue['tableau'][0] as $value) {
    $value = str_replace(";", " ", $value);
    echo "<table><p>Groupe ".$i." : </p>";
    foreach ($value as $line){
        echo "<tr><td>".$line."</td></tr>";
    }
    echo "</table><br/>";
    $i++;
}

echo "</article><a id='button' href='Groupes.txt' download='Groupes.txt'>Télécharger le document</a>";
