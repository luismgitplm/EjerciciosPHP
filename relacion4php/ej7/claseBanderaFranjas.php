<?php
class BanderaFranjas {
    public function __construct(
        public string $orientecion,
        public array $franjas,
        public string $procedencia = "sin adscripción"
    ){}

    public function __destruct(){}

    // Método que compare dos banderas  y diga si son idénticas
    public function comparar($bandera){
        return $this == $bandera;
    }

    /* Método que compare dos banderas y diga si tiene las mismas franjas en diferente
    orientación*/
    public function compararFranjas($bandera){
        return $this->franjas == $bandera->franjas && $this->orientecion == $bandera->orientacion;
    }

    public function invertirOrientacion(){
        if ($this->orientecion == "horizontal"){
            $this->orientecion = "vertical";
        } else {
            $this->orientecion = "horizontal";
        }
    }
    
}