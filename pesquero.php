<?php

class Pesquero implements Recolector{

    use PuedoRecolectar;
    private $nombre;
    private $apellido;
    private $velocidadRecoleccion;

    public function __construct($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->velocidadRecoleccion = 18;
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