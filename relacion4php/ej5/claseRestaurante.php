<?php 
class Restaurante{
    public $nombre;
    public $tipoCocina;
    public $ratings;

    // Constructor
    public function __construct($nombre,$tipoCocina){
        $this->nombre = $nombre;
        $this->tipoCocina = $tipoCocina;
        $this->ratings = [];
    }

    // Destructor
    public function __destruct(){}

    // toString
    public function __toString(){
        return "Nombre: {$this->nombre}<br>".
                "Tipo de Cocina: {$this->tipoCocina}<br>".
                "Ratings: ". join(", ",$this->ratings);
    }

    // Muestra los elementos del array de ratings
    public function mostrarRatings(){
        for ($i = 0; $i < count($this->ratings); $i++){
            echo $this->ratings[$i];
        }
    }

    // Devuelve el número de ratings
    public function numRatings(){
        return count($this->ratings);
    }

    // Añade un elemento al array ratings
    public function anyadirRating($num){
        array_push($this->ratings,$num);
    }

    // Añade varios elementos en forma de array al array ratings
    public function anyadirRatings($arrayRatings){
        array_merge($this->ratings,$arrayRatings);
    }

    // Devuelve el promedio de los ratings
    public function ratingMedio(){
        return array_sum($this->ratings) / $this->numRatings();
    }
}
