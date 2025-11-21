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
    }

    // Extrae la cantidad pasada por parámatro al saldo de la cuenta
    function extraer($cantidad){
        $this->saldo -= $cantidad;
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
