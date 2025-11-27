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
                "Ratings: ". $this->mostrarRatings();
    }

    // Devuelve los elementos del array de ratings
    public function mostrarRatings(){
        return join(', ', $this->ratings);
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
        $this->ratings = array_merge($this->ratings,$arrayRatings);
    }

    // Devuelve el promedio de los ratings
    public function ratingMedio(){
        return array_sum($this->ratings) / $this->numRatings();
    }
}

// Creación de un objeto de la clase Restaurante
$restPrueba = new Restaurante('Antichi Sapori Ristorante', 'Italiana');

// Uso de los métodos para añadir ratings en forma de número y de array numérico
$restPrueba->anyadirRating(9);
$restPrueba->anyadirRatings([7,8,8]);

// Uso del método que devuelve el número de ratings
echo 'El número de ratings es: '. $restPrueba->numRatings(). '<br>';

// Uso del método que devuelve el contenido del array de ratings
echo 'El listado de ratings:<br> ';
echo $restPrueba->mostrarRatings();

echo '<br>El promedio de los ratings es: '. $restPrueba->ratingMedio();

// Uso del método tostring
echo '<br>Todos los datos del objeto:<br>';
echo $restPrueba->__toString();
