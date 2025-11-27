<?php
class BanderaFranjas
{
    public function __construct(
        public string $orientacion,
        public array $franjas,
        public string $procedencia = "sin adscripción"
    ) {
        if (
            strtolower($this->orientacion != "vertical") &&
            strtolower($this->orientacion != "horizontal")
        ) {
            echo "Valor de orientación erróneo, por defecto será vertical.";
            $this->orientacion = "vertical";
        }
    }

    public function __destruct() {}

    // Método que compare dos banderas  y diga si son idénticas
    public function comparar($bandera){
        return $this == $bandera;
    }

    /* Método que compare dos banderas y diga si tiene las mismas franjas en diferente
    orientación*/
    public function compararFranjas($bandera){
        return $this->franjas == $bandera->franjas && $this->orientacion != $bandera->orientacion;
    }

    // Método que invierte la orientación de las franjas
    public function invertirOrientacion(){
        if ($this->orientacion == "horizontal") {
            $this->orientacion = "vertical";
        } else {
            $this->orientacion = "horizontal";
        }
    }

    // Método que invierte el orden de los colores
    public function invertirColores(){
        $this->franjas = array_reverse($this->franjas);
    }

    // toString
    public function __toString(){
        return "Orientación: {$this->orientacion}<br>".
                "Colores: ". join(",",$this->franjas).
                "<br>Procedencia: {$this->procedencia}";
    }
    
}

// Creación de obnetos de la clase BanderaFranjas
$bandera = new BanderaFranjas("horizontal",["amarillo","rojo","azul","verde"]);
$bandera2 = new BanderaFranjas("vertical",["amarillo","rojo","azul","verde"]);

// Uso del método toString para mostrar sus datos
echo '<strong>Datos de la primera bandera:</strong><br>'. $bandera->__toString();
echo '<br><strong>Datos de la segunda bandera:</strong><br>'. $bandera2->__toString();

echo '<br><strong>Comparaciones</strong>';

// Uso del método que compara banderas según la orientación de sus colores
if ($bandera->compararFranjas($bandera2)){
    echo '<br>Tienen los mismos colores con diferente orientación';
} else {
    echo '<br>No tienen los mismos colores con diferente orientación ';
}

// Uso del método que indica si ambas banderas son idénticas
echo '<br>'. ($bandera->comparar($bandera2) ? 'Ambas banderas son idénticas' : 'No son idénticas');

// Uso del método que invierte la orientación de las franjas
$bandera2->invertirOrientacion();

// Comparaciones anteriores tras este cambio
echo '<br><br><strong>Mismas comparaciones anteriores realizadas tras invertir la orientación de las franjas de la segunda bandera:</strong><br>';

echo '<br>Datos de la segunda bandera:<br>'. $bandera2->__toString();

if ($bandera->compararFranjas($bandera2)){
    echo '<br>Tienen los mismos colores con diferente orientación';
} else {
    echo '<br>No tienen los mismos colores con diferente orientación ';
}

echo '<br>'. ($bandera->comparar($bandera2) ? 'Ambas banderas son idénticas' : 'No son idénticas');

// Uso del método que invierte los colores
$bandera2->invertirColores();

// Comparaciones anteriores tras este cambio
echo '<br><br><strong>Mismas comparaciones anteriores realizadas tras invertir el orden de colores de la segunda bandera:</strong><br>';

echo '<br>Datos de la segunda bandera:<br>'. $bandera2->__toString();

if ($bandera->compararFranjas($bandera2)){
    echo '<br>Tienen los mismos colores con diferente orientación';
} else {
    echo '<br>No tienen los mismos colores con diferente orientación ';
}

echo '<br>'. ($bandera->comparar($bandera2) ? 'Ambas banderas son idénticas' : 'No son idénticas');


