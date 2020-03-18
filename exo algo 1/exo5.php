
<?php
 echo "exo 5 ;<br>";
 $prixFrancs = 100; 
echo 'Montant en Francs:'. $prixFrancs; 
$prixEuros = ($prixFrancs / 6.55957); 
echo '<br>';
echo $prixFrancs.'Francs = '.round($prixEuros,2).'euros'; //arrondi a 2 decimal pres
echo "<br>";