<?php
require_once 'exo 13.php'; // require_once va chercher la page du dossier concernée
require_once 'VoitureElec.php';
require_once 'VoitureEssence.php';
$v1 = new Voiture("Citroën", "DS7", 5);
$v2 = new VoitureElec("BMW", "Blabla", 3, 300);
$v3 = new VoitureEssence("Renault", "Espace", 5, 80);


echo$v1;
echo$v2;
echo $v3;

