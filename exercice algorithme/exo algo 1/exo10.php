<?php
    echo 'exo 10; <br>';
$aPayer= 152 ;
$verse= 200;
$reste = $verse - $aPayer;
//   echo("Montant a payer " . $aPayer .'<br>'. " Montant verse ". $verse .'<br>'." Reste � payer " . $reste.'<br>');
$nb10=floor($reste/10); //4
$reste= $reste -10*$nb10;//48-4*10=8
$nb5=floor($reste/5); //1
$reste =$reste -5 *$nb5;
$nb2=floor($reste /2);//1
$reste=$reste-2 *$nb2;
echo'Montant a payer:'.$aPayer.'<br>'
.'Montant verse:'.$verse.'<br>'
.'Reste:'.($verse - $aPayer).'<br>'
.'nb10:'.$nb10.'<br>'
.'-nb5:'.$nb5.'<br>'
.'-nb2:'.$nb2.'<br>'
.'-nb1:'.$reste.'<br>';
echo '<br>';
?>