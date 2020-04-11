<?php
require_once 'banque.php';
require_once 'titulaire.php';


$t1 = new Titulaire("Martin","johan","18/05/2015","Paris");
$comptes1 = new Compte("Credit mutuelle","100",'€',"$t1","3255");
 $t1->getInfos();
echo $comptes1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    
</body>
</html>