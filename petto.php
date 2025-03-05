<?php

require_once("armatura.php");


class Chest extends Armor { 
    
    public $Reattore;
    
    public function __construct($nome,$materiale,$reattore) {
        
        parent::__construct($nome,$materiale,$reattore);
        $this->Reattore = $reattore;
        
    }
    
    public function mostraArmatura() { 
        
        echo  $this->Nome . ":\n" . "Costruito in " . $this->Materiale . ",equipaggiato con reattore ". $this->Reattore . "\n" ;
        
    }
    
}

?>