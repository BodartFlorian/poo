<?php 

class Character {

    // Attributes
    private $life = 10;
    private $def = 0;


    // Constructor
    public function __construct($a = 10, $b) {
        $this->setLife($a);    
        $this->setDef($b);    
    }


    // Getters
    public function getLife() {
        return $this->life;
    }
    
    public function getDef() {
        return $this->def;
    }
    
    // Setters
    public function setLife($life) {
        // Secure ...

        $this->life = $life;
    }

    public function setDef($def) {
        // Secure ...

        $this->def = $def;
    }
    
    // Methodes
    public function describe() {
        echo '<pre>';
        print_r($this);
        echo '</pre>';
        // var_dump($this);
    }
}