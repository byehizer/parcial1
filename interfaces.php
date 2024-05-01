<?php

trait PuedoRecolectar {
    public function recolectar(Recolectable $recolectable) {
        $tiempo = ceil($recolectable->getAlimento() / $this->getVelocidadRecoleccion());
        echo "Recolecté todo el alimento en $tiempo minutos.";
    }

}
trait TengoComida {
    public function getAlimento(): int {
        return $this->cantidadAlimento; 
    }
}
interface Recolector {
    public function recolectar(Recolectable $recolectable);
}
interface Recolectable {
    public function getAlimento(): int;
}


?>