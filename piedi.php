<?php

require_once("armatura.php");


class Feet extends Armor { 
    
    public $Propulsori; 
    
    public function __construct($nome,$materiale,$propulsori) {
        $this->Propulsori = $propulsori;
        parent::__construct($nome,$materiale);
    }
    
    public function mostraArmatura() { 
        
        echo  $this->Nome . ":\n" . "Costruito in " . $this->Materiale . ",equipaggiato con ". $this->Propulsori . "\n" ;
        
    }
    
}

?>