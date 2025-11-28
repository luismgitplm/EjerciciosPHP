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

    public function __toString(){
        $mensaje = $this->encendida ? "Está encendida" : "Está apagada";

        return "Tipo de bombilla: {$this->tipoBombilla}<br>".
                "Lúmenes: {$this->lumenes}<br>".
                $mensaje;
                
    }
       
}

$bombillaPrueba = new Bombilla('LED',1200);

echo '<strong>Datos de la bombilla tras su creación:</strong><br>';
echo $bombillaPrueba->__toString();

echo '<br><strong>Datos de la bombilla tras ejecutar el método que la enciende</strong><br>';
$bombillaPrueba->encender();
echo $bombillaPrueba->__toString();

echo '<br><strong>Datos de la bombilla tras ejecutar el método que la apaga</strong><br>';
$bombillaPrueba->apagar();
echo $bombillaPrueba->__toString();