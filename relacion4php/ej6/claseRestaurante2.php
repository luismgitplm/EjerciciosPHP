<?php
class Restaurante2{
    private static int $numeroRest = 0;

    /*Constructor y declaración de atributos mediante 
    promoción de propiedades*/
    public function __construct(
        private string $nombre,
        private string $tipoCocina,
        private array $ratings = []
    ) {
        self::$numeroRest++;
    }

    // Getters
    public function getNombre(){
        return $this->nombre;
    }

    public function getTipoCocina(){
        return $this->tipoCocina;
    }

    public function getRatings(){
        return $this->ratings;
    }

    // Setters
    public function setNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }

    public function setTipoCocina($nuevoTipo){
        $this->tipoCocina = $nuevoTipo;
    }

    // Método estático
    public static function totalRests(){
        return Self::$numeroRest;
    }

    // Métodos de acción
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
        array_push($this->ratings, $num);
    }

    // Añade varios elementos en forma de array al array ratings
    public function anyadirRatings($arrayRatings){
        $this->ratings = array_merge($this->ratings, $arrayRatings);
    }

    // Devuelve el promedio de los ratings
    public function ratingMedio(){
        return array_sum($this->ratings) / $this->numRatings();
    }

    // toString
    public function __toString(){
        return "Nombre: {$this->nombre}<br>".
                "Tipo de Cocina: {$this->tipoCocina}<br>".
                "Ratings: ". join(", ",$this->ratings);
    }
}

// Creación de un objeto de la clase Restaurante2
$restPrueba = new Restaurante2('Antichi Sapori Ristorante', 'Italiana');

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

// Creación de un segundo objeto para probar el método estático que cuenta el número de restaurantes
$rest2 = new Restaurante2('Restaurante 2','Fast-food');
echo '<br>Número total de restaurantes tras crear otro: '. $rest2->totalRests();

// Uso del método setter que modifica el nombre y del método getter del mismo
$restPrueba->setNombre('Ristorante');
echo '<br>El nuevo nombre del primer restaurante: '. $restPrueba->getNombre();

