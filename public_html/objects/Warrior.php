<?php 

include_once './objects/Character.php';

class Warrior extends Character {

    // Attributes
    private $sword;

    // Constructor
    public function __construct($s = 10, $a = 10, $b = 0) {
        parent::__construct($a, $b);
        $this->setSword($s);          
    }


    // Getters
    public function getSword() {
        return $this->sword;
    }
    
    // Setters
    public function setSword($sword) {
        // Secure ...
        $this->sword = $sword;
    }
    
    // Methodes
    public function hydrate($tab) {
        $this->setSword($tab["sword"]);
        $this->setLife($tab["life"]);
        $this->setDef($tab["def"]);
    }
}