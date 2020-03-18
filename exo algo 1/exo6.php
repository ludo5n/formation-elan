<?php
echo "exo 6 ;<br>";
$prixUnitaire = "9.99" ;
echo 'PrixUnitaire  = '. $prixUnitaire ."<br>";
$Quantite = 5;
echo 'quantite = 5<br>';
$TauxTva = 0.2;
echo 'TauxTva = 0.2 <br> ';
$MontantTTC = ($prixUnitaire * $Quantite) * (1 + $TauxTva);
echo 'Le Montant de la facture a regler est de '. $MontantTTC .' euros ';
echo '<br>';
?>