<?php
class Restaurante2
{
    private static int $numeroRest;

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
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getTipoCocina()
    {
        return $this->tipoCocina;
    }

    public function getRatings()
    {
        return $this->ratings;
    }

    // Setters
    public function setNombre($nuevoNombre)
    {
        $this->nombre = $nuevoNombre;
    }

    public function setTipoCocina($nuevoTipo)
    {
        $this->tipoCocina = $nuevoTipo;
    }

    // Método estático
    public static function totalRests()
    {
        return Self::$numeroRest;
    }

    // Métodos de acción
    // Muestra los elementos del array de ratings
    public function mostrarRatings()
    {
        for ($i = 0; $i < count($this->ratings); $i++) {
            echo $this->ratings[$i];
        }
    }

    // Devuelve el número de ratings
    public function numRatings()
    {
        return count($this->ratings);
    }

    // Añade un elemento al array ratings
    public function anyadirRating($num)
    {
        array_push($this->ratings, $num);
    }

    // Añade varios elementos en forma de array al array ratings
    public function anyadirRatings($arrayRatings)
    {
        array_merge($this->ratings, $arrayRatings);
    }

    // Devuelve el promedio de los ratings
    public function ratingMedio()
    {
        return array_sum($this->ratings) / $this->numRatings();
    }

    // toString
    public function __toString(){
        return "Nombre: {$this->nombre}<br>".
                "Tipo de Cocina: {$this->tipoCocina}<br>".
                "Ratings: ". join(", ",$this->ratings);
    }
}
