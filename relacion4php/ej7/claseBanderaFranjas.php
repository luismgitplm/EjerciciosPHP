<?php
class BanderaFranjas {
    public function __construct(
        public string $orientacion,
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
        return $this->franjas == $bandera->franjas && $this->orientacion == $bandera->orientacion;
    }

    public function invertirOrientacion(){
        if ($this->orientacion == "horizontal"){
            $this->orientacion = "vertical";
        } else {
            $this->orientacion = "horizontal";
        }
    }
    
}