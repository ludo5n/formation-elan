

<?php
$tableau =['Mickael' => 'FRA', 'Virgile' => 'ESP', 'Marie-Claire' => 'ENG'];
// $langue =[ 'Salut' => 'FRA','Hola' =>'ESP','Hello'=>'ENG'];
foreach ($tableau as $key=>$value){
    if($value == 'FRA')
    {
        echo "salut $key<br>";
    }    else if ($value == 'ESP')
    {
        echo "hola $key <br>";
    } else if ($value=='ENG')
    { 
        echo "hello $key<br>";
  }
}
?>