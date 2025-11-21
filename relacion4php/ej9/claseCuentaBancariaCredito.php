<?php
require_once 'claseCuentaBancariaAbstracta.php';
class CuentaBancariaCredito extends CuentaBancariaAbstracta {
    
    function extraer($cantidad){
        $this->saldo -= $cantidad;
        $this->numOperaciones++;
    }
}