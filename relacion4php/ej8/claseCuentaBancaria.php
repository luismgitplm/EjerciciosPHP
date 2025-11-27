<?php
class CuentaBancaria
{
    function __construct(
        public int $numCuenta,
        public string $nombreTitular,
        public float $saldo = 0,
        public int $numOperaciones = 0
    ) {}

    function __destruct() {}

    // Inserta la cantidad pasada por parámetro en el saldo de la cuenta
    function depositar($cantidad){
        $this->saldo += $cantidad;
        $this->numOperaciones++;
    }

    // Extrae la cantidad pasada por parámatro al saldo de la cuenta
    function extraer($cantidad){
        $this->saldo -= $cantidad;
        $this->numOperaciones++;
    }

    // Transfiere la cantidad pasada por parámetro a la cuenta indicada
    function transferir($cantidad, $cuenta){
        $this->extraer($cantidad);
        $cuenta->depositar($cantidad);
    }

    // Método toString
    function __toString(){
        return "Número de cuenta: {$this->numCuenta}<br>". 
                "Nombre del titular: {$this->nombreTitular}<br>".
                "Saldo: {$this->saldo}<br>".
                "Número de operaciones: {$this->numOperaciones}";
    }
    
}

// Creación de objetos CuentaBancaria
$cuenta1 = new CuentaBancaria(123,'Titular1');
$cuenta2 = new CuentaBancaria(456,'Titular2');

// Uso del método que inserta saldo en una cuenta
$cuenta1->depositar(200);

// Muestra de los datos de ambas cuentas
echo '<strong>Los datos de la cuenta 1:</strong><br>'. $cuenta1->__toString();
echo '<br><strong>Los datos de la cuenta 2:</strong><br>'. $cuenta2->__toString();

// Uso del método que transfiere saldo de una cuenta a otra
$cuenta1->transferir(80,$cuenta2);

// Datos tras la operación
echo '<br><strong>Comparaciones tras transferir 80 euros de la primera cuenta a la segunda<br></strong>';
echo '<strong>Los datos de la cuenta 1:</strong><br>'. $cuenta1->__toString();
echo '<br><strong>Los datos de la cuenta 2:</strong><br>'. $cuenta2->__toString();

// Uso del método que extrae saldo de una cuenta
$cuenta1->extraer(20);

// Datos tras la operación
echo '<br><strong>Los datos de la cuenta 1 tras extraer 20 euros:</strong><br>'. $cuenta1->__toString();

