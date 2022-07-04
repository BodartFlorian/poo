<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <?php

    include_once './objects/Warrior.php';
    include_once './objects/Wizard.php';
    include_once './objects/Archer.php';
    include_once './objects/Manager.php';
    include_once './settings/db.php';

    if(false){
    
        // // create Warrior    
        // $tab = ["sword" => 13,"life" => 145,"def" => 50];
        // $warriorOne = new Warrior;
        // $warriorOne->hydrate($tab);

        // // create Wizard    
        // $tab = ["staff" => 20,"life" => 80,"def" => 10];
        // $wizardOne = new Wizard;
        // $wizardOne->hydrate($tab);

        // // create Archer    
        // $tab = ["bow" => 16,"life" => 95,"def" => 20];
        // $archerOne = new Archer;
        // $archerOne->hydrate($tab);


        // // Manager
        // $manager = new Manager;
        // $manager->read($warriorOne);
        // $manager->read($wizardOne);
        // $manager->read($archerOne);
        // $manager->update($warriorOne);
        // $manager->create($warriorOne);
    
    }


    $tank = new Warrior(21, 41, 31);
    
    $manager = new Manager($db);
    $manager->create($tank);

    $tank->setLife(0);
    $manager->update($tank);
    $manager->read($tank);

    $manager->delete($tank);
    echo 'hey';


    ?>
</body>
</html>