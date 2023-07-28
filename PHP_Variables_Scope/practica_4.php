<?php
  /* PHP tambien almacena todas las variables globales en una matriz llamada "$GLOBALS[index] index". Contiene el nombre de la variable. Tambien se puede acceder a esta matriz desde dentro de la funcion y se puede usar para actualizar variables globales directamente. */

  $x = 5;
  $y = 10;

  function myTest(){
    $GLOBALS['y']= $GLOBALS['x'] + $GLOBALS['y'];
  }
  myTest();
  echo $y;
?>