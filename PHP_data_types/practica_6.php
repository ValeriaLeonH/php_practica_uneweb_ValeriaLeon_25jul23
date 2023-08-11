<?php
  /* 
    PHP Object
    
    Las clases y los objetos son los dos aspectos principales de la programacion orientada a objetos. 

    Una clase es una plantilla para objetos y un objeto es una instancia de una clase. 

    Cuando se crean los objetos individuales, heredan todas las propiedades y comportamientos de la clase, pero cada objeto tendra diferentes valores para las propiedades. 

    Supongamos que tenemos una clase llamda Car. Un automovil puede tener propiedades como modelo, color, etc. Podemos definir variables como $modelo, $color, etc. , para contener los valores de estas propiedades. 

    Cuando se crean los objetos individuales (Volvo, BMW, Toyota, etc.), heredan todas las propiedades y comportamientos de la clase, pero cada objeto tendra diferentes valores para las propiedades. 

    Si creamos una funcion __construct(), PHP llamara automaticamente a esta funcion, cuando cree un objeto de una clase.
  */

  class Car {
    public $color;
    public $model;
    public function

    __construct($color, $model){
      $this->color  = $color;
      $this->model = $model;
    } 
    public function message(){
      return "Mi carro es un " . $this->color . " " . $this->model . "!";
    }
  }

  $myCar = new Car("negro", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("rojo", "Toyota");
  echo $myCar -> message();
?>