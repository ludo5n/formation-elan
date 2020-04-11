<?php

// $date1 et $date2 sont des instanciations de la classe DateTime (objets)
$date1 = new DateTime('1985-01-17'); 
$date2 = new DateTime(); //date du jour
$interval = $date1->diff($date2); 
echo $interval->format('%y ans %m mois %d jours');