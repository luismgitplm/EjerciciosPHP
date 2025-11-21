<?php
require_once 'claseCuentaBancariaAbstracta.php';
class CuentaBancariaDebito extends CuentaBancariaAbstracta{
    function extraer($cantidad){
        if ($this->saldo - $cantidad >= 0){
            $this->saldo -= $cantidad;
            $this->numOperaciones++;
        } else {
            echo "Saldo insuficiente para realizar esa extracción.";
        }
        
    }
}

$cuentaDebito = new CuentaBancariaDebito(12,"...");
echo $cuentaDebito->__toString();
$cuentaDebito->extraer(20);
$cuentaDebito->depositar(30);
echo $cuentaDebito->__toString();