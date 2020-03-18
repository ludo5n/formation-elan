<?php
$texte = "mon texte en parametre";
function convertirMajRouge($texte){
echo "<p style='color:red'>". mb_strtoupper($texte)."</p>"; :// on ouvre la phrase p sans le fermer et on rajoute le style, la couleur
}
convertirMajRouge($texte);
?>