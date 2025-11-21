<?php
class BanderaFranjas
{
    public function __construct(
        public string $orientacion,
        public array $franjas,
        public string $procedencia = "sin adscripción"
    ) {
        if (
            strtolower($this->orientacion != "vertical") ||
            strtolower($this->orientacion != "horizontal")
        ) {
            echo "Valor de orientación erróneo, por defecto será vertical.";
            $this->orientacion = "vertical";
        }
    }

    public function __destruct() {}

    // Método que compare dos banderas  y diga si son idénticas
    public function comparar($bandera)
    {
        return $this == $bandera;
    }

    /* Método que compare dos banderas y diga si tiene las mismas franjas en diferente
    orientación*/
    public function compararFranjas($bandera)
    {
        return $this->franjas == $bandera->franjas && $this->orientacion == $bandera->orientacion;
    }

    // Método que invierte la orientación de las franjas
    public function invertirOrientacion()
    {
        if ($this->orientacion == "horizontal") {
            $this->orientacion = "vertical";
        } else {
            $this->orientacion = "horizontal";
        }
    }

    // Método que invierte el orden de los colores
    public function invertirColores()
    {
        $this->franjas = array_reverse($this->franjas);
    }

    // toString
    public function __toString(){
        return "Orientación: {$this->orientacion}\n".
                "Colores: ". print_r($this->franjas,true).
                "\nProcedencia: {$this->procedencia}";
    }
    
}
