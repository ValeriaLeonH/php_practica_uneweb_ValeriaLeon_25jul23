<?php
/*
  En PHP, las variables se pueden declarar en cualquier parte del script\

  El alcance de una variable es la parte del script donde se puede hacer referencia / utilizar la variable 
  
  PHP tiene tres ambitos de variables diferentes:
    -local
    -global 
    -estatico
  
  Alcance global y local
  
  Una vartiable declarada fuera de una funcion tiene un alcance global y solo se puede acceder guera de una funcion 

  Variable con alcance global

  */
    $x = 5;

    function myTest(){
      //NOTA usando x dentro esta funcion generaremos un error
      echo "<p> La variable x dentro de la funcion: $x</p>";
    }
  
  myTest();
  echo "<p>La variable x fuera de la funcion es: $x</p>";
?>