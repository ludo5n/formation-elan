<?php
echo 'exercice 11 <br>';

$voiture=["peugeot","Renault","BMW","Mercedes"];
$tailleTableau=count($voiture);




echo ("<ul>");

for ($i=0; $i<4; $i++)

echo ("<li>".$voiture[$i]);

echo("</ul>");
?>
<?php
echo 'exercice 11 <br>';

$voiture=["peugeot","Renault","BMW","Mercedes"];
$tailleTableau = count($voiture);
echo"il y a $tailleTableau marques de voitures dans le tableau";

foreach($voiture as $element)
{
    echo ("<ul>");
        echo ("<li>".$element."</li>")."<br>";
        
    echo("</ul>");
}
?>
