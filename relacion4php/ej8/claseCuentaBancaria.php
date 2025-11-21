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

    function depositar($cantidad){
        $this->saldo += $cantidad;
    }

    function extraer($cantidad){
        $this->saldo -= $cantidad;
    }

    function transferir($cantidad, $cuenta){
        $this->extraer($cantidad);
        $cuenta->depositar($cantidad);
    }

    function __toString(){
        return "Número de cuenta: {$this->numCuenta}\n". 
                "Nombre del titular: {$this->nombreTitular}\n".
                "Saldo: {$this->saldo}\n".
                "Número de operaciones: {$this->numOperaciones}";
    }
    
}
