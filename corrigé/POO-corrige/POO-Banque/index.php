<?php

include 'class/Compte.php';
include 'class/Titulaire.php';

$t1 = new Titulaire("DUPONT", "Michel", "1980-02-03", "STRASBOURG");

$c1 = new Compte("Compte courant", 100, "€", $t1);
$c2 = new Compte("Livret A", 0, "€", $t1);

$c1->crediter(100);
$c1->virement($c2, 50);

$c1->infosCompte();

