<?php
echo'exo 14 <br>';
$datetime1=date_create('21-05-2018');
$datetime2=date_create(date('17-01-1985'));
$interval=date_diff($datetime1,$datetime2);
echo $interval->format ("Age de la personne :%Y ans %m mois %d jours");
?>