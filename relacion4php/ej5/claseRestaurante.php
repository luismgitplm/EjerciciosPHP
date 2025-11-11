<?php 
class Restaurante{
    public $nombre;
    public $tipoCocina;
    public $ratings;

    public function __construct($nombre,$tipoCocina){
        $this->nombre = $nombre;
        $this->tipoCocina = $tipoCocina;
        $this->ratings = [];
    }

    public function __toString(){
            
    }
}
