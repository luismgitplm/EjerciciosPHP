<?php
require_once 'interfazEncendible.php';
class Motocicleta implements Encendible{
    public float $gasolina;
    public float $bateria;
    public string $matricula;
    public string $estado;

    public function __construct($matricula){
        $this->matricula = $matricula;
        $this->gasolina = 0;
        $this->bateria = 2;
        $this->estado = "apagado";
    }

    public function encender(){
        if ($this->estado == "apagado" && $this->bateria != 0
                && $this->gasolina != 0){

            $this->estado = 'encendido';
            echo 'El motor ha sido encendido';
        } else {
            echo 'El motor no ha podido encenderse debido a que ya está encendido 
                o por falta de batería o gasolina';
        }
    }

    public function apagar(){
        if ($this->estado == 'encendido'){
            $this->estado = 'apagado';
        } else {
            echo 'El motor ya está apagado';
        }
    }

    public function cargarGasolina($litros){
        $this->gasolina += $litros;
    }
}