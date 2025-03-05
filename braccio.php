<?php

require_once("armatura.php");


class Arm extends Armor { 
    
    public $Arma; 
    
    public function __construct($nome,$materiale,$arma) {
        $this->Arma = $arma;
        parent::__construct($nome,$materiale);
    }
    
    public function mostraArmatura() { 
        
        echo  $this->Nome . ":\n" . "Costruito in " . $this->Materiale . ",equipaggiato con ". $this->Arma . "\n" ;
        
        
    }
    
}

?>