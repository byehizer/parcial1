<?php 

class Arbusto implements Recolectable{
    use TengoComida;
    private $cantidadAlimento;

  
    public function __construct() {
     
        $this->cantidadAlimento = 125;
    }

}

?>