<?php
  /* 
   Una variable declarada dentro de una funcion tiene un AMBITO LOCAL y solo se puede acceder dentro de esa funcion:
  */ 

  //Variable con alcance local:
  function myTest(){
    $x = 5; // alcance local o local scope
    echo "<p> La Variable x dentro de la funcion es : $x </p>";
  }

  myTest();
  // usar la variable x fuera de la funcion generando un error 
  echo "<p> La Variable x dentro de la funcion es : $x </p>";

  /* 
    Puede tener variables locales con el mismo nombre en diferentes funciones, porque las variables locales solo son reconocidas por la funcion en la que se declara
  */
?>