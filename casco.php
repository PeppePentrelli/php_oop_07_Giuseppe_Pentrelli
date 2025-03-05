<?php

require_once("armatura.php");

class Helmet extends Armor { 
    
    public $Visore;
    
    public function __construct($nome,$materiale,$visore) { 
        
        parent::__construct($nome,$materiale) ;
        $this->Visore = $visore;
        
    }
    
    public function mostraArmatura() {
        
        echo  $this->Nome . ":\n" . "Costruito in " . $this->Materiale . "e equipaggiato con ". $this->Visore . "\n" ;
        
    }
    
}

?>