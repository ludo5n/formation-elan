<?php
echo 'exercice 11 <br>';

$voiture=["peugeot","Renault","BMW","Mercedes"];
$tailleTableau=count($voiture);




echo ("<ul>");

for ($i=0; $i<4; $i++)

echo ("<li>".$voiture[$i]);

echo("</ul>");
?>