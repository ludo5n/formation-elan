<?php
    require "Character.php";
    require "Hero.php";
    require "PNJ.php";
    
    //instance -----Classe
    $forgeron = new PNJ("Blacksmith", "Khajit", "M", "forgeron");

    $joueur1 = new Hero("Sparadrap", "Humain", "M");
    $joueur1->increaseExp(40);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Tous les héros commencent au level <?= Hero::START_LEVEL ?></p>
    <h2>
        <?= $joueur1 ?>
    </h2>
    <table>
        <tr>
            <td>LEVEL</td>
            <td>HP</td>
            <td>EXP</td>
        </tr>
        <tr>
            <td><?= $joueur1->getLevel() ?></td>
            <td><?= $joueur1->getHp() ?></td>
            <td><?= $joueur1->getExp() ?></td>
        </tr>
    </table>

    <p><?= $joueur1->getExpToNextLevel() ?> XP restant jusqu'au prochain niveau</p>
    <ul>
        <li>Forgeron : <?= $forgeron ?></li>
    </ul>
</body>
</html>