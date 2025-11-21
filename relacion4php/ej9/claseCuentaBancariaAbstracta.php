<?php
abstract class CuentaBancariaAbstracta{
    function __construct(
        public int $numCuenta,
        public string $nombreTitular,
        public float $saldo = 0,
        public int $numOperaciones = 0
    ) {}

    
    function depositar($cantidad){
        $this->saldo += $cantidad;
        $this->numOperaciones++;
    }

    // Método abstracto que ha de ser implementado por toda clase que herede de esta
    abstract function extraer($cantidad);

    function transferir($cantidad, $cuenta){
        $this->extraer($cantidad);
        $cuenta->depositar($cantidad);
        $this->numOperaciones++;
    }

    function __toString(){
        return "Número de cuenta: {$this->numCuenta}<br>". 
                "Nombre del titular: {$this->nombreTitular}<br>".
                "Saldo: {$this->saldo}<br>".
                "Número de operaciones: {$this->numOperaciones}";
    }
}