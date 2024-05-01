<?php 
class Aldeano implements Recolector {

    use PuedoRecolectar;
    private $velocidadRecoleccion;
    private $nombre;
    private $apellido;

    public function __construct($nombre,$apellido) {
        $this->velocidadRecoleccion = 18;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
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

?>