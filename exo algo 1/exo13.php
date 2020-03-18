<?php
echo 'exo 13;<br>';
//creation du tableau contenant les notes de l'�l�ve
$notes = [10,12,8,19,3,16,11,13,9];
//on additionne toutes les notes (contenu dans le tableau)
$res = array_sum($notes);
// on affiche la somme des notes (contenu dans le tableau)
echo "la somme de toutes les notes est de : " . $res;
echo "<br>";
//on divise la somme des notes par le nombre de notes (count() permet de compter le nombre d'�l�ment dans un tableau)
$res = $res/count($notes);

echo "Les notes obtenus par l'eleve sont : " ;
foreach($notes as $element)
{
    echo $element . " "; 
}
echo "<br>";
// on affiche la moyenne arrondie. round() prend au minimum un param�tre (la valeur � arrondir) et jusqu'� trois param�tres. 
// Le deuxieme parametre de round() est le nombre de decimale apr�s la virgule
echo "La moyenne de l'eleve est de : " . round($res,2);
echo'<br>';
?>