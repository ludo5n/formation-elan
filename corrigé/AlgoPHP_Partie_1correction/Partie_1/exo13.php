<?php

$notes = [10,12,8,19,3,16,11,13,9];
$nbNotes = count($notes);

// arrondir à 2 décimales la somme des notes divisée par le nombre de notes
$moyenne = round(array_sum($notes) / $nbNotes, 2);

// implode affiche le contenu du tableau avec le séparateur spécifié en 1er argument snas devoir nécessairement passer par une boucle
echo "Les notes obtenues sont : " . implode(" ",$notes);
echo "<br>La moyenne est de : $moyenne";