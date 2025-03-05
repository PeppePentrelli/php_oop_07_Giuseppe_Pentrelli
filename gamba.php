<?php

require_once("armatura.php");


class Leg extends Armor { 
    
    public $Piastre;
    public $Amortizzatori;
    
    public function __construct($nome,$materiale,$piastre,$amortizzatori) {
        $this->Amortizzatori= $amortizzatori;
        $this->Piastre = $piastre;
        
        parent::__construct($nome,$materiale,$piastre,$amortizzatori);
        
    }
    
    
    public function mostraArmatura() { 
        
        echo  $this->Nome . ":\n" . "Costruite in " . $this->Materiale . ",equipaggiate con piastre " . $this->Piastre . " per una maggiore difesa" . " e" . $this->Amortizzatori . "\n" ;
        
    }
    
}

?>