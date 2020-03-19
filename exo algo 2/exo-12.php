<?php
        $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));

     foreach($tableauValeurs as $values){
      echo var_dump($values);
       
    }
   ?>
                           autrement
<?php
    $i=0;
    $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
    for ($i<0; $i<sizeof($tableauValeurs);$i++){

        echo var_dump($tableauValeurs[$i]);
    }
?>