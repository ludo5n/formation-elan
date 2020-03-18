
<?php
echo 'exercice 5 <br>';
$nomsInput=array("Nom","Prenom","Ville","age","sexe");

function afficherInput($tab){
    // lorsque l'on commence avec les guillemets pour rajouter du html dans du php , on doit utiliser les guillemets simple sinon, gros probleme d'erreur tout le temps!
echo "<form >" ;
        foreach($tab as $value){
           echo "<label for='$value'>$value</label><br><input type='text' name='$value'></input> <br/>";
        };
        echo "</form>";
}
afficherInput($nomsInput);
?>