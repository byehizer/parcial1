<?php

/*/trait PuedoRecolectar {
    public function recolectar(Recolectable $recolectable) : String {
        $tiempo=0;
        if(isset($Recolector->bonus)){
            if($this->getBonus()==null){
                $tiempo = ceil($recolectable->getAlimento() / $this->getVelocidadRecoleccion());
            }
            else{
                $velocidad=$this->getVelocidadRecoleccion()+($this->getVelocidadRecoleccion()*($this->getBonus()/100));
                $tiempo = ceil($recolectable->getAlimento() / $velocidad);
            }
        }
        else{
            $tiempo = ceil($recolectable->getAlimento() / $this->getVelocidadRecoleccion());
        }

        return "Yo ".$this->getNombre()." ".$this->getApellido()." recolecté todo el alimento en $tiempo minutos.";
    }

}
trait TengoComida {
    public function getAlimento(): int {
        return $this->cantidadAlimento; 
    }
}/*/
interface Recolector {
    public function recolectar(Recolectable $recolectable);
}
interface Recolectable {
    public function getAlimento(): int;
}


?>