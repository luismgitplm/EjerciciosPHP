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

    public function __toString(){
        return "Gasolina: {$this->gasolina}<br>".
                "Batería: {$this->bateria}<br>".
                "Matrícula: {$this->matricula}<br>".
                "Estado del motor: {$this->estado}<br>";
    }
}

$moto = new Motocicleta('123');

echo '<strong>Estado de la motocicleta tras su creación</strong><br>';
echo $moto->__toString();

echo '<br><strong>Intento de encender el motor sin combustible</strong><br>';
$moto->encender();

echo '<br><strong>Datos tras cargar 30 litros de gasolina</strong><br>';
$moto->cargarGasolina(30);
echo $moto->__toString();

echo '<br><strong>Segundo intento de encender el motor</strong><br>';
$moto->encender();

echo '<br><strong>Datos de la motocicleta tras esto</strong><br>';
echo $moto->__toString();

echo '<br><strong>Datos de la motocicleta tras apagar el motor</strong><br>';
$moto->apagar();
echo $moto->__toString();

echo '<br><strong>Intento de apagar el motor cuando ya está apagado</strong><br>';
$moto->apagar();