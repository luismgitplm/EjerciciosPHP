<?php
require_once 'interfazEncendible.php';
class Bombilla implements Encendible {
    public string $tipoBombilla;
    public float $lumenes;
    public bool $encendida;

    public function __construct($tipoBombilla,$lumenes){
        $this->tipoBombilla = $tipoBombilla;
        $this->lumenes = $lumenes;
        $this->encendida = false;
    }

    public function __destruct() {}

    public function encender(){
        $this->encendida = true;
    }

    public function apagar(){
        $this->encendida = false;
    }
       
}