<?php 

class Arbusto implements Recolectable{
    private $cantidadAlimento;

  
    public function __construct() {
     
        $this->cantidadAlimento = 125;
    }
    public function getAlimento(): int {
        return $this->cantidadAlimento; 
    }
}

?>