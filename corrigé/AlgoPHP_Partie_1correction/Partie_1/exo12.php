<?php

$personnes = ["Micka"=> "FRA", "Virgile"=>"ESP","MC"=>"ENG"];
$salutations = ["FRA" => "Salut", "ESP" => "Hola", "ENG" => "Hello"];

ksort($personnes); // tri de A à Z sur la clé (key)
// krsort($personnes); // tri de Z à A sur la clé (key)
// asort($personnes); // tri de A à Z sur la valeur
// arsort($personnes); // tri de Z à A sur la valeur

echo "<strong>Méthode switch..case</strong><br>";
foreach($personnes as $prenom => $langue){
    //echo "$prenom parle $langue<br>";
    switch($langue){
        case "FRA": echo "Salut $prenom<br>";break;
        case "ENG": echo "Hello $prenom<br>";break;
        case "ESP": echo "Hola $prenom<br>";break;
        default: echo "Langue non gérée pour $prenom<br>";
    }
}

echo "<strong>Méthode 2 tableaux associatifs</strong><br>";
foreach ($personnes as $prenom => $langue) {
    if(in_array($langue, array_keys($salutations))){
        $bonjour = $salutations[$langue];
        echo "$bonjour $prenom<br>";
    }else{
        echo "Langue non gérée pour $prenom<br>";
    }
}
