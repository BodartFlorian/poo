<?php 

class Manager {

    // CRUD Methode

    // Attributes
    private $bdd;


    // Constructor
    public function __construct(PDO $db) {
        $this->setBdd($db);
    }     

    // Getters 

    
    // Setters 
    public function setBdd(PDO $db) {
        $this->bdd = $db;
    }

    // Methodes
    public function create($perso) {

        if(get_class($perso) == "Warrior") {
            $sql = $this->bdd->prepare("INSERT INTO `Warrior` (`life`, `def`, `sword`) VALUES (:life, :def, :sword)");
            
            // Secure
            $sql->bindValue(":life", $perso->getLife(), PDO::PARAM_INT);
            $sql->bindValue(":def", $perso->getDef(), PDO::PARAM_INT);
            $sql->bindValue(":sword", $perso->getSword(), PDO::PARAM_INT);


            $sql->execute();
        }
    }
    public function read($perso) {
        echo '<pre>';
        print_r($perso);
        echo '</pre>';
    }
    public function update($perso) {

        if(get_class($perso) == "Warrior") {

            $sql = $this->bdd->prepare("UPDATE `Warrior` SET `life`=:life,`def`= :def,`sword`= :sword WHERE `id` = 1");
            
            // Secure
            $sql->bindValue(":life", $perso->getLife(), PDO::PARAM_INT);
            $sql->bindValue(":def", $perso->getDef(), PDO::PARAM_INT);
            $sql->bindValue(":sword", $perso->getSword(), PDO::PARAM_INT);


            $sql->execute();
        }
    }
    public function delete($perso) {
        if(get_class($perso) == "Warrior") {
            $sql = $this->bdd->prepare("DELETE FROM `Warrior` WHERE `life`= 0");
            
            // Secure
            $sql->bindValue(":life", $perso->getLife(), PDO::PARAM_INT);
            $sql->bindValue(":def", $perso->getDef(), PDO::PARAM_INT);
            $sql->bindValue(":sword", $perso->getSword(), PDO::PARAM_INT);

            
            $sql->execute();
        }
 
    }
}