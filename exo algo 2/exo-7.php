<?php $elements = array("choix1" => "", "choix2" => "", "choix3" => "checked");
function genererCheckbox($elements){
    // echo "<form>";
foreach ($elements as $key => $value){
     echo "<input type='checkbox'name='$key'> $key</input><label for='$key'>$value</label><br/>";
     
    } ;
    // echo "</form>";
}
genererCheckbox($elements);
?>