<?php
 class Pila{
    private array $pila;
    private int $longitud;
    private int $elementos;

    public function __construct($longitud){
        $this->longitud = $longitud;
        $this->pila = [];
        $this->elementos = 0;
    }

    public function push($elemento){
        if ($this->elementos == $this->longitud){
            return null;
        } else {
            $this->pila[$this->elementos] = $elemento;
            $this->elementos++;
        }
    }

    public function pop(){
        $elemento = null;

        if ($this->elementos == 0){
            return null;
        } else {
            $elemento = $this->pila[$this->elementos - 1];
            $this->pila[$this->elementos - 1] = null;
            $this->elementos--;
            return $elemento;
        }
    }

    public function getElementos(){
        return $this->elementos;
    }

    public function getLongitud(){
        return $this->longitud;
    }

    public function __toString(){
        return "Pila: ". join(" ",$this->pila).
                "<br>Longitud máxima: {$this->longitud}<br>".
                "Número de elementos: {$this->elementos}";
    }
 }

 // 1. Crea una pila de tamaño 10
 $PilaPrueba = new Pila(10);

 // 2. Inserta un 5 en la pila (y controla que pueda estar llena)
 if ($PilaPrueba->getElementos() == $PilaPrueba->getLongitud()){
    echo "No se pueden añadir más elementos a la pila ya que está llena.<br>";
 } else {
    $PilaPrueba->push(5);
 }

 // 3. Inserta un 3 en la pila (y controla que pueda estar llena)
 if ($PilaPrueba->getElementos() == $PilaPrueba->getLongitud()){
    echo "No se pueden añadir más elementos a la pila ya que está llena.<br>";
 } else {
    $PilaPrueba->push(3);
 }

 // 4. Muestra el tamaño de la pila
echo "Tamaño de la pila: ". $PilaPrueba->getElementos(). "<br>";


// 5. Extrae un elemento de la pila (y controla que pueda estar vacía)
$PilaPrueba->pop();

// 6. Muestra el tamaño de la pila
echo "Tamaño de la pila tras extraer un elemento: ". $PilaPrueba->getElementos()."<br>";

// 7. Muestra la pila completa
echo "Datos completos de la pila:<br>";
echo $PilaPrueba->__toString();


