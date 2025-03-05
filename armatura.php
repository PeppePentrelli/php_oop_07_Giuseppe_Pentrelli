<?php

abstract Class Armor { 
    
    public $Nome;
    
    public $Materiale;
    
    public function __construct($nome,$materiale) { 
        
        $this->Nome = $nome;
        $this->Materiale = $materiale;
        
    }
    
    abstract public function mostraArmatura();
    
}

?>