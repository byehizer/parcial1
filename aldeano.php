<?php 
abstract class Aldeano implements Recolector {

    use PuedoRecolectar;
    private $velocidadRecoleccion;
    private $nombre;
    private $apellido;
    private $bonus;

    public function __construct($nombre,$apellido,$bonus) {
        $this->velocidadRecoleccion = 18;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->bonus=$bonus;
    }

    public function getBonus() {
        return $this->bonus;
    }

    public function setBonus($bonus) {
        $this->bonus= $bonus;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getVelocidadRecoleccion() {
        return $this->velocidadRecoleccion;
    }

    public function setVelocidadRecoleccion($velocidadRecoleccion) {
        $this->velocidadRecoleccion = $velocidadRecoleccion;
    }

}

class AldeanoChino extends Aldeano{

    public function __construct($nombre,$apellido){
        parent::__construct($nombre,$apellido,null);
    }
}

class AldeanoFranco extends Aldeano{

    public function __construct($nombre,$apellido){
        parent::__construct($nombre,$apellido,25);
    }
}
?>