<?php
require_once 'banque.php';
require_once 'titulaire.php';


$t1 = new Titulaire("Martin","johan","18/05/2015","Paris");
$comptes1 = new Compte("Credit mutuelle","100","€",$t1,"3255");
echo $t1->getinfos();
echo $comptes1;