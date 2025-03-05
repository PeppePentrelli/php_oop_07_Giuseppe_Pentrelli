
<?php

require_once 'casco.php';
require_once 'petto.php';
require_once 'braccio.php';
require_once 'gamba.php';
require_once 'piedi.php';

$ironmanCount = 0; 

class Ironman { 
    
    public $Casco;
    public $Petto;
    public $BraccioDx;
    public $BraccioSx;
    public $Gambe;
    public $Piedi;  
    public static $ironmanCount = 0;
    
    public function __construct(Helmet $casco, Chest $petto, Arm $braccio_dx, Arm $braccio_sx, Leg $gambe, Feet $piedi) {
        $this->Casco = $casco;
        $this->Petto = $petto;
        $this->BraccioDx = $braccio_dx;
        $this->BraccioSx = $braccio_sx;
        $this->Gambe = $gambe;
        $this->Piedi = $piedi;
        self::$ironmanCount++;
    }
    
    public function mostraArmaturaCompleta() {
        $this->Casco->mostraArmatura();
        $this->Petto->mostraArmatura();
        $this->BraccioDx->mostraArmatura();
        $this->BraccioSx->mostraArmatura();
        $this->Gambe->mostraArmatura();
        $this->Piedi->mostraArmatura();
    }
    
    public static function generaCascoCasuale() {
        $materiali = ["Lega di titanio", "Acciaio rinforzato", "Vibranio"];
        $visori = ["Visore a scansione termica", "HUD avanzato", "Visione notturna"];
        return new Helmet("Casco", $materiali[array_rand($materiali)], $visori[array_rand($visori)]);
    }
    
    public static function generaPettoCasuale() {
        $materiali = ["Lega di titanio e oro", "Acciaio rinforzato", "Vibranio"];
        $reattori = ["Reattore Arc", "Reattore a fusione", "Reattore a particelle"];
        return new Chest("Petto", $materiali[array_rand($materiali)], $reattori[array_rand($reattori)]);
    }
    
    public static function generaBraccioCasuale() {
        $materiali = ["Titanio", "Acciaio", "Vibranio"];
        $armi = ["Repulsore", "Missili", "Scudo di energia"];
        return new Arm("Braccio", $materiali[array_rand($materiali)], $armi[array_rand($armi)]);
    }
    
    public static function generaGambaCasuale() {
        $materiali = ["Titanio", "Acciaio", "Vibranio"];
        $piastre = ["Leghe di titanio rinforzate", "Piastre in acciaio", "Piastre in vibranio"];
        $ammortizzatori = ["Leghe a memoria di forma", "Ammortizzatori idraulici", "Ammortizzatori a vibrazioni"];
        return new Leg("Gambe", $materiali[array_rand($materiali)], $piastre[array_rand($piastre)], $ammortizzatori[array_rand($ammortizzatori)]);
    }
    
    public static function generaPiediCasuali() {
        $materiali = ["Titanio", "Acciaio", "Vibranio"];
        $propulsori = ["Propulsori ad energia", "Propulsori a razzo", "Propulsori a ioni"];
        return new Feet("Piedi", $materiali[array_rand($materiali)], $propulsori[array_rand($propulsori)]);
    }
}


$esercitoIronman = [];

for ($i = 0; $i < 10; $i++) {
    $casco = Ironman::generaCascoCasuale();
    $petto = Ironman::generaPettoCasuale();
    $braccio_dx = Ironman::generaBraccioCasuale();
    $braccio_sx = Ironman::generaBraccioCasuale();
    $gambe = Ironman::generaGambaCasuale();
    $piedi = Ironman::generaPiediCasuali();
    $ironman = new Ironman($casco, $petto, $braccio_dx, $braccio_sx, $gambe, $piedi);
    $esercitoIronman[] = $ironman;
}

foreach ($esercitoIronman as $ironman) {
    $ironman->mostraArmaturaCompleta();
    echo "\n";
}


?>