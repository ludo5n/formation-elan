
exo 4;<br>
<?php $palindrome = " Karine alla en Irak";
echo $palindrome."<br>";
$palinmodifie = strtolower($palindrome);// on rend les caracteres en minuscules
echo $palinmodifie."<br>";
$palinmodifie = str_replace(' ','',$palinmodifie); // on  enleve les espaces
echo $palinmodifie."<br>";
$palinmodifie = strrev($palinmodifie); //on inverse le palindrome
echo $palinmodifie."<br>";
if ( str_replace(' ','', strtolower($palindrome))=== $palinmodifie)
{
echo "Cette phrase est un palindrome";
} else{
    echo " Cette phrase n'est pas un palindrome";
}
?>
<br>