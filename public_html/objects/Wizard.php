<?php 

include_once './objects/Character.php';

class Wizard extends Character {

    // Attributes
    private $staff;

    // Constructor
    public function __construct($s = 10, $a = 10, $b = 0) {
        parent::__construct($a, $b);
        $this->setStaff($s);          
    }


    // Getters
    public function getStaff() {
        return $this->staff;
    }
    
    // Setters
    public function setStaff($staff) {
        // Secure ...
        $this->staff = $staff;
    }
    
     // Methodes
     public function hydrate($tab) {
        $this->setStaff($tab["staff"]);
        $this->setLife($tab["life"]);
        $this->setDef($tab["def"]);
    }
}