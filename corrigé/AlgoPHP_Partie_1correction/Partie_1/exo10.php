<?php

$aPayer = 152;
$verse = 200;
$reste = $verse - $aPayer;

$nb10 = floor($reste / 10);
$nb5 = floor($reste / 5);
$reste = $reste - 5 * $nb5;
$nb2 = floor($reste / 2);
$reste = $reste - 2 * $nb2;

echo "Billets de 10 : $nb10<br/>";
echo "Billets de 5 : $nb5<br/>";
echo "Pièces de 2 : $nb2<br/>";
echo "Pièces de 1 : $reste<br/>";