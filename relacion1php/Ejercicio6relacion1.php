<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relación 1 - Ejercicio 6: Declaración de clases y objetos</title>
  <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
  <h2>Esto es un ejemplo de declaración de clases para frutas </h2>

  <?php
  class Fruit
  {
    

    // Propiedades
    private String $name;          
    private String $color;

    // Metodos
    function __construct($name, $color)
    {  // constructor
      $this->name = $name;
      $this->color = $color;
    }
    function set_name($name)
    {  // setter
      $this->name = $name;
    }
    function get_name()
    { // getter
      return $this->name;
    }
    function set_color($color)
    {  // setter
      $this->color = $color;
    }
    function get_color()
    { // getter
      return $this->color;
    }
  }

  $someFruit = null;
  $apple = new Fruit('Manzana', 'roja'); //objeto necesario crear con propiedades al inicializar
  $banana = new Fruit('Kiwi', 'verde');
  $banana->set_color('amarillo');
  $banana->set_name('Banana');
  echo $apple->get_name();
  echo ' ' . $apple->get_color();
  echo "<br>";
  echo $banana->get_name();
  echo ' ' . $banana->get_color();
  echo "<br>";
  ?>
</body>

</html>