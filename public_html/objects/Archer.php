<?php 

include_once './objects/Character.php';

class Archer extends Character {

    // Attributes
    private $bow;

    // Constructor
    public function __construct($s = 10, $a = 10, $b = 0) {
        parent::__construct($a, $b);
        $this->setBow($s);          
    }


    // Getters
    public function getBow() {
        return $this->bow;
    }
    
    // Setters
    public function setBow($bow) {
        // Secure ...
        $this->bow = $bow;
    }
    
     // Methodes
     public function hydrate($tab) {
        $this->setBow($tab["bow"]);
        $this->setLife($tab["life"]);
        $this->setDef($tab["def"]);
    }
   
}