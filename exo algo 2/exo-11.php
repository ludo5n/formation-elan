<?php


      function  formaterDateFr($date)
    {
   
        setlocale(LC_TIME, 'fr_FR');
        return strftime('%A %d %B %Y', strtotime($date));
    }
    echo formaterDateFr('2018-02-23');
?>



