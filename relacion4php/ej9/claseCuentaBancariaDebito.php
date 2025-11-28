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

echo '<strong>Datos de la cuenta creada:</strong><br>';
echo $cuentaDebito->__toString(). '<br>';

echo '<strong>Intento de extraer dinero sin tener saldo:</strong><br>';
$cuentaDebito->extraer(20);

echo '<br><strong>Datos tras depositar 30 euros:</strong><br>';
$cuentaDebito->depositar(30);
echo $cuentaDebito->__toString();